<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactpannel_model extends CI_Model {

    public function getContacts($param = array())
    {

      if (isset($param['offset']) && isset($param['limit'])) {
         $this->db->limit($param['offset'], $param['limit']);
         }
         $this->db->order_by("contactdetail.id","DESC");
        $contactdata = $this->db->get("contactdetail")->result_array();
        return  $contactdata;

    }

    public function tablecount($param = array())
    {
       $count = $this->db->count_all_results("contactdetail");
       return $count;
    }

    public function contactDetail($id)
    {
        $this->db->where("id", $id);
       $userdetail = $this->db->get("contactdetail")->row_array();
        return  $userdetail;
    }

    public function contactUpdate($id)
{
  $this->db->where("id", $id);
  $this->db->set("status", 1);
  $this->db->update("contactdetail");
}

}