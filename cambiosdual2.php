<html>
<head>
    <link rel="stylesheet" href="Style.css">
<title>CambiosLibros2</title>
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

$id=$_REQUEST['id'];
if($ok=$_REQUEST['id']){

$conexion=mysqli_connect ("localhost", "root", "") or die ('problema conectando porque :' . mysqli_error());

// seleccionado la base de datos
mysqli_select_db ($conexion,'data1');

//ejecutando el query select regresa un rowset
$data1= mysqli_query($conexion,"select * from libro where id='$_REQUEST[id]'") or die("Problemas con query");


//regresando renglon con registro;
if($reg= mysqli_fetch_array($data1))
{
//contruyendo de forma dinamica;<input type="number" name = "id_alumno" value="<?php echo $reg['id_alumno'] ?<br>>">
?><br><br>
<table border="4" align="center">
    <tr align="center"><br>
<form action="cambios3.php" method="post">
<td>ID: <input type="number" name = "id" value="<?php echo $reg['id'] ?>"></td>
<td>Titulo:<input type="text" name = "titulo" value="<?php echo $reg['titulo'] ?>"></td>
<td>Autor:<input type="text" name="autor" value="<?php echo $reg['autor'] ?>"></td>
<td>Fecha en que se dio de alta:<input  type="text" name="falta"  value="<?php echo $reg['falta'] ?>"></td></table><br>
<center><input  type="submit" name="ok"  class="menu2"><br>
</form>
<br><br>
<?php

} else {
    echo "Dicha empresa no existe";
  }
 mysqli_close($conexion);
}
?>
</center>
</body>
</html>