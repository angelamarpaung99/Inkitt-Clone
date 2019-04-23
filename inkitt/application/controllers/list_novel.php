<?php
class List_Novel extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("novel_model");
		$this->load->model("list_model");
		$this->load->library("form_validation");
	}
    
    public function listnovel()
	{

        $data['judul'] = 'Daftar Novel';
        $data['isi_novel'] = $this->list_model->getAll();
		$this->load->view('headerlogged', $data);
		$this->load->view('list_novel', $data);
		$this->load->view('Landing/Footer');
    }
}