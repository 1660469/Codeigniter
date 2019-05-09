<?php 
class Date extends CI_Controller{
    public function _construct()
    {
        parent::__construct();
        //$this->load->helper('date');
    }
    public function index(){
      $data['dates'] = "Nam: %y Thang: %m Ngay: %d - %h: %i : %a";
      $data['time'] = time();

      $data['format'] = 'DATE_COOKIE';
      $this->load->view('date_v', $data);
    }
    public function helpertext(){
        $this->load->helper("text");
        $string = "Mat 1 doan roi ahbdhhdj chagcb"; 
        $string = word_limiter($string, 4);
        echo $string;
        
    }
}
?>