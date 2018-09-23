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
  }

  /*   * **************************************************************** */
  /*   * **************************[PUBLIC]****************************** */
  /*   * **************************************************************** */

  public function index() {
        $modules = array( 'module.creat');
        $stylesheet = 'creat';
        $data['title'] = 'Hello world';
        $this->loadTemplate('Tạo mới', 'creat_view', $stylesheet, $modules, $data);
  }
}
