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
}
