# Trabajo Practico - PHP Trabajo Investigación.



*Consta en investigar y probar (con ejemplos) una libreria de PHP que resuelva un problema especifico.*



Integrantes:

​    \- Ortiz, Hector Manuel (FAI-1521)



Libreria seleccionada: **Imagine**



Imagine es una libreria para PHP orientada a objetos para la manipulacion de imagenes construida para PHP 5.3+ que utiliza las mejores practicas y un diseño cuidadoso. Para su uso se requiere de Composer.



_____

## COMPOSER

El primer paso fue instalar **Composer**, en este caso, en Linux (distro basada en Ubuntu 18.04), siguiendo el siguiente tutorial: 



https://www.digitalocean.com/community/tutorials/como-instalar-y-utilizar-composer-en-ubuntu-18-04-es 



Los pasos son: 



1) Antes de descargar e instalar Composer, debe asegurarse de que su servidor tenga instaladas todas las dependencias.



```
sudo apt update
```

A continuación, instalaremos las dependencias. Necesitaremos `curl` para descargar Composer y `php-cli` para instalarlo y ejecutarlo. El paquete `php-mbstring` es necesario para proporcionar funciones para una biblioteca que utilizaremos. Composer utiliza `git` para descargar las dependencias del proyecto y `unzip` para extraer paquetes comprimidos. Es posible instalar todo con el siguiente comando:



```bash
sudo apt install curl php-cli php-mbstring git unzip
```

2)Composer ofrece un [instalador](https://getcomposer.org/installer) escrito en PHP. Lo descargaremos, comprobaremos que no esté dañado y lo utilizaremos para instalar Composer.

```
cd ~
```

```bash
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

A continuación, verifique que el instalador coincida con el hash SHA-384 para el instalador más reciente encontrado en la página [Composer Public Keys/Signatures](https://composer.github.io/pubkeys.html). Copie el hash de esa página y almacénelo como variable de shell:



```
$HASH = *inserte el hash que encontro en la pagina*
```

Ahora, ejecute el siguiente script PHP para verificar que el script de instalación se ejecute de forma segura:

```bash
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
```

Verá el siguiente resultado si todo salio bien:

```bash
Installer verified
```

Para instalar `composer` de manera global, utilice el siguiente comando que lo descargará e instalará en todo el sistema como un comando llamado `composer`, en `/usr/local/bin`:

```bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

Verá el siguiente resultado:

```
All settings correct for using Composer
Downloading...

Composer (version 1.6.5) successfully installed to: /usr/local/bin/composer
Use it: php /usr/local/bin/composer
```

Para comprobar su instalación, ejecute lo siguiente:

```bash
composer
```

Verá que en este resultado se muestran la versión y los argumentos de Composer.

```
 ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.6.5 2018-05-04 11:44:59

Usage:
  command [options] [arguments]

Options:
  -h, --help                     Display this help message
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi                     Force ANSI output
      --no-ansi                  Disable ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
  -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
. . .
```

Esto comprueba que Composer se instaló con éxito y está disponible en todo su sistema.



3) Uso de Composer en un proyecto de PHP

Para utilizar Composer en su proyecto, necesitará un archivo `composer.json`. El archivo `composer.json` indica a Composer las dependencias que debe descargar para su proyecto y las versiones de cada paquete cuya instalación está permitida. Esto es extremadamente importante para preservar la uniformidad de su proyecto y evitar la instalación de versiones inestables que podrían causar problemas de compatibilidad con versiones anteriores.

No necesita crear este archivo de forma manual; hay muchas probabilidades de cometer errores de sintaxis al hacerlo. Composer genera de forma automática el archivo `composer.json` cuando añade una dependencia a su proyecto usando el comando `require`. Puede añadir dependencias adicionales de la misma manera, sin la necesidad de editar manualmente este archivo.



Para usar Composer en la instalación de un paquete como dependencia en un proyecto, se deben seguir estos pasos:

- Identifique el tipo de biblioteca que requiere la aplicación.
- Busque una biblioteca de código abierto adecuada en [Packagist.org](https://packagist.org/), el repositorio oficial de paquetes de Composer.
- Elija el paquete que desea usar.
- Ejecute `composer require` para incluir la dependencia en el archivo `composer.json` e instale el paquete.

EN ESTE CASO, LOS PASOS SON:

En la terminal, cambiar la ruta con comando:

```
cd
```

ya ubicado en su proyecto ir a https://packagist.org/packages/imagine/imagine y copiar y pegar:

```
composer require imagine/imagine
```

en la terminal, dar enter y al finalizar vera el archivo composer.json, también la carpeta vendor.

Con esto, solo queda indicar en los archivos del control (USANDO LA FORMA MVC PARA TRABAJAR SU PROYECTO) la ruta:

```
require ("../../vendor/autoload.php");
```

-------------------------------------------------------------------------------

## IMAGINE

Pagina principal: https://github.com/avalanche123/Imagine

Documentación de Imagine: https://imagine.readthedocs.io/en/stable/

Uso básico que se utilizo para este trabajo practico: https://imagine.readthedocs.io/en/stable/usage/introduction.html#basic-usage



Ejemplos utilizados:

### Abrir imágenes existentes (https://imagine.readthedocs.io/en/stable/usage/introduction.html#open-existing-images)

### Cambiar el tamaño de las imágenes (https://imagine.readthedocs.io/en/stable/usage/introduction.html#resize-images)

### Crear nuevas imágenes (https://imagine.readthedocs.io/en/stable/usage/introduction.html#create-new-images)