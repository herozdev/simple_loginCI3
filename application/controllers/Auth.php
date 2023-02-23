<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
  }

  private function _login()
  {
    if ($this->input->post()) {
      $username = $this->input->post('user_name');
      $password = $this->input->post('user_password');
    }

    $user = $this->db->get_where('users', ['user_name' => $username])->row_array();

    if (!empty($user)) {
      if ($user['is_active'] == 1) {
        if (password_verify($password, $user['user_password'])) {
          $data = array(
            'user_name' => $user['user_name'],
            'role_id' => $user['role_id'], 
          );
          
          $this->session->set_userdata($data);

          if ($user['role_id'] == 1) {
            redirect('admin','refresh');
          } else {
            redirect('member','refresh');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong><i class="ace-icon fa fa-times"></i> Wrong Username and Password!!</strong></div>');
          
          redirect('auth','refresh');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong><i class="ace-icon fa fa-times"></i> This Username is not activated! </strong></div>');
        
        redirect('auth','refresh');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong><i class="ace-icon fa fa-times"></i> This username not registered!! </strong></div>');
      
      redirect('auth','refresh');
    }
  }
  
  public function index()
  {
    $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
    $this->form_validation->set_rules('user_password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Simple Login";
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login', $data);
      $this->load->view('templates/auth_footer', $data);
    } else {
      $this->_login();
    }
  }

  public function signUp()
  {
    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Sign Up";

      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/signup', $data);
      $this->load->view('templates/auth_footer', $data);
    } else {
      # code...
    }
  }

}

/* End of file Auth.php */
