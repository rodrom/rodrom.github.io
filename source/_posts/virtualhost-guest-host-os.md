---
title: How to make accessible a site from the Guest OS to the Host OS with Virtualbox
date: 2024-08-09 11:00:00
tags: [virtualization, web, network]
categories: development
---

In this post, we are going to explore how to make accesible to a website, that we are developing, to the host OS from the guest OS (Debian 11 Bullseye).
 
## Stack and configuration

- [**Virtualbox**](https://www.virtualbox.org/) (Host OS: Windows 10, Guest OS: Debian 11)
- Iniside the Guest OS:
    - **Apache 2**

## Steps

### 1. Creating the virtualhost inside the Guest.

Apache allows to configure a [virtualhost](https://httpd.apache.org/docs/2.4/vhosts/index.html) that allow the user to access a website from their computer having a custom url, ip, etc. For example, yourcompany has contract me to develop yourcompany.com website. To develop it, and test it in a pseudoproduction environment, I can create something similar like yourcompany.local with a virtualhost.

To do that, we have to:

1. Create a folder to save the virtualhost.
2. Deploy the website to that folder.
3. Configure the virtualhost inside the Guest OS.

### 1.1 Create a folder to save the virtualhost.

In general, you can do that in any place of your filesystem. But I recommend, to do that in the folder `/var/wwww/yoursite`. To avoid conflicts or messing up with root user, we create the folder, and then we change the ownership to our local user.

```bash
$ cd /var/wwww
$ sudo mkdir yoursite
$ sudo chown youruser:youruser yoursite
```

### 1.2 Deploy the site on the folder

We can just clone our git repository in the folder, or just deploy the files that we need to make work the site correctly. All the details about configure a site depends, of the project and are out of the scope of this article.

We can assume that the public files needed to access the site are going to be in: `/var/www/yoursite/public`. If your site has another folder, you need to change it accordingly. If there is some folder that needs to be changed the rights to be writable at some point, for example in the initial configuration, we can make that folder to be writable by the `www-data` group.

```bash
$ cd /var/www/yoursite
$ chown -R youruser:www-data writablefolder
$ chmod -R g+w writablefolder
```

### 1.3 Configure the virtualhost inside the Guest OS.

Now, we need to configure the virtualhost. To do that, we can follow this steps:

1. Create a configuration file for your site in `/etc/apache2/sites-available/yoursite.conf`. How to configure this file are outside of the scope of this post, but you can use an example that usually works for me, just create with your favourite editor with root privileges:
```conf
<VirtualHost *:80>
    ServerName yoursite.local
    ServerAlias www.yoursite.local
    ServerAdmin admin@yoursite.local
    DocumentRoot /var/www/yoursite/public

    <Directory "/var/www/yoursite/public">
      AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/yoursite.log
    CustomLog ${APACHE_LOG_DIR}/yoursite.log combined
#    Header set Access-Control-Allow-Origin  "*"
</VirtualHost>
```

2. Enable the site with this command: `$ sudo a2ensite yoursite`
3. Reload apache2 with: `$ sudo systemctl apache2 reload`
4. Make it accessible including an entry in the `/etc/hosts` like this, choose an unique IP to other sites that you are configuring like this:
```conf
127.0.0.1   localhost # DO NOT CHANGE THIS
127.0.1.1   yoursite.local
127.0.1.2   anothersite.local
```

With all this steps, now, inside your Guest OS, you can access to this site writing its address `http://yoursite.local` in the URL of your browser.

## 2. Make accessible in the HOST OS

If you like to develop and use tools installed in your Host OS because they are quicker and faster than obviously as virtualized, as well as it simulates better accessing to a remote server, Virtualbox lets you access the network of your Guest OS in different ways. The simplest, and honestly, the best for that same reason, is configuring like a NAT forwarding system. Where you configure the internal address that we had configure before like an internal local IP address. To do that we need to do:

### 2.1 Add an entry in the `hosts` file in the HOST OS

with the same value as the GUEST. If your HOST is in Windows, you can access this file with administrator privileges in this path by default: `C:\Windows\System32\drivers\etc\hosts`. And then, add this entry:

```txt
127.0.1.2	yoursite.local
```

### 2.1 Add a new rule to the NAT table of the Guest OS in VirtualBox

Inside the configuration/preferences of the VirtualBox Guest OS, you can access the NETWORK configuration, and add a new NAT Port Forwarding rule clicking on Advance. In our case this must be the data:

Name | Protocol | Host IP | Host Port | Guest IP | Guest Port |
-----|----------|---------|-----------|----------|------------|
yoursite.local | TCP | 127.0.1.1 | 80 | | 80 |

And finally, you can access from your Host OS using your favourite browser to your development site served from your Guest OS.
