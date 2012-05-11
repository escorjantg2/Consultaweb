
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
<title>Consulta de componentes</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" /> 
        
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
color:#000000;
font-weight:bold;
font-family:Arial, Verdana, Geneva, sans-serif;
font-size:16px;
text-decoration:none;
}
ul#dropdownmenu li a:hover {
background:#FFFFFF;
color:#000000;
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
	width:803px;
	height:69px;
	z-index:1;
	left: 498px;
	top: 159px;
}
#apDiv5 {
	position:absolute;
	width:484px;
	height:52px;
	z-index:1;
	left: 479px;
	top: 168px;
}
</style> 

<script>
function goBack(){
window.history.back();
}
</script>
</head> 
<?php 
// Arriba est� el c�digo de lo que va en el archivo include a continuaci�n: 

$conexion= mysql_connect("192.168.0.106","fct","adminfct");
mysql_select_db("inventarioe",$conexion);


// Pasa la fecha a espanol llamar FechaEsp($row['campo']); 
 
if($_REQUEST['equipo']==0)
{
echo ("<script>alert('Debes seleccionar un equipo primero') </script>");
echo ("<script>goBack();</script>)");
exit;
}
else
{ 
?> 

    <body id="dt_example"> 
    <table width="100%" height="100%" border="0">
  <tr>
    <td height="98" align="center"><img src="img/consultare.jpg" width="510" height="152" align="middle" /></td>
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
          <div id="apDiv2">
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
 
   <div id="demo"><font size=1><center>
       <div id="main_table_area">    <br>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" class="data_table"> 
<thead> 
        <tr> 
            <th width="auto">Equipo</th> 
            <th width="auto">Procesador</th> 
            <th width="auto">Memoria</th> 
            <th width="auto">Disco Duro</th>
    		<th width="auto">Grafica</th>
            <th width="auto">Placa base</th>   
            <th width="auto">Lector CD/DVD</th>
            <th width="auto">S.Operativo</th>  
            <th width="auto">Tarjeta de red</th>
            <th width="auto">Ubicacion</th>
   <!-- esto son la cantidad de columnas que tendra el grid         <th width="auto">Titulo 7</th> -->
        </tr> 
    </thead> 
    <tbody> 
     <?php 	 
	 if($_REQUEST["memoria"] > 0 &&  $_REQUEST["equipo"] > 0 && $_REQUEST["procesador"] >0 &&  $_REQUEST["discoduro"] > 0 &&  $_REQUEST["ubicacion"] >0)
	 {
	   $equipos="select m.nombre as nombrememoria, e.nombre as nombreequipo, p.nombre as nombreprocesador, d.nombre as nombrediscoduro,u.nombre as nombreubicacion,r.nombre as nombretarjetared, sis.nombre as nombresistema, pb.modelo as modeloplacabase, gr.nombre as nombregrafica, l.nombre as nombrelector
from equipo e left join gestionmemoria gmem on e.idequipo=gmem.idequipo left join memoria m on gmem.idmemoria=m.idmemoria left join procesador p on e.idprocesador=p.idprocesador left join gestion g on e.idequipo=g.idequipo left join discoduro d on g.iddiscoduro=d.iddiscoduro left join grafica gr on e.idgrafica=gr.idgrafica left join placabase pb on e.idplacabase=pb.idplacabase left join lector l on e.idlector=l.idlector left join sistemaoperativo sis on e.idsistemaoperativo=sis.idsistemaoperativo left join tarjetared r on e.idtarjetared=r.idtarjetared left join ubicacion u on e.idubicacion=u.idubicacion
where e.idequipo='".$_REQUEST["equipo"]."' and m.idmemoria='".$_REQUEST["memoria"]."' and p.idprocesador='".$_REQUEST["procesador"]."' and d.iddiscoduro='".$_REQUEST["discoduro"]."' and u.idubicacion='".$_REQUEST["ubicacion"]."' order by e.nombre";
	}	
	else
	{
		if($_REQUEST["memoria"] > 0 &&  $_REQUEST["equipo"] > 0 &&  $_REQUEST["discoduro"] > 0 &&  $_REQUEST["ubicacion"] >0)
		{
		$equipos="select m.nombre as nombrememoria, e.nombre as nombreequipo, p.nombre as nombreprocesador, d.nombre as nombrediscoduro,u.nombre as nombreubicacion,r.nombre as nombretarjetared, sis.nombre as nombresistema, pb.modelo as modeloplacabase, gr.nombre as nombregrafica, l.nombre as nombrelector
from equipo e left join gestionmemoria gmem on e.idequipo=gmem.idequipo left join memoria m on gmem.idmemoria=m.idmemoria left join procesador p on e.idprocesador=p.idprocesador left join gestion g on e.idequipo=g.idequipo left join discoduro d on g.iddiscoduro=d.iddiscoduro left join grafica gr on e.idgrafica=gr.idgrafica left join placabase pb on e.idplacabase=pb.idplacabase left join lector l on e.idlector=l.idlector left join sistemaoperativo sis on e.idsistemaoperativo=sis.idsistemaoperativo left join tarjetared r on e.idtarjetared=r.idtarjetared left join ubicacion u on e.idubicacion=u.idubicacion
where e.idequipo='".$_REQUEST["equipo"]."' and m.idmemoria='".$_REQUEST["memoria"]."' and d.iddiscoduro='".$_REQUEST["discoduro"]."' and u.idubicacion='".$_REQUEST["ubicacion"]."' order by e.nombre";
		}
		else
		{
		if($_REQUEST["equipo"] > 0 &&  $_REQUEST["procesador"] > 0 &&  $_REQUEST["discoduro"] > 0 &&  $_REQUEST["ubicacion"] > 0)
		{
		$equipos="select m.nombre as nombrememoria, e.nombre as nombreequipo, p.nombre as nombreprocesador, d.nombre as nombrediscoduro,u.nombre as nombreubicacion,r.nombre as nombretarjetared, sis.nombre as nombresistema, pb.modelo as modeloplacabase, gr.nombre as nombregrafica, l.nombre as nombrelector
from equipo e left join gestionmemoria gmem on e.idequipo=gmem.idequipo left join memoria m on gmem.idmemoria=m.idmemoria left join procesador p on e.idprocesador=p.idprocesador left join gestion g on e.idequipo=g.idequipo left join discoduro d on g.iddiscoduro=d.iddiscoduro left join grafica gr on e.idgrafica=gr.idgrafica left join placabase pb on e.idplacabase=pb.idplacabase left join lector l on e.idlector=l.idlector left join sistemaoperativo sis on e.idsistemaoperativo=sis.idsistemaoperativo left join tarjetared r on e.idtarjetared=r.idtarjetared left join ubicacion u on e.idubicacion=u.idubicacion
where e.idequipo='".$_REQUEST["equipo"]."' and p.idprocesador='".$_REQUEST["procesador"]."' and d.iddiscoduro='".$_REQUEST["discoduro"]."' and u.idubicacion='".$_REQUEST["ubicacion"]."' order by e.nombre";
		}
		else
		{
		if($_REQUEST["equipo"] > 0 &&  $_REQUEST["procesador"] > 0 &&  $_REQUEST["memoria"] > 0 &&  $_REQUEST["ubicacion"] >0)
		{
		$equipos="select m.nombre as nombrememoria, e.nombre as nombreequipo, p.nombre as nombreprocesador, d.nombre as nombrediscoduro,u.nombre as nombreubicacion,r.nombre as nombretarjetared, sis.nombre as nombresistema, pb.modelo as modeloplacabase, gr.nombre as nombregrafica, l.nombre as nombrelector
from equipo e left join gestionmemoria gmem on e.idequipo=gmem.idequipo left join memoria m on gmem.idmemoria=m.idmemoria left join procesador p on e.idprocesador=p.idprocesador left join gestion g on e.idequipo=g.idequipo left join discoduro d on g.iddiscoduro=d.iddiscoduro left join grafica gr on e.idgrafica=gr.idgrafica left join placabase pb on e.idplacabase=pb.idplacabase left join lector l on e.idlector=l.idlector left join sistemaoperativo sis on e.idsistemaoperativo=sis.idsistemaoperativo left join tarjetared r on e.idtarjetared=r.idtarjetared left join ubicacion u on e.idubicacion=u.idubicacion
where e.idequipo='".$_REQUEST["equipo"]."' and p.idprocesador='".$_REQUEST["procesador"]."' and m.idmemoria='".$_REQUEST["memoria"]."' and u.idubicacion='".$_REQUEST["ubicacion"]."' order by e.nombre";
		}
		else
		{
		if($_REQUEST["equipo"] > 0 &&  $_REQUEST["procesador"] > 0 &&  $_REQUEST["memoria"] > 0 &&  $_REQUEST["discoduro"] >0)
		{
		$equipos="select m.nombre as nombrememoria, e.nombre as nombreequipo, p.nombre as nombreprocesador, d.nombre as nombrediscoduro,u.nombre as nombreubicacion,r.nombre as nombretarjetared, sis.nombre as nombresistema, pb.modelo as modeloplacabase, gr.nombre as nombregrafica, l.nombre as nombrelector
from equipo e left join gestionmemoria gmem on e.idequipo=gmem.idequipo left join memoria m on gmem.idmemoria=m.idmemoria left join procesador p on e.idprocesador=p.idprocesador left join gestion g on e.idequipo=g.idequipo left join discoduro d on g.iddiscoduro=d.iddiscoduro left join grafica gr on e.idgrafica=gr.idgrafica left join placabase pb on e.idplacabase=pb.idplacabase left join lector l on e.idlector=l.idlector left join sistemaoperativo sis on e.idsistemaoperativo=sis.idsistemaoperativo left join tarjetared r on e.idtarjetared=r.idtarjetared left join ubicacion u on e.idubicacion=u.idubicacion
where e.idequipo='".$_REQUEST["equipo"]."' and p.idprocesador='".$_REQUEST["procesador"]."' and m.idmemoria='".$_REQUEST["memoria"]."' and u.iddiscoduro='".$_REQUEST["discoduro"]."' order by e.nombre";
		}
		else
		{
		$equipos="select m.nombre as nombrememoria, e.nombre as nombreequipo, p.nombre as nombreprocesador, d.nombre as nombrediscoduro,u.nombre as nombreubicacion,r.nombre as nombretarjetared, sis.nombre as nombresistema, pb.modelo as modeloplacabase, gr.nombre as nombregrafica, l.nombre as nombrelector
from equipo e left join gestionmemoria gmem on e.idequipo=gmem.idequipo left join memoria m on gmem.idmemoria=m.idmemoria left join procesador p on e.idprocesador=p.idprocesador left join gestion g on e.idequipo=g.idequipo left join discoduro d on g.iddiscoduro=d.iddiscoduro left join grafica gr on e.idgrafica=gr.idgrafica left join placabase pb on e.idplacabase=pb.idplacabase left join lector l on e.idlector=l.idlector left join sistemaoperativo sis on e.idsistemaoperativo=sis.idsistemaoperativo left join tarjetared r on e.idtarjetared=r.idtarjetared left join ubicacion u on e.idubicacion=u.idubicacion
where e.idequipo='".$_REQUEST["equipo"]."' order by e.nombre";

		}
		}
	}
	}
	}
	
	

		$mysql=mysql_query($equipos,$conexion);
       $total = mysql_num_rows($mysql); 
	   $i=1;
	      while ($row = mysql_fetch_array($mysql)) {       
               echo "<tr class='gradeC'> 
            <td width='auto'>".$row['nombreequipo']."</td> 
            <td width='auto' class='center'>".$row['nombreprocesador']."</td> 
            <td width='auto'>".$row['nombrememoria']."</td> 
            <td width='auto'>".$row['nombrediscoduro']."</td> 
            <td width='auto'>".$row['nombregrafica']."</td> 
			<td width='auto'>".$row['modeloplacabase']."</td> 
            <td width='auto'>".$row['nombrelector']."</td> 
			<td width='auto'>".$row['nombresistema']."</td> 
			<td width='auto'>".$row['nombretarjetared']."</td>
			<td width='auto'>".$row['nombreubicacion']."</td>
            </tr>"; 
		 $i++;
	   }
      ?> 
    </tbody> 
</table> 
</div> 
</center>
</font> 
    </div> 
    <div class="spacer"></div> 
        </div> 
    </body> 
    <?php } ?>
</html>