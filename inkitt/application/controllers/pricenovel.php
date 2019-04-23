<?php
class Price_Novel extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("novel_model");
		$this->load->model("price_model");
		$this->load->library("form_validation");
	}
    
    public function pricenovel()
	{
        $data['judul'] = 'Daftar Novel';
        $data['isi_novel'] = $this->price_model->getAll();
		$this->load->view('headerlogged', $data);
		$this->load->view('pricenovel', $data);
		$this->load->view('footer');
    }
}