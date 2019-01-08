<?php

/**
 * @author: Toailq - 15/07/2018
 * @module: Content
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Content extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    $this->load->model('B100_models', 'B100_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
        $modules = array( 'module.content');
        $stylesheet = 'content';
        $data['title'] = 'Hello world';
        $this->renderTemplate('Nội dung', 'content_view', $stylesheet, $modules, $data);
  }

  public function get_content() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getContent ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
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

  public function get_comment() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getComment ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  public function get_content_all() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getContentAll ($get);
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

  private function getContent($get) {
    $data = array(
      'BV100' => isset($get['storyId']) ? $get['storyId'] : 0,
    );
    return $this->B100_MODELS->n2018_get_content($data);
  }

  private function getQuestion($get) {
    $data = array(
      'BV100' => isset($get['storyId']) ? $get['storyId'] : 0,
    );
    return $this->B100_MODELS->n2018_get_content($data);
  }

  private function getComment($get) {
    $data = array(
      'BV100' => isset($get['storyId']) ? $get['storyId'] : 0,
    );
    return $this->B100_MODELS->n2018_get_content($data);
  }
  

  private function getContentAll($get) {
    $data = array(
      'BV100' => isset($get['storyId']) ? $get['storyId'] : 0,
    );
    return $this->B100_MODELS->b2018_listAll($data);
  }
}
