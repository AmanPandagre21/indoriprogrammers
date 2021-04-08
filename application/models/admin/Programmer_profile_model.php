<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer_profile_model extends CI_Model {

public function addProfile($data)
{
   $this->db->insert('programmers_profiles', $data);
}

public function getProgrammersProfile($param = array()){
    if(isset($param['offset']) && isset($param['limit'])) {
        $this->db->limit($param['offset'], $param['limit']);
    }

    if(isset($param['searchProgrammer'])){
        $this->db->or_like('programmer_profile', $param['searchProgrammer']);
    }


    $fetchingProfile = $this->db->get('programmers_profiles')->result_array();
    return $fetchingProfile;
}

public function profileCount(){
    $count = $this->db->count_all_results('programmers_profiles');
    return $count;
}

public function delete_profile($id)
{
    $this->db->where('id', $id);
    $this->db->delete('programmers_profiles');
}

}