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
}
