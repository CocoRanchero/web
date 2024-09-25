<html>
<head>
    <link rel="stylesheet" href="Style.css">
<title>CambiosLibros3</title>
</head>
<body><center>
<header class="header">
<nav class="bannetop">
        <ul class="barnav">
            <li class="menu"><font size="6" face="Forte"><a href="indice.html">Indice</a><br></font></li>
            
        </ul>
    </nav>
    </header>
    <br>
    <br>
<h1><font face="Arial Black" size="18" color="white">Cambio de Datos</font></h1>
</center>
<br><br>
   <section class="banner">
    <font face="Arial" size="10" color="#635148">
<?php

$conexion=mysqli_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysqli_error());

// seleccionado la base de datos
mysqli_select_db ($conexion,'data1');


$data1=mysqli_query($conexion,"Select *  from libro where id='$_REQUEST[id]'") or die ("Problemas en el select:".mysqli_error($conexion));
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$falta=$_POST['falta'];


if($reg=mysqli_fetch_array($data1)) {
mysqli_query($conexion,"UPDATE libro SET id='$id', titulo='$titulo', autor='$autor', falta='$falta' WHERE id='$id'") or die("Problemas en el :". mysqli_error($conexion));

echo 'Los datos del libro fueron editados correctamente';
}

else
{
echo 'El libro no existe';
}
mysqli_close($conexion);
?>
</font>
</section>
<br><br>
<center>
<div class="footer"><p>&copy; Design by Marian Sofia Márquez Gonzalez</p></div>
</center>
</body>
</html>