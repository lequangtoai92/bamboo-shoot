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
}
