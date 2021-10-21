<html>
<head>
<title>Procesa una subida de archivos </title>
<meta charset="UTF-8">
</head>

<?php
define('DIR', 'C:\Users\Carlos\Desktop\imgusers');
//Archivo individual
define('MAX_ARCHIVO',200000);
//Archivos en total
define('MAX_ARCHIVO_TOTAL',300000);

//Propiedades archivo 1
$nombreFichero1   =   $_FILES['archivo1']['name'];
$tipoFichero1     =   $_FILES['archivo1']['type'];
$tamanioFichero1  =   $_FILES['archivo1']['size'];
$temporalFichero1 =   $_FILES['archivo1']['tmp_name'];
$errorFichero1    =   $_FILES['archivo1']['error'];

//Propiedades archivo 2
$nombreFichero2   =   $_FILES['archivo2']['name'];
$tipoFichero2     =   $_FILES['archivo2']['type'];
$tamanioFichero2  =   $_FILES['archivo2']['size'];
$temporalFichero2 =   $_FILES['archivo2']['tmp_name'];
$errorFichero2    =   $_FILES['archivo2']['error'];

//Propiedades archivo 3
$nombreFichero3   =   $_FILES['archivo3']['name'];
$tipoFichero3    =   $_FILES['archivo3']['type'];
$tamanioFichero3  =   $_FILES['archivo3']['size'];
$temporalFichero3 =   $_FILES['archivo3']['tmp_name'];
$errorFichero3    =   $_FILES['archivo3']['error'];

$codigosErrorSubida= [
    UPLOAD_ERR_OK         => 'Subida correcta',
    UPLOAD_ERR_INI_SIZE   => 'El tamaño del archivo excede el admitido por el servidor',  // directiva upload_max_filesize en php.ini
    UPLOAD_ERR_FORM_SIZE  => 'El tamaño del archivo excede el admitido por el cliente',  // directiva MAX_FILE_SIZE en el formulario HTML
    UPLOAD_ERR_PARTIAL    => 'El archivo no se pudo subir completamente',
    UPLOAD_ERR_NO_FILE    => 'No se seleccionó ningún archivo para ser subido',
    UPLOAD_ERR_NO_TMP_DIR => 'No existe un directorio temporal donde subir el archivo',
    UPLOAD_ERR_CANT_WRITE => 'No se pudo guardar el archivo en disco',  // permisos
    UPLOAD_ERR_EXTENSION  => 'Una extensión PHP evito la subida del archivo',  // extensión PHP

]; 
$mensaje = '';  //devuelve un mensaje vacio si no hay ningun error

//Carpeta de destino
    //$carpetaDestino="imgusers/";
 
    
    /*if ( (! isset($_FILES['archivo1']['name'])) || (! isset($_FILES['archivo2']['name'])) || (! isset($_FILES['archivo3']['name']))) {
        $mensaje .= 'ERROR: Falta algún archivo';
    } else {*/



    //Checkea el tamaño del archivo
        if( $tamanioFichero1 && $tamanioFichero2 && $tamanioFichero3 < MAX_ARCHIVO_TOTAL) {
            if($tamanioFichero1 < MAX_ARCHIVO  || $tamanioFichero2 < MAX_ARCHIVO || $tamanioFichero3 < MAX_ARCHIVO){
                if($tipoFichero == "image/jpeg" || $tipoFichero  == "image/png"){ //comprobacion de tipo de archivo
                    if(!(file_exists($directorioSubida . "/" . $nombreFichero))){ //comprobacion si ese fichero ya existe
                        if ( !(is_dir($directorioSubida)) && !(is_writable ($directorioSubida))) { // si el directorio es de lectura y escritura
                            //Intento mover el archivo temporal al directorio indicado
                            $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura <br />';
                        }
                    } else {
                        $mensaje.= 'El archivo ya existe en la ruta especificada <br>';
                        
                    }
                } else {
                    $mensaje .= 'El tipo de archivo no es el correcto';
                }
            }
        }
        return $mensaje;
    
       



   // }
    
    //Funciones
    //Mover imagen, si es una imagen, chekear que no existian

?>

<body>
<?php echo $mensaje; ?>
<br />
	<a href="subirimagen.html">Volver a la página de subida</a>
</body>