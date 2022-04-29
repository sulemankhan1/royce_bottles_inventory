<?php
class MY_Controller extends CI_Controller
{

  public $user_id_ = 0;

  public function __construct()
  {

      parent::__construct();

      $this->check_user_login();

      $this->user_id_ = $this->session->userdata('UID');

  }

  public function template($path,$data = '')
  {

      if(!isset($data['active_submenu']))
      {
          $data['active_submenu'] = '';
      }

      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view($path);
      $this->load->view('template/footer');

  }

  public function load_view($path,$data = '',$render = false)
  {

      if(!isset($data['active_submenu']) && $render != true)
      {
          $data['active_submenu'] = '';

          $this->load->view($path,$data);

      }
      else
      {

        return $this->load->view($path,$data,true);

      }


  }

  public function inp_post($index = '')
  {

      if($index != '')
      {

        return $this->input->post($index);

      }
      else
      {

        return $this->input->post();

      }

  }

  public function inp_get($index = '')
  {

      if($index != '')
      {

        return $this->input->get($index);

      }
      else
      {

        return $this->input->get();

      }

  }

  public function trans_($type = 'start')
  {

      switch ($type) {
        case 'start':

            return $this->db->trans_start();

          break;

        case 'complete':

            return $this->db->trans_complete();

          break;

        case 'status':

            return $this->db->trans_status();

          break;

        default:
          // code...
          break;
      }

  }

  public function send_mail_($arr)
  {

      $this->load->library('email');

      $to = $arr['to'];
      $subject = $arr['subject'];
      $body = $arr['body'];

      echo $company_name = companySetting('name');

      die();


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

    if(empty($uid))
    {
      redirect('login');
    }

  }

}
