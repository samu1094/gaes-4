<?php
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;

ob_start();
require 'reporte.php';
$html = ob_get_clean();

$domPdf = new Dompdf ();

$opciones = $domPdf->getOptions();

$opciones->set(array('isRemoteEnabled'=>true));
$domPdf->setOptions ($opciones);

$domPdf->loadHtml ($html);
$domPdf->setPaper ('letter');

$domPdf->render();
$domPdf->stream("reporte.pdf",array ("Attachment"=>false));

?>
