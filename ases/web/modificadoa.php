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

"sInfoEmpty": "No hay resultados de bďż˝squeda", 

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
</style> 

    </head> 
    <body>
<?php 
// Arriba estĂĄ el cĂłdigo de lo que va en el archivo include a continuaciĂłn: 

$conexion= mysql_connect("192.168.0.106","fct","adminfct");
mysql_select_db("mydb",$conexion);
?>
<?php
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
$p=0;
//echo count($_SESSION['alumno']);
while ($p<count($_SESSION['alumnoju'])) {
if(isset($_POST['falta'][$j]))
{
}
else
{
$_POST['falta'][$j]="off";
}
if(isset($_POST['retraso'][$j]))
{
}
else
{
$_POST['retraso'][$j]="off";
}
if(isset($_POST['Justificado'][$j]))
{
}
else
{
$_POST['Justificado'][$j]="off";
}
if($_POST['falta'][$j]=="on" && $_POST['Justificado'][$j]=="on")
{
$updatef = "UPDATE asistencia SET Alumnos_idalumnos=".$_SESSION['alumnoju'][$p].",asignatura_idasignatura=".$_SESSION['asignaturaju'][$p].",fecha='".$_SESSION['fechaju'][$p]."',falta='Si',Justificado='Si', tarde='No' where idasistencia='".$_SESSION['idasisju'][$p]."'";
$ejecupf = mysql_query($updatef,$conexion);
echo $updatef; echo "<br>";
}
else
{
if($_POST['falta'][$p]=="on")
{
$updatef2 = "UPDATE asistencia SET Alumnos_idalumnos=".$_SESSION['alumnoju'][$p].",asignatura_idasignatura=".$_SESSION['asignaturaju'][$p].",fecha='".$_SESSION['fechaju'][$p]."',falta='Si',Justificado='No', tarde='No' where idasistencia='".$_SESSION['idasisju'][$j]."'";
$ejecupf2 = mysql_query($updatef2,$conexion);
echo $updatef2; echo "<br>";
}
}
if($_POST['retraso'][$p]=="on" && $_POST['Justificado'][$p]=="on")
{
$updater = "UPDATE asistencia SET Alumnos_idalumnos=".$_SESSION['alumnoju'][$p].",asignatura_idasignatura=".$_SESSION['asignaturaju'][$p].",fecha='".$_SESSION['fechaju'][$p]."',falta='No',Justificado='Si', tarde='Si' where idasistencia='".$_SESSION['idasisju'][$j]."'";
$ejecupr = mysql_query($updater,$conexion);
echo $updater; echo "<br>";
}
else
{
if($_POST['retraso'][$p]=="on")
{
$updater2 = "UPDATE asistencia SET Alumnos_idalumnos=".$_SESSION['alumnoju'][$p].",asignatura_idasignatura=".$_SESSION['asignaturaju'][$p].",fecha='".$_SESSION['fechaju'][$p]."',falta='No',Justificado='No', tarde='Si' where idasistencia='".$_SESSION['idasisju'][$j]."'";
$ejecupr2 = mysql_query($updater2,$conexion);
echo $updater2; echo "<br>";
}
}
if($_POST['falta'][$p]=="off" && $_POST['retraso'][$p]=="off" && $_POST['Justificado'][$p]=="off")
{
$updated = "UPDATE asistencia SET Alumnos_idalumnos=".$_SESSION['alumnoju'][$p].",asignatura_idasignatura=".$_SESSION['asignaturaju'][$p].",fecha='".$_SESSION['fechaju'][$p]."',falta='No',Justificado='No', tarde='No' where idasistencia='".$_SESSION['idasisju'][$j]."'";
$ejecupd = mysql_query($updated,$conexion);
echo $updated; echo "<br>";
}
$p++;
$j++;
}
?>
 </body>
</html>