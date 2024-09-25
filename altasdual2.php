<?php
$conexion=mysqli_connect('localhost','root','') or die("Problemas en la conexion");

mysqli_select_db($conexion,'data') or die("Problemas en la seleccion de la base de datos");
$named = $_REQUEST['named'];
$query_verificacion = "SELECT * FROM emdual WHERE named='$named'";
$resultado_verificacion = mysqli_query($conexion, $query_verificacion);

if (mysqli_num_rows($resultado_verificacion) > 0) {
    echo "<font face='Ink Free' size=16><center>Esta empresa ya se encuentra registrada. Por favor, ingrese otra o edite la ya existente.</font>";
    
} else {
mysqli_query($conexion,"INSERT INTO emdual(named,carred, sald, dird, numd, hod) values
   ('$_REQUEST[named]','$_REQUEST[carred]','$_REQUEST[sald]','$_REQUEST[dird]','$_REQUEST[numd]','$_REQUEST[hod]')",)

or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Registro de la empresa guardado.";
}

$link=mysqli_connect("localhost","root","");
if ($link) {
	mysqli_select_db($link,"data");
}
$checkbox=$_POST['checkbox'];
foreach ($checkbox as $key => $value) {
	$ficha2="INSERT INTO emdual SET carred='$value'";
	$ejecutar_insertar_ficha2=mysqli_query($link,$ficha2);
}
?>