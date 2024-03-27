<?php
class Getimage extends Controller{
    function index(){
        //code to authenticate user goes here then...
        header("Content-type: image/jpeg");
        if(file_exists(base_url()."uploads/".$_GET['imgid'])){
            $img_handle = imagecreatefromjpeg(hiddenpath.$_GET['imgid'] ) or die(""); 
            ImageJpeg($img_handle);
        }
    }
}
?>