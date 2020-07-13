<?php

class Home extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Guru_model');
        $this->load->model('Murid_model');
        $this->load->library('form_validation');
		$this->load->helper('form');
	}

    public function index()
    {
        $this->load->view('home');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function teacher()
    {
        $data['data_guru'] = $this->Guru_model->getAllGuru(); 
        $this->load->view('teacher', $data);
    }

    public function greetings()
    {
        $this->load->view('greetings');
    }

    public function student()
    {
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        $this->load->view('student', $data);
    }

    public function detailStudent($kelas)
    {
        $data['data_kelas'] = $this->Kelas_model->getKelasByNama($kelas);
        $data['data_student'] = $this->Murid_model->getMuridByKelas($kelas);
        $this->load->view('object/detail_student', $data);
    }
}