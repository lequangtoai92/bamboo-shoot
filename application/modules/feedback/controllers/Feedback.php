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
    $data = array(
      'FC150' => isset($post['contentFeedback']) ? $post['contentFeedback'] : '',
    );
    $result = $this->F100_MODELS->f2018_insert_feedback($data);
    if ($result == true) {
      $data['message_display'] = 'Registration Info Successfully !';
    } else {
      $data['message_display'] = 'Username already exist!';
    }
  }

  public function get_feedback() {
    $result = $this->F100_MODELS->f2018_get_feedback();
    if ($result != false) {
      $data['message_display'] = 'Registration Info Successfully !';
    } else {
      $data['message_display'] = 'Username already exist!';
    }
  }
}
