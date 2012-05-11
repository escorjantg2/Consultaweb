<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
    <head> 
        <title>Consulta de Asistencias </title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        
<link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico"> 

        <style type="text/css" title="currentStyle"> 
            @import "DataTables-1.9.1/media/css/demo_page.css"; 
            @import "DataTables-1.9.1/media/css/demo_table_jui.css"; 
            @import "DataTables-1.9.1/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css"; 
            @import "DataTables-1.9.1/TableTools-2.0.3/media/css/TableTools.css"; 
            @import "DataTables-1.9.1/extras/ColVis/media/css/ColVis.css"; 
			
        </style> 
		<link href="ases.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/media/js/jquery.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/media/js/jquery.dataTables.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/TableTools-2.0.3/media/js/ZeroClipboard.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/TableTools-2.0.3/media/js/TableTools.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/extras/ColVis/media/js/ColVis.js"></script> 
        <script type="text/javascript" charset="utf-8"> 
var asInitVals = new Array(); 

    $(document).ready(function() { 
                    $('#example').dataTable({ 
                    	"iDisplayLength":20,
                       "bJQueryUI": true, 
                    "sPaginationType": "full_numbers", 
                    "sDom": 'Tf<"H"r>t<"F"ip>',/*  la T son los botones */
		"oTableTools": {
		"sSwfPath": "DataTables-1.9.1/TableTools-2.0.3/media/swf/copy_csv_xls_pdf.swf",
			"aButtons": [
				"copy", "csv", "xls", "pdf",
				
			]
		},
		
                    "fnInitComplete": function () { 
                        var 
                            that = this, 
                            nTrs = this.fnGetNodes(); 
                        $('td', nTr).click( function () { 
                            that.fnFilter( this.innerHTML ); 
                        } ); 
                    }, 
                    "oLanguage": { 
"oPaginate": { 
"sPrevious": "Anterior", 
"sNext": "Siguiente", 
"sLast": "Ultima", 
"sFirst": "Primera" 
}, 

"sLengthMenu": 'Mostrar <select>'+ 
'<option value="10">10</option>'+ 
'<option value="20">20</option>'+ 
'<option value="30">30</option>'+ 
'<option value="40">40</option>'+ 
'<option value="50">50</option>'+ 
'<option value="-1">Todos</option>'+ 
'</select> registros', 

"sInfo": "Mostrando del _START_ a _END_ (Total: _TOTAL_ resultados)", 

"sInfoFiltered": " - filtrados de _MAX_ registros", 

"sInfoEmpty": "No hay resultados de b�squeda", 

"sZeroRecords": "No hay registros a mostrar", 

"sProcessing": "Espere, por favor...", 

"sSearch": "Buscar:", 

} 
                }); 

    $("tfoot input").keyup( function () { 
        /* Filter on the column (the index) of this element */ 
        oTable.fnFilter( this.value, $("tfoot input").index(this) ); 
    } ); 


    /* 
     * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
     * the footer 
     */ 
    $("tfoot input").each( function (i) { 
        asInitVals[i] = this.value; 
    } ); 

    $("tfoot input").focus( function () { 
        if ( this.className == "search_init" ) 
        { 
            this.className = ""; 

            this.value = ""; 
        } 
    } ); 

    $("tfoot input").blur( function (i) { 
        if ( this.value == "" ) 
        { 
            this.className = "search_init"; 
            this.value = asInitVals[$("tfoot input").index(this)]; 
        } 
    } ); 
            });  // Termina document.ready 
        </script> 
        <script language="JavaScript" type="text/javascript">
function ventana(){
var ventana = window.open("observaciones.php","Observacion","Width=771,Height=571,scrollbars=yes");
}
</script>
<style> 
.data_table { 
font-family: helvetica; 
font-size: 1px; 
} 
#top_of_page { 
position: absolute; 
} 
#main_table_area {
	position:absolute;
	top: 212px;
	height: 700px;
	width: 90%;
	overflow: auto;
	/*left: 5px; */
	margin-left:5%;
	margin-right:5%;
} 
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
color:#FFF;
font-family:Arial, Verdana, Geneva, sans-serif;
font-size:16px;
text-decoration:none;
}
ul#dropdownmenu li a:hover {
background:#3366CC;
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
background: url(img/cabeceragif.gif) no-repeat;
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
	height:52px;
	z-index:1;
	left: 467px;
	top: 166px;
}
</style> 
    </head>
<?php 
// Arriba está el código de lo que va en el archivo include a continuación: 

$conexion= mysql_connect("192.168.0.106","fct","adminfct");
mysql_select_db("mydb",$conexion);


// Pasa la fecha a espanol llamar FechaEsp($row['campo']); 
  function FechaESP ($fecha) { 
if ($fecha != '') { 
$data=explode("-",$fecha); 
$retfecha = substr($data[2],0,2).'/'.$data[1].'/'.$data[0]; 
return $retfecha; 
} else { 
$retfecha = ''; 
} 
} 
$j=0;
$q=0;
//echo count($_SESSION['alumno']);
while ($j<count($_SESSION['alumno'])) {
//echo $_SESSION['alumno'][$j]; 
//echo $_SESSION['asignatura'][$j];
//echo $_SESSION['ciclo'][$j];
//echo $_SESSION['fecha'][$j]; echo "</br>";
if($_REQUEST['notas'][$j]=='')
{
}
else{
$insex = "INSERT into notas(Alumnos_idalumnos,asignatura_idasignatura,fecha,examen,nota,observaciones)
values ('".$_SESSION['alumnoex'][$j]."','".$_SESSION['asignaturaex'][$j]."','".$_SESSION['fechaex'][$j]."','".$_REQUEST['tipoexamen'][$j]."','".$_REQUEST['notas'][$j]."','".$_REQUEST['observacionesex'][$j]."')";
$ejecex = mysql_query($insex,$conexion);
//echo $_SESSION['alumnoex'][$j];
//$insex = "INSERT into notas(Alumnos_idalumnos,asignatura_idasignatura,fecha,examen,nota,observaciones)
//values (".$_SESSION['alumnoex'][$j].",".$_SESSION['asignaturaex'][$j].",'".$_SESSION['fechaex'][$j]."','".$_REQUEST['tipoexamen'][$j]."','".$_REQUEST['notas'][$j]."','".$_REQUEST['observacionesex'][$j]."')";
$q++;

//echo $j;
//echo $_SESSION['tipoexamen'][$j];
//echo $_SESSION['notas'][$j];
//echo $_SESSION['observacionesex'][$j];
}
$j++;
}

/*$insertando = "INSERT INTO asistencia (Alumnos_idalumnos,asignatura_idasignatura,fecha,tarde,falta) values (""); ";
		$mysql=mysql_query($insertando,$conexion);
		while($row=mysql_fetch_array($mysql))*/
//$row = array($_REQUEST['apellido1'],$_REQUEST['apellido2']);
//$alumno=$_POST['alumno'];
//$i=0;

//while ($i < count ($alumno) ) {
//	$alumno=$_POST['alumno'];
//    print "$alumno[$i]";
//    print '<br />';
 //   $i++;
//}
?> 

<body id="dt_example">
<table width="100%" height="100%" border="0">
  <tr>
    <td height="98" align="center"><img src="img/insertadon.jpg" width="510" height="152" align="middle" /></td>
  </tr>
  <tr>
    <td valign="top" align="center">
    <table width="101%" height="52" border="0" background="img/cabeceragif.gif">
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
<a href="#">Asistencias</a>
<ul>
<li><a href="moda.php">Insertar asistencias</a></li>
<li><a href="consultaa.php">Consultar asistencias</a></li>
<li><a href="modia.php">Modificar asistencias</a></li>
</ul>
</li>
<li>
  <div align="left"><a href="#">Notas</a>
    <ul>
      <li><a href="modn.php">Insertar notas</a></li>
      <li><a href="consultan.php">Consultar notas</a></li>
      <li><a href="modin.php">Modificar notas</a></li>
    </ul>
  </div>
</li>
</ul></div></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
 <div id="demo"><font size=1><center>
       <div id="main_table_area"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" class="data_table"> 
<thead> 
        <tr> 
            <th width="auto">Nombre</th> 
            <th width="auto">Apellido 1</th> 
            <th width="auto">Apellido 2</th> 
            <th width="auto">Ciclo</th>
    		<th width="auto">Asignatura</th>
            <th width="auto">Fecha</th>   
            <th width="auto">Descripcion del examen</th>
            <th width="auto">Notas</th>  
            <th width="auto">Observaciones</th>
   <!-- esto son la cantidad de columnas que tendra el grid         <th width="auto">Titulo 7</th> -->
        </tr> 
    </thead> 
    <tbody> 
    <?php 
$grid="select a.nombre as nombrealumno, 
a.apellido1, a.apellido2, 
asig.nombre as nombreasignatura,c.nombre as nombreciclo, 
n.fecha as fechaex, n.examen as tipoexamen,
n.nota as notas,n.observaciones as observacionesex
from alumnos a left join ciclo c on a.ciclo_idciclo=c.idciclo left join notas n on a.idalumnos=n.Alumnos_idalumnos left join asignatura asig on n.asignatura_idasignatura=asig.idasignatura
order by n.idnotas  desc limit ".$q."";
$mysql=mysql_query($grid,$conexion);
echo "<br>";
	   $i=0;
       while ($row = mysql_fetch_array($mysql)) { 
                         if($row['observacionesex']==NULL){
	           
               echo "<tr class='gradeC'> 
            <td width='auto'>".$row['nombrealumno']."</td> 
            <td width='auto' class='center'>".$row['apellido1']."</td> 
            <td width='auto'>".$row['apellido2']."</td> 
            <td width='auto'>".$row['nombreciclo']."</td> 
            <td width='auto'>".$row['nombreasignatura']."</td> 
			<td width='auto'>".$row['fechaex']."</td> 
            <td width='auto'>".$row['tipoexamen']."</td> 
			<td width='auto'>".$row['notas']."</td> 
			<td width='auto'></td>
            </tr>"; 
       } 
	   else{ 
               echo "<tr class='gradeC'> 
            <td width='auto'>".$row['nombrealumno']."</td> 
            <td width='auto' class='center'>".$row['apellido1']."</td> 
            <td width='auto'>".$row['apellido2']."</td> 
            <td width='auto'>".$row['nombreciclo']."</td> 
            <td width='auto'>".$row['nombreasignatura']."</td> 
			<td width='auto'>".$row['fechaex']."</td> 
            <td width='auto'>".$row['tipoexamen']."</td> 
			<td width='auto'>".$row['notas']."</td> 
			<td width='auto'><form name='observacion' action='observaciones.php'method='post' target='_blank' align='center'><input type='hidden' name='observacion' value='".$row['observacionesex']."'/><input type='submit' name='enviarex' value='Ver'/></form></td>
            </tr>"; 
       }	
       $i++;
       } ?>
       </tbody> 
</table> 
</div> 
</center>
</font> 
    </div> 
    <div class="spacer"></div> 
        </div> 
</body>
</html>
