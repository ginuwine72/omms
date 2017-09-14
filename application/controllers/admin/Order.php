<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Order_model','order');

    $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
    $this->data['navbar'] = $this->load->view('_partials/menubar',$this->data,TRUE);
  }

  function index()
  {
    $this->data['orders'] = $this->order->search();
    $this->data['body'] = $this->load->view('order/list',$this->data,TRUE);
    $this->load->view('_layouts/boxed', $this->data);
  }

  function view($id='')
  {
    $this->form_validation->set_rules('status','สถานะการตอบกลับ','required');
    if ($this->form_validation->run() === FALSE) :
      $this->session->set_flashdata('warning',validation_errors());
    else:
      $data = $this->input->post();
      $data['admin_id'] = $this->session->user_id;
      $data['date_update'] = time();
      if($this->order->save($data)) :
        $this->session->set_flashdata('message','บันทึกข้อมูลเสร็จสิ้น');
      else:
        $this->session->set_flashdata('message','บันทึกข้อมูลล้มเหลว');
      endif;
      redirect('admin/order','refresh');
    endif;

    $this->data['order'] = $this->order->search_id($id);
    $this->data['order']['admin_id'] = $this->ion_auth->user($this->data['order']['admin_id'])->row_array();
    $this->data['body'] = $this->load->view('order/view',$this->data,TRUE);
    $this->load->view('_layouts/boxed', $this->data);
  }

  function delete($id='')
  {
    $this->order->remove($id);

    redirect('admin/order');
  }

}
