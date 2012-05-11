<?php
if(isset($_POST["idciclo"]))
	{
		$conexion= mysql_connect("192.168.0.106","fct","adminfct");
		mysql_select_db("mydb",$conexion);
		$opciones = '<option value="0"> Elige un alumno</option>';
		if($_POST["idciclo"] > 0 && $_POST["idasignatura"] > 0)
		{
		$alumnos2 = "select idalumnos,nombre,apellido1,apellido2 from alumnos inner join curso on alumnos.ciclo_idciclo=curso.ciclo_idciclo  where curso.asignatura_idasignatura=".$_POST["idasignatura"]." and alumnos.ciclo_idciclo=".$_POST["idciclo"];
		$mysql=mysql_query($alumnos2,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idalumnos"].'">'.$row["nombre"].' '.$row["apellido1"].' '.$row["apellido2"].'</option>';
		}
		}
		if($_POST["idciclo"] > 0)
		{
		$alumnos1 = "select idalumnos,nombre,apellido1,apellido2 from alumnos where ciclo_idciclo=".$_POST["idciclo"];
		$mysql=mysql_query($alumnos1,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idalumnos"].'">'.$row["nombre"].' '.$row["apellido1"].' '.$row["apellido2"].'</option>';
		}

		echo $opciones;
		}
	}

	
?>