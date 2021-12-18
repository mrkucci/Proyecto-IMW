

<h1>Proyecto de Laravel para IMW - Happy Hour Gaming</h1>

La aplicación tratá de un gestor para una página web de Videojuegos, con carrito de compra, caratulas y títulos, secciones de productos, todo entorno a la temática de una tienda de videojuegos.
El proyecto ha sido programado en un entorno de Gitpod, si lo desean pueden abrir una máquina clonada totalmente nueva en su entorno de desarollo abriendo el siguiente Snapshot de Gitpod:
[Snapshot](https://gitpod.io#snapshot/57e7733c-66d1-4ec1-9d87-d9b16977d9c2)

_**Comandos Útiles**_

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

