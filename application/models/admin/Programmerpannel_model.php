<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmerpannel_model extends CI_Model {

    public function insert($inputarray)
    {
        $this->db->insert('programmersdetail', $inputarray);
    }

    public function getProgrammers($param = array()){
        if(isset($param['offset']) && isset($param['limit'])) {
            $this->db->limit($param['offset'], $param['limit']);
        }

        if(isset($param['searchProgrammer'])){
            $this->db->or_like('name', $param['searchProgrammer']);
            $this->db->or_like('email', $param['searchProgrammer']);
            $this->db->or_like('skills', $param['searchProgrammer']);
            $this->db->or_like('profile', $param['searchProgrammer']);
        }

        $fetchingProgrammers = $this->db->get('programmersdetail')->result_array();
        return $fetchingProgrammers;

    } 

    public function programmersCount($param = array()){

        if(isset($param['searchProgrammer'])){
            $this->db->or_like('name', $param['searchProgrammer']);
            $this->db->or_like('email', $param['searchProgrammer']);
            $this->db->or_like('skills', $param['searchProgrammer']);
            $this->db->or_like('profile', $param['searchProgrammer']);
        }
               
        $count = $this->db->count_all_results('programmersdetail');
        return $count;
    } 
    public function getProgrammers_detail($id){
        $this->db->where('id', $id);
        $getdetail = $this->db->get('programmersdetail')->row_array();
        return $getdetail;
    } 

    public function deleteProrammer($id){
        $this->db->where('id', $id);
        $this->db->delete('programmersdetail');
    } 

    public function editProgrammer($id, $inputarray){
        $this->db->where('id', $id);
        $this->db->update('programmersdetail', $inputarray);
    }
    

}