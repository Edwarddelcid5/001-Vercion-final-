<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("porfavor debes iniciar seccion ");
    window.location="./Login.php"
  
    </script> ';
    session_destroy();
    die();

} 
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bienbienido</h1>
    <a href="php/cerrarsesion.php">cerrar</a>
</body>
</body>
</html>
