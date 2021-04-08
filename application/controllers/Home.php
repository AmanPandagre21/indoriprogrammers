<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("front/Programmer_model");
		$fetchingHomeDetail = $this->Programmer_model->getProgrammer_Home();
		$data['fetchingHomeDetail'] = $fetchingHomeDetail;
		$this->load->view('frontend/index', $data);
	}
}
