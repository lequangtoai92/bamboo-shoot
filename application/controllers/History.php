<?php

/**
 * @author: Anph - 07/12/2017
 * @module: Facilio super controller
 * 
 * @standard:
 *  > module: module name, controller file name, class name :uppercase first letter
 *  > class: split to 2|[3] block: public && [protected] && private
 *  > function
 *     - private function functionName -> return required!
 *     - public function function_name
 *     - [protected] function _functionName
 *  > variable:
 *     - local: variableName
 *     - field -> follow db style
 */
defined('BASEPATH') or exit('No direct script access allowed');

define('F_USER', 'F_USER');

class History extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        // $this->testConnectDatabase();
    }

    /*     * **************************************************************** */
    /*     * **************************[PUBLIC]****************************** */
    /*     * **************************************************************** */

    public function index() {
        if($this->_checkLogin()){
            redirect('/home');
        } else {
            redirect('/home');
        }
        $this->load->database('default');
    }

    public function logout() {
        session_destroy();
        redirect('', 'refresh');
    }

    /**
     * @predicated
     */
    /*     * **************************************************************** */
    /*     * **************************[PROTECTED]*************************** */
    /*     * **************************************************************** */

    /**
     * 
     * @param type $title
     * @param type $page
     * @param type $modules
     * @param type $data
     * 
     */

    public function renderTemplate($title, $page, $stylesheet = '', $modules = array(), $data = array(), $wrapperClass = ''){
			// $response['administrator_view'] = 'administrator_view';
			$response['title'] = $title;
			if (!empty($stylesheet))
					$response['stylesheet'] = $stylesheet;
			$response['wrapperClass'] = $wrapperClass;
			if (!empty($modules))
					$response['script'] = $modules;
			$response['page_view'] = $page;
			$response['data'] = $data;
			// $this->load->view('administrator_view', $response);
        
      if(!isset($this->session->userdata('B_LOGIN')['LI152'])){
				$response['common_view'] = 'common_view';
				$this->load->view('common_view', $response);
        } else if ($this->session->userdata('B_LOGIN')['LI152'] == 0){
          $response['administrator_view'] = 'administrator_view';
					$this->load->view('administrator_view', $response);
        } else if ($this->session->userdata('B_LOGIN')['LI152'] == 1){
          $response['user_view'] = 'user_view';
					$this->load->view('user_view', $response);
        } 
    }

    protected function loadTemplateAdmin($title, $page, $stylesheet = '', $modules = array(), $data = array(), $wrapperClass = '') {
        $response['administrator_view'] = 'administrator_view';
        $response['title'] = $title;
        if (!empty($stylesheet))
            $response['stylesheet'] = $stylesheet;
        $response['wrapperClass'] = $wrapperClass;
        if (!empty($modules))
            $response['script'] = $modules;
        $response['page_view'] = $page;
        $response['data'] = $data;
        $this->load->view('administrator_view', $response);
    }

    protected function loadTemplateUser($title, $page, $stylesheet = '', $modules = array(), $data = array(), $wrapperClass = '') {
        $response['user_view'] = 'user_view';
        $response['title'] = $title;
        $response['wrapperClass'] = $wrapperClass;
        if (!empty($modules))
            $response['script'] = $modules;
        $response['page_view'] = $page;
        $response['data'] = $data;
        $this->load->view('user_view', $response);
    }

    protected function loadTemplate($title, $page, $stylesheet = '', $modules = array(), $data = array(), $wrapperClass = '') {
        $response['common_view'] = 'common_view';
        $response['title'] = $title;
        if (!empty($stylesheet))
            $response['stylesheet'] = $stylesheet;
        $response['wrapperClass'] = $wrapperClass;
        if (!empty($modules))
            $response['script'] = $modules;
        $response['page_view'] = $page;
        $response['data'] = $data;
        $this->load->view('common_view', $response);
    }

    /**
     * @Input: void
     * @Output: boolean
     * @Description: call at any module required login, check login state from session -> true | false
     */
    protected function _checkLogin() {
        $ss = $this->session->userdata('B_USER');
        return isset($ss) && !empty($ss);
    }

    /*     * **************************************************************** */
    /*     * *****************************[PRIVATE]************************** */
    /*     * **************************************************************** */

    
    

}
