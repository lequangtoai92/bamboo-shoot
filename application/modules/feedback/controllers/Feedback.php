<?php

/**
 * @author: Toailq - 29/11/2018
 * @module: Feedback
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Feedback extends History {

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
    $this->load->model('F100_models', 'F100_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
    $modules = array( 'module.feedback');
    $stylesheet = 'feedback';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Tài khoản', 'feedback_view', $stylesheet, $modules, $data);
  }

  public function send_feedback() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->sendFeedback($post);
    if (count($arrayRS) > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function get_feedback() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getFeedback ($get);
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

  private function sendFeedback($post)/*     * : array */ {
    $data = array(
      'FC150' => isset($post['contentFeedback']) ? $post['contentFeedback'] : '',
    );
    return  $this->F100_MODELS->f2018_insert_feedback($data);
  }

  private function getFeedback($get) {
    $data = array(
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 1,
    );
    return $this->F100_MODELS->f2018_get_feedback($data);
  }
}
