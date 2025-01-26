---
title: How to make accessible a site from the Guest OS to the Host OS with Virtualbox
date: 2024-08-09 11:00:00
tags: [virtualization, web, network]
categories: development
excerpt: In this post, we are going to explore how to make accessible a website that we are developing in the host OS (Windows 10) from the guest OS (Debian 11 Bullseye).
---

In this post, we are going to explore how to make accessible a website that we are developing in the host OS (Windows 10) from the guest OS (Debian 11 Bullseye).
 
## Stack and Configuration

- [**VirtualBox**](https://www.virtualbox.org/) (Host OS: Windows 10, Guest OS: Debian 11)
- Inside the Guest OS:
    - **Apache 2**

## Steps

### 1. Creating the VirtualHost inside the Guest.

Apache allows you to configure a [VirtualHost](https://httpd.apache.org/docs/2.4/vhosts/index.html) that allows the user to access a website from their computer having a custom URL, IP, etc. For example, let's say your company has contracted me to develop the `yourcompany.com` website. To develop and test it in a pseudo-production environment, I can create something similar to `yourcompany.local` with a VirtualHost.

To do that, we have to:

1. Create a folder to save the VirtualHost.
2. Deploy the website to that folder.
3. Configure the VirtualHost inside the Guest OS.

### 1.1 Create a folder to save the VirtualHost.

In general, you can do that in any place on your filesystem. However, I recommend doing this in the folder `/var/www/yoursite`. To avoid conflicts or issues with root user, we create the folder, and then we change the ownership to our local user.

```bash
$ cd /var/www
$ sudo mkdir yoursite
$ sudo chown youruser:youruser yoursite
```

### 1.2 Deploy the site on the folder

We can either clone our Git repository into the folder or deploy the necessary files to properly run the site. The specific details of configuring a site depend on the project and are beyond the scope of this article.

We can assume that the public files needed to access the site are going to be in: `/var/www/yoursite/public`. If your site uses a different folder, you need to adjust the path accordingly. If a folder needs to have its permissions changed to be writable, for example during the initial configuration, we can set that folder as writable by the `www-data` group.

```bash
$ cd /var/www/yoursite
$ chown -R youruser:www-data writablefolder
$ chmod -R g+w writablefolder
```

### 1.3 Configure the VirtualHost inside the Guest OS.

Now, we need to configure the VirtualHost. To do that, we can follow these steps:

1. Create a configuration file for your site in `/etc/apache2/sites-available/yoursite.conf`. How to configure this file is beyond the scope of this post, but you can use an example that usually works for me. Just create it using your preferred editor with root privileges:
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
3. Reload Apache2 with: `$ sudo systemctl reload apache2`
4. Make it accessible by including an entry in the `/etc/hosts` like this, choosing a unique IP for each site you are configuring:
```conf
127.0.0.1   localhost # DO NOT CHANGE THIS
127.0.1.1   yoursite.local
127.0.1.2   anothersite.local
```

With all these steps completed, from within your Guest OS, you can access this site by entering `http://yoursite.local` in the URL bar of your browser.

## 2. Make accessible in the HOST OS

Whether you prefer to develop and use tools installed in your Host OS because they are quicker and faster than those running in a virtualized environment, as well as better simulate access to a remote server, VirtualBox lets you access the network of your Guest OS in different ways. The simplest, and honestly, the best method for that same reason, is configuring a NAT forwarding system, where you configure the internal address that we configured before as an internal local IP address. To do that:

### 2.1 Add an entry in the `hosts` file in the HOST OS

using the same value as in the GUEST. If your HOST is running Windows, you can access this file with administrator privileges at the default path: `C:\Windows\System32\drivers\etc\hosts`. Then, add this entry:

```txt
127.0.1.2	yoursite.local
```

### 2.1 Add a new rule to the NAT table of the Guest OS in VirtualBox

Inside the configuration/preferences of the VirtualBox Guest OS, you can access the NETWORK configuration, and add a new NAT Port Forwarding rule clicking on Advanced. In our case, this should be the data:

Name | Protocol | Host IP | Host Port | Guest IP | Guest Port |
-----|----------|---------|-----------|----------|------------|
yoursite.local | TCP | 127.0.1.1 | 80 | | 80 |

Finally, you can access on the Host OS using your favourite browser to the site hosted in the Guest OS.
