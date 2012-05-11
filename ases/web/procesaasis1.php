<?php
if(isset($_POST["idciclo"]))
	{
		$conexion= mysql_connect("192.168.0.106","fct","adminfct");
		mysql_select_db("mydb",$conexion);
		$opciones = '<option value="0"> Elige una asignatura</option>';
		$asignatura = "select idasignatura,nombre from asignatura inner join curso on asignatura.idasignatura=curso.asignatura_idasignatura where ciclo_idciclo=".$_POST["idciclo"];
		$mysql=mysql_query($asignatura,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idasignatura"].'">'.$row["nombre"].'</option>';
		}

		echo $opciones;
	}
?>