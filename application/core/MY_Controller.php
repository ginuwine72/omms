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
      'body_class' => '',
      'leftbar' => '',
      'rightbar' => ''
    );
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

class Admin_Controller extends Private_Controller {

  public function __construct()
  {
    parent::__construct();
    if ( ! $this->ion_auth->in_group('admin'))
      redirect('auth/logout');

    $this->data['body_class'] = 'bg-success';
    $this->data['page_header'] = 'ส่วนของผู้ดูแลระบบ';
    $this->data['page_header_small'] = 'ทำหน้าที่จัดการข้อมูลภายในระบบ';
    $this->data['header'] = array($this->load->view('_partials/header',$this->data,TRUE));
  }

}

class Technician_Controller extends Private_Controller {

  public function __construct()
  {
    parent::__construct();
    if ( ! $this->ion_auth->in_group('technician'))
      redirect('auth/logout');

    $this->data['body_class'] = 'bg-info';
    $this->data['page_header'] = 'ส่วนของช่างเทคนิคซ่อมบำรุง';
    $this->data['page_header_small'] = 'ทำหน้าที่จัดการตรวจสอบรายการแจ้งซ่อม';
    $this->data['header'] = $this->load->view('_partials/header',$this->data,TRUE);
  }

}
