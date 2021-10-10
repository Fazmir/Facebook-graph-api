<?php
class Home_modal extends CI_Model {

   public function Get_user_details($logid)
   {
       # code...SELECT `ID`, `user_type`, `user_email`, `user_name`, `user_title`, `user_dob`, `user_city`, `user_roll`, `user_profile_url`, `user_cover_url`, `user_active`, `user_status` FROM `log_user_tb` WHERE 1
           
            $user_log_qry = $this->db->query("SELECT * FROM `log_user_tb`  WHERE  ID = '$logid' ");

            $user= $user_log_qry->row();  

            $data = array(
                'name' => $user->user_name , 
                'pimage' => $user->user_profile_url , 
                'cimage' => $user->user_cover_url , 
                'user_active' => $user->user_active , 
                'email' => $user->user_email , 

            );

            return $data;
   }


   public function Best_images($logid)
   {
     # code...
      $image =array();
      $user_img_qry = $this->db->query("SELECT `ID`, `user_id`, `image_url`, `image_id`, `status` FROM `log_best_images` WHERE user_id =  '$logid' ");

      foreach ($user_img_qry->result() as $res) {
         # code...
          $image[] = array(
            'id' => $res->image_id, 
            'img' => $res->image_url, 
          );

       } 

       return $image;


   }

   public function Save_Best_images($images,$logid)
   {
     # code...

        $data['success'] = false;
        if(count($images) > 0 ){
            $this->db->where('user_id', $logid );
            $this->db->delete('log_best_images');

            foreach ($images as $key => $value) {
              # code...
               $this->db->insert('log_best_images',$images[$key]);
            }
        $data['success'] = true;

        }

        return $data;

   }


   public function Profile_update($data,$logid)
   {
     # code...
      $this->db->where('ID', $logid );
      $this->db->update('log_user_tb',$data);
      $result['success'] = true;
      return $result;
   }


   public function Image_delete($id,$logid)
   {
     # code...
      $this->db->where('user_id', $logid );
      $this->db->where('image_id', $id );
      $this->db->delete('log_best_images');
      $result['success'] = true;
      return $result;
   }



}
?>