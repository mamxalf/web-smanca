<?php

class Murid extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Murid_model');
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
		$this->load->helper('form');
    }

    public function index()
    {
        $data['data_murid'] = $this->Murid_model->getAllMurid();
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        // $config = [
        //     [
        //         'field' => 'nama_murid',
		// 		'label' => 'Nama Murid',
		// 		'rules' => 'required'
        //     ]
        // ];
        $this->load->view('admin_murid', $data);
        
        // $this->form_validation->set_rules($config);
        // if ($this->form_validation->run() == FALSE)
        // {
        // } else {
        // 	$this->Murid_model->saveDataMurid();
        //     $this->session->set_flashdata('tambahMurid', 'ditambahkan');
        //     redirect(base_url('admin/murid'));
        // }
    }

    public function detailMurid($id)
    {
        $data['detail_murid'] = $this->Murid_model->getMuridById($id);

        $this->load->view('object/detail_murid', $data);
    }

    public function deleteMurid($id)
    {
        $this->Murid_model->deleteMurid($id);
        $this->session->set_flashdata('hapusMurid', 'dihapus');
		redirect(base_url('admin/murid'));
    }

    public function editMurid($id)
    {
        $data['detail_murid'] = $this->Murid_model->getMuridById($id);
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();

        
        $config = [
            [
                'field' => 'nama_murid',
                'label' => 'Nama Guru',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form/editMurid', $data);
		} else {
			$this->Murid_model->editDataMurid();
			$this->session->set_flashdata('editMurid', 'diedit');
			redirect('admin/murid');
		}
    }
    public function tambahMurid()
    {
        $data['data_murid'] = $this->Murid_model->getAllMurid();
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        $config = [
            [
                'field' => 'nama_murid',
				'label' => 'Nama Murid',
				'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
		{
            $this->load->view('tambah_murid', $data);
		} else {
			$this->Murid_model->saveDataMurid();
            $this->session->set_flashdata('tambahMurid', 'ditambahkan');
            redirect(base_url('admin/murid/tambahMurid'));
		}
    }

    public function daftarMurid($kelas)
    {
        $data['data_murid'] = $this->Murid_model->getMuridByKelas($kelas);
        $this->load->view('object/daftar_murid', $data);
    }
}