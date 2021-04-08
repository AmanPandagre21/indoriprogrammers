<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requestpannel_model extends CI_Model {

public function getRequests($param = array()){

    if (isset($param['offset']) && isset($param['limit'])) {
      $this->db->limit($param['offset'], $param['limit']);
    }
    $this->db->order_by("programmersrequests.id","DESC");
    $programmers =  $this->db->get("programmersrequests")->result_array();
    return $programmers;
    
}

public function tableCount()
{
 $count =  $this->db->count_all_results('programmersrequests');
 return $count ; 
}

public function get_Programmer_Skill($id)
{
    $this->db->where("id", $id);
    $fetchSkill = $this->db->get("programmersrequests")->row_array();
    return $fetchSkill;
}

public function updation($id)
{
  $this->db->where("id", $id);
  $this->db->set("status", 1);
  $this->db->update("programmersrequests");
}

}