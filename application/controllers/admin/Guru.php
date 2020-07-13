<?php

class Guru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
		$this->load->helper('form');
    }

    public function index()
    {
        $data['data_guru'] = $this->Guru_model->getAllGuru();
        $config = [
            [
                'field' => 'nama_guru',
				'label' => 'Nama Guru',
				'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
		{
            $this->load->view('admin_guru', $data);
		} else {
			$this->Guru_model->saveDataGuru();
            $this->session->set_flashdata('tambahGuru', 'ditambahkan');
            redirect(base_url('admin/guru'));
		}
    }

    public function deleteGuru($id)
    {
        $this->Guru_model->deleteDataGuru($id);
        $this->session->set_flashdata('hapusGuru', 'dihapus');
		redirect(base_url('admin/guru'));
    }

    public function editGuru($id)
    {
        $data['data_guru'] = $this->Guru_model->getGurubyId($id);
        
        $config = [
            [
                'field' => 'nama_guru',
                'label' => 'Nama Guru',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form/editGuru', $data);
		} else {
			$this->Guru_model->editDataGuru();
			$this->session->set_flashdata('editGuru', 'diedit');
			redirect('admin/guru');
		}
    }
}