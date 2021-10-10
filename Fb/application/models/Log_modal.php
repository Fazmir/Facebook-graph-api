<?php
class Log_modal extends CI_Model {



public function Log_fb($log)
{
  # code...
  $verify = $this->Log_verification($log);

  if($verify == false){
     $this->Log_insert($log);

     $data['msg'] = 'New account';
  }else{
     $data['msg'] = 'Old account';
  }
  $data['success'] = true;

  return $data;

}

public function Log_verification($log){

    $user_fb_id = $log['user_fb_id'];

    $user_log = $this->db->query("SELECT ID , `user_email`, `user_status`,user_fb_id FROM `log_user_tb` 
                                  WHERE  user_fb_id = '$user_fb_id'  ");

    if($user_log->num_rows() == true){
       $user_dt = $user_log->row();
       $this->session->set_userdata('Logged' , 'Logged');
       $this->session->set_userdata('user_id' , $user_dt->ID );
       $this->session->set_userdata('fb_id' ,  $user_dt->user_fb_id );

      return true;

    }else{

      return false;
    }
}


public function Log_insert($log){

    $user_fb_id = $log['user_fb_id'];
    
    $this->db->insert('log_user_tb', $log);
    $user_dt = $this->db->insert_id();
    $this->session->set_userdata('Logged' , 'Logged');
    $this->session->set_userdata('user_id' , $user_dt );
    $this->session->set_userdata('fb_id' , $user_fb_id );


 }

    

   


}
?>
