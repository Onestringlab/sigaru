<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once("./vendor/dompdf/dompdf/autoload.inc.php");
// require_once 'dompdf/dompdf_config.inc.php';
use Dompdf\Dompdf;

class Pdfgenerator2 {

  public function generate($html, $filename='', $stream, $paper, $orientation)
  {
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    if($orientation=='l'){
      $dompdf->set_paper($paper, 'landscape');
    }else{
      $dompdf->set_paper($paper, 'potrait');
    }
    // $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => 0));
    } else {
        return $dompdf->output();
    }
  }
}