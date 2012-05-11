<?php
if(isset($_POST["idequipo"]))
	{
		$conexion= mysql_connect("192.168.0.106","fct","adminfct");
		mysql_select_db("inventarioe",$conexion);
		$opciones = '<option value="0"> Elige un procesador</option>';
		$procesador = "select procesador.idprocesador,procesador.nombre from procesador inner join equipo on procesador.idprocesador=equipo.idprocesador where idequipo=".$_POST["idequipo"];
		$mysql=mysql_query($procesador,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idprocesador"].'">'.$row["nombre"].'</option>';
		}

		echo $opciones;
	}
?>