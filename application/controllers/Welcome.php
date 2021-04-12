<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class Welcome extends CI_Controller {

	public function index()
	      {
		$this->load->view('index');
      	    }


	public function aboutus()
	     {
		$this->load->view('about');
	            }

	            public function disc()
	     {
		$this->load->view('disc');
	            }


          //  public function download()
          //  {

          // 	$this->load->helper('download');
          // 	$mytext="here my page for trail";
          // 	$filename="loan.php";
          // 	force_download($filename,$mytext);
          // }

 public function contactus()
	     {
		$this->load->view('contact');
	            }



	public function personal()
	           {
		$this->load->view('personal-loan');
	             }
	             public function term()
	           {
		$this->load->view('term');
	             }



	public function home()
	          {
		$this->load->view('home-loan');
	             }


 public function news()
	           {
		$this->load->view('news');
	                }


	public function business()

          	{
		$this->load->view('business');
      	      }


	public function property()
	           {
		$this->load->view('loan-against-property');
	              }

	
	public function consumer()
	    {
		$this->load->view('consumer-loan');
	           }


	public function eligibility()
	{
		$this->load->view('loan-eligibility');
	}


      public function insert()
	            
	            {

   $this->load->model('Model');
   $data=$this->input->post();
   date_default_timezone_set('asia/kolkata');
   $date=date('d-m-yy h:i');
   $data['dateandtime']=$date;

  $email=$this->input->post('email');

  $checkemailalt=$this->Model->checkemail($email);
  if($checkemailalt==0)
  {
    $this->Model->checkinsert($data);
   $this->session->set_flashdata('insertquery_alt','ok');
          return redirect('/Welcome/index');
  }
  else
  {
   

 $this->session->set_flashdata('insertquery_error','error');

 return redirect('/Welcome/index');


                 }


                       }







  }