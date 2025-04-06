# CARE_U_SPA 🌿✨

Este proyecto es un sitio web para un spa llamado **Care U Spa**. El sitio incluye información sobre los servicios ofrecidos, un formulario de contacto para realizar solicitudes, y una interfaz visual atractiva. Está desarrollado utilizando **PHP**, **HTML**, **CSS** y **JavaScript**.

---

## 🚀 Tecnologías Utilizadas

| Tecnología     | Icono                                                                                          | Descripción                                                                                               |
| -------------- | ---------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| **PHP**        | ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)                      | Lenguaje de programación del lado del servidor para manejar la lógica y la conexión con la base de datos. |
| **HTML**       | ![HTML](https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white)                 | Lenguaje de marcado para estructurar el contenido del sitio web.                                          |
| **CSS**        | ![CSS](https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white)                    | Lenguaje de estilos para diseñar y dar formato al sitio web.                                              |
| **JavaScript** | ![JavaScript](https://img.shields.io/badge/-JavaScript-F7DF1E?logo=javascript&logoColor=black) | Lenguaje de programación del lado del cliente para interactividad y validaciones.                         |
| **MySQL**      | ![MySQL](https://img.shields.io/badge/-MySQL-4479A1?logo=mysql&logoColor=white)                | Sistema de gestión de bases de datos para almacenar las solicitudes del formulario.                       |

---

## Requisitos Previos

- **Servidor Web**: Se recomienda usar XAMPP o WAMP.
- **PHP**: Versión 7.4 o superior.
- **Base de Datos MySQL**: Para almacenar las solicitudes del formulario.

---

## Configuración del Proyecto

### 1. **Clonar el Repositorio**

Clona este repositorio en el directorio raíz de tu servidor web (por ejemplo, `htdocs` en XAMPP):

```bash
git clone https://github.com/DARKTOTEM2703/CARE_U_SPA.git
```

### 2. **Configurar la Base de Datos**

- Importa el archivo SQL ubicado en `db/db_spa_careU.sql` a tu servidor MySQL utilizando phpMyAdmin o la línea de comandos:

```sql
SOURCE c:\xampp\htdocs\CARE_U_SPA\db\db_spa_careU.sql;
```

---

## 🧩 Uso de Componentes

El proyecto utiliza componentes PHP para facilitar la reutilización de código y mantener una estructura modular:

- **`db_connection.php`**: Maneja la conexión a la base de datos MySQL.
- **`navmenu.php` y `navtop.php`**: Generan el menú de navegación y la barra superior de manera dinámica.
- **`footer.php`**: Contiene el pie de página reutilizable en todas las páginas.
- **`submit_request.php`**: Procesa las solicitudes enviadas desde el formulario de contacto.

**¿Por qué usar componentes?**

- **Reutilización**: Permiten usar el mismo código en múltiples páginas.
- **Mantenimiento**: Facilitan la actualización de funcionalidades comunes.
- **Organización**: Mejoran la estructura del proyecto al separar responsabilidades.

---

## 📂 Estructura del Proyecto

Asegúrate de que las credenciales de la base de datos en `components/db_connection.php` coincidan con tu configuración local:

```php
<?php
$host = 'localhost';
$dbname = 'db_spa_careU';
$username = 'root';
$password = '';
```

---

## Iniciar el Servidor

1. Inicia tu servidor web (por ejemplo, XAMPP o WAMP).
2. Accede al proyecto desde tu navegador en:  
   `http://localhost/CARE_U_SPA`

---

## 🌟 Funcionalidades

### Página Principal (`index.php`)

Muestra información general sobre el spa y los servicios ofrecidos.

### Página de Servicios (`service.php`)

Detalla los servicios disponibles y permite a los usuarios explorar más sobre ellos.

### Página de Contacto (`contact.php`)

Incluye un formulario para que los usuarios puedan enviar solicitudes. Los datos se almacenan en la base de datos.

### Validación del Formulario

La validación del formulario se realiza tanto en el cliente (JavaScript) como en el servidor (PHP).

---

## 🎨 Estilos y Diseño

El diseño del sitio utiliza CSS para proporcionar una experiencia visual atractiva. Los estilos están organizados en la carpeta `css` y son específicos para cada componente o página.

---

## 📜 Licencia

Este proyecto está bajo la licencia MIT. Puedes usarlo, modificarlo y distribuirlo libremente.
