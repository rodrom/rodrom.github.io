---
title: Ejemplos de complementos de etiquetas en Hexo
tags:
  - hexo
  - plugins-tags
categories:
  - - software
    - frameworks
    - hexo
  - - centenarios
    - nacimientos
    - Paul Newman
  - - cine
    - actores
    - Paul Newman
  - - literatura
    - RSF
    - Altos estudios eclesiásticos
lang: es
excerpt: >-
  Ejemplos de como usar las distintas etiquetas de Octopress dentro de artículos
  en HEXO, usando alguna cita de RSF, que no tiene nada que ver con la Richard
  Stallman Foundation, sino con Rafael Sánchez Ferlosio. Gran parte de los
  ejemplos homenajean a Paul Newman en el centenario de su nacimiento.
date: 2025-01-26 20:22:39
---


Me estreno en este cuaderno de bitácoras escribiendo en mi idioma materno.

Llevo varias semanas, concretamente desde mi último viaje y retorno a mi ciudad de nacimiento, leyendo un compendio de ensayos de Rafael Sánchez Ferlosio, principalmente sobre gramática. Aunque su capacidad para irse por las ramas, genera una disertación bastante amplia que supera el principal subtítulo con el que se presenta este **Altos estudios eclesiásticos**. *Ensayos de gramática. Tomo I.*

El objetivo de este artículo, no es otro, que probar las distintas funcionalidades que permite la aplicación Hexo, para citar textos anónimos o autores conocidos o desconocidos. Ya sean de literatura castellana o lenguajes de programación de alto nivel. Así como distintas complementos de etiquetas que permiten incrustar elementos en la página. Para ello hay que respetar una sintaxis y una gramática mas rigurosa que el castellano.

