<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer_model extends CI_Model {

    public function insertDetail($data)
    {
        $this->db->insert("programmersrequests", $data);
    
    }

    public function getProgrammer_Home($param = array())
    {

        if (isset($param['profile'])) {
            $this->db->or_like('programmers_profiles.id', $param['profile']);
        }
        $this->db->select('programmersdetail.*, programmers_profiles.programmer_profile as programmer_profile_name');
        $this->db->order_by("programmersdetail.dateandtime","DESC");
        $this->db->where("programmersdetail.status=1");
        $this->db->join("programmers_profiles","programmers_profiles.id=programmersdetail.profile","left");
        
        $fetchingProgrammersHome = $this->db->get('programmersdetail')->result_array();
        return $fetchingProgrammersHome;
    }

    public function getProgrammersProfile_home($id){
        $this->db->select('programmersdetail.*, programmers_profiles.programmer_profile as programmerProfile_name');
        $this->db->order_by("programmersdetail.dateandtime","DESC");
        $this->db->where("programmersdetail.id", $id);
        $this->db->join("programmers_profiles","programmers_profiles.id=programmersdetail.profile","left");
        $getdetail = $this->db->get('programmersdetail')->row_array();
        return $getdetail;
    }



}

