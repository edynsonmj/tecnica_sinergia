# Front-End Pacientes - Angular

Esta es la interfaz gráfica de la aplicación para gestionar pacientes, construida con **Angular** y **Angular Material**.

## Requisitos Previos

Antes de ejecutar este proyecto, asegúrate de tener instalado:

1.  **Node.js** (versión 16.x o superior): [Descargar Node.js](https://nodejs.org/)
2.  **Angular CLI**: Instalable vía npm:
    ```bash
    npm install -g @angular/cli
    ```

## Configuración y Ejecución

Sigue estos pasos para levantar el servidor de desarrollo:

1.  **Clonar el repositorio:**
    Si no ha realizado este paso como indica el readme general del proyecto

2.  **Instalar dependencias:**
    Ejecuta el siguiente comando para instalar las librerías necesarias (incluyendo Angular Material y HttpClient):
    ```bash
    npm install
    ```

3.  **Configurar la API:**
    Asegúrate de que la API de Laravel esté ejecutándose (por defecto en `http://localhost:8000`). Si la API corre en otra URL, actualízala en el servicio de Angular:
    `src/app/services/paciente.service.ts`

4.  **Ejecutar el proyecto:**
    ```bash
    ng serve --open
    ```
    El navegador se abrirá automáticamente en `http://localhost:4200`.

## Características del Frontend
* Interfaz moderna utilizando **Angular Material Cards**.
* Consumo de API REST de Laravel mediante **HttpClient**.
* **CommonModule** configurado globalmente para uso de directivas (`*ngIf`, `*ngFor`).