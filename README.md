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

1. Respuesta con Imagen `localhost:8080/hello` (Deberías ver algo horrible).
2. Respuesta text/html `localhost:8080/hello2/Junicavi`En este caso la última parte del enlace `Junicavi`puede cambiarse a cualquier palabra.
3. Respuesta JSON `localhost:8080/hello3`
4. Respuesta con Imagen Dinámica `localhost:8080/hello4/Junicavi`En este caso la última parte del enlace `Junicavi`se puede cambiar a cualquier palabra, esta será la palabra que se genere en la imagen.

Para analizar los `headers`de los ejemplos, se puede utilizar cualquier herramienta similar a [Postman](https://www.getpostman.com/) o con el inspector del navegador.

#### Desde el navegador

1. Entramos a cualquiera de los ejemplos, y dependiendo de qué nabegador usemos, abrimos el inspector:
    * Firefox -> `cmd+Alt+I` o `F12` 
    * Google Chrome -> `cmd+Alt+I`
    * Entramos al apartado de `Red`, recargamos la página y hacemos click sobre el único mensaje que aparece.
    ![Alt Text](https://raw.githubusercontent.com/Junicavi/Training/master/ReadmeImages/Headers/2.gif)
    
    ![Alt Text](https://raw.githubusercontent.com/Junicavi/Training/master/ReadmeImages/Headers/3.gif)
    * Esto muestra el tipo de `Header`de la respuesta.
2. En Postman debemos colocar nuestro URL, en la casilla qué dice `Enter request URL`, seleccionamos el tipo de `mètodo`que queremos usar para la petición, en este caso `GET`y oprimimos el botón `Send`.
    ![Alt Text](https://raw.githubusercontent.com/Junicavi/Training/master/ReadmeImages/Headers/4.gif)

Siguiendo estos pasos, se pueden probar los ejemplos mencionados anteriormente, de igual forma podemos usar las mismas rutas, pero cambiando el tipo de método de `GET`a otros como: `POST`,`PUT`o `DELETE`; obtendremos diferentes respuestas.
