# API de Gestión de Pacientes

## Descripción
Este proyecto es una API REST construida con **Laravel 11** para la gestión de información de pacientes, incluyendo sus datos personales, tipo de documento, género y ubicación geográfica (departamento y municipio).

## Requisitos Previos
* PHP >= 8.2
* Composer
* MySQL o MariaDB

## Instalación

1.  **Clonar el repositorio:**
    ```bash
    git clone <URL_DEL_REPOSITORIO>
    ```
2.  **Instalar dependencias:**
    ```bash
    composer install
    ```
3.  **Configurar entorno:**
    Copia el archivo `.env.example` a `.env` y configura las credenciales de tu base de datos:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1 || localhost
    DB_PORT=3306
    DB_DATABASE=pacientes
    DB_USERNAME=root
    DB_PASSWORD=
    ```
4.  **Ejecutar migraciones:**
    ```bash
    php artisan migrate
    ```
5.  **Correr el servidor:**
    ```bash
    php artisan serve
    ```

## Endpoints de la API

### Pacientes
* **GET** `/api/pacientes`: Obtiene la lista de todos los pacientes.
* **POST** `/api/pacientes`: Crea un nuevo paciente.
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

## Tecnologías Utilizadas
* Laravel 11
* MySQL