<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Asset_model','asset');
  }

  function index()
  {
    $config	= array(
      'base_url' => site_url('admin/asset'),
      'total_rows' => count($this->asset->search()),
      'per_page' => 20
    );
    $offset = ($this->input->get('p')) ? $this->input->get('p') : '0';
    $this->pagination->initialize($config);

    $this->data['assets'] = $this->asset->search('',$config['per_page'],$offset);
    $this->data['body'] = $this->load->view('asset/index',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function test()
  {
    $this->data['body'] = $this->load->view('asset/add',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function upload()
  {
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) :
      $upload = array(
        'allowed_types'	=> 'jpeg|jpg|png',
        'upload_path'	=> FCPATH.'uploads/attachments',
        'encrypt_name' => TRUE,
        'file_ext_tolower' => TRUE
      );
      $this->upload->initialize($upload);
      if ($this->upload->do_upload('file')) :
        $data = array();
        foreach ($this->upload->data() as $key => $value) :
          $data[$key] = $value;
        endforeach;
        if ($this->asset->save($data)) :
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
        endif;
      else :
        $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($this->upload->display_errors()));
      endif;
    endif;

    redirect('admin/asset');
  }

}
