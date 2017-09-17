<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->data = array(
      'page_title' => 'Order Maintainance Management System',
      'page_header' => '',
      'page_header_small' => '',
      'parent' => '',
      'menu' => '',
      'meta_tag' => array(),
      'css' => array(),
      'js' => array(),
      'header' => '',
      'footer' => '',
      'navbar' => '',
      'body' => '',
      'leftbar' => '',
      'rightbar' => ''
    );
  }

}

class Public_Controller extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    // if ($this->ion_auth->in_group('member'))
  }

}

class Private_Controller extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    if ( ! $this->ion_auth->logged_in())
      redirect('auth/logout');
  }

}

class Admin_Controller extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    if ( ! $this->ion_auth->is_admin())
      redirect('auth/logout');
  }

}
