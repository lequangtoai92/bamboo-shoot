<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require APPPATH . 'libraries/REST_Controller.php';
// session_start(); //we need to start session in order to access it through CI

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        // $this->load->model('Login_models', 'login_database');

        $this->load->model('Login_models', 'LOGIN_MODELS');
        
    }
    // Logout from admin page
    public function logout()
    {

        // Removing session data
        $sess_array = array(
            'username' => '',
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login_form', $data);
    }

    public function user_login() {
        $post = $_POST;
        $data = array(
            'LI150' => isset($post['userName']) ? $post['userName'] : '',
            'LI151' => isset($post['passWord']) ? md5($post['passWord']) : '',
        );
        $result = $this->LOGIN_MODELS->login($data);
        $session_login = array(
            'LI150' => $result[0]->LI150,
            'LI151' => $result[0]->LI151,
            'LI152' => $result[0]->LI152,
            'LI100' => $result[0]->LI100,
        );
        $_SESSION['B_LOGIN'] = $session_login;
        if ($result !== false) {
            $result = $this->LOGIN_MODELS->get_infor_user($result[0]->AL100);
            if ($result != false) {
                $session_data = array(
                    'name' => $result[0]->TK151,
                    'email' => $result[0]->TK156,
                    'address' => $result[0]->TK154,
                    'sex' => $result[0]->TK153,
                    'telephone' => $result[0]->TK155,
                    'nickname' => $result[0]->TK157,
                    'author' => $result[0]->TK159,
                );
                // Add user data in session
                $this->session->set_userdata('B_USER', $session_data);
                // echo json_encode($session_data);
                // die;
            }
            header("Refresh:0");
        } else {
            $data = array(
                'error_message' => 'Invalid Username or Password',
            );
            echo json_encode($data);
            // die;
        }
        
    }

    public function user_register_v1() {
        $post = $_POST;
        $data = array(
            'AL150' => isset($post['userName']) ? $post['userName'] : '',
            'AL200' => isset($post['passWord']) ? md5($post['passWord']) : '',
        );
        $dataInfoUser = array(
            'AN100' => isset($post['name']) ? $post['name'] : '',
            'AE100' => isset($post['email']) ? $post['email'] : '',
            'AA100' => isset($post['address']) ? $post['address'] : '',
            'AS100' => isset($post['sex']) ? $post['sex'] : '',
            'AT100' => isset($post['phone']) ? $post['phone'] : '',
            'AN150' => isset($post['nickname']) ? $post['nickname'] : '',
            'AU150' => '0',
        );
        $result = $this->LOGIN_MODELS->registration_insert($data);
        if ($result == true) {
            $resultInfo = $this->LOGIN_MODELS->registration_insert_infoUser($dataInfoUser);
            if($resultInfo){
                $data['message_display'] = 'Registration Info Successfully !';
            } else {
                $data['message_display'] = 'FALL';
            }
            
        } else {
            $data['message_display'] = 'Username already exist!';
        }
        
    }

    public function user_register() {
        $post = $_POST;
        $data = array(
            'LI150' => isset($post['userName']) ? $post['userName'] : '',
            'LI151' => isset($post['passWord']) ? md5($post['passWord']) : '',
            'LI152' => '0',
        );
        $dataInfoUser = array(
            'TK151' => isset($post['name']) ? $post['name'] : '',
            'TK152' => isset($post['birthday']) ? $post['birthday'] : '',
            'TK153' => isset($post['sex']) ? $post['sex'] : '',
            'TK154' => isset($post['address']) ? $post['address'] : '',
            'TK155' => isset($post['phone']) ? $post['phone'] : '',
            'TK156' => isset($post['email']) ? $post['email'] : '',
            'TK157' => isset($post['nickname']) ? $post['nickname'] : '',
            'TK159' => isset($post['']) ? $post[''] : '0',
        );
        $result = $this->LOGIN_MODELS->registration_insert($data);
        if ($result == true) {
            $resultInfo = $this->LOGIN_MODELS->registration_insert_infoUser($dataInfoUser);
            if($resultInfo){
                $data['message_display'] = 'Registration Info Successfully !';
            } else {
                $data['message_display'] = 'FALL';
            }
            
        } else {
            $data['message_display'] = 'Username already exist!';
        }
        
    }

}
