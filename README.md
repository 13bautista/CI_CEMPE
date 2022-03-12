#CodeIgniter 3 - COVID -- CEMPE
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
-  



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
```

3. El proyecto esta configurado como local, para ingresar al dashboard -->  http://localhost/CI_CEMPE/register
y crea una cuenta de usuario.

## Uso
Es solo un comienzo pero se iran añadiendo mas funcionalidades...