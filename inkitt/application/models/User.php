<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        $data = array(
            "Username" => $this->input->post('name'),
            "Email" => $this->input->post('email'),
            "Pass" => md5($this->input->post('pass')),
            "RegisTime" => date('d-m-Y, H:i:s')
        );
        if($this->isExist($this->input->post('name'))) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login', array('Username' => $data['Username'], 'Pass' => $data['Pass']));
            return true;
        }
    }

    public function isExist($username) {
        return $this->db->where('Username', $username)->count_all_results('register') > 0;
    }

    public function findUser() {
        $username = $this->input->post('your_name');
        $data = $this->db->where('Username', $username)->get('register')->row_array();
        return $data;
    }
}
