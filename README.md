
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
