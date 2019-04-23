<?php 
class Danhmuc extends CI_Controller
{
    function __construct() {
        
        parent::__construct();
    }
    public function index($mess = '')
    {
        echo "Qunag" . $mess;
        
    }
    public function index1($id = 0, $mess = '')
    {
        echo "Quang1111" . $id.$mess;
        
    }
    public function LoadView()
    {
        $this->load->view('danhmuc_view');// ham load view 


    }
    //Truyen du lieu qua bien va dua den views
    public function truyenDuLieu()
    {
        //$data['dt'] = 'bienA' => 'day la bien a'; // truyen du lieu chi 1 bien
        //$data[] = array('bien1' => 'Day la bien 1',
        //'bien2' => 'Day la bien 2',);
        //$this->load->view('danhmuc_view', $data);

        $data = array(
            'title' => 'Day la tieu de',
            'message' => 'day la noi dung'
        );
  
        // Load view và truyền data qua view
        $this->load->view('danhmuc_view', $data);
    }
    public function loadmodel()
    {
       // $this->load->model('danhmuc_model');
        $this->load->model('danhmuc_model', 'model1');// thu doi ten
        $a = $this->model1->load();
    }
}?>