
# 📝 Blog System - DWC (Laravel & PHP)

Este es un sistema de gestión de contenidos (Blog) desarrollado como parte del módulo de **Desarrollo Web en Entorno Servidor**. El objetivo del proyecto es implementar un CRUD completo utilizando el framework **Laravel**, siguiendo el patrón de diseño MVC y buenas prácticas de desarrollo.

## 🚀 Características

- **Gestión de Posts:** Creación, lectura, edición y eliminación de artículos.
- **Sistema de Plantillas:** Uso de **Blade** para una interfaz dinámica y modular.
- **Base de Datos:** Migraciones y modelos definidos mediante **Eloquent ORM**.
- **Enrutamiento:** Control total de rutas limpias y controladores de recursos.
- **Frontend Assets:** Integración con **Vite** para la gestión de recursos modernos.

## 🛠️ Tecnologías utilizadas

- **Backend:** PHP 8.x
- **Framework:** Laravel 10+
- **Frontend:** Blade Templates & Tailwind CSS / CSS3
- **Base de Datos:** MySQL (soporta otros drivers vía Eloquent)
- **Herramientas de construcción:** Vite

## 📦 Instalación y Configuración

Sigue estos pasos para levantar el proyecto en tu entorno local:

1. **Clonar el repositorio:**
   git clone https://github.com/eduardoandr3s/DWC-Blog-PHP-LARAVEL.git
   cd DWC-Blog-PHP-LARAVEL
2. **Instalar dependencias de PHP:**
   composer install
3. **Instalar dependencias de Node.js:**
   npm install && npm run dev
4. **Configurar el entorno:**
    
    Copia el archivo .env.example a .env.
    
    Genera la clave de aplicación:
    php artisan key:generate
5. **Ejecutar migraciones:**
    php artisan migrate
6.  **Servir la aplicación:**
    php artisan serve
 📂 **Estructura del Proyecto**

app/Http/Controllers: Lógica de negocio y manejo de peticiones.

app/Models: Definición de las entidades de la base de datos.

resources/views: Plantillas Blade para la interfaz de usuario.

routes/web.php: Definición de las rutas del blog.

**Desarrollado por Eduardo Andrés como parte de mi formación en Desarrollo de Aplicaciones Web (DAW).**
