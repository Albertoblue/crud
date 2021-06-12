# Crud con vue.js, vuetify, sweetAlert2 y Bootstrap 5 con conexión con php y mysql

En este proyecto se crea un crud del lado del cliente usando el framework vue.js y herramientas para estilizar y hacer más rapido el desarrollo
como lo es vuetify, sweetAlert2 y Botstrap5. El proyecto desarrolla paginación y busqueda de registros en tiempo real. Del lado del servidor se utiliza php 
para atender las peticiones http y conectarse a la base de datos con el fin de hacer persistente la información.

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia de este proyecto funcionando en tu máquina local con los propósitos de desarrollo y pruebas._


### Pre-requisitos 📋

_Para correr el programa deberas tener instalado php en su versión 7 o superior y contar con un servidor como apache o nginx_ (php puede levantar un servidor y escuchar peticiones). Si solo deseas instalar php puedes levantar el servidor que tiene incluido con el siguiente comando.

```
php -S localhost:800
```

### Instalación 🔧

_En este proyecto migré el archivo csv incluido a mi base de datos_

_Entra a tu base de datos de la siguiente forma_
```
mysql -u nombre_usuario -p
```
_Debes sustituir nombre_usuario por tu correspondiente usuario, inmediatamente después te pedirá la contraseña de acceso._
_Tendrás que crear una nueva base de datos y una nueva tabla aquí te dejo un ejemplo_


```
create database NombreBd;
```
```
use NombreBd;
```
_Nuevamente sustituyes NombreBd por el nombre de la base de datos que te agrade, en mi caso le llamé "llamadas"._


_Nuevamente sustituyes NombreBd por el nombre de la base de datos que te agrade, en mi caso le llamé "llamadas"_
_Ahora creas una nueva tabla, en mi caso también le llamé llamadas, te dejo el comando utilizado_
```
create table llamadas(id varchar(50) not null,origen bigint,destino bigint,inicio time,fin time,primary key(id));
```

_Ahora debes de exportas el archivo CSV para llenar con filas la tabla, el comando es el siguiente_

```
load data local infile 'ruta_del_archivo' into table nombreTabla fields terminated by ',' lines terminated by '\r\n';
```
_Debes sustituir nombreRabla por el nombre de tu tabla mientras que la ruta_del_archivo indica donde se encuentra tu CSV_ 

_Cuando todo esté listo en la bases de datos, debes de colocar todo el proyecto en la carpeta www si tienes apache o nginx, si no es así coloca tu terminal en el proyecto (con el comando cd) y ejecuta el servidor php con el comando previamente presentado._


## Despliegue 📦

* El proyecto desplegado -(https://mvirtuami.izt.uam.mx/crud/) - 

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [vue](https://vuejs.org/v2/guide/) - El framework web usado
* [Vuetify](https://vuetifyjs.com/en/introduction/why-vuetify/#guide) - Manejo de estilos en los componentes de Vue.js
* [SweetAlert2](https://sweetalert2.github.io/#examples) - Usado para generar animaciones en los cuadro de dialogo




---
⌨️ con ❤️ por [Juan Alberto Alcantara Sotelo](https://github.com/Albertoblue) 😊
