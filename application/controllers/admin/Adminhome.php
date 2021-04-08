<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminhome extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if(empty($this->session->userdata('adminsession'))){
			redirect(base_url().'admin/Admin/index');		
		}
	}
 
	public function index()
	{
		$this->load->model("admin/Contactpannel_model");
		$dashboardContact = $this->Contactpannel_model->getContacts();
		$this->load->model("admin/Requestpannel_model");
		$dashboardRequest = $this->Requestpannel_model->getRequests();
		$data['dashboardRequest'] = $dashboardRequest;
		$data['dashboardContact'] = $dashboardContact;
		$data['mainModule'] = "dashboard";
		$this->load->view('admin/dashboard', $data);
	}

}