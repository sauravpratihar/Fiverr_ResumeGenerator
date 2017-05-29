<?php
// require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
require_once 'vendor/autoload.php';

\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;


//$total = $_REQUEST[cantn] * $_REQUEST[precio];


$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("presi",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into vales(dpto,rsp,cantn,imp,precio,uni,placas,placas2) values ('$_REQUEST[dpto]','$_REQUEST[rsp]','$_REQUEST[cantn]','$_REQUEST[imp]','$total','$_REQUEST[uni]','$_REQUEST[placas]','$_REQUEST[placas2]')", $conexion) or
  die("Problemas en el select".mysql_error());
mysql_close($conexion);

$templateWord = new TemplateProcessor('dummy.docx');

//$nombre = $_REQUEST['nombre'];
$folio = $_GET['id'];
$departamento = $_REQUEST['dpto'];
$responsable = $_REQUEST['rsp'];
$dia = $_REQUEST['dia'];
$mes = $_REQUEST['mes'];
$year = $_REQUEST['year'];
$cantn = $_REQUEST['cantn'];
$cantl = $_REQUEST['cantl'];
//$articulo = $_REQUEST['articulo'];
$importe = $_REQUEST['imp'];
$unidad = $_REQUEST['uni'];
$placas = $_REQUEST['placas'];


// --- Asignamos valores a la plantilla
//$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('folio',$folio);
$templateWord->setValue('departamento',$departamento);
$templateWord->setValue('responsable',$responsable);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('year',$year);
$templateWord->setValue('cantn',$cantn);
$templateWord->setValue('cantl',$cantl);
//$templateWord->setValue('articulo',$articulo);
$templateWord->setValue('importe',$importe);
$templateWord->setValue('unidad',$unidad);
$templateWord->setValue('placas',$placas);


// --- Guardamos el documento
ob_clean();
$templateWord->saveAs('Vales.docx');

header("Content-Disposition: attachment; filename=Vales.docx; charset=iso-8859-1");
echo file_get_contents('Vales.docx');
?>