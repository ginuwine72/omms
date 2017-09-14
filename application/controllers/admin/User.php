<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
    $this->data['navbar'] = $this->load->view('_partials/menubar',$this->data,TRUE);

    $this->data['users'] = $this->ion_auth->users()->result_array();
    $this->data['group'] = $this->ion_auth->groups()->result_array();
  }

  function index()
  {
    foreach ($this->data['users'] as $k => $user)
    {
      $this->data['users'][$k]['groups'] = $this->ion_auth->get_users_groups($user['id'])->result();
    }
    $this->data['body'] = $this->load->view('user/index',$this->data,TRUE);
    $this->load->view('_layouts/boxed', $this->data);
  }

  function activate($id, $code=false)
  {
    if ($code !== false)
    {
      $activation = $this->ion_auth->activate($id, $code);
    }
    elseif ($this->ion_auth->is_admin())
    {
      $activation = $this->ion_auth->activate($id);
    }

    if ($activation)
    {
      $this->session->set_flashdata('message', $this->ion_auth->messages());
      redirect("auth", 'refresh');
    }
    else
    {
      $this->session->set_flashdata('message', $this->ion_auth->errors());
      redirect("auth/forgot_password", 'refresh');
    }
  }

  function deactivate($id = NULL)
  {
    $id = (int) $id;

    $this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
    $this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');
    if ($this->form_validation->run() == FALSE)
    {
      $this->data['csrf'] = $this->_get_csrf_nonce();
      $this->data['user'] = $this->ion_auth->user($id)->row();
      $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
      $this->data['body'] = $this->load->view('auth/deactivate_user', $this->data, TRUE);
      $this->load->view('_layouts/fullwidth', $this->data);
    }
    else
    {
      if ($this->input->post('confirm') == 'yes')
      {
        if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
        {
          show_error($this->lang->line('error_csrf'));
        }
        else
        {
          $this->ion_auth->deactivate($id);
        }
      }
      redirect('auth', 'refresh');
    }
  }

  function create_user()
  {
    $this->data['title'] = $this->lang->line('create_user_heading');

    $tables = $this->config->item('tables','ion_auth');
    $identity_column = $this->config->item('identity','ion_auth');
    $this->data['identity_column'] = $identity_column;

    // validate form input
    // $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
    // $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
    if($identity_column!=='email')
    {
      $this->form_validation->set_rules('identity',$this->lang->line('create_user_validation_identity_label'),'required|is_unique['.$tables['users'].'.'.$identity_column.']');
      $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
    }
    else
    {
      $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
    }
    $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
    $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

    if ($this->form_validation->run() == true)
    {
      $email    = strtolower($this->input->post('email'));
      $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
      $password = $this->input->post('password');

      $additional_data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name'  => $this->input->post('last_name'),
      'company'    => $this->input->post('company'),
      'phone'      => $this->input->post('phone'),
      );
    }
    if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data))
    {
      // check to see if we are creating the user
      // redirect them back to the admin page
      $this->session->set_flashdata('message', $this->ion_auth->messages());
      redirect("auth", 'refresh');
    }
    else
    {
      // display the create user form
      // set the flash data error message if there is one
      $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

      // $this->data['first_name'] = array(
      //     'name'  => 'first_name',
      //     'id'    => 'first_name',
      //     'type'  => 'text',
      //     'value' => $this->form_validation->set_value('first_name'),
      // );
      // $this->data['last_name'] = array(
      //     'name'  => 'last_name',
      //     'id'    => 'last_name',
      //     'type'  => 'text',
      //     'value' => $this->form_validation->set_value('last_name'),
      // );
      $this->data['identity'] = array(
      'name'  => 'identity',
      'id'    => 'identity',
      'type'  => 'text',
      'value' => $this->form_validation->set_value('identity'),
      );
      $this->data['email'] = array(
      'name'  => 'email',
      'id'    => 'email',
      'type'  => 'text',
      'value' => $this->form_validation->set_value('email'),
      );
      $this->data['password'] = array(
      'name'  => 'password',
      'id'    => 'password',
      'type'  => 'password',
      'value' => $this->form_validation->set_value('password'),
      );
      $this->data['password_confirm'] = array(
      'name'  => 'password_confirm',
      'id'    => 'password_confirm',
      'type'  => 'password',
      'value' => $this->form_validation->set_value('password_confirm'),
      );

      $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
      $this->data['body'] = $this->load->view('auth/create_user', $this->data, TRUE);
      $this->load->view('_layouts/fullwidth', $this->data);
      // $this->_render_page('auth/create_user', $this->data);
    }
  }

  function edit_user($id)
  {
    if ( ! $this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id)))
    {
      redirect('auth', 'refresh');
    }
    $user = $this->ion_auth->user($id)->row_array();
    $groups=$this->ion_auth->groups()->result_array();
    $currentGroups = $this->ion_auth->get_users_groups($id)->result();

    // validate form input
    // $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required');
    // $this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required');
    $this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required');
    $this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required');
    if (isset($_POST) && !empty($_POST))
    {
      if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
      {
        show_error($this->lang->line('error_csrf'));
      }
      if ($this->input->post('password'))
      {
        $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
      }
      if ($this->form_validation->run() === TRUE)
      {
        $data = array(
        // 'first_name' => $this->input->post('first_name'),
        // 'last_name'  => $this->input->post('last_name'),
        // 'company'    => $this->input->post('company'),
        // 'phone'      => $this->input->post('phone'),
        );
        if ($this->input->post('password'))
        {
          $data['password'] = $this->input->post('password');
        }
        if ($this->ion_auth->is_admin())
        {
          $groupData = $this->input->post('groups');
          if (isset($groupData) && !empty($groupData))
          {
            $this->ion_auth->remove_from_group('', $id);
            foreach ($groupData as $grp)
            {
              $this->ion_auth->add_to_group($grp, $id);
            }

          }
        }
        if ($this->ion_auth->update($user->id, $data))
        {
          $this->session->set_flashdata('message', $this->ion_auth->messages() );
          if ($this->ion_auth->is_admin())
          {
            redirect('auth', 'refresh');
          }
          else
          {
            redirect('/', 'refresh');
          }
        }
        else
        {
          $this->session->set_flashdata('message', $this->ion_auth->errors() );
          if ($this->ion_auth->is_admin())
          {
            redirect('auth', 'refresh');
          }
          else
          {
            redirect('/', 'refresh');
          }
        }
      }
    }
    $this->data['csrf'] = $this->_get_csrf_nonce();
    $this->data['user'] = $user;
    $this->data['groups'] = $groups;
    $this->data['currentGroups'] = $currentGroups;

    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
    $this->data['body'] = $this->load->view('auth/edit_user', $this->data, TRUE);
    $this->load->view('_layouts/fullwidth', $this->data);
  }

  function create_group()
  {
    if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
    {
      redirect('auth', 'refresh');
    }
    $this->form_validation->set_rules('group_name', $this->lang->line('create_group_validation_name_label'), 'required|alpha_dash');
    if ($this->form_validation->run() == TRUE)
    {
      $new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
      if($new_group_id)
      {
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect("auth", 'refresh');
      }
    }
    else
    {
      // display the create group form
      // set the flash data error message if there is one
      $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

      $this->data['group_name'] = array(
      'name'  => 'group_name',
      'id'    => 'group_name',
      'type'  => 'text',
      'value' => $this->form_validation->set_value('group_name'),
      );
      $this->data['description'] = array(
      'name'  => 'description',
      'id'    => 'description',
      'type'  => 'text',
      'value' => $this->form_validation->set_value('description'),
      );

      $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
      $this->data['body'] = $this->load->view('auth/create_group', $this->data, TRUE);
      $this->load->view('_layouts/fullwidth', $this->data);
      // $this->_render_page('auth/create_group', $this->data);
    }
  }

  function edit_group($id)
  {
    // bail if no group id given
    if(!$id || empty($id))
    {
      redirect('auth', 'refresh');
    }

    $this->data['title'] = $this->lang->line('edit_group_title');

    if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
    {
      redirect('auth', 'refresh');
    }

    $group = $this->ion_auth->group($id)->row();

    // validate form input
    $this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash');

    if (isset($_POST) && !empty($_POST))
    {
      if ($this->form_validation->run() === TRUE)
      {
        $group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

        if($group_update)
        {
          $this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));
        }
        else
        {
          $this->session->set_flashdata('message', $this->ion_auth->errors());
        }
        redirect("auth", 'refresh');
      }
    }

    // set the flash data error message if there is one
    $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

    // pass the user to the view
    $this->data['group'] = $group;

    $readonly = $this->config->item('admin_group', 'ion_auth') === $group->name ? 'readonly' : '';

    $this->data['group_name'] = array(
    'name'    => 'group_name',
    'id'      => 'group_name',
    'type'    => 'text',
    'value'   => $this->form_validation->set_value('group_name', $group->name),
    $readonly => $readonly,
    );
    $this->data['group_description'] = array(
    'name'  => 'group_description',
    'id'    => 'group_description',
    'type'  => 'text',
    'value' => $this->form_validation->set_value('group_description', $group->description),
    );

    $this->data['navbar'] = $this->load->view('_partials/navbar',$this->data,TRUE);
    $this->data['body'] = $this->load->view('auth/edit_group', $this->data, TRUE);
    $this->load->view('_layouts/fullwidth', $this->data);
    // $this->_render_page('auth/edit_group', $this->data);
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
