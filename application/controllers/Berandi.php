<?php 

class Berandi extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeli');
        $this->load->model('Tambah_m');
        
    }
    
        public function index()
        {

           
            $hdata['hasil'] = $this->Modeli->ambildata('data');
            $this->load->view('Viewi', $hdata);
        }
        public function edit($id)
        {
            $data['hasil'] = $this->Tambah_m->editdata($id);
            $this->load->view("edit_vw",$data);
        }
        public function updatex()
        {
            $id = $this->input->post('id');
            $data = array(
                'nama'=> $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat'),
                'pekerjaan'=> $this->input->post('pekerjaan')
            );

            $this->Tambah_m->upatedata($id,$data);
            redirect('berandi/index');
        }
   public function hapus($id)
   {
       $this->Modeli->hapusdata($id);
       redirect('Berandi');
   }
}
