<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send2webclient'))
{
    function send2webclient($res_id,$notification_type)
    {
		$arr = array('notification_type' => $notification_type);
   		$msg = json_encode($arr);
		$result = $this->pusher->trigger('approve'.$res_id,'my_event', array('message' => $msg));
		return $result;
    }   
}
