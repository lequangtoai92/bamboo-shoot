<?php

/**
 * @author: Toailq - 07/01/2019
 * @module: intro
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Intro extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    // Load session library
    $this->load->library('session');
    $this->load->model('CH100_models', 'CH100_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
    $modules = array( 'module.intro');
    $stylesheet = 'intro';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Tài khoản', 'intro_view', $stylesheet, $modules, $data);
  }

  public function creat_intro() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->creatIntro($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function update_intro() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->updateIntro($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function get_intro() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getIntro ($get);
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

  private function creatIntro($post)/*     * : array */ {
    $data = array(
      'BV100' => isset($post['BV100']) ? $post['BV100'] : 0,
      'CH150' => isset($post['contentQuestion']) ? $post['contentQuestion'] : NULL,
      'CH151' => isset($post['contentAnswer']) ? $post['contentAnswer'] : NULL,
      'CH152' => 0,
    );
    return  $this->CH100_MODELS->ch2018_insert_question($data);
  }

  private function updateIntro($post)/*     * : array */ {
    $data = array(
      'CH152' => isset($post['CH152']) ? $post['CH152'] : 0,
      'CH152' => isset($post['contentAnswer']) ? $post['contentAnswer'] : 0,
    );
    return  $this->CH100_MODELS->ch2018_update_question($data);
  }

  private function getIntro($get) {
    $data = array(
      'BV100' => isset($post['type']) ? $post['type'] : 0,
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->CH100_MODELS->ch2018_get_question($data);
  }
}
