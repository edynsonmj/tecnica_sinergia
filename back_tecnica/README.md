# API de Gestión de Pacientes

## Descripción
Este proyecto es una API REST construida con **Laravel 12** para la gestión de información de pacientes, incluyendo sus datos personales, tipo de documento, género y ubicación geográfica (departamento y municipio).
Expone un api para la manipulacion de los pacientes

## Requisitos Previos
* PHP >= 8.2
* Composer
* MySQL o MariaDB

## Instalación

1.  **Clonar el repositorio:**
    si no ha hecho este paso como indica el readme general, asegurese de hacerlo

2.  **Instalar dependencias:**
    ubicarse en la carpeta back_tecnica y usar el comando
    ```bash
    composer install
    ```
3.  **Base de datos:**
    crea una base de datos mysql con los parametros:
    ```
    DB_HOST=127.0.0.1 || localhost
    DB_PORT=3306
    DB_DATABASE=pacientes
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Configurar entorno:**
    Copia el archivo `.env.example` a `.env` y configura las credenciales de tu base de datos:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1 || localhost
    DB_PORT=3306
    DB_DATABASE=pacientes
    DB_USERNAME=root
    DB_PASSWORD=
    ```
5.  **Ejecutar migraciones:**
    ```bash
    php artisan migrate
    ```
6.  **Ejecutar seeder:**
    ```bash
    php artisan db:seed
    ```
7.  **Correr el servidor:**
    ```bash
    php artisan serve
    ```

## Endpoints de la API
El api expone los siguentes endpoints
### Pacientes
* **GET** `localhost/api/pacientes`: Obtiene la lista de todos los pacientes.
* **GET** `localhost/api/pacientes/{id}`: Recupera un paciente basado en el id del sistema.
* **GET** `localhost/api/pacientes/documento/{id}`: Recupera un paciente basado en el numero de identificacion ciudadano.
* **POST** `localhost/api/pacientes`: Crea un nuevo paciente.
    * *Payload:*
        ```json
        {
            "tipo_documento_id": 1,
            "numero_documento": "12345678",
            "nombre1": "Juan",
            "apellido1": "Pérez",
            "genero_id": 1,
            "departamento_id": 1,
            "municipio_id": 1,
            "correo": "juan@example.com"
        }
        ```
* **PUT** `localhost/api/pacientes/{id}`: Actualiza la informacion de un paciente identificado con id.
    * *Payload:*
        ```json
        {
            "tipo_documento_id": 1,
            "numero_documento": "12345678",
            "nombre1": "Juan",
            "apellido1": "Pérez",
            "genero_id": 1,
            "departamento_id": 1,
            "municipio_id": 1,
            "correo": "juan@example.com"
        }
        ```
* **DELETE** `localhost/api/pacientes/{id}`: Crea un nuevo paciente.

## Tecnologías Utilizadas
* Laravel 12.51.0
* MySQL
* PHP 8.5.3