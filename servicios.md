## Registro
Url: http://chamba-back.test/api/usuario
Metodo: POST
Json a Enviar:
{
	"nombres": "Marco Antonio",
	"apellidos": "Vega Gallardo",
	"f_nacimiento": "1998/04/30",
	"correo": "marco98.vega@gmail.com",
	"password": "password",
	"genero": "M",
	"telefono": "999 888 777",
	"img": "sin_especificar",
	"id_estado": "1",
	"id_distrito": "1",
	"id_rol": "1"
}


## Login: 
Url: http://chamba-back.test/api/usuario/login
Metodo: POST
Json a Enviar:
{
	"usuario": "marco98.vega@gmail.com",
	"contraseña": "password"
} 


