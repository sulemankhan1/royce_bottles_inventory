<?php
class MY_Controller extends CI_Controller
{

  public $user_id_ = 0;
  public $use_type_ = 0;

  public function __construct()
  {

      parent::__construct();

      $this->check_user_login();

      $this->user_id_ = $this->session->userdata('UID');

      $this->use_type_ = $this->session->userdata('UTYPE');

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

  public function generateSalePdf($sale_id)
  {

      $this->load->model('Sale_model');

      $sales_details = $this->Sale_model->getSaleDetails($sale_id);

      $sale = @$sales_details[0];

      $page_title = 'Invoice Details';

      $path = '';

      $data = [

        'page_title' => $page_title,
        'sale' => $sale,
        'sales_details' => $sales_details,
        'root' => $_SERVER['DOCUMENT_ROOT'].'/royce/web-dev/'

      ];

      @$this->load->library('pdf');

      @$this->pdf->load_view('sales/sales_pdf',$data);

  }

  public function send_mail_($arr)
  {

      return true;

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
      $this->email->from('RZ',$company_name);
      $this->email->to($to);

      $this->email->subject($subject);

      $this->email->message($body);

      if(isset($arr['attachment']))
      {

        $this->email->attach($arr['attachment']);

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

  public function sendInvoicePdfOnMail($sale_id)
  {

      //get sale row
      $sale_row = $this->bm->getRow('sales','id',$sale_id);

      $email_subject = 'RZ';
      $email_body = '';

      $invoice_temp = $this->bm->getRowWithConditions('general_setting',['name' => 'INVOICE_TEMP']);

      if(!empty($invoice_temp))
      {

        $email_template = $this->bm->getRow('email_templates','id',$invoice_temp->value);

        if(!empty($email_template))
        {

          $email_subject = $email_template->subject;
          $email_body = $email_template->template;

        }

      }

        @$this->generateSalePdf($sale_row->id);

        $customer = $this->bm->getRow('customers','id',$sale_row->customer_id);

        $arr = [

          'to' => $customer->e_receipt_email,
          'subject' => $email_subject,
          'body' => $email_body,
          'attachment' => $_SERVER["DOCUMENT_ROOT"].'/assets/mypdf'

        ];

        //send mail to customer about his sale
        $res = $this->send_mail_($arr);

        if($res)
        {
          return true;
        }
        else
        {
          return false;
        }

  }

  public function sendInvoicePdfOnWhatsapp($sale_id)
  {

    $sale_row = $this->bm->getRow('sales','id',$sale_id);

    $email_subject = 'RZ';
    $email_body = '';

    //whatsapp template
    $invoice_temp = $this->bm->getRowWithConditions('general_setting',['name' => 'WHATSAPP_TEMP']);

    if(!empty($invoice_temp))
    {

      $email_template = $this->bm->getRow('email_templates','id',$invoice_temp->value);

      if(!empty($email_template))
      {

        $email_subject = $email_template->subject;
        $email_body = $email_template->template;

      }

    }

      @$this->generateSalePdf($sale_row->id);

      $customer = $this->bm->getRow('customers','id',$sale_row->customer_id);

  }

  public function redirect_to()
  {

      return '404_override';

  }

  public function checkRole($role_id)
  {

    if(isUserAllow($role_id) == false)
    {
      redirect($this->redirect_to());
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
