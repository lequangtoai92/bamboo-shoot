<?php

/**
 * @author: Toailq - 20/07/2018
 * @module: Account
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Account extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
    $this->load->model('A100_models', 'A100_MODELS');
    $this->load->model('B100_models', 'B100_MODELS');
    $this->load->model('Login_models', 'LOGIN_MODELS');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
        $modules = array( 'module.account');
        $stylesheet = 'account';
        $data['title'] = 'Hello world';
        $this->renderTemplate('Tài khoản', 'account_view', $stylesheet, $modules, $data);
  }

  public function user(){
    $modules = array( 'module.account_user');
    $stylesheet = 'account';
    $data['title'] = 'Hello world';
    $this->renderTemplate('Tác giả', 'info_view', $stylesheet, $modules, $data);
  }

  public function get_info_account() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getInfoAccount ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
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

  public function get_list_messenger() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getListMessenger ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  public function get_list_notifiction() {
    $get = $_GET;
    $res = array('status' => 'error', 'message' => '');
    $arrayRS = $this->getListNotifiction ($get);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = '';
    };
    echo json_encode($res);
  }

  public function update_info_account() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->updateInfoAccount($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function update_story() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->updateStory($post);
    if ($arrayRS > 0) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function update_pass() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->updatePass($post);
    if ($arrayRS != false) {
        $res['status'] = 'success';
        $res['data'] = $arrayRS;
        $res['message'] = 'Cám ơn bạn đã góp ý cho chúng tôi!';
    };
    echo json_encode($res);
  }

  public function update_notifiction() {
    $post = $_POST;
    $res = array('status' => 'error', 'message' => 'Gửi dữ liệu không thành công!');
    $arrayRS = $this->updateNotifiction($post);
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

  private function getInfoAccount($get) {
    if(isset($get["userName"])){
      $TK100 = $get["userName"];
    }else{
      $TK100 = $this->session->userdata('B_LOGIN')['TK100'];
    }
    $data = array(
      'TK100' => $TK100,//id nguoi tao
    );
    return $this->A100_MODELS->a2018_get_account($data);
  }

  private function getListStory($get) {
    if(isset($get["userName"])){
      $TK100 = $get["userName"];
    }else{
      $TK100 = $this->session->userdata('B_LOGIN')['TK100'];
    }
    $data = array(
      'TK100' => $TK100,//id nguoi tao
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->B100_MODELS->b2018_listOfAcount($data);
  }

  private function getListMessenger($get) {
    $data = array(
      'TK100' => $this->session->userdata('B_LOGIN')['TK100'],//id nguoi tao
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->A100_MODELS->a2018_get_messenger($data);
  }

  private function getListNotifiction($get) {
    $data = array(
      'TK100' => $this->session->userdata('B_LOGIN')['TK100'],//id nguoi tao
      'LIMIT' => isset($get['limit']) ? $get['limit'] : 15,
      'START' => isset($get['start']) ? $get['start'] : 0,
    );
    return $this->A100_MODELS->a2018_get_notifiction($data);
  }


  private function updateInfoAccount($post)/*     * : array */ {
    $data = array(
      'TK100' => $this->session->userdata('B_LOGIN')['TK100'],//id nguoi tao
      'TK151' => isset($post['TK151']) ? $post['TK151'] : 0,
      'TK152' => isset($post['TK152']) ? $post['TK152'] : 0,
      'TK153' => isset($post['TK153']) ? $post['TK153'] : NULL,
      'TK154' => isset($post['TK154']) ? $post['TK154'] : 0,
      'TK155' => isset($post['TK155']) ? $post['TK155'] : NULL,
      'TK156' => isset($post['TK156']) ? $post['TK156'] : NULL,
      'TK157' => isset($post['TK157']) ? $post['TK157'] : NULL
    );
    return  $this->A100_MODELS->a2018_update_account($data);
  }

  private function updateStory($post)/*     * : array */ {
    $data = array(
      'KD100' => isset($post['KD100']) ? $post['KD100'] : 0,
      'KD150' => isset($post['KD150']) ? $post['KD150'] : 0,
    );
    return  $this->A100_MODELS->a2018_updateKD100($data);
  }

  private function updatePass($post)/*     * : array */ {
    $dataLogin = array(
      'LI150' => $this->session->userdata('B_LOGIN')['LI150'],
      'LI151' => isset($post['old_pass']) ? md5($post['old_pass']) : '',
    );
    $result = $this->LOGIN_MODELS->login($dataLogin);
    if ($result !== false) {
      $data = array(
        'LI100' => $this->session->userdata('B_LOGIN')['TK100'],//id nguoi tao
        'LI151' => isset($post['new_pass']) ? md5($post['new_pass']) : '',
      );
      return  $this->A100_MODELS->a2018_update_pass($data);
    } else {
      return false;
    }
  }

  private function updateNotifiction($post)/*     * : array */ {
    $data = array(
      'TB100' => isset($post['TB100']) ? $post['TB100'] : NULL,
      'TB152' => isset($post['TB152']) ? $post['TB152'] : NULL,
    );
    return  $this->A100_MODELS->a2018_update_notifiction($data);
  }
  



























  public function connect(){
        
    $ham_update_hay = "UPDATE DG100 SET DG150 = DG150 + 1 ,
                    DG151 = CONCAT(DG151," . $data['TK100'] . ") 
                    WHERE BV100 =" . $data['BV100'];
    $ham_update_chan = "UPDATE DG100 SET DG152 = DG152 + 1 , 
                    DG153 = CONCAT(DG153," . $data['TK100'] . ") 
                    WHERE BV100 =" . $data['BV100'];

    
    $ham_binh_luan = "INSERT INTO BL100 (BV100, TK100, BL150, BL152, BL153, BL154, BL155) 
                    VALUES (" . $data['BV100'] . "," . $data['TK100'] . "," . $data['BL150'] . "," . $data['BL152'] . 
                    "," . $data['BL153'] . "," . $data['BL154'] . "," . $data['BL155'] . ")";
    
    /****** xong */
    $ham_login = "SELECT * FROM LI100 WHERE LI150=" . $data['LI150'] . " AND LI151=" . $data['LI151'] . " Orders LIMIT 1";
    $ham_insert_login = "INSERT INTO LI100 (LI150, LI151, LI152) VALUES (" . $data['LI150'] . "," . $data['LI151'] . "," . $data['LI152'] . ")";
    $ham_check_insert_login = "SELECT * FROM LI100 WHERE LI150=" . $data['LI150'] . " Orders LIMIT 1";

    $ham_dangky = "INSERT INTO TK100 (TK151, TK152, TK153, TK154, TK155, TK156, TK157, TK159) 
                    VALUES (" . $data['TK151'] . "," . $data['TK152'] . "," . $data['TK153'] . "," . $data['TK154'] .
                        "," . $data['TK155'] ."," . $data['TK156'] ."," . $data['TK157'] ."," . $data['TK159'] .")";

    $ham_updata_gopy = "UPDATE GY100 SET GY152 =" . $data['GY152'] . "WHERE GY100 =" . $data['GY100'];
    $ham_laylistgoyy = "SELECT * FROM GY100 ORDER BY GY151 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_insert_gopy = "INSERT INTO GY100 (TK100, GY150, GY152, GY153, GY154, GY155, GY156) 
                        VALUES (" . $data['TK100'] . "," . $data['GY150'] . "," . $data['GY152'] . "," . $data['GY153'] . 
                        "," . $data['GY154'] . "," . $data['GY155'] . "," . $data['GY156'] . ")";

    $ham_taomoi_sach = "INSERT INTO BV100 (TK100, BV150, BV151, BV152, BV153, BV154, BV156, BV157, BV158) 
                        VALUES (" . $data['TK100'] . "," . $data['BV150'] . "," . $data['BV151'] . "," . $data['BV152'] .
        "," . $data['BV153'] ."," . $data['BV154'] ."," . $data['BV156'] . "," . $data['BV157'] .
        "," . $data['BV158'] .")";
    $ham_taomoi_noidung = "INSERT INTO ND100 (ND150) VALUES (" . $data['ND150'] . ")";
    $ham_taomoi_danhgia = "INSERT INTO DG100 (DG150, DG151, DG152, DG153, DG154, DG155, DG156) 
                        VALUES (0, '', 0, '', 0, 0, '')";
    $ham_taomoi_kiemduyet = "INSERT INTO KD100 (TK100, KD150) 
                        VALUES (0, 0)";
    $ham_laylistsach = "SELECT * FROM BV100 ORDER BY BV155 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_laynoidung_truyen = "SELECT * FROM ND100 WHERE BV100=" . $data['BV100'];
    $ham_updata_sach = "UPDATE BV100 
                            SET BV150 =" . $data['BV150'] . "," .
                                "BV151 =" . $data['BV151'] . "," .
                                "BV152 =" . $data['BV152'] . "," .
                                "BV153 =" . $data['BV153'] . "," .
                                "BV154 =" . $data['BV154'] . "," .
                                "BV156 =" . $data['BV156'] . "," .
                                "BV157 =" . $data['BV157'] . "," .
                                "BV158 =" . $data['BV158'] .
                            "WHERE BV100 =" . $data['BV100'];
    $ham_layds_truyendaviet = "SELECT * FROM BV100 WHERE TK100=" . $data['TK100'] . "ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_laythontinsach = "SELECT * FROM BV100 WHERE BV100=" . $data['BV100'];
    $ham_layds_truyencotich = "SELECT * FROM CT100 ORDER BY CT156 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_layds_truyen_theocd = "SELECT * FROM BV100 WHERE BV151 =" . $data['BV151'] . " ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];

    $ham_laythontintaikhoan = "SELECT * FROM TK100 WHERE TK100=" . $data['TK100'];
    $ham_updata_taikhoan = "UPDATE TK100 
                            SET TK151 =" . $data['TK151'] . "," .
                                "TK152 =" . $data['TK152'] . "," .
                                "TK153 =" . $data['TK153'] . "," .
                                "TK154 =" . $data['TK154'] . "," .
                                "TK155 =" . $data['TK155'] . "," .
                                "TK156 =" . $data['TK156'] . "," .
                                "TK157 =" . $data['TK157'] . "," .
                                "TK159 =" . $data['TK159'] .
                            "WHERE TK100 =" . $data['TK100'];
    $ham_updata_matkhau = "UPDATE LI100 SET LI151 =" . $data['LI151'] . "WHERE LI100 =" . $data['LI150'];
    $ham_lay_tn = "SELECT * FROM TN100 WHERE TK101=" . $data['TK100'] . " OR TK102=" . $data['TK100'] . "ORDER BY TN151 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_lay_TB = "SELECT * FROM TB100 WHERE TK100=" . $data['TK100'] . "ORDER BY TB151 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_update_tb = "UPDATE TB100 SET TB152 =" . $data['TB152'] . "WHERE TB100 =" . $data['TB100'];
    $ham_insert_tn = "INSERT INTO TN100 (TK101, TK102, TN150) VALUES (" . $data['TK101'] . "," . $data['TK102'] . "," . $data['TN150'] . ")";
    
    //-----------admin------------
    $ham_layds_truyen_theocd_admin = "SELECT * FROM BV100 WHERE BV151 =" . $data['BV151'] . " ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_layds_TK_admin = "SELECT * FROM TK100 ORDER BY KT158 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    $ham_insert_tb = "INSERT INTO TB100 (TK100, TB150, TB152) VALUES (" . $data['TK100'] . "," . $data['TB150'] . "," . $data['TB152'] . ")";
    $ham_updata_sach_admin = "UPDATE KD100 SET KD150 =" . $data['KD150'] . "WHERE KD100 =" . $data['KD100'];
    $ham_updata_taikhoan_admin = "UPDATE TK100 SET TK159 =" . $data['TK159'] . "WHERE TK100 =" . $data['TK100'];
    $ham_updata_login_admin = "UPDATE LI100 SET LI152 =" . $data['LI152'] . "WHERE LI100 =" . $data['LI150'];
    $ham_updata_binhluan = "UPDATE BL100 SET BL155 =" . $data['BL155'] . "WHERE BL100 =" . $data['BL100'];





}
}
