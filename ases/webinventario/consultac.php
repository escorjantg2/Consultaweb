
<?php

$conexion= mysql_connect("192.168.0.106","fct","adminfct");
mysql_select_db("inventarioe",$conexion);
?>
<?php

	$equipo="select * from equipo";
	$mysql=mysql_query($equipo,$conexion);
	$opciones = '<option value="0"> Elige equipo</option>';
	while($row=mysql_fetch_array($mysql))
	{
		$opciones.='<option value="'.$row["idequipo"].'">'.$row["nombre"].'</option>';
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Consulta de componentes</title>
		<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#equipo").change(function(){
					$.ajax({
						url:"procesacomp.php",
						type: "POST",
						data:"idequipo="+$("#equipo").val(),
						success: function(opciones){
							$("#procesador").html(opciones);
						}
					})
				});
			});
		</script>
        	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#equipo").change(function(){
					$.ajax({
						url:"procesacomp2.php",
						type: "POST",
						data:"idequipo="+$("#equipo").val(),
						success: function(opciones){
							$("#memoria").html(opciones);
						}
					})
				});
			});
		</script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#equipo").change(function(){
					$.ajax({
						url:"procesacomp3.php",
						type: "POST",
						data:"idequipo="+$("#equipo").val(),
						success: function(opciones){
							$("#discoduro").html(opciones);
						}
					})
				});
			});
		</script>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#equipo").change(function(){
					$.ajax({
						url:"procesacomp4.php",
						type: "POST",
						data:"idequipo="+$("#equipo").val(),
						success: function(opciones){
							$("#ubicacion").html(opciones);
						}
					})
				});
			});
		</script>-->
        <link href="ases.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
body {
	background-image: url(img/background.gif);
	background-repeat: repeat;
}
<!--aqui empieza css del menu-->
body, ul, li {
margin:0;
padding:0;
margin-left:auto;
margin-right:auto;
}
ul {
list-style:none;
display:inline-block;


}
ul li {
float:left;



}
ul#dropdownmenu {
margin:none;
list-style:none;
height:40px;
width:100%;
background: url(img/cabeceragif.gif) no-repeat;
vertical-align: middle;

}
ul#dropdownmenu li {
height:40px;
}
ul#dropdownmenu li a {
display:block;
padding:8px;
height:24px;
color:#000000;
font-weight:bold;
font-family:Arial, Verdana, Geneva, sans-serif;
font-size:16px;
text-decoration:none;
}
ul#dropdownmenu li a:hover {
background:#FFFFFF;
}
ul#dropdownmenu li ul {
display:none;
}
ul#dropdownmenu li:hover ul {
display:block;
background:#999;
position:absolute;
}
ul#dropdownmenu li:hover ul li {
float:none;
position:relative;
background:#CCCCCC;
}
ul#dropdownmenu li ul li ul, ul#dropdownmenu li:hover ul li ul {
display:none;
}
ul#dropdownmenu li:hover ul li:hover ul {
display:block;
top:0;

}
#apDiv3 {
	position:relative;
	width:91%;
	height:79px;
	z-index:99;
	margin-left:5%;
	margin-right:5%;
	
}
#apDiv4 {
	position:absolute;
	width:236px;
	height:115px;
	z-index:100;
	left: 51px;
	top: 382px;
}
#apDiv1 {
	position:absolute;
	width:484px;
	height:69px;
	z-index:1;
	left: 498px;
	top: 168px;
}
#apDiv2 {
	position:absolute;
	width:280px;
	height:56px;
	z-index:1;
	left: 14px;
	top: 171px;
}
#apDiv5 {
	position:absolute;
	width:484px;
	height:52px;
	z-index:1;
	left: 479px;
	top: 168px;
}
-->
</style></head>
    <body>
        <table width="100%" height="100%" border="0">
  <tr>
    <td height="98" align="center"><img src="img/consultarc.jpg" width="510" height="152" align="middle" /></td>
  </tr>
  <tr>
    <td valign="top" align="center">
    <table width="100%" height="52" border="0" background="img/cabeceragif.gif">
      <tr>
        <td>
          <!--<table width="70%" border="0" align="center">
            <tr>
             <td width="91"  align="left"><a href="index.html" class="subrayado">Portada</a>&nbsp;&nbsp;</td>
              <td width="144"  align="left"><a href="consultaa.php" class="subrayado">Consulta de asistencia</a></td>
              <td width="128"  align="left"><a href="moda.php" class="subrayado">Insertar asistencia</a></td>
              <td width="112"  align="left"><a href="modia.php" class="subrayado">Modificar asistencia</a></td>
              <td width="119"  align="left"><a href="consultan.php" class="subrayado">Consulta de notas</a></td>
              <td width="112"  align="left"><a href="modn.php" class="subrayado">Insertar notas</a></td>
              <td width="112"  align="left"><a href="modin.php" class="subrayado">Modificar notas</a></td>
             
            </tr>
          </table>-->
          <div id="apDiv1">
          <ul id="dropdownmenu">
<li><a href="index.html">Portada</a></li>
<li>
<a href="#">Componentes</a>
<ul>
<li><a href="consultac.php">Consultar</a></li>
<li><a href="#">Insertar</a></li>
<li><a href="#">Modificar</a></li>
</ul>
</li>
<li>
  <div align="left"><a href="#">Equipos</a>
    <ul>
<li><a href="consultae.php">Consultar</a></li>
<li><a href="#">Insertar</a></li>
<li><a href="#">Modificar</a></li>
    </ul>
  </div>
</li>
</ul></div></td>
        </tr>
      </table>
      </td>
      </tr>
    </table>
      </td>
      </tr>
      <tr>
      <td>
      <div >
       <form  name="consultac" method="post" action="resultcomp1.php">
   			 <fieldset id="quequieresconsultar">
    		<legend align="center">
    		¿Que componente quieres consultar?
    		</legend>
		 <div align="center"><label> Componentes:</label> <select name="equipo" id="equipo"><?php echo $opciones; ?></select>  
		
		<!--<label> Procesador:</label>
		<select name="procesador" id="procesador">
		<option value="0">Elige un equipo primero</option>
		</select>
		<label> Memoria:</label>
		<select name="memoria" id="memoria">
		<option value="0">Elige un equipo primero</option>
		</select>
         <div align="center">
        <label> Disco duro:</label>
		<select name="discoduro" id="discoduro">
		<option value="0">Elige un equipo primero</option>
		</select>
        <label> Ubicacion:</label>
		<select name="ubicacion" id="ubicacion">
		<option value="0">Elige un equipo primero</option>
		</select>
        </div>-->
            <input type="submit" value="Consulta Componente" name="consulta1"/>
         </div></fieldset></form>
            </div>
            </div>
    </body>
</html>