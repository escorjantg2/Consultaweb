<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
    <head> 
        <title>Consulta de Asistencias </title> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" /> 
        
<link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico"> 

        <style type="text/css" title="currentStyle"> 
            @import "DataTables-1.9.1/media/css/demo_page.css"; 
            @import "DataTables-1.9.1/media/css/demo_table_jui.css"; 
            @import "DataTables-1.9.1/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css"; 
            @import "DataTables-1.9.1/TableTools-2.0.0/media/css/TableTools.css"; 
            @import "DataTables-1.9.1/extras/ColVis/media/css/ColVis.css"; 
			
        </style> 
		<link href="ases.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/media/js/jquery.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/media/js/jquery.dataTables.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/TableTools-2.0.0/js/ZeroClipboard.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/TableTools-2.0.0/js/TableTools.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.1/extras/ColVis/media/js/ColVis.js"></script> 
        <script type="text/javascript" charset="utf-8"> 
/* Formating function for row details */
function fnFormatDetails ( oTable, nTr )
{
    var aData = oTable.fnGetData( nTr );
    var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
    sOut += '<tr><td>Alumno:</td><td>'+aData[1]+' '+aData[2]+' '+aData[3]+'</td></tr>';
    sOut += '<tr><td>Ciclo:</td><td>'+aData[4]+'</td></tr>';
    sOut += '<tr><td>Asignatura:</td><td>'+aData[5]+'</td></tr>';
    sOut += '<tr><td>Fecha:</td><td>'+aData[6]+'</td></tr>';
    sOut += '<tr><td>Descripcion:</td><td>'+aData[7]+'</td></tr>';
    sOut += '<tr><td>Nota:</td><td>'+aData[8]+'</td></tr>';
    sOut += '<tr><td>Observaciones:</td><td>'+aData[9]+'</td></tr>';
    sOut += '</table>';
     
    return sOut;
}
 
$(document).ready(function() {
    /*
     * Insert a 'details' column to the table
     */
    var nCloneTh = document.createElement( 'th' );
    var nCloneTd = document.createElement( 'td' );
    nCloneTd.innerHTML = '<img src="DataTables-1.9.1/examples/examples_support/details_open.png">';
    nCloneTd.className = "center";
     
    $('#example thead tr').each( function () {
        this.insertBefore( nCloneTh, this.childNodes[0] );
    } );
     
    $('#example tbody tr').each( function () {
        this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
    } );
     
    /*
     * Initialse DataTables, with no sorting on the 'details' column
     */
    var oTable = $('#example').dataTable( {
    "sDom":'fl<"H"r>t<"F"ip>',
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0 ] }
        ],
        "iDisplayLength":20,
                       "bJQueryUI": true, 
                    "sPaginationType": "full_numbers", 
        
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

"sInfoEmpty": "No hay resultados de búsqueda", 

"sZeroRecords": "No hay registros a mostrar", 

"sProcessing": "Espere, por favor...", 

"sSearch": "Buscar:", 

} ,
        "aaSorting": [[1, 'asc']]
    });
     
    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    $('#example tbody td img').live('click', function () {
        var nTr = $(this).parents('tr')[0];
        if ( oTable.fnIsOpen(nTr) )
        {
            /* This row is already open - close it */
            this.src = "DataTables-1.9.1/examples/examples_support/details_open.png";
            oTable.fnClose( nTr );
        }
        else
        {
            /* Open this row */
            this.src = "DataTables-1.9.1/examples/examples_support/details_close.png";
            oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
        }
    } );
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
} );

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
	height: 540px;
	width: 90%;
	overflow: auto;
	/*left: 5px;*/
	margin-left:5%;
	margin-right:5%;
} 
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
#apDiv1 {
	position:absolute;
	width:484px;
	height:67px;
	z-index:1;
	left: 523px;
	top: 231px;
}
#apDiv2 {
	position:absolute;
	width:144px;
	height:32px;
	z-index:1;
	left: 764px;
	top: 24px;
}
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
	height:67px;
	z-index:1;
	top: 175px;
	left: 467px;
}
#apDiv5 {
	position:absolute;
	width:484px;
	height:52px;
	z-index:2;
	left: 467px;
	top: 164px;
}
</style> 
<script>
function goBack(){
window.history.back();
}
</script>
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

if($_REQUEST['ciclo']==0)
{
echo ("<script>alert('Debes seleccionar un ciclo primero') </script>");
echo ("<script>goBack();</script>)");
exit;
}
else
{ 
?> 

<body id="dt_example">
 
<table width="100%" height="100%" border="0">
  <tr>
    <td height="98" align="center"><img src="img/insertarn.jpg" width="510" height="152" align="middle" /></td>
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
          <div id="apDiv5">
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

     <?php
	        //$i = 1; 
	   //if($_REQUEST["ciclo"] > 0 &&  $_REQUEST["asignatura"] > 0 && $_REQUEST["fecha"])
	 //{
	   //$alumnos="select a.nombre as nombrealumno, a.apellido1, a.apellido2, asig.nombre as nombreasignatura,c.nombre as nombreciclo,fecha,asis.falta, asis.tarde
//from alumnos a inner join ciclo c on a.ciclo_idciclo=c.idciclo inner join asistencia asis on a.idalumnos=asis.Alumnos_idalumnos inner join asignatura asig on asis.asignatura_idasignatura=asig.idasignatura
//where c.idciclo='".$_REQUEST["ciclo"]."' and asig.idasignatura='".$_REQUEST["asignatura"]."' and fecha='".$_REQUEST["fecha"]."'order by a.nombre";
		//}
		//else
		//{
		if($_REQUEST["ciclo"] > 0 &&  $_REQUEST["asignatura"] > 0)
		{
		$alumnos="select a.nombre as nombrealumno, 
a.apellido1, a.apellido2, 
asig.nombre as nombreasignatura,c.nombre as nombreciclo, 
n.fecha as fechaex, n.examen as tipoexamen,
n.nota as notas,n.observaciones as observacionesex
from alumnos a left join ciclo c on a.ciclo_idciclo=c.idciclo left join notas n on a.idalumnos=n.Alumnos_idalumnos left join asignatura asig on n.asignatura_idasignatura=asig.idasignatura
where c.idciclo='".$_REQUEST["ciclo"]."' and asig.idasignatura='".$_REQUEST["asignatura"]."' order by a.nombre";
		}
		//else
		//{
		//if($_REQUEST["ciclo"] > 0 &&  $_REQUEST["fecha"] > 0)
		//{
				//$alumnos="select a.nombre as nombrealumno, a.apellido1, a.apellido2, asig.nombre as nombreasignatura,c.nombre as //nombreciclo,fecha,asis.falta, asis.tarde
//from alumnos a inner join ciclo c on a.ciclo_idciclo=c.idciclo inner join asistencia asis on a.idalumnos=asis.Alumnos_idalumnos inner join asignatura asig on asis.asignatura_idasignatura=asig.idasignatura
//where c.idciclo='".$_REQUEST["ciclo"]."' and fecha='".$_REQUEST["fecha"]."' order by a.nombre";
		//}
		else
		{
		$alumnos="select a.idalumnos,a.nombre as nombrealumno, a.apellido1, a.apellido2, asig.nombre as nombreasignatura,c.nombre as nombreciclo, asig.idasignatura, c.idciclo
from alumnos a inner join ciclo c on a.ciclo_idciclo=c.idciclo inner join curso on c.idciclo=curso.ciclo_idciclo inner join asignatura asig on curso.asignatura_idasignatura=asig.idasignatura
where c.idciclo='".$_REQUEST["ciclo"]."' order by a.nombre";
				}
					
		//else
		//{
		//if($_REQUEST["ciclo"] > 0 &&  $_REQUEST["fecha"] > 0)
		//{
				//$alumnos="select a.nombre as nombrealumno, a.apellido1, a.apellido2, asig.nombre as nombreasignatura,c.nombre as //nombreciclo,fecha,asis.falta, asis.tarde
//from alumnos a inner join ciclo c on a.ciclo_idciclo=c.idciclo inner join asistencia asis on a.idalumnos=asis.Alumnos_idalumnos inner join asignatura asig on asis.asignatura_idasignatura=asig.idasignatura
//where c.idciclo='".$_REQUEST["ciclo"]."' and fecha='".$_REQUEST["fecha"]."' order by a.nombre";
		//}
		
			
		//}
	//}
		$i=0;
		$mysql=mysql_query($alumnos,$conexion);
       $total = mysql_num_rows($mysql); 
	          while ($row = mysql_fetch_array($mysql)) {
	   $idalumno[$i]=$row['idalumnos'];
	  // echo $idalumno[$i];
	   $idciclo[$i]=$row['idciclo'];
	  // echo $idciclo[$i];
	   $idasignatura[$i]=$row['idasignatura'];
	   //echo $idasignatura[$i];	   
	   //echo "<br>"; 
	    $fecha[$i]=$_REQUEST['fecha'];
	   $i++;
	   }
	   ?>
       <form name="insertarnotas" method="get" action="insertadon.php">
       <?php
	   // echo "<input type='checkbox' value='on' name='falta[]' />";?>
<!--<input type="submit" name="introducirasis" value="Enviar">-->
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
    <tbody><?php
			$mysql=mysql_query($alumnos,$conexion);
       $total = mysql_num_rows($mysql);?>
       <br>
			
	 	<!--<form name="insertarasistencias" method="post" action="insertado.php">--> <?php 
		$i=0;
       while ($row = mysql_fetch_array($mysql)) {
	 //  $array[$i]=$row['nombrealumno'];
	  // echo $array[1]; 
	  // echo $i;
              echo "<tr class='gradeC'>			   
            <td width='auto'>".$row['nombrealumno']."</td> 
            <td width='auto' class='center'>".$row['apellido1']."</td> 
            <td width='auto'>".$row['apellido2']."</td> 
            <td width='auto'>".$row['nombreciclo']."</td> 
            <td width='auto'>".$row['nombreasignatura']."</td>
			<td width='auto'>".$_REQUEST['fecha']."</td>";
			 
			 
			// $examen="tipoexamen".$i;
			 //echo $falta;
			// $notas="notas".$i;
			// $observaciones="observacionesex".$i;
            echo "<td align='center' width='auto'><input type='text' name='tipoexamen[$i]'/></td> 
			<td align='center' width='auto'><input size='5px'type='text' name='notas[]'/></td> 
			<td align='center' width='auto'><input type='text' name='observacionesex[$i]'/></td> 
            </tr>"; 
			//$alumno="alumno".$i;
			//$ciclo="ciclo".$i;
			//$asignatura="asignatura".$i;
			
			
			//echo "<input name='".$asignatura."' type='hidden' value='".$row['idasignatura']."'>";
			//echo "<input name='".$alumno."' type='text' value='".$row['idalumnos']."'>";
			//echo "<input name='".$ciclo."' type='hidden' value='".$row['idciclo']."'>";
			$i++;
       } 
	   ?><div id="apDiv2">
	 	  <input type="submit" name="introducirnotas" value="Enviar">
	 	</div>
</form><?php
       //echo 'Total: ' . $total; 
      ?> 
    </tbody> 
</table>
</div> 
</center>
</font> 
    </div> 
    <div class="spacer"></div> 
        </div> 
<?php 
	  $_SESSION['alumnoex'] = $idalumno;
	  $_SESSION['cicloex'] = $idciclo;
	  $_SESSION['asignaturaex'] = $idasignatura;
	  $_SESSION['fechaex'] = $fecha;
	  ?>	  
</body> 
<?php } ?>
</html>
