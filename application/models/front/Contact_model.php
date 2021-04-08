<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

 public function insertDetail($data)
{
    $this->db->insert("contactdetail", $data);
 
}

}

