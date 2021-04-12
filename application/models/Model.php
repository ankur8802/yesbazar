<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Model extends CI_Model {


   public function checkinsert($data)
 

   {
    $this->db->insert("form",$data);

   }

 public function checkemail($email)
   {
   	$q=$this->db->select()
   	         ->where('email',$email)
   	         ->from('form')
   	         ->get();
   	         return $q->num_rows();
   }


}



?>
