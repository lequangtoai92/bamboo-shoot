<?php

/**
 * @author: Toailq - 20/07/2018
 * @module: Content
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Admin extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    $this->load->library('session');
    $this->load->model('G100_models', 'G100_MODELS');
    $this->load->model('ADM_models', 'ADM_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
    $modules = array( 'module.admin');
    $stylesheet = 'admin';
    $data['title'] = 'Hello world';
    $this->loadTemplateAdmin('ADMIN', 'admin_view', $stylesheet, $modules, $data);
  }
  
  public function creat() {
    $modules = array( 'module.admin');
    $stylesheet = 'admin';
    $data['title'] = 'Hello world';
    $this->loadTemplateAdmin('ADMIN', 'admin_creat_view', $stylesheet, $modules, $data);
  }

  public function account() {
    $modules = array( 'module.admin');
    $stylesheet = 'admin';
    $data['title'] = 'Hello world';
    $this->loadTemplateAdmin('ADMIN', 'admin_view_account', $stylesheet, $modules, $data);
  }

  public function story() {
    $modules = array( 'module.admin');
    $stylesheet = 'admin';
    $data['title'] = 'Hello world';
    $this->loadTemplateAdmin('ADMIN', 'admin_view_story', $stylesheet, $modules, $data);
  }

  public function get_listBambo() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getListBambo ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  public function get_listAccount() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getListAccount ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  public function a2018_updateKD100() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->a2018UpdateKD100 ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  public function a2018_updateTK100() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->a2018UpdateTK100($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function a2018_updateLI100() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->a2018UpdateLI100($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function a2018_updateBL100() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->a2018UpdateBL100($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function a2018_update_notifiction() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->a2018UpdateNotifiction($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function a2018_send_notification() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->a2018SendNotification($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function a2018_send_messenger() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->a2018SendMessenger($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  /*     * **************************************************************** */
  /*     * ****************************[PRIVATE]*************************** */
  /*     * **************************************************************** */

  private function getListBambo($get) {
    $data = array(
      'BV151' => isset($get['BV151']) ? $get['BV151'] : 0,
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->ADM_MODELS->a2018_listOfTopic_BV100($data);
  }

  private function getListAccount($get) {
    $data = array(
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->ADM_MODELS->a2018_listOfTabTK100($data);
  }

  private function getListFeedback($get) {
    $data = array(
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->G100_MODELS->f2018_get_feedback($data);
  }

  private function a2018UpdateKD100($post)/*     * : array */ {
    $data = array(
      'KD150' => isset($post['KD150']) ? $post['KD150'] : 0,
      'KD100' => isset($post['KD100']) ? $post['KD100'] : 0,
    );
    return  $this->G100_MODELS->a2018_updateKD100($data);
  }

  private function a2018UpdateTK100($post)/*     * : array */ {
    $data = array(
      'TK159' => isset($post['TK159']) ? $post['TK159'] : 0,
      'TK100' => isset($post['TK100']) ? $post['TK100'] : 0,
    );
    return  $this->G100_MODELS->a2018_updateTK100($data);
  }

  private function a2018UpdateLI100($post)/*     * : array */ {
    $data = array(
      'LI152' => isset($post['LI152']) ? $post['LI152'] : 0,
      'LI100' => isset($post['LI100']) ? $post['LI100'] : 0,
    );
    return  $this->G100_MODELS->a2018_updateLI100($data);
  }

  private function a2018UpdateBL100($post)/*     * : array */ {
    $data = array(
      'BL100' => isset($post['BL100']) ? $post['BL100'] : 0,
      'BL155' => isset($post['BL155']) ? $post['BL155'] : 0,
    );
    return  $this->G100_MODELS->a2018_updateBL100($data);
  }

  private function a2018UpdateNotifiction($post)/*     * : array */ {
    $data = array(
      'TB100' => isset($post['TB100']) ? $post['TB100'] : 0,
      'TB152' => isset($post['TB152']) ? $post['TB152'] : 0,
    );
    return  $this->G100_MODELS->a2018_update_notifiction($data);
  }

  private function a2018SendNotification($post)/*     * : array */ {
    $data = array(
      'TK100' => isset($post['TK100']) ? $post['TK100'] : 0,
      'TB150' => isset($post['TB150']) ? $post['TB150'] : 0,
      'TB152' => isset($post['TB152']) ? $post['TB152'] : 0,
    );
    return  $this->G100_MODELS->a2018_send_notification($data);
  }

  private function a2018SendMessenger($post)/*     * : array */ {
    $data = array(
      'TK101' => isset($post['TK101']) ? $post['TK101'] : 0,
      'TK102' => isset($post['TK102']) ? $post['TK102'] : 0,
      'TN150' => isset($post['TN150']) ? $post['TN150'] : 0,
    );
    return  $this->G100_MODELS->a2018_send_messenger($data);
  }
  
}
