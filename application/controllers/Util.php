<?php
class Util extends CI_Controller {
  public function genuuid(){
    for($i=0;$i<70;$i++){
      echo generate_uuid()."<br>";
    }
  }
}
?>
