# Sistema de Gestión de Pacientes

Este proyecto integral permite la gestión de información de pacientes, incluyendo sus datos personales, tipo de documento, género y ubicación geográfica (departamento y municipio).

El sistema se divide en dos partes principales: un **Backend API** y un **Frontend SPA**.

## 🏗️ Arquitectura del Proyecto

```text
/
├── back_tecnica/   # API REST construida con Laravel
└── front_tecnia/  # Aplicación SPA construida con Angular
```

## Guia de instalacion y ejecucion
Puede ejecutar el servidor back_tecnica independientemente, pero si desea una ejecucion integral siga los pasos para cada componente.

### 1. Descarga
Use el comando de git para obtener en su sistema local todo el contenido del repositorio
```bash
    git clone: https://github.com/edynsonmj/tecnica_sinergia.git
```

### 2. Backed (API Laravel - PHP)
dirijase a la carpeta /back_tecnica para configurar la base de datos y el servidor previo a la ejecucion
[ver documentacion back_tecnica](back_tecnica/README.md)

### 3. Frontend (Aplicación Angular)
Una vez el Backend esté funcionando, diríjase a la carpeta /front_sinergia para instalar las dependencias de Node.js y levantar el servidor web.
[ver documentacion back_tecnica](front_sinergia/README.md)

## Requisitos
* PHP >= 8.2
* MySQL o MariaDB
* NodeJs
* Angular/cli

## Endpoints de la API

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

## Vistas de la pagina
* **Listado pacientes** : Muestra la lista de todos los pacientes.
