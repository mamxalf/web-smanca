<?php

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
		$this->load->helper('form');
	}

    public function index()
    {
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        $config = [
            [
                'field' => 'nama_kelas',
				'label' => 'Nama Kelas',
				'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
		{
            $this->load->view('__admin/main', $data);
		} else {
			$this->Kelas_model->saveDataKelas();
            $this->session->set_flashdata('tambahKelas', 'ditambahkan');
            redirect(base_url('admin/dashboard'));
		}
    }

    public function deleteKelas($id)
    {
        $this->Kelas_model->deleteDataKelas($id);
        $this->session->set_flashdata('hapusKelas', 'dihapus');
		redirect(base_url('admin/dashboard'));
    }

    public function editKelas($id)
    {
        $data['kelas_byid'] = $this->Kelas_model->getKelasByKode($id);

        $config = [
            [
                'field' => 'nama_kelas',
				'label' => 'Nama Kelas',
				'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
		{
            $this->load->view('form/editKelas', $data);
		} else {
			$this->Kelas_model->editDataKelas();
            $this->session->set_flashdata('editKelas', 'diedit');
            redirect(base_url('admin/dashboard'));
		}
    }

    public function detailKelas($id)
    {
        $data['kelas_byid'] = $this->Kelas_model->getKelasByKode($id);
        $this->load->view('object/detail_kelas', $data);
    }
}