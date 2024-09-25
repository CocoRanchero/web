<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<title>AltasDual</title>
</head>
<body>
	<center><img src="e1.png" class="e1"></center><br><br>
<div class="title">Ingresa la información de la empresa disponible</div><br><br>

<form method="POST" action="altasdual2.php">
<table border="4" align="center"><tr align="center">
<td>Ingrese Nombre de la empresa:
<input type="text" name="named" required></td>

<td>Carrera/s:
	<ul>
<li><input type="checkbox" name="checkbox[]" value="Programacion"> Programación
<li><input type="checkbox" name="checkbox[]" value="Alimentos y Bebidas"> Alimentos y Bebidas
<li><input type="checkbox" name="checkbox[]" value="Hospedaje"> Hospedaje
</ul>
</td>

<td>Salario:
<input type="text" name="sald" required placeholder="$"></td>
<td>Dirección:
<input type="text" name="dird" required></td>
<td>Número:
<input type="text" name="numd" ></td>
<td>Horario:
<input type="number" name="hod" required></td><br><br>
<input type="submit" name="Registrar" value="Registrar Empresa">
</tr></table>
</form>
</body>
</html>