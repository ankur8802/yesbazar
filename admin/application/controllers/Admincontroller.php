<?php
defined('BASEPATH') OR exit ('No direct script access allowed');



class Admincontroller extends CI_Controller {
          function __construct()
        
                 {
            parent::__construct();
            $this->load->Model('Adminmodel');

               if(!($this->session->userdata('email')))
                    {
                         return redirect('Welcome/index');
                    }
            
 
        }
	  // function __construct()
   //     {
   // 	        parent::__construct();
   // 	        $this->load->Model('Adminmodel');

   // 	           if(!$email=$this->session->userdata('email'))
   //                  {
   //                       return redirect('Admincontroller/index');
   //                  }
   	        
   //                       }





// public function login()

//   {

//      $email=$this->input->post('email');

//      $password=$this->input->post('password');


//       $this->load->model('Adminmodel');

//      $checklogin_row=$this->Adminmodel->checklogin($email,$password);

//       if(!($checklogin_row==0))
//       {
//       	$this->session->set_userdata($email);
//       	return redirect('Admincontroller/loan');
//       }

//      else{

//       $this->session->set_flashdata('wrong_user_passs');
// return redirect('Admincontroller/index');

     
//      }


// }

   public function loan()
             	{

             		
           $this->load->model('Adminmodel');
           $data['query']=$this->Adminmodel->fetchquerydata();
           $this->load->view('loan',$data);
            
             	}


	          //    public function excel()
           //    {

                
          

           // $this->load->helper('download');
           // $this->load->model('Adminmodel');
           // $data['query']=$this->Adminmodel->fetchquerydata();
           
           //  $data = file_get_contents($query); // Read the file's contents
           // $name = 'data.php';
           //   force_download($name, $data); 
           // // $this->load->view('excel',$data);
            
           //    } 

               // public function trial()
               // {

               //      $this->load->view('trial');

               // }


}
