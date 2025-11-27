<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    <p>-Crud son los acronimos de :
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
         <h3>MÉTODO POST Y GET </h3>
    <P>GET:<br>
     -Envía los datos en la URL.<br>
     -Es visible y limitado en tamaño.<br>
     -Se usa para consultas o búsquedas, no para enviar inforación sensible.
    </P>
    <p>POST:<br>
        -Envía los datos en el cuerpo de la solicitud HTTP, no visible en la URL. <br>
        -No tiene limite de tamaño en la práctica.<br>
        -Se  usa para guardar, actualizar o eliminar datos.
<strong><h2>READ:</h2></strong>

<p> El READ sirve para <strong>mostrar</strong> los <br>
datos que ya están guardados en nuestra base de datos. Para poder <br>
hacer esto, necesitamos usar una consulta SQL tipo <strong>SELECT</strong>,<br>
 que es la que nos permite traer toda la información o solo una parte,<br>
  según lo que necesitemos. <br><br> En el archivo donde hacemos el READ,<br>
   normalmente conectamos la base de datos y luego hacemos la consulta. Si <br>
    queremos ver todos los registros, usamos un SELECT general; si queremos <br>
    ver solo uno, usamos una condición con el PK <br>
     Después de hacer el SELECT,<br>
      mostramos los datos en una tabla, en tarjetas o como queramos, usando las <br>
       variables que obtenemos del resultado del SELECT. El READ solo sirve para <br>
        “leer” y mostrar, no modifica nada. </p>

<strong>EJEMPLO READ (SQL)</strong>
<p> SELECT * FROM Automoviles; </p>

<strong>EJEMPLO READ MOSTRANDO DATOS</strong>
<br>
<p> <table border="1"> <tr> <th>Código</th> <th>Marca</th> <th>Modelo</th> <th>Año de Fabricación</th> <th>Acciones</th> </tr>
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
<strong>EJEMPLO FORMULARIO UPDATE</strong>
<p> <label>Nombre:</label> <br>
    <input type="text" name="nombre" value="<?= $nombre ?>" required>
</p>
</p>
</body>
</html>