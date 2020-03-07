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

## Editar perfil usuario
Url: http://chamba-back.test/api/usuario/editar/1
Metodo: PUT
Json a enviar:
{
	"nombres": "Luis",
	"apellidos": "Tirado Gonzalez",
	"f_nacimiento": "1996/05/23",
	"correo": "luis@gmail.com",
	"password": "luis123",
	"genero": "M",
	"telefono": "983 228 782",
	"img": "sin_especificar",
	"id_distrito": 130102
}

## Login: 
Url: http://chamba-back.test/api/usuario/login
Metodo: POST
Json a Enviar:
{
	"usuario": "marco98.vega@gmail.com",
	"contraseña": "password"
} 

## Listar departamento,provincia,distrito:
Url: http://chamba-back.test/api/direccion/porvenir
Metodo: GET

## Listar categorias:
Url: http://chamba-back.test/api/oficio
Metodo: GET

## Listar subcategoria:
Url: http://chamba-back.test/api/oficio/1
Metodo: GET

## Estado:
Url: http://chamba-back.test/api/estado
Metodo: POST
Json a enviar:
{
	"descripcion":"activo"
}




