<?php

/**
 * @author: Toailq - 25/06/2018
 * @module: Home
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Home extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    $this->load->database();
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
        $modules = array( 'module.home');
        $stylesheet = 'home';
        $data['title'] = 'Hello world';
        $this->renderTemplate('Trang chủ', 'home_view', $stylesheet, $modules, $data);
        // if(!isset($this->session->userdata('B_LOGIN')['AL101'])){
        //   $this->loadTemplate('Trang chủ', 'home_view', $stylesheet, $modules, $data);
        // } else if ($this->session->userdata('B_LOGIN')['AL101'] == 0){
        //   $this->loadTemplateAdmin('Trang chủ', 'home_view', $stylesheet, $modules, $data);
        // } else if ($this->session->userdata('B_LOGIN')['AL101'] == 1){
        //   $this->loadTemplateUser('Trang chủ', 'home_view', $stylesheet, $modules, $data);
        // } 
        echo json_encode($this->session->userdata('B_USER'));
        echo json_encode($this->session->userdata('B_LOGIN'));
  }

  public function man(){

  }
  public function choi(){
    
  }
  public function la(){
    
  }
  public function mang_non(){
    
  }

  public function sagavn(){
    
  }
  public function saganb(){
    
  }
  public function grimm(){
    
  }
  public function greek_mythology(){
    
  }
  public function folk_proverb(){
    
  }
  public function crambo(){
    
  }
  public function funny(){
    
  }
}
