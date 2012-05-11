<html>
<head>
</head>
<body>
<?php

$conexion= mysql_connect("localhost","root","");
mysql_select_db("mydb",$conexion);
$queEmp = "SELECT * FROM alumnos";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
while ($rowEmp = mysql_fetch_assoc($resEmp)) {
echo "Nombre: ".$rowEmp['nombre']."<br>";
echo "Apellido 1: ".$rowEmp['apellido1']."<br><br>";
echo "Apellido 2 : ".$rowEmp['apellido2']."<br><br>";
}

?>
</body>
</html>