# Ejemplo Notificaciones

El proyecto consiste en crear una landing page Responsiva donde vivirá un formulario, envíe datos por medio de VueJS con la intención de generar una notificación, y que por medio de una API guarde en la base de datos la información (Nombre, Teléfono, Email, Asunto), como opcional se puede utilizar algún Framework para el front, favor de compartir el Repositorio con su instalador para ejecutar en NodeJS desde un PHP Laravel como framework.

## Requisitos

- [ ] docker back
- [ ] docker front
- [ ] docker compose

### backend

- [x] configuracion envio mails (se usa smtp de gmail)
- [x] create emails (Nombre, Teléfono, Email, Asunto) -> ademas se agrega bandera de envio
- [x] read emails route 

### frontend

- [x] uso de vue
- [x] maqueta landing -> se usa base https://github.com/lekegitrepo/landing-page-with-bootstrap
- [x] notificaciones -> push y email
- [x] logica de envio de formulario


## Set Up
Se deben configurar en archivo backend env con las credenciales de gmail.

### docker
correr

- docker-compose up
- ir a http://127.0.0.1:8080

### manual
 requieres php nodejs y un servidor de bases de datos mariadb o mysql

configurar en el archivo backend/.env
- datos de acceso a el SGBD