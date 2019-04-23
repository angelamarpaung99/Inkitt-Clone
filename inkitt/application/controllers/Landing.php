<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $logged = $this->input->cookie('logged');
        if ($logged or $this->session->has_userdata('successLogin')) {
            return $this->loginPage();
        }
        $data['title'] = "Login";
        $this->load->model("list_model");
        $data['isi_novel'] = $this->list_model->getAll();
        $this->load->view('Landing/Header', $data);
        $this->load->view('Landing/Home', $data);
        $this->load->view('Landing/Footer');
        
    }
    
    public function Register() {
        $data['title'] = "Register";
        $this->load->view('Landing/Header', $data);
        $this->load->view('Landing/Home');
        $this->load->view('Landing/Footer');
    }

    public function loginPage() {
        $this->load->model('list_model');
        $data['judul'] = 'Daftar Novel';
        $data['isi_novel'] = $this->list_model->getAll();
        $this->load->view('headerlogged', $data);
        $this->load->view('list_novel', $data);
        $this->load->view('Landing/Footer');
    }
}