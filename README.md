
#Blog

## Diagrama de Flujo

![Diagrama de Flujo](/diagrama/diagrama-flujo-CK.png)

## Pasos para Levantar el Proyecto

1. Clona el repositorio:
    ```bash
    git clone ...
    ```

2. Instala las dependencias de Composer:
    ```bash
    composer install
    ```

3. Copia el archivo de configuración del entorno:
    ```bash
    cp .env.example .env
    ```

4. Configura el archivo `.env` con la información necesaria.

5. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

6. Ejecuta las migraciones de la base de datos:
    ```bash
    php artisan migrate
    ```

7. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

## Generar Artículos Dinámicos

Genera 10 artículos de prueba utilizando las semillas:
```bash
php artisan tinker
Post::factory()->count(10)->create();




## Escenarios de Prueba
1. Guardar Datos a Nivel HTML
```bash
Accede a http://127.0.0.1:8000/posts/create para agregar un nuevo artículo.
```

2. Obtener Listado de Artículos
```bash
Accede a http://127.0.0.1:8000/api/posts para obtener un listado de todos los artículos.
```

3. Buscar un Artículo por ID
```bash
Accede a http://127.0.0.1:8000/api/posts/{id} para obtener información sobre un artículo específico (sustituye {id} con el ID real).
Ejemplo: http://127.0.0.1:8000/api/posts/2
```

4. Buscar un Artículo por Contenido
```bash
Accede a http://127.0.0.1:8000/api/posts/search/{word} para buscar artículos por contenido (sustituye {word} con la palabra real).
Ejemplo: http://127.0.0.1:8000/api/posts/search/bueno
```

5. Actualizar Campos de un Artículo
```bash
Usa el método PUT y accede a http://127.0.0.1:8000/api/posts/1 para actualizar los campos de un artículo (sustituye 1 con el ID real).

Envía un cuerpo de solicitud crudo (raw) con el siguiente JSON:
{
    "titulo": "Titulo1",
    "autor": "Autor1",
    "fecha": "2023-06-06",
    "contenido": "Nuevo Contenido"
}


```
