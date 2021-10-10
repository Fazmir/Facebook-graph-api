<?php


function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


function logid(){
    $CI =& get_instance();
  return  $CI->session->userdata('user_id');
}

function socialid(){
    $CI =& get_instance();
  return  $CI->session->userdata('fb_id');
}



function encrypt($id)
{
	# code...
	 $CI =& get_instance();
    $json =  $CI->encryption->encrypt($id);
    $json= str_replace(array('+', '/', '='), array('-', '_', '~'), $json);

    return $json;
}



function decrypt($id)
{
	# code...
	$CI =& get_instance();
    $json= str_replace(array('-', '_', '~'), array('+', '/', '='),  $id);
    $json =  $CI->encryption->decrypt($json);

    return $json;
}

?>
