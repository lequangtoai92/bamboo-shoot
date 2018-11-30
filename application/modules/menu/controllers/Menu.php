<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('Login_models', 'LOGIN_MODELS');
        
    }
    // Logout from admin page
    public function logout()
    {
        $sess_array = array(
            'username' => '',
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login_form', $data);
    }

}
