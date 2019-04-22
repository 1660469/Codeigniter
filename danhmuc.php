<?php 
class Danhmuc extends CI_Controller
{
    public function index($mess = '')
    {
        echo "Qunag" . $mess;
        
    }
    public function index1($id = 0, $mess = '')
    {
        echo "Quang1111" . $id.$mess;
        
    }
}?>