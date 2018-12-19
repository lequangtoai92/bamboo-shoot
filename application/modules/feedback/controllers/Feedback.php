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
    $this->load->model('G100_models', 'G100_MODELS');
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
    if ($arrayRS > 0) {
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
      'TK100' => isset($post['TK100']) ? $post['contentFeedback'] : 0,
      'GY150' => isset($post['contentFeedback']) ? $post['contentFeedback'] : NULL,
      'GY152' => isset($post['GY152']) ? $post['contentFeedback'] : 0,
      'GY153' => isset($post['GY153']) ? $post['contentFeedback'] : NULL,
      'GY154' => isset($post['GY154']) ? $post['contentFeedback'] : NULL,
      'GY155' => isset($post['GY155']) ? $post['contentFeedback'] : NULL,
      'GY156' => isset($post['GY156']) ? $post['contentFeedback'] : NULL,
    );
    return  $this->G100_MODELS->f2018_insert_feedback($data);
  }

  private function getFeedback($get) {
    $data = array(
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->G100_MODELS->f2018_get_feedback($data);
  }
}
