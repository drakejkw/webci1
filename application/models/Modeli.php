<?php
class Modeli extends CI_Model{

     function _construct()
    {
        parent::__construct();
        $this->load->library('parser');
    }

    public function ambildata(){

        $data = $this->db->get('data');//ambil semua data yang ada pada tabelnya
        return $data->result_array();//kembalikan semua nilai dalam bentuk array 
    }
    public function hapusdata($id)
    {
        $this->db->delete('data',['id'=> $id]);
    }
}
?>