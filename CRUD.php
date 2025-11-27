<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    <p>-Crud son los acronimos de:
        C: create (crear) -> Insertar nuevos datos.<br>
        R: read (leer) -> Consultar o mostrar datos.<br>
        U: update (actualizar) -> Modificar datos existentes.<br>
        D: delete (eliminar) -> Borrar datos.<br>
    - CRUD representa las operaciones básicas que puedes realizar sobre una base de datos.
    </p>
    <p>- Consta de 7 archivos</p>
    <h2>COMO EMPIEZA</h2>
    <P>Todo inica creando una base de datos </P>
    <p>luego se crea un formulario comun y corriente </p>
    <p> luego se debe conectar con la base de datos con: USERNAME, PASSWORD, NAMEBD, SERVERNAME</p>
    <p> luego se crea CREATE con un formulario</p>
    <p>luego el READ</p>
    <p>luego el UPDATE Q SON DOS ARCHIVOS </p>
    <p> finalmente se crea el DELETE</p>
    <p> luego entras al XAM y prendes el APACHE entras a ADMIN  y entras a http://localhost/dashboard/ pones el nombre  de tu carpeta y entras a ver si da o no</p>
    <p>

           <h3>MÉTODO POST Y GET:</h3>
    <P>GET:<br>
     -Envía los datos en la URL.<br>
     -Es visible y limitado en tamaño.<br>
     -Se usa para consultas o búsquedas, no para enviar inforación sensible.
    </P>
    <p>POST:<br>
        -Envía los datos en el cuerpo de la solicitud HTTP, no visible en la URL. <br>
        -No tiene limite de tamaño en la práctica.<br>
        -Se usa para guardar, actualizar o eliminar datos.
    </p>

<strong><h2>UPDATE:</h2></strong>
<p>sabemos que esas siglas significan, actualizar , funcionan basdicamente con dos archivos, uno en el que creas un formulario nuevo <br>
en el que esten los mismos datos que quieres modificar, los cuales llenaste en el primer formulario del create, <br> 
estos datos aparecen gracias a nuestro PK y al uso de un SELECT sql, la cual se debe poner como condicion en nuestra conulttta sql. <br>
tambien el el formulario que creamos es necesario poner las variables de los nombres que le asignamos a nuestros datos <br>
en el promer formulario. <br><br>
seguimos con el documento numero dos, en este se hace un procedimiento de guardado, remplazando los antiguos, datos <br> 
por unos nuevos, mediante la consulta sql  UPDATE, finalmente tenemos nuestros datos completamente actyualizados <br>
listos para ser tomados en cuenta.  </p>
<strong>EJEMPLO UPDATE</strong>
<p>UPDATE (nombre de la tabla) SET nombre = 'nv dato', edad = nv 'nv dato' WHERE  id = 3;</p>
<strong>EJEMPLO FORMULARIO UPDATEEE</strong>
<p> <label>Nombre:</label> <br>
    <input type="text" name="nombre" value="<?= $nombre ?>" required>
</p>
</p>
<h2><strong>DELETE:</strong></h2>
<p>-Recepción del ID: El archivo (o script) de Delete recibe el identificador único (ID) del registro que se desea eliminar. Este ID se suele pasar a través de la URL (método GET) o como datos de un formulario (método POST), aunque por seguridad, POST es preferible.

Conexión a la Base de Datos: Se establece una conexión con la base de datos.<br>

Consulta SQL: Se ejecuta una consulta SQL DELETE que utiliza el ID recibido para localizar y eliminar el registro específico de la tabla.

La sintaxis básica de la consulta es: DELETE FROM nombre_tabla WHERE columna_id = valor_id;<br>

Confirmación y Redirección: Si la eliminación es exitosa, se suele redirigir al usuario a la página de lectura principal (donde se ven todos los registros) y, a menudo, se muestra un mensaje de confirmación ("Registro eliminado con éxito").<br>

La acción de eliminar es irreversible, por lo que en sistemas reales, se suele pedir una confirmación al usuario antes de ejecutar la consulta DELETE. En algunos casos, en lugar de eliminar, se usa una técnica llamada "Soft Delete" donde solo se marca el registro como inactivo en la base de datos.</p>
</body>
</html>