<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['navbar'] = $this->load->view('_partials/menubar',$this->data,TRUE);
  }

  function index()
  {
    $this->data['users'] = $this->ion_auth->users()->result_array();
    foreach ($this->data['users'] as $k => $user)
    {
      $this->data['users'][$k]['groups'] = $this->ion_auth->get_users_groups($user['id'])->result_array();
    }
    $this->data['group'] = $this->ion_auth->groups()->result_array();
    $this->data['body'] = $this->load->view('user/index',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function activate($id='')
  {
    $id = (int) $id;
    $activation = $this->ion_auth->activate($id);
    if ($activation)
      $this->session->set_flashdata('message', $this->ion_auth->messages());

    redirect('admin/user','refresh');
  }

  function deactivate($id='')
  {
    $id = (int) $id;
    $deactivate = $this->ion_auth->deactivate($id);
    if ($deactivate)
      $this->session->set_flashdata('message', $this->ion_auth->messages());

    redirect('admin/user','refresh');
  }

  function create_user()
  {
    $this->form_validation->set_rules('email','อีเมล์','required');
    $this->form_validation->set_rules('password','รหัสผ่าน','required|min_length['.$this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
    $this->form_validation->set_rules('password_confirm','รหัสผ่าน(ยืนยัน)','required');
    if ($this->form_validation->run() === TRUE)
    {
      $email = strtolower($this->input->post('email'));
      $password = $this->input->post('password');
      $additional_data = array(
        'title' => $this->input->post('title'),
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname')
      );
      if ($this->ion_auth->register($email, $password, $email, $additional_data))
      {
        $this->session->set_flashdata('success',$this->ion_auth->messages());
      }
      else
      {
        $this->session->set_flashdata('danger',$this->ion_auth->errors());
      }
      redirect('admin/user');
    }
    else
    {
      $this->session->set_flashdata('warning',validation_errors());
    }

    $groups = $this->ion_auth->groups()->result_array();
    foreach ($groups as $value)
      $this->data['groups'][$value['id']] = $value['name'];

    $this->data['body'] = $this->load->view('user/add',$this->data,TRUE);
    $this->load->view('_layouts/boxed', $this->data);
  }

  function edit_user($id)
  {
    $this->form_validation->set_rules('title','คำนำหน้าชื่อ','required');
    if (isset($_POST) && !empty($_POST))
    {
      if ($this->input->post('password'))
      {
        $this->form_validation->set_rules('password',$this->lang->line('edit_user_validation_password_label'),'required|min_length['.$this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm',$this->lang->line('edit_user_validation_password_confirm_label'),'required');
      }
      if ($this->form_validation->run() === TRUE)
      {
        $data = $this->input->post();
        // print_data($data); die();
        if ($this->input->post('password'))
        {
          $data['password'] = $this->input->post('password');
        }
        if ($this->ion_auth->is_admin())
        {
          $groupData = $this->input->post('groups');
          if (isset($groupData) && !empty($groupData))
          {
            $this->ion_auth->remove_from_group('',$id);
            foreach ($groupData as $grp)
            {
              $this->ion_auth->add_to_group($grp,$id);
            }
          }
        }
        if ($this->ion_auth->update($id,$data))
        {
          $this->session->set_flashdata('message',$this->ion_auth->messages());
        }
        else
        {
          $this->session->set_flashdata('message',$this->ion_auth->errors());
        }
      }
      redirect('admin/user');
    }

    $this->data['user'] = $this->ion_auth->user($id)->row_array();
    $this->data['currentGroups'] = array_column($this->ion_auth->get_users_groups($id)->result_array(),'id');
    $groups = $this->ion_auth->groups()->result_array();
    foreach ($groups as $value)
      $this->data['groups'][$value['id']] = $value['name'];

    $this->data['body'] = $this->load->view('auth/edit_user',$this->data,TRUE);
    $this->load->view('_layouts/boxed', $this->data);
  }

  function create_group()
  {
    $this->form_validation->set_rules('name',$this->lang->line('create_group_validation_name_label'),'required|alpha_dash');
    if ($this->form_validation->run() === FALSE)
    {
      $this->data['message'] = validation_errors();
    }
    else
    {
      $new_group_id = $this->ion_auth->create_group($this->input->post('name'), $this->input->post('description'));
      if ($new_group_id)
      {
        $this->session->set_flashdata('message',$this->ion_auth->messages());
      }
      redirect('admin/user','refresh');
    }
    $this->data['body'] = $this->load->view('auth/create_group',$this->data,TRUE);
    $this->load->view('_layouts/boxed', $this->data);
  }

  function edit_group($id)
  {
    if(!$id || empty($id))
    {
      redirect('auth', 'refresh');
    }
    $this->form_validation->set_rules('name','ชื่อกลุ่ม', 'required|alpha_dash');
    if (isset($_POST) && !empty($_POST))
    {
      if ($this->form_validation->run() === TRUE)
      {
        $group_update = $this->ion_auth->update_group($id, $_POST['name'],$_POST['description']);
        if($group_update)
        {
          $this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));
        }
        else
        {
          $this->session->set_flashdata('message', $this->ion_auth->errors());
        }
        redirect("admin/user",'refresh');
      }
    }
    $this->data['group'] = $this->ion_auth->group($id)->row_array();
    $this->data['body'] = $this->load->view('auth/edit_group',$this->data,TRUE);
    $this->load->view('_layouts/boxed',$this->data);
  }

  function _get_csrf_nonce()
  {
    $this->load->helper('string');
    $key   = random_string('alnum', 8);
    $value = random_string('alnum', 20);
    $this->session->set_flashdata('csrfkey', $key);
    $this->session->set_flashdata('csrfvalue', $value);

    return array($key => $value);
  }

  function _valid_csrf_nonce()
  {
    $csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
    if ($csrfkey && $csrfkey == $this->session->flashdata('csrfvalue'))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

}
