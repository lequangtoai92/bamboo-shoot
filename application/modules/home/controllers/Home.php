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
    $this->load->model('B100_models', 'B100_MODELS');
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
    $modules = array( 'module.saga');
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
    $this->renderTemplate('Ca dao', 'funny_view', $stylesheet, $modules, $data);
  }
  public function gnomic(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Châm ngôn', 'funny_view', $stylesheet, $modules, $data);
  }
  public function funny(){
    $modules = array( 'module.home');
    $stylesheet = 'home';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Truyện cười', 'funny_view', $stylesheet, $modules, $data);
  }

  public function get_list_story() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getListStory ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  /*     * **************************************************************** */
  /*     * ****************************[PRIVATE]*************************** */
  /*     * **************************************************************** */

  private function getListStory($get) {
    $val = $this->uri->segment(1);
    if($val == 'cotich_vietnam'){
      $BV151 = 1;
    } else  if($val == 'cotich_nhatban'){
      $BV151 = 2;
    } else if($val == 'truyenco_grimm'){
      $BV151 = 3;
    } else if($val == 'thanthoai_hilap'){
      $BV151 = 4;
    } else if($val == 'truyencuoi'){
      $BV151 = 5;
    } else if($val == 'cagiao_tucngu'){
      $BV151 = 6;
    } else if($val == 'chamngon'){
      $BV151 = 7;
    }
    
    $data = array(
      'BV151' => isset($BV151) ? $BV151 : 0,
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->B100_MODELS->b2018_listOfTabTopic($data);
  }
}
