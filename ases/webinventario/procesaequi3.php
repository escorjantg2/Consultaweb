<?php
if(isset($_POST["idequipo"]))
	{
		$conexion= mysql_connect("192.168.0.106","fct","adminfct");
		mysql_select_db("inventarioe",$conexion);
		$opciones = '<option value="0"> Elige un disco duro</option>';
		if($_POST["idequipo"] > 0 && $_POST["idprocesador"] > 0)
		{
		$memoria2 = "select discoduro.iddiscoduro,discoduro.nombre as nombrediscoduro from discoduro inner join gestion g on discoduro.iddiscoduro=g.iddiscoduro inner join equipo on g.idequipo=equipo.idequipo inner join procesador on equipo.idprocesador=procesador.idprocesador where equipo.idequipo=".$_POST["idprocesador"]." and equipo.idequipo=".$_POST["idequipo"];
		$mysql=mysql_query($memoria2,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["iddiscoduro"].'">'.$row["nombrediscoduro"].'</option>';
		}
		}
		
		if($_POST["idequipo"] > 0)
		{
		$memoria1 = "select iddiscoduro,nombre  from discoduro where iddiscoduro=".$_POST["idequipo"];
		$mysql=mysql_query($memoria1,$conexion);
		while($row=mysql_fetch_array($mysql))
		{
			$opciones.='<option value="'.$row["iddiscoduro"].'">'.$row["nombre"].'</option>';
		}

		echo $opciones;
		}
		
	}	
?>
