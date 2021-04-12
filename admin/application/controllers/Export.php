<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Export extends CI_Controller {

 public function excel()
 {


    require (APPPATH . 'third_party/PHPExcel-1.8/classes/PHPExcel.php');
    require (APPPATH . 'third_party/PHPExcel-1.8/classes/PHPExcel/writer/Excel2007.php');

 }


}
?>