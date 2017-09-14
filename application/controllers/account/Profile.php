<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Private_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
    $this->data['user'] = $this->ion_auth->user()->row_array();
  }

  function index()
  {
    $this->form_validation->set_rules('','','');
    if ($this->form_validation->run() === FALSE) :
    else:
      $data = $this->input->post();
      if($this->ion_auth->update($this->session->user_id,$data)) :
        $this->session->set_flashdata('message', $this->ion_auth->messages());
      else:
        $this->session->set_flashdata('message', $this->ion_auth->errors());
      endif;
      redirect('account/profile','refresh');
    endif;

    $this->data['menu'] = 'profile';
    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
    $this->data['rightbar'] = $this->load->view('_partials/rightbar',NULL,TRUE);
    $this->data['body'] = $this->load->view('profile/profile',$this->data,TRUE);
    $this->load->view('_layouts/rightside',$this->data);
  }

  function edit()
  {
    $this->form_validation->set_rules('','','');
    if ($this->form_validation->run() === FALSE) :
    else:
      $data = $this->input->post();
      if($this->ion_auth->update($this->session->user_id,$data)) :
        $this->session->set_flashdata('message', $this->ion_auth->messages());
      else:
        $this->session->set_flashdata('message', $this->ion_auth->errors());
      endif;
      redirect('account/profile/edit','refresh');
    endif;

    $this->data['menu'] = 'edit';
    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
    $this->data['rightbar'] = $this->load->view('_partials/rightbar',NULL,TRUE);
    $this->data['body'] = $this->load->view('profile/edit',$this->data,TRUE);
    $this->load->view('_layouts/rightside',$this->data);
  }

  function change_password()
  {
    $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
    $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
    $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');
    $user = $this->ion_auth->user()->row();
    if ($this->form_validation->run() === FALSE) :
    else:
      $identity = $this->session->userdata('identity');
      $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));
      if ($change) :
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        $this->logout();
      else:
        $this->session->set_flashdata('message', $this->ion_auth->errors());
        redirect('account/profile/change_password','refresh');
      endif;
    endif;

    $this->data['menu'] = 'change_password';
    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
    $this->data['rightbar'] = $this->load->view('_partials/rightbar',NULL,TRUE);
    $this->data['body'] = $this->load->view('profile/change_password',$this->data,TRUE);
    $this->load->view('_layouts/rightside',$this->data);
  }

}
