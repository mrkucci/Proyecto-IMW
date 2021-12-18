

<h1>Proyecto de Laravel para IMW - Gamenow</h1>

La aplicación tratá de un gestor para una página web de Videojuegos, con carrito de compra, caratulas y títulos, secciones de productos y demás.


_**Comandos Útiles**_

Borrar la base de datos y volver a crearla:

```console
foo@bar:~$ php artisan migrate:fresh
```

Generar datos de prueba con Tinker:
```console
foo@bar:~$ php artisan tinker
```
```console
>>> App\Models\Product::factory()->make();
```

Insertar datos en la base de datos con Tinker:

```console
foo@bar:~$ php artisan tinker
```
```console
>>> App\Models\Product::factory()->create();
```

El seeder también se puede ejecutar usando en la terminal el siguiente comando:
```console
foo@bar:~$ php artisan db:seed
```

