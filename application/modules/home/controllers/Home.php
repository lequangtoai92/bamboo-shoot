<?php

/**
 * @author: Toailq - 25/06/2018
 * @module: Home
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once (APPPATH . "controllers/History.php");

class Home extends History {

  public function __construct() {
    parent::__construct();
    $this->lang->load('history');
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
        $modules = array( 'module.home');
        $stylesheet = 'home';
        $data['title'] = 'Hello world';
        $this->loadTemplate('Trang chủ', 'home_view', $stylesheet, $modules, $data);
  }

  /**
   * @Input: void
   * @Output: boolean
   * @Diescription: call at any module required login, check login state from session -> true | false
   */
  // private function _checkLogin() {
  //   $ss = $this->session->userdata(F_USER);
  //   return isset($ss) && !empty($ss);
  // }

}
