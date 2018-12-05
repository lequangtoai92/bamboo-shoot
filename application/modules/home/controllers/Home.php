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
        // echo json_encode($this->session->userdata('B_USER'));
        // echo json_encode($this->session->userdata('B_LOGIN'));
  }

  public function man(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Trang chủ', 'home_view', $stylesheet, $modules, $data);

  }
  public function choi(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'chồi';
    $this->renderTemplate('chồi', 'home_view', $stylesheet, $modules, $data);
    
  }
  public function la(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'lá';
    $this->renderTemplate('lá', 'home_view', $stylesheet, $modules, $data);
  }
  public function mang_non(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Măng non';
    $this->renderTemplate('Măng non', 'home_view', $stylesheet, $modules, $data);
  }

  public function sagavn(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Cổ tích Việt Nam';
    $this->renderTemplate('Cổ tích Việt Nam', 'saga_view', $stylesheet, $modules, $data);
  }
  public function saganb(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Cổ tích Nhật Bản';
    $this->renderTemplate('Cổ tích Nhật Bản', 'saga_view', $stylesheet, $modules, $data);
  }
  public function grimm(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Truyện cổ Grimm', 'saga_view', $stylesheet, $modules, $data);
  }
  public function greek_mythology(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Thần thoại Hi lạp', 'saga_view', $stylesheet, $modules, $data);
  }
  public function folk_proverb(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Ca dao tục ngữ', 'funny_view', $stylesheet, $modules, $data);
  }
  public function gnomic(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Châm ngôn', 'gnomic_view', $stylesheet, $modules, $data);
  }
  public function funny(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Truyện cười', 'funny_view', $stylesheet, $modules, $data);
  }
}
