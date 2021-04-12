<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
   


public function fetchquerydata()
{
	$q=$this->db->select()
	            ->from('form')
	            ->get();
	            return $q->result();
}

public function checklogin($email,$password)
{
    $q=$this->db->select()
                ->where('email',$email)
                ->where('password',$password)
                ->from('admin')
                ->get();
              return $q->num_rows();
} 




}


















