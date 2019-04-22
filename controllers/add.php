<?php
class Add extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("novel_model");
		$this->load->library("form_validation");
	}
    
    public function index()
	{

        $data['judul'] = 'Add Novel';
		$this->load->view('header', $data);
		$this->load->view('add', $data);
		$this->load->view('footer');
    }
}