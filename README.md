# Training Repository
---
***
En este repositorio se cargarán los diferentes ejercicios, del proceso de práctica de Nicolás Carrillo.
A continuación se enumerarán los ejercicios cargados en el repositorio hasta el momento, al hacer click en los links, verán el paso a paso para probar los ejercicios.
1. [HTTP Headers](#1)

### <a name="1"></a>HTTP Headers
El primer paso es copiar este repositorio, para ello se debe abrir el terminal y navegar con `cd..`hasta el directorio en el que se desee realizar la clonación y allí copiar el siguiente comando.

`git clone https://github.com/Junicavi/Training`

Ahora se debe crear un servidor PHP, hay diversas formas de realizarlo, pero en este caso lo haremos a través del terminal. Para ello entraremos al directorio principal de nuestro proyecto que ente caso es `/Training/Headers/` y allí se debe ingresar el siguiente comando:

`php -S localhost:8080`

En este punto si ingresamos a [nuestro servidor local](localhost:8080) veremos esto:

![alt text](https://raw.githubusercontent.com/Junicavi/Training/master/ReadmeImages/Headers/1.png)

Sin embargo aquí listaré las URL's que corresponden a las diferentes respuestas HTTP que queremos obtener.

1. [Respuesta con Imagen `localhost:8080/hello`](localhost:8080/hello) (Deberías ver algo horrible)
2. [Respuesta text/html `localhost:8080/hello2/Junicavi`](localhost:8080/hello/Junicavi) En este caso la última parte del enlace `Junicavi`puede cambiarse a cualquier palabra.
