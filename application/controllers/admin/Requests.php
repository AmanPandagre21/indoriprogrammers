<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends CI_Controller {

public function __construct(){
    parent::__construct();
    if(empty($this->session->userdata('adminsession'))){
        redirect(base_url().'admin/Admin/index');
    }
}

public function index($page = 1)
{
    $perpage = 6;
    $param['limit'] = ($page*$perpage-$perpage);
    $param['offset'] = $perpage;
 
    $this->load->model("admin/Requestpannel_model");
    $this->load->library("pagination");
		$config['base_url']   = base_url('admin/Requests/index');
		$config['total_rows'] =   $this->Requestpannel_model->tableCount($param);
		$config['per_page'] = $perpage;
		$config['use_page_numbers'] = true;

		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open']   = "<li class='page_item'>";
		$config['num_tag_close']   = "</li>";
		$config['cur_tag_open'] = "<li class='disabled page_item'><li class='active page_item'><a href='#' class=\"page-link\">";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] =  "<li class=\"page-item\">";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li class=\"page-item\">";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li class=\"page-item\">";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] =  "<li class=\"page-item\">";
		$config['last_tagl_close'] = "</li>";	
		$config['attributes'] = array('class' => 'page-link');	

		$this->pagination->initialize($config);
        $pagination_link = $this->pagination->create_links();
        
    $fetchrequest = $this->Requestpannel_model->getRequests($param);
    $data['fetchrequest'] = $fetchrequest;
	$data['pagination_link'] =  $pagination_link;
	$data['mainModule'] = "Requests";
    $this->load->view("admin/Requests/requests", $data);    
}

public function getSkill($id)
{
	$this->load->model("admin/Requestpannel_model");
	$fetchskill = $this->Requestpannel_model->get_Programmer_Skill($id);
	$data['fetchskill'] = $fetchskill;
	$data['mainModule'] = "Requests";
	$this->load->view("admin/Requests/Skills",$data);
}

public function updatestatus($id){

    $this->load->model("admin/Requestpannel_model");
   	$this->Requestpannel_model->updation($id);
  redirect(base_url()."admin/Requests/index");
}

}