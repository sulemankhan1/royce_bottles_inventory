<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

  function __construct()
  {

    parent :: __construct();

    $this->load->library('encryption');

  }

  public function login()
	{

    if($this->check_user_login())
    {

      redirect('dashbaord');

    }

    $data = [
        'title' => 'Login'
    ];

    $this->load->view('auth/login',$data);

	}

  public function checkLoginDetails()
  {

    $this->load->model('Auth_model');

     $this->form_validation->set_rules('username', 'Username', 'required');
     $this->form_validation->set_rules('password', 'Password', 'required');

     if ($this->form_validation->run() == FALSE)
     {

       $error = validation_errors();

       $this->session->set_flashdata('_error',$error);

       redirect('login');

     }
     else
     {

       $p = $this->input->post();

       $username = $p['username'];
       $password = $p['password'];

       $data = $this->Auth_model->checkLoginDetails($username,$password);

       if($data['result'] == true)
       {

         $this->session->set_userdata('UID',$data['data']->id);

         // remember me
          if(isset($p['remember_me']))
          {
            setcookie ('loginUsername', $username, time()+ (10 * 365 * 24 * 60 * 60));
            setcookie ('loginPass', $password,  time()+ (10 * 365 * 24 * 60 * 60));
          }
          else
          {
            setcookie ('loginUsername','');
            setcookie ('loginPass','');
          }

         redirect('dashboard');

       }
       else
       {

           $this->session->set_flashdata('_error',$data['msg']);

       }

       redirect('login');

     }

  }

  public function forget_password()
	{

    if($this->check_user_login())
    {

      redirect('dashbaord');

    }

    $data = [
        'title' => 'Forget Password'
    ];

    $this->load->view('auth/forget_password',$data);

	}

  public function send_forgetpassword_link()
  {

    $this->load->model('Auth_model');

     $this->form_validation->set_rules('email', 'Email', 'required');

     if ($this->form_validation->run() == FALSE)
     {

       $error = validation_errors();

       $this->session->set_flashdata('_error',$error);

       redirect('forget_password');

     }
     else
     {

       $email = $this->input->post('email');

       $data = $this->Auth_model->checkForgetPasswordEmail($email);

       if($data)
       {

         echo "this module is on maintenance";

         $mail_credentails = [

            'to' => $email,
            'subject' => 'Forget Password',
            'body' => 'This is forget password'

         ];

         $is_send = $this->send_mail_($mail_credentails);

         if($is_send)
         {
           echo "sent";
         }
         else
         {
           echo "not";
         }

         die();

       }
       else
       {

         $this->session->set_flashdata('_error','Email is not registered');

         redirect('forget_password');

       }

     }

  }

  public function logout()
  {

    if($this->check_user_login())
    {

      $this->session->sess_destroy();

      redirect('login');

    }
    else
    {

      echo "Connection error";

    }

  }

  public function send_mail_($arr)
  {

      $this->load->library('email');

      $to = $arr['to'];
      $subject = $arr['subject'];
      $body = $arr['body'];

      $company_name = companySetting('name');

      $config['crlf']     = "\r\n";
      $config['newline']  = "\r\n";
      $config['mailtype'] = 'html';
      $config['charset']  = 'utf-8';

      $this->email->initialize($config);
      $this->email->from('Royce',$company_name);
      $this->email->to($to);

      $this->email->subject($subject);

      $this->email->message($body);

      if(isset($arr['attachment']))
      {

        $this->email->attach($_SERVER["DOCUMENT_ROOT"].$arr['attachment']);

      }

      if($this->email->send() == true)
      {
        return true;
      }
      else
      {
        return false;
      }

  }

  public function check_user_login()
  {

    $uid = $this->session->userdata('UID');

    if($uid)
    {
      return true;
    }
    else
    {
      return false;
    }

  }

}
