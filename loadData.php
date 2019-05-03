<?php 
class LoadData extends CI_Controller{
    public function _construct()
    {
        parent::__construct();
        $this->load->library('database', 'session');
    }
    public function index(){
       // tao 1 bang tren mysql roi truy cap vao database
       $dtbase = $this->db->query("select * from danhmuc");
       //$record = $this->db->get("danhmuc");
       $data['dt'] = $dtbase->result_array();
       // xuat ra man hinh chi ma danh muc bang select
       $this->db->select("madm");
       $vd1 = $this->db->get('danhmuc');
       $data['vd1'] = $vd1->result_array();
       // xuat ra man hinh chi ma danh muc bang limit
       $this->db->limit("1");
       $vd2 = $this->db->get('danhmuc');
       $data['vd2'] = $vd2->result_array();
       // xuat ra man hinh chi ma danh muc bang select_min
        $this->db->select_min("madm");
        $vd3 = $this->db->get("danhmuc");
        $data['vd3'] = $vd3->result_array();

       //$data['dt1'] = $record->row_array();//lay tong so record trong database
       $this->load->view('database_v', $data);

    }
    public function insert(){
        $data = array("madm" => "4",
        "tendm" => "phomaique",);
        $this->db->insert("danhmuc", $data);
        echo "insert success!!!";
        redirect("loaddata");
    }
    public function update(){
        $this->db->where("madm", "4");
        $data = array("tendm" => "Quangupdate");
        $this->db->update("danhmuc", $data);
        redirect("loaddata");
    }
    public function delete(){
       $this->session->set_flashdata("thongbao", "Deleted success!!!");
        $this->db->where("madm", "2");
        $this->db->delete("danhmuc");
        echo $this->session->flashdata("thongbao");
        redirect("loaddata");
    }
}
?>