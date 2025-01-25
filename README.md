# Tareas4
# Sistema de Gestión de Reservas para Restaurante Virtual

## Descripción del Proyecto

Este sistema es una aplicación web para la gestión de reservas de un restaurante virtual. Está desarrollado utilizando el patrón de diseño MVC (Modelo-Vista-Controlador) y cuenta con medidas de seguridad para proteger los datos y garantizar la autenticidad de los usuarios.

El sistema permite a los usuarios realizar reservas, consultar su historial de reservas, y al administrador gestionar mesas, horarios y clientes registrados.

---

## Características Principales

1. *Gestión de Usuarios:*
   - Registro e inicio de sesión seguro (hashing de contraseñas).
   - Roles definidos (cliente y administrador).

2. *Gestión de Reservas:*
   - Creación, edición, consulta y eliminación de reservas.
   - Asignación de mesas basadas en disponibilidad.

3. *Gestión de Mesas:*
   - Administración de la cantidad y capacidad de las mesas disponibles.

4. *Seguridad:*
   - Uso de sesiones para la autenticación.
   - Validación de datos y medidas para evitar inyecciones SQL.

5. *Generación de Reportes:*
   - Reporte de reservas generados en formato PDF.

---

## Requisitos del Sistema

- *Servidor Web:* Apache o Nginx.
- *Lenguaje:* PHP 8.0 o superior.
- *Base de Datos:* MySQL 8.0 o superior.
- *Extensiones de PHP:*
  - PDO_MySQL
  - GD (para generación de imágenes si es necesario).
- *Herramientas recomendadas:*
  - Composer (para gestión de dependencias).
  - MySQL Workbench (para manejo de la base de datos).

---

## Estructura del Proyecto


restaurante_app/
├── config/
│   ├── app.php
│   └── database.php
├── controllers/
│   ├── ReservaController.php
│   ├── UsuarioController.php
│   └── MesaController.php
├── models/
│   ├── Reserva.php
│   ├── Usuario.php
│   └── Mesa.php
├── public/
│   ├── index.php
│   └── .htaccess
├── views/
│   ├── reservas/
│   │   ├── crear.php
│   │   ├── editar.php
│   │   └── listar.php
│   ├── usuarios/
│   │   ├── login.php
│   │   ├── registro.php
│   │   └── perfil.php
│   ├── common/
│   │   └── menu.php
│   
├── vendor/ (generado por Composer)
├── db/
│   └── restaurante.sql
└── README.md


---

## Configuración e Instalación

1. *Clona el repositorio:*
   bash
   git clone <url-del-repositorio>
   cd restaurante_app
   

2. *Configura la base de datos:*
   - Importa el archivo db/restaurante.sql en tu gestor de base de datos MySQL.
   - Actualiza los datos de conexión en config/database.php:
     php
     <?php
     define('DB_HOST', 'localhost');
     define('DB_NAME', 'restaurante');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     

3. *Configura tu servidor web:*
   - Asegúrate de que el directorio raíz apunte a public/.
   - Si usas Apache, verifica que el módulo mod_rewrite esté habilitado.

4. *Instala las dependencias (opcional):*
   Si estás utilizando Composer, instala las dependencias:
   bash
   composer install
   

5. *Accede a la aplicación:*
   - Abre tu navegador web y dirígete a http://localhost/restaurante_app.

---

## Uso de la Aplicación

### Clientes
- Regístrate e inicia sesión para:
  - Realizar nuevas reservas.
  - Ver el historial de reservas.
  - Actualizar o cancelar reservas existentes.

### Administradores
- Accede al panel de administración para:
  - Gestionar mesas (añadir, editar, eliminar).
  - Consultar y administrar reservas de los clientes.
  - Generar reportes en PDF.

---

## Seguridad Implementada

1. *Hashing de contraseñas:* Se utiliza password_hash() y password_verify().
2. *Prevención de Inyección SQL:* Uso de consultas preparadas con PDO.
3. *Validación de entradas:* Sanitización y validación de todos los datos enviados por los usuarios.

---

## Licencia
Este proyecto está bajo la Licencia MIT. Puedes consultarla en el archivo LICENSE.

---

## Contribuciones
Se aceptan contribuciones al proyecto. Por favor, crea un fork del repositorio, realiza tus cambios y envía un pull request.

---

## Autor
Desarrollado por Juana como parte del curso de desarrollo backend web.
