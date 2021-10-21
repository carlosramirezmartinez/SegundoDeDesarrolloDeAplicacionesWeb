<html>

<head>
    <title>Formulario de subida de archivos</title>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Subida y alojamiento de archivo en el servidor</h2>
    <!-- el atributo enctype del form debe valer "multipart/form-data" -->
    <!-- el atributo method del form debe valer "post" -->
    <form enctype="multipart/form-data" action="subirfichero.php" method="post">
        <label for="nombre">Indique su nombre</label>
        <input type="text" name="nombre"><br>

        <label for="directorio">Indique el nombre del directorio donde se ubicar el archivo</label>
        <!-- El directorio tiene que tener la ruta completa o relativa -->
        <!--  OJO Normalmente el usuario debe NO poder elegir el directorio, pero esto es un prueba -->
        <input type="text" name="directorio" size="30" /> <br />

        <!-- Se fija en el cliente el tamaño máximo en bytes ( no es seguro )
     el limite máximo se debe tener el archivo se debe controlar también en el servidor (php.ini)  -->

        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
        <!--  100Kbytes -->

        <label>Elija el archivo a subir </label> <input name="archivo1" type="file" /> <br />

        <input type="submit" value="Subir archivo" />
    </form>
</body>
