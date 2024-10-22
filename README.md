#COVID 19  CEMPE #

![](https://github.com/13bautista/CI_CEMPE/raw/master/Screens/Screen%202024-01-01.png)

Tablero para la consulta y gestion de la base de datos COVID 19 . CEMPE 2022

## Requisitos
- PHP 7.2 o superior, Apache u homologo para PHP. Configuraciones de proyecto

## Incluye
- [CodeIgniter 3.1.11]
- [Plantilla SB Admin 2] v4.0.7
-  Bootstrap v4.3.1
-  Chart.js v2.8.0
-  DataTables 1.10.19
-  Font Awesome Free 5.10.2 
-  jQuery v3.4.1


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

```
3. El proyecto esta sobre mi local, para ingresar al dashboard vaya a http://localhost/register y cree una cuenta de usuario.

## Uso
Es solo un comienzo para las funcionalidades de registro de cierre de sesión de usuario.
Se iran añadiendo mas funcionalidades....