- [Bloque de cita](#bloque-de-cita)
  - [Anónima](#anónima)
  - [De un libro o medio impreso conocido](#de-un-libro-o-medio-impreso-conocido)
  - [De X, antes conocido como Twitter](#de-x-antes-conocido-como-twitter)
  - [De un artículo en la web](#de-un-artículo-en-la-web)
- [Bloque de código o código](#bloque-de-código-o-código)
  - [Simple](#simple)
  - [Indicando el lenguaje para el resaltado](#indicando-el-lenguaje-para-el-resaltado)
  - [Incluir un título o leyenda superior en el bloque de código](#incluir-un-título-o-leyenda-superior-en-el-bloque-de-código)
  - [Incluir líneas de código en el bloque de código](#incluir-líneas-de-código-en-el-bloque-de-código)
  - [Bloque de código con trío de acento grave](#bloque-de-código-con-trío-de-acento-grave)
- [Ejemplos con Paul Newman](#ejemplos-con-paul-newman)
  - [Cita enmarcada](#cita-enmarcada)
  - [iframe](#iframe)
  - [Imagen](#imagen)
  - [Enlace en página nueva](#enlace-en-página-nueva)
  - [Incluir código de un fichero](#incluir-código-de-un-fichero)
  - [Para incluir vídeos de Youtube](#para-incluir-vídeos-de-youtube)
- [Incluir Artículos](#incluir-artículos)
- [Incluir *assets*](#incluir-assets)
- [URL](#url)
- [RAW](#raw)

## Bloque de cita

### Anónima

En castellano, el uso del término bloque es totalmente innecesario. Una cita es una cita, y no hace falta aclarar que viene en un bloque. De hecho, en el formato de *Octopress*, se puede usar directamente *quote*.

Si citásemos un texto anónimo, como podría ser parte de los ingredientes que indica un bote de Pringles, podemos usar esta sintáxis:

```
{% blockquote %}
(ES) PRODUCTO DE APERITIVO FRITO CON SABOR A SALSA BARBACOA TEXANA. INGREDIENTES: Patatas deshidratadas, aceite de girasol..
{% endblockquote %}
```

El resultado sería este:

{% blockquote %}
(ES) PRODUCTO DE APERITIVO FRITO CON SABOR A SALSA BARBACOA TEXANA. INGREDIENTES: Patatas deshidratadas, aceite de girasol..
{% endblockquote %}

### De un libro o medio impreso conocido

A partir de ahora, no ejemplifico con código los elementos que vaya incrustando, para consultar como funciona ésta sintaxis vitaminada para la escritura de artículos. Es preferible irse a la {% link documentación oficial https://hexo.io/pt-br/docs/ true documentación oficial de Hexo %}, para lo cual, te recomiendo que sepas chino, inglés o portugués en este orden. El castellano, no está entre la documentación oficial... pero me he prestado voluntario para traducirlo. A ver que me dicen. A RSF le denegarón la publicación de su traducción de la obra de Jean Itard sobre el Niño Salvaje de Aveyron. Pero eso es otra historia.

{% blockquote Rafael Sánchez Ferlosio, Altos Estudios Eclesiásticos. El castellano y la constitución. II. El nombre y la lengua. §7 pág. 429. 2018 deBolsillo Barcelona %}
revela la ansiosa preocupación del Santo Padre por asegurarse una descendencia: a su hijo, el citado Juan de Borja, II duque de Gandía, un chico de diciesiete años recien casado con una niña de doce, María Enríquez, prima hermana de Fernando el Católico, le escribe en estos términos:
{% endblockquote %}

### De X, antes conocido como Twitter

Por ejemplo, una notica de Fox News sobre nativos americanos, los pieles rojas, y, fútbol américano.
{% blockquote @FoxNews https://x.com/FoxNews/status/1835381019509137536 %}
La famlia del jefe Piesnegros, emblema de los Pielesroja de la NFL por 48 años, quiere su imagen de vuelta en la NFL.
{% endblockquote %}

### De un artículo en la web

Por ejemplo, como no se me ocurría nada, he buscado aleatoriamente un artículo en la Wikipedia en español.
{% blockquote Wikipedia en castellano https://es.wikipedia.org/wiki/Jard%C3%ADn_de_Ninfa Jardín de Ninfa %}
El jardín de Ninfa es un jardín en la zona de Cisterna di Latina, en la provincia de Latina, Italia central, confinando con Norma y Sermoneta. El parque tiene una superficie de 105 hectáreas (260 acres) y es un monumento natural italiano.
{% endblockquote %}

## Bloque de código o código

### Simple

{% codeblock %}
alert("¡Tierra a la vista!")
{% endcodeblock %}

### Indicando el lenguaje para el resaltado

Se debe usar la opción `lang:<lenguaje>`
{% codeblock lang:js %}
const gabela = {
    importe: 100,
    trimestre: 1,
    fecha_inicial_de_pago: "2025-04-01",
    fecha_final_de_pago: "2025-04-10",
    descripción: "Impuesto del estado Lorem, ipsum dolor."
}
{% endcodeblock %}

### Incluir un título o leyenda superior en el bloque de código

{% codeblock scaffold/draft.md lang:yml %}
---
title: {{ title }}
tags:
categories:
---
{% endcodeblock %}

### Incluir líneas de código en el bloque de código

En esta cuaderno de bitácoras, esta incluida la opción de añadir la numeración de líneas automáticamente en los bloques de código. Para evitar que salga la numeración, debemos indicar la opción `line_number` como `false`.

{% codeblock PHP 8.4 Hooks properties https://www.php.net/releases/8.4/en.php PHP 8.4 Relased lang:php line_number:false %}
class Locale
{
    public string $languageCode;

    public string $countryCode
    {
        set (string $countryCode) {
            $this->countryCode = strtoupper($countryCode);
        }
    }

    public string $combinedCode
    {
        get => \sprintf("%s_%s", $this->languageCode, $this->countryCode);
        set (string $value) {
            [$this->languageCode, $this->countryCode] = explode('_', $value, 2);
        }
    }

    public function __construct(string $languageCode, string $countryCode)
    {
        $this->languageCode = $languageCode;
        $this->countryCode = $countryCode;
    }
}

$brazilianPortuguese = new Locale('pt', 'br');
var_dump($brazilianPortuguese->countryCode); // BR
var_dump($brazilianPortuguese->combinedCode); // pt_BR
{% endcodeblock%}

### Bloque de código con trío de acento grave

El estilo de Markdown sirve igual, usando las mismas propiedades

```php PHP 8.4 https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-members-aviz Asymmetric Visibility
class PhpVersion
{
    public private(set) string $version = '8.4';

    public function increment(): void
    {
        [$major, $minor] = explode('.', $this->version);
        $minor++;
        $this->version = "{$major}.{$minor}";
    }
}
```

## Ejemplos con Paul Newman
### Cita enmarcada

Hoy se cumplen 100 años del nacimiento de Pablo Nuevohombre, conocido en su casa y la de otros, como Paul Newman.
No me queda otra que enmarcarlo con alguna cita suya:

{% pullquote estrellas %}
When you see the right thing to do, you'd better do it.
{% endpullquote %}

## iframe

{% iframe https://es.wikipedia.org/wiki/Paul_Newman#/media/Archivo:Paul_newman_menomonee_falls_wisconsin_mcarthy_eugene_rally.jpg 333 666 %}

### Imagen

{% img fotocarne https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Paul_Newman_-_1958.jpg/800px-Paul_Newman_-_1958.jpg 800 '"Paul Newman cumple 100 años" "Paul Newman posando en blanco y negro en sus 30"' %}

### Enlace en página nueva

{% link Paul Newman Wikipedia en epañol https://es.wikipedia.org/wiki/Paul_Newman true %}

### Incluir código de un fichero

Para incluir todo el contenido del fichero guardado en la opción `code_dir`:
{% include_code promise-timeout.js lang:javascript js/promise-timeout.js %}

Para incluir solo la linea 6, que es una cita de *Camino a la Perdición* por el personaje que interpreta Paul Newman y fue sú último papel como actor.
{% include_code Cita de Camino a la Perdición del personaje John Rooney (Paul Newman) lang:javascript from:6 to:6 js/promise-timeout.js %}

Para incluir solo las lineas 4 a 8.
{% include_code promise-timeout.js:4-8 lang:javascript from:4 to:8 js/promise-timeout.js %}

### Para incluir vídeos de Youtube

Para esta funcionalidad es necesario instalar un plugin si usas una la séptima versión de Hexo o superior. `$ npm install hexo-tag-embed`

Para vídeos

{% youtube He6-S5IYuSk video %}

Para listas de reproducción

{% youtube PLB4A096FE55865235 playlist %}

## Incluir artículos

Basta con incluir el nombre del fichero, por ejemplo, si quiero enlazar mi antiguo post sobre como aumentar el espacio asignado a un sistema operativo invitado virtualizado dentro del sistema operativo anfitrión, que es algo que tuve que hacer recientemente para permitir seguir llenando de tonterías como esta al sistema invitado:
{% post_link Increase-the-size-of-a-VDI-file %}

Puedo cambiar el título usando este otro formato:
{% post_link Increase-the-size-of-a-VDI-file Aumenta el tamaño del fichero VDI %}

## Incluir *assets*

Esta parte me la voy a saltar, porque mientras mantenga este cuaderno de bitácoras en Github, y no implemente un sistema más elaborado para guardar imágenes, o medios, o recursos, o, como dicen los de Wall Street, activos, de forma externa que no se guarden dentro del repositorio de Git, no tiene mucho sentido aplicarlo.

## URL

Voy a poner solo un ejemplo {% full_url_for "sobre mi" /about %}.

## RAW

La etiqueta `raw` permite incluir contenido que no será renderizado.

{% raw %}
<p style="font-family: TIMES-NEW-ROMAN; color: red;">puro HTML en rojo en la archiconocida fuente TIMES-NEW-ROMAN.</p>
Esto no. Esto es texto sin adornos dentro de las etiquetas antes mencionadas para escribir crudo.
{% endraw %}

Y se acabó. Si has llegado hasta aquí robot, humano o alienígena, que menos que disfrutes del téorico enlace donde se puede ver el [código](https://github.com/rodrom/rodrom.github.io/blob/main/source/_posts/tag-plugins-examples.md) de este artículo en el repositorio de Github para ver exactamente como debes escribir las ditintas etiquetas vitaminadas independientes que he utilizado.

**NOTA**: Las faltas de ortografía y cualquier otra inexactitud es culpa mía.