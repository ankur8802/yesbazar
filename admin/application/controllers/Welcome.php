  <?php
  defined('BASEPATH') OR exit ('No direct script access allowed');



    class Welcome extends CI_Controller {

	 

   public function index()
      {
    $this->load->view('login');
            
                          }

public function login()

  {

     $email=$this->input->post('email');

     $password=$this->input->post('password');


      $this->load->model('Adminmodel');

     $checklogin_row=$this->Adminmodel->checklogin($email,$password);

      if(!($checklogin_row==0))
      {
        $this->session->set_userdata('email',$email);
        return redirect('Admincontroller/loan');
      
      }

     else{

        $this->session->set_flashdata('wrong_user_passs',"msg");
        return redirect('Welcome/index');
    

     
     }


}
             public function logout()
             {
      $this->session->unset_userdata('email',$email);
        return redirect('Welcome/index');

             }

}