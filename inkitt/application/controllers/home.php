<?php

class Home extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}

}