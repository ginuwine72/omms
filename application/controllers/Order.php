<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Public_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
    $this->load->model('Order_model','order');

    $this->data['page_header'] = 'หน้ารายการแจ้งซ่อม';
    $this->data['page_header_small'] = 'แสดงข้อมูลรายการทั้งหมด';
    $this->data['parent'] = 'order';
    $this->data['css'] = array(link_tag('assets/css/wysihtml5.min.css'));
    $this->data['js'] = array(script_tag('assets/js/wysihtml5.all.min.js'));
    $this->data['header'] = array($this->load->view('_partials/header',$this->data,TRUE));
    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
  }

  function index()
  {
    $this->data['orders'] = $this->order->search();
    $this->data['body'] = $this->load->view('order/index',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function form()
  {
    $this->form_validation->set_rules('title','หัวข้อเรื่อง','required');
    if ($this->form_validation->run() === FALSE) :
      $this->session->set_flashdata('warning',validation_errors());
    else:
      $data = $this->input->post();
      $data['date_create'] = time();
      if($this->order->save($data)) :
        $this->session->set_flashdata('success','บันทึกข้อมูลเสร็จสิ้น');
      else:
        $this->session->set_flashdata('warning','บันทึกข้อมูลล้มเหลว');
      endif;
      redirect('order');
    endif;

    $this->data['body'] = $this->load->view('order/form',NULL,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

}
