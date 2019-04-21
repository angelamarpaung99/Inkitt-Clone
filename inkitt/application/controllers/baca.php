<?php
class Baca extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("novel_model");
		$this->load->library("form_validation");
	}
    
    public function index()
	{

        $data['judul'] = 'Baca Novel';
        $data['isi_novel'] = $this->baca_model->getAll();
		$this->load->view('header', $data);
		$this->load->view('baca', $data);
		$this->load->view('footer');
    }
}