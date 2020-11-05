# Ejemplo Notificaciones

El proyecto consiste en crear una landing page Responsiva donde vivirá un formulario, envíe datos por medio de VueJS con la intención de generar una notificación, y que por medio de una API guarde en la base de datos la información (Nombre, Teléfono, Email, Asunto), como opcional se puede utilizar algún Framework para el front, favor de compartir el Repositorio con su instalador para ejecutar en NodeJS desde un PHP Laravel como framework.

# notas importantes

el back aunque no se le configuren las llaves smtp de mail guarda los datos y funciona 

## Requisitos

- [x] docker back
- [x] docker front
- [x] docker compose

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
Se deben configurar en archivo backend/.env con las credenciales de gmail.

### docker

debemos correr los siguientes comandos

nota : debemos esperar a que el sh termine
nota2 : el archivo uninstall.sh elimina las imagenes de docker

- bash install.sh


ir a http://127.0.0.1:8080

### manual
requieres php, nodejs y un servidor de bases de datos mariadb o mysql

configurar en el archivo backend/.env los datos de la db y el mail
- datos de acceso a el SGBD
- datos de acceso a un servidor smtp ( en gmail es facil y viene preconfigurado )
- ir a la carpeta backend y ejecutar `php artisan migrate`
- ir a la carpeta backend y ejecutar `php artisan serve`
- ir a la carpeta frontend y ejecutar `npm install`
- ir a la carpeta frontend y ejecutar `npm install -g @vue/cli`
- ir a la carpeta frontend y ejecutar `npm run serve`

ir a http://127.0.0.1:8080

no olvidar la configuracion de seguridad en la cuenta gmail
se usa este metodo por simplicidad de configuracion
(google/gmail) administrar cuenta -> seguridad -> acceso de apps menos seguras = true