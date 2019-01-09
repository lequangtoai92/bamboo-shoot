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
    $this->load->model('CH100_models', 'CH100_MODELS');
    $this->load->model('BL100_models', 'BL100_MODELS');
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

  public function creat_comment() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->creatComment($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã đóng góp cho chúng tôi!';
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
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->CH100_MODELS->ch2018_get_question_for_user($data);
  }

  private function creatComment($post) {
    $data = array(
      'BV100' => isset($post['BV100']) ? $post['BV100'] : 0,
      'BL150' => isset($post['comment']) ? $post['comment'] : 0,
      'BL152' => isset($post['storyId1']) ? $post['storyId1'] : 0,
      'BL153' => isset($post['storyId1']) ? $post['storyId1'] : 0,
      'BL154' => isset($post['storyId1']) ? $post['storyId1'] : 0,
      'BL155' => isset($post['storyId1']) ? $post['storyId1'] : 0,
      'TK100' => $this->session->userdata('B_LOGIN')['TK100'],//id nguoi tao
      'TK151' => $this->session->userdata('B_USER')['name'],//tac gia
    );
    return $this->BL100_MODELS->bl2018_insert_comment($data);
  }

  private function getComment($get) {
    $data = array(
      'BV100' => isset($get['storyId']) ? $get['storyId'] : 0,
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->BL100_MODELS->bl2018_get_question_for_user($data);
  }
  

  private function getContentAll($get) {
    $data = array(
      'BV100' => isset($get['storyId']) ? $get['storyId'] : 0,
    );
    return $this->B100_MODELS->b2018_listAll($data);
  }


}
