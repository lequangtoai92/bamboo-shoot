<?php

/**
 * @author: Toailq - 19/07/2018
 * @module: Creat
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Creat extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    $this->load->library('session');
    $this->load->model('B100_models', 'B100_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
    if($this->_checkLogin()){
      $modules = array( 'module.creat');
      $stylesheet = 'creat';
      $data['title'] = 'Hello world';
      $this->renderTemplate('Tạo mới', 'creat_view', $stylesheet, $modules, $data);
    } else {
        redirect('/home');
    }
  }

  public function creat_bambo() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->creatBambo($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã đóng góp cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function update_bambo() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->upateBambo($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã đóng góp cho chúng tôi!';
    };
    echo json_encode($res);
  }

  // public function creat_bambo() {
  //   $post = $_POST;
  //   $data = array(
  //       'FN150' => isset($post['title_name']) ? $post['title_name'] : '',//tên
        
  //       // 'FA151' => isset($post['passWord']) ? md5($post['passWord']) : '',//do tuoi
  //       'FB152' => isset($post['compact']) ? ($post['compact']) : '', //tom tat
  //       'FV153' => isset($post['passWord']) ? ($post['passWord']) : '',//duc tinh
  //       // 'FT154' => isset($post['passWord']) ? md5($post['passWord']) : '',//chu de
  //       'FS155' => isset($post['source']) ? ($post['source']) : '',//nguon
  //       'FA156' => $this->session->userdata('B_LOGIN')['AI100'],//id nguoi tao
  //       'FA157' => $this->session->userdata('B_LOGIN')['AL150']//ten nguoi tao
  //   );
  //   $dataContent = array (
  //     'CC150' => isset($post['content_main']) ? $post['content_main'] : '',//noi dung
  //   );
   
  //   $resultBambo = $this->B100_MODELS->f2018_insert_bambo($data);
  //   $resultContent = $this->B100_MODELS->f2018_insert_content($dataContent);
  //   if ($result == true) {
  //     $data['message_display'] = 'Registration Info Successfully !';
  //   } else {
  //     $data['message_display'] = 'Username already exist!';
  //   }
  // }

  /*     * **************************************************************** */
  /*     * ****************************[PRIVATE]*************************** */
  /*     * **************************************************************** */

  public function creatBambo($post) {
    $data = array(
        'BV150' => isset($post['title_name']) ? $post['title_name'] : '',//tên bai viet
        'BV151' => isset($post['type']) ? ($post['type']) : '',//the loai
        'BV152' => isset($post['topic']) ? ($post['topic']) : '', //chu de
        'BV153' => isset($post['compact']) ? ($post['compact']) : '',//mo ta
        'BV154' => isset($post['name_author']) ? ($post['name_author']) : $this->session->userdata('B_USER')['name'],//tac gia
        'BV156' => isset($post['source']) ? ($post['source']) : '',//nguon
        'BV157' => isset($post['age']) ? ($post['age']) : '',//lua tuoi
        'BV158' => isset($post['virtue']) ? ($post['virtue']) : '',//duc tinh
        'TK100' => $this->session->userdata('B_LOGIN')['LI100']//id nguoi tao
    );
    $dataContent = array (
      'ND150' => isset($post['content_main']) ? $post['content_main'] : '',//noi dung
    );
   
    $resultBambo = $this->B100_MODELS->f2018_insert_bambo($data);
    $resultContent = $this->B100_MODELS->f2018_insert_content($dataContent);

    return $resultBambo * $resultContent;
    // if ($result == true) {
    //   $data['message_display'] = 'Registration Info Successfully !';
    // } else {
    //   $data['message_display'] = 'Username already exist!';
    // }
  }

  public function upateBambo($post) {
    $data = array(
        'BV150' => isset($post['title_name']) ? $post['title_name'] : '',//tên bai viet
        'BV151' => isset($post['type']) ? ($post['type']) : '',//the loai
        'BV152' => isset($post['topic']) ? ($post['topic']) : '', //chu de
        'BV153' => isset($post['compact']) ? ($post['compact']) : '',//mo ta
        'BV154' => isset($post['name_author']) ? ($post['name_author']) : $this->session->userdata('B_USER')['name'],//tac gia
        'BV156' => isset($post['source']) ? ($post['source']) : '',//nguon
        'BV157' => isset($post['age']) ? ($post['age']) : '',//lua tuoi
        'BV158' => isset($post['virtue']) ? ($post['virtue']) : '',//duc tinh
        'TK100' => $this->session->userdata('B_LOGIN')['LI100']//id nguoi tao
    );
    $dataContent = array (
      'ND150' => isset($post['content_main']) ? $post['content_main'] : '',//noi dung
    );
   
    $resultBambo = $this->B100_MODELS->n2018_update_bambo($data);
    $resultContent = $this->B100_MODELS->n2018_update_content($dataContent);

    return $resultBambo * $resultContent;
    // if ($result == true) {
    //   $data['message_display'] = 'Registration Info Successfully !';
    // } else {
    //   $data['message_display'] = 'Username already exist!';
    // }
  }



}
