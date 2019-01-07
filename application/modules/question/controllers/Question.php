<?php

/**
 * @author: Toailq - 07/01/2019
 * @module: Question
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Question extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    $this->load->helper('url');
    // Load form helper library
    $this->load->helper('form');
    // Load form validation library
    $this->load->library('form_validation');
    // Load session library
    $this->load->library('session');
    $this->load->model('G100_models', 'G100_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
    $modules = array( 'module.question');
    $stylesheet = 'question';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Tài khoản', 'question_view', $stylesheet, $modules, $data);
  }

  public function send_question() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->sendQuestion($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function get_question() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getQuestion ($get);
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

  private function sendQuestion($post)/*     * : array */ {
    $data = array(
      'BV100' => isset($post['BV100']) ? $post['BV100'] : 0,
      'CH150' => isset($post['contentQuestion']) ? $post['contentQuestion'] : NULL,
      'CH151' => isset($post['contentAnswer']) ? $post['contentAnswer'] : NULL,
      'CH152' => 0,
    );
    return  $this->G100_MODELS->f2018_insert_question($data);
  }

  private function getQuestion($get) {
    $data = array(
      'BV100' => isset($post['TK100']) ? $post['BV100'] : 0,
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->G100_MODELS->f2018_get_question($data);
  }
}
