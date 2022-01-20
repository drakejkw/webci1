<?php

class Tambah_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function Mendaftar($nama, $alamat, $pekerjaan)
    {
        $input = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan,
        );

        $this->db->insert('data', $input);
    }

    public function editdata($id)
    {
        $quaryx = $this->db->get_where('data', ['id' => $id]);
        return $quaryx->result();
    }
    function updatedata($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('data',$data);
    }
    
}
