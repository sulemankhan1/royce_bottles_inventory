<?php

/**
 *
 */
class Auth_model extends CI_Model
{

  public function checkLoginDetails($username,$password)
  {

    $this->db->select('id,password');
    $this->db->from('users');

    $this->db->where('username',$username);

    $data = $this->db->get()->result();

    if(!empty($data))
    {

      foreach ($data as $key => $v)
      {

        if($password == $this->encryption->decrypt($v->password))
        {

          $res['result'] = true;
          $res['data'] = $data[$key];
          $res['msg'] = 'Credentials Matched';
          break;

        }
        else
        {

          $res['result'] = false;
          $res['msg'] = 'Invalid Username or Password';

        }

      }

    }
    else
    {

      $res['result'] = false;
      $res['msg'] = 'Invalid Username or Password';

    }

    return $res;

  }

  public function checkForgetPasswordEmail($email)
  {

    $this->db->select('id');
    $this->db->from('users');

    $this->db->where('email',$email);

    $data = $this->db->get()->result();

    if(!empty($data))
    {
      return true;
    }
    else
    {
      return false;
    }

  }


}
