<?php
class PdfGenerator
{
  public function generate($html,$filename,$orientation)
  {
    define('DOMPDF_ENABLE_AUTOLOAD', true);
    require_once("dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    if($orientation=='l'){
      $dompdf->set_paper('A4', 'landscape');
    }else{
      $dompdf->set_paper('A4', 'potrait');
    }
    $dompdf->render();
    $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
}
