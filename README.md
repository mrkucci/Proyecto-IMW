

<h1>Proyecto de Laravel para IMW - Happy Hour Gaming</h1>

La aplicación tratá de un gestor para una página web de Videojuegos, con carrito de compra, caratulas y títulos, secciones de productos, todo entorno a la temática de una tienda de videojuegos.
El proyecto ha sido programado en un entorno de Gitpod, si lo desean pueden abrir una máquina clonada totalmente nueva en su entorno de desarollo abriendo el siguiente Snapshot de Gitpod:

[Proyecto](https://gitpod.io#snapshot/4a279e7a-af29-4b2d-b73e-b3a7cc044e8c)

_**Comandos Útiles**_

>Poner la aplicación en funcionamiento en local:
```console
callmeaday@heaven:~$ php -S 0.0.0.0:8000 -t public
```
<br>

>Borrar la base de datos y volver a crearla:
```console
callmeaday@heaven:~$ php artisan migrate:fresh
```
<br>

>Generar datos de prueba con Tinker:
```console
callmeaday@heaven:~$ php artisan tinker
```
```console
>>> App\Models\Product::factory()->make();
```
<br>

>Insertar datos en la base de datos con Tinker:
```console
callmeaday@heaven:~$ php artisan tinker
```
```console
>>> App\Models\Product::factory()->create();
```
<br>

>El seeder también se puede ejecutar usando en la terminal el siguiente comando:
```console
callmeaday@heaven:~$ php artisan db:seed
```

<br>

>Instalación de Autentificación en Laravel
1. Primero ejecutamos el siguiente comando en la terminal:
```console
callmeaday@heaven:~$ composer laravel/ui
```
2. Seguidamente ejecutamos este comando:
```console
callmeaday@heaven:~$ php artisan ui bootstrap --auth
```

<br>

>Instalar en Frontend en nuestro proyecto Laravel con npm:
1. Si queremos ver la versión de npm que tenemos ejecutamos:
```console
callmeaday@heaven:~$ npm --version
```
2. Si queremos instalar las dependencias de npm ejecutamos:
```console
callmeaday@heaven:~$ npm install
```
3. Para realizar la compilación ejecutamos:
```console
callmeaday@heaven:~$ npm run dev
```

<br>

>Para poder ejecutar el proyecto con normalidad es preciso que nos logueemos:
1. Podemos acceder a la creación de un usuario.
2. Luego podremos usar la aplicación con total normalidad sin restricciones.

<br>

>Creación de Requests en Laravel para los formularios:
```console
callmeaday@heaven:~$ php artisan make:request ProductRequest
```

<br>

>Generación de multiples componentes con Artisan:
```console
callmeaday@heaven:~$ php artisan make:model Modelo -a
```
