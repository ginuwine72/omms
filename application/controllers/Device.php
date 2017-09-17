<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends Public_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
    $this->load->model('Device_model','device');
    $this->load->model('Asset_model','asset');

    $this->data['page_header'] = 'หน้ารายการอุปกรณ์';
    $this->data['page_header_small'] = 'แสดงข้อมูลรายการทั้งหมด';
    $this->data['parent'] = 'device';
    $this->data['header'] = array($this->load->view('_partials/header',$this->data,TRUE));
    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
  }

  function index()
  {
    $this->data['devices'] = $this->device->search();
    $this->data['body'] = $this->load->view('device/list',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function view($id='')
  {
    $this->data['device'] = $this->device->search_id($id);
    $this->data['asset'] = $this->asset->find_attachment(unserialize($this->data['device']['attachments']));
    $this->data['body'] = $this->load->view('device/view',$this->data,TRUE);
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
