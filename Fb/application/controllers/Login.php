<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{

        $data['title']='Welcome to gHub';
        $this->session->sess_destroy();
   		$this->load->view('Log_view',$data);
		$this->load->view('footer');
		//$this->load->view('footer');
	}


	public function Client_login_social()
	{
		# code...
		$data = $this->input->post('fb');
		//SELECT `ID`, `email_address`, `user_name`, `user_title`, `user_dob`, `user_city`, `user_roll`, `user_profile_url`, `user_cover_url`, `user_active`, `user_status` FROM `log_user_tb` WHERE 1
		
			$log = array(
	            'user_email' => isset($data['email'])? $data['email']: '',
	            'user_name' =>$data['name'],
	             'user_fb_id' => $data['id'],
	             'user_dob' => isset($data['birthday'])? $data['birthday']: '',
	             'user_city' =>  isset($data['hometown'])? $data['hometown']: '',
	            // 'user_roll' => $data['email'],
	            'user_profile_url' => $data['picture']['data']['url'],
	            'user_cover_url' => isset($data['albums'])? $data['albums']['data'][1]['cover_photo']['images'][0]['source'] : '' ,
	            'user_active' => 'yes',
	            'user_status' => 'yes',
	        );


	        $this->load->model('Log_modal');
	        $dt = $this->Log_modal->Log_fb($log);

		echo json_encode($dt);

	}

	public function Logout()
	{
		$this->session->sess_destroy();
		$data['result'] = true ;
     	echo json_encode($data);
       

      
	}



// 	FB.api(
//   '/me',
//   'GET',
//   {"fields":"id,name,hometown,email,gender,photos{images}"},
//   function(response) {
//       // Insert your code here
//   }
// );




     
   
}
