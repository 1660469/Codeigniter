<?php 
class Session extends CI_Controller{
    
    public function index(){
        //tao session dung user data
        //$this->session->set_userdata('tuoi', '21');// khoi tao chi 1 gia tri session
        //khoi tao mang session
       
        
        $data = array("ten"=>"Quang",
        "tuoi" => "21",
        "quequan" => "Quangnam",);
        $this->session->set_userdata($data);
        redirect("session/testsession");
    }
    public function testsession()
    {
        $this->load->library('session');
        $ten = $this->session->userdata("ten");
        $tuoi = $this->session->userdata("tuoi");
        $queQuan = $this->session->userdata("quequan");
        echo "ten la " . $ten  . '<br>'. "tuoi la: " .$tuoi .  '<br>'. "que quan la: " .$queQuan;
        // lay tat ca session ra 1 lan
        $data['dt']=$this->session->all_userdata();
        
        $this->load->view('session_v', $data);
        
    }
    public function allsession()
    {
        
        // lay tat ca session ra 1 lan
    }
}
?>