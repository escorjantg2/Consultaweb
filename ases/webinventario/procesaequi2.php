<?php
if(isset($_POST["idequipo"]))
	{
		$conexion= mysql_connect("192.168.0.106","fct","adminfct");
		mysql_select_db("inventarioe",$conexion);
		$opciones = '<option value="0"> Elige una memoria</option>';
		if($_POST["idequipo"] > 0 && $_POST["idprocesador"] > 0)
		{
		$memoria2 = "select memoria.idmemoria,memoria.nombre as nombrememoria from memoria inner join gestionmemoria gmem on memoria.idmemoria=gmem.idmemoria inner join equipo on gmem.idequipo=equipo.idequipo inner join procesador on equipo.idprocesador=procesador.idprocesador where equipo.idequipo=".$_POST["idprocesador"]." and equipo.idequipo=".$_POST["idequipo"];
		$mysql=mysql_query($memoria2,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idmemoria"].'">'.$row["nombrememoria"].'</option>';
		}
		}
		
		if($_POST["idequipo"] > 0)
		{
		$memoria1 = "select idmemoria,nombre  from memoria where idmemoria=".$_POST["idequipo"];
		$mysql=mysql_query($memoria1,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["idmemoria"].'">'.$row["nombre"].'</option>';
		}

		echo $opciones;
		}
		
	}

	
?>