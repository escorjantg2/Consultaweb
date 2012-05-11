<?php
if(isset($_POST["idequipo"]))
	{
		$conexion= mysql_connect("192.168.0.106","fct","adminfct");
		mysql_select_db("inventarioe",$conexion);
		$opciones = '<option value="0"> Elige una ubicacion</option>';
		if($_POST["idequipo"] > 0 && $_POST["idprocesador"] > 0)
		{
		$memoria2 = "select ubicacion.idubicacion,ubicacion.nombre as nombreubicacion from ubicacion inner join equipo  on ubicacion.idubicacion=equipo.idubicacion inner join procesador on equipo.idprocesador=procesador.idprocesador where equipo.idequipo=".$_POST["idprocesador"]." and equipo.idequipo=".$_POST["idequipo"];
		$mysql=mysql_query($memoria2,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idubicacion"].'">'.$row["nombreubicacion"].'</option>';
		}
		}
		
		if($_POST["idequipo"] > 0)
		{
		$memoria1 = "select idubicacion,nombre  from ubicacion where idubicacion=".$_POST["idequipo"];
		$mysql=mysql_query($memoria1,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["iddiscoduro"].'">'.$row["nombre"].'</option>';
		}

		echo $opciones;
		}
		
	}	
?>