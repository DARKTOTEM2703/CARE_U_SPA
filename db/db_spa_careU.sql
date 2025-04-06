-- Crear la base de datos (si aún no existe)
CREATE DATABASE db_spa_careU;

-- Usar la base de datos
USE db_spa_careU;

-- Crear la tabla para almacenar las solicitudes del formulario
CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    service VARCHAR(100) NOT NULL,
    time VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
