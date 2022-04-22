<?php
class MY_Controller extends CI_Controller
{

  public $user_id_ = 1;

  public function __construct()
  {

      parent::__construct();

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

      // $this->maincategory_model->first_function($maincategoryData);
      // $this->market_model->second_function($marketData);
      // $this->db->trans_complete();
      // if ($this->db->trans_status() === FALSE) {
      //   throw error
      //       `enter code here`
      // }

  }

  public function is_login()
  {

      redirect('login');

  }

}
