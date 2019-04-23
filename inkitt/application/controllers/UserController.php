<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{   
        $this->load->model('User');
        if($this->User->register()) {
            $this->session->set_flashdata('SuccessReg', 'Success');
            redirect('/');
        } else {
                $this->session->set_flashdata('FailReg', 'fail');
                redirect(site_url('index.php/Landing/Register'));
        }
    }

    public function Signin() {
        $this->load->model('User');
        $data = $this->User->findUser();
        if(!empty($data)){
                $this->session->set_userdata('successLogin', $this->input->post('your_name'));
                redirect('/');
        }
        else {
            $this->session->set_flashdata('falselogin', 'nodata');
            redirect('/');
        }
    }

    public function Logout() {
        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('index.php/Landing');
        } else {
            session_destroy();
            redirect('index.php/Landing');
        }
    }
}