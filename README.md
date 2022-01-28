#CodeIgniter 3 - COVID -- CEMPE
Tablero para la consulta y gestion de la base de datos COVID

## Requisitos
- PHP 7.2 o superior, Plantilla SB Admin 2

## Incluye
- [CodeIgniter 3.1.11]
- [Administrador de SB 2]

## Instalación
1. Configurar el archivo `config.php` y edite su dominio y la configuración de la base de datos.
2. Armar la base de datos con el script bd.sql

```
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  `email` varchar(45),
  `remember_token` varchar(255),
  `created_at` int,
  `updated_at` int,
  `admin` varchar(45),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
);

.
.
.
.
.
.

```
3. El proyecto esta sobre mi local, para ingresar al dashboard vaya a http://localhost/register y cree una cuenta de usuario.

## Uso
Es solo un comienzo para las funcionalidades de registro de cierre de sesión de usuario.
Se iran añadiendo mas funcionalidades....

