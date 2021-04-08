<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

 public function adminInfo($name)
{
  $this->db->where("username", $name);
  $result = $this->db->get('adminsdetail')->row_array();
		return $result;
}

public function changePass($password)
{
  $this->db->set('password', $password);
  $this->db->update("adminsdetail");
}

}

