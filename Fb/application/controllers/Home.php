<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 	var $data =  array();

	function __construct() { 
    	parent::__construct();  
  		if(!$this->session->has_userdata('Logged') ){ redirect(base_url()); }     	
         
    } 


	public function index()
	{


        $logid = logid();
        $this->load->model('Home_modal');
        $data['profile'] = $this->Home_modal->Get_user_details($logid);
        $data['title']='Home';
        $this->load->view('header',$data);
        $this->load->view('Home_view',$data);
        $this->load->view('footer');
       
        
	}

    public function Best_images()
    {
        # code...
        $logid = logid();
        $this->load->model('Home_modal');
        $data['images'] = $this->Home_modal->Best_images($logid);
        echo json_encode($data);

    }


    public function Save_Best_images()
    {
        # code...
        $logid = logid();
        $img = $this->input->post('bestImage');
        $images =array();
        foreach ($img as $key => $value) {

            $url = explode(',', $this->input->post('bestImage')[$key])[1];
            $id = explode(',', $this->input->post('bestImage')[$key])[0];
           $images[] = array(
            'user_id' =>  $logid, 
            'image_url' =>  $url, 
            'image_id' =>  $id, 
            'status' => 'yes', 
            );
        }

        $this->load->model('Home_modal');
        $data = $this->Home_modal->Save_Best_images($images,$logid);
        // print_r($data);
        echo json_encode($data);
    }



    public function Save_pc_images()
    {
        
        $logid = logid();
        $img = $this->input->post('img');
        $id = $this->input->post('id');
        $type = $this->input->post('type');


        $images =array();
            $this->load->model('Home_modal');

        if($type == 'Delete'){

            $data = $this->Home_modal->Image_delete($id,$logid); 

        }else{
            if($type == 'Cover'){

                 $images= array(
                'user_cover_url' =>  $img,  
                );

            }else{

                $images= array(
                'user_profile_url' =>  $img,  
                );
            } 
            $data = $this->Home_modal->Profile_update($images,$logid); 
        }

        
        echo json_encode($data);
    }
  
   
}
