<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Device_model','device');
    $this->load->model('Asset_model','asset');

    $this->data['css'] = array(link_tag('assets/css/wysihtml5.min.css'));
    $this->data['js'] = array(script_tag('assets/js/wysihtml5.all.min.js'));
    $this->data['parent'] = 'device';
    $this->data['navbar'] = $this->load->view('_partials/menubar',$this->data,TRUE);
  }

  function index()
  {
    $this->data['devices'] = $this->device->search();
    $this->data['body'] = $this->load->view('device/index',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function add()
  {
    $this->form_validation->set_rules('name','ชื่ออุปกรณ์','required|is_unique[devices.name]');
    if ($this->form_validation->run() === FALSE) :
      $this->session->set_flashdata('warning',validation_errors());
    else:
      $data = $this->input->post();
      $data['date_create'] = time();
      $data['attachments'] = serialize($this->input->post('attachments[]'));
      if($this->device->save($data)) :
        $this->session->set_flashdata('success','บันทึกข้อมูลเสร็จสิ้น');
      else:
        $this->session->set_flashdata('warning','บันทึกข้อมูลล้มเหลว');
      endif;
      redirect('admin/device');
    endif;

    $this->data['assets'] = $this->asset->search();
    $this->data['body'] = $this->load->view('device/add',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function edit($id='')
  {
    $device = $this->device->search_id($id);

    if ($this->input->post('name') !== $device['name']) :
      $this->form_validation->set_rules('name','ชื่ออุปกรณ์','required|is_unique[devices.name]');
    else:
      $this->form_validation->set_rules('name','ชื่ออุปกรณ์','required');
    endif;

    if ($this->form_validation->run() === FALSE) :
      $this->session->set_flashdata('warning',validation_errors());
    else:
      $data = $this->input->post();
      $data['id'] = $id;
      $data['date_update'] = time();
      $data['attachments'] = serialize($this->input->post('attachments[]'));

      // print_data($data); die();

      if($this->device->save($data)) :
        $this->session->set_flashdata('success','บันทึกข้อมูลเสร็จสิ้น');
      else:
        $this->session->set_flashdata('warning','บันทึกข้อมูลล้มเหลว');
      endif;
      redirect('admin/device');
    endif;

    $this->data['device'] = $device;
    $this->data['assets'] = $this->asset->search();
    $this->data['body'] = $this->load->view('device/edit',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

}
