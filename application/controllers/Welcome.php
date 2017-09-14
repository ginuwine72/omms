<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {

	public function __construct()
	{
    parent::__construct();
  }

  function index()
  {
		$this->data['page_header'] = 'หน้าหลัก';
		$this->data['page_header_small'] = 'ข้อมูลทั่วไป/เกี่ยวกับการใช้งาน';
		$this->data['header'] = array(
			$this->load->view('_partials/header',$this->data,TRUE),
			$this->load->view('_partials/jumbotron',NULL,TRUE)
		);
		$this->data['parent'] = 'home';
		$this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
		$this->data['body'] = $this->load->view('welcome/index',NULL,TRUE);
		$this->load->view('_layouts/boxed',$this->data);
  }

}
