<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Pages extends CI_Controller {

	public function aboutUs()
	{
		$this->load->view('frontend/about');
    }

	public function fetchProgrammers(){
		$output ='';
		$this->load->model("front/Programmer_model");
		if($this->input->post('programmer_id')){
		$getProgrammer= $this->Programmer_model->fetchProgrammer($this->input->post('programmer_id'));
		foreach ($getProgrammer as $value) {
			
			$output .= '
			<div class="col-md-3">
				<div class="card" id="procard">
				   
					<div class="card-body text-center" 
						<div class="">
						<img src="'.base_url('public/uploads/programmers/').$value['image'].'" class="rounded-circle proimages proimg"  />
						</div>
	
						<div class="card-title text-center">
							<h3 class="proname pt-2">'.strtoupper($value['name']).' </h3>
							<hr id="prohr">
							<div class="card-text text-center">
								<h5 class="prowork">'. strtoupper($value['programmer_profile_name']) .'</h5>
							</div>
							<hr id="prohrb">
							<a href="'. 'programmerProfile/'.$value['id'] .'" class="btn btn-primary view_btn" id="programmerprofile">VIEW PROFILE</a>
						</div>
					</div>
				</div>
			</div>
			';
			}
			echo $output;
		}
	}

    
    public function programmer()
	{

		$this->load->model("front/Programmer_model");
		$this->load->model('admin/Programmer_profile_model');
		
		$getProgrammerProfile = $this->Programmer_profile_model->getProgrammersProfile();
		$data['getProgrammerProfile'] = $getProgrammerProfile;

		$param['profile'] = $this->input->get('profile');
		$fetchingDetail = $this->Programmer_model->getProgrammer_Home($param);
		$data['fetchingDetail'] = $fetchingDetail;
		$this->load->view('frontend/programmers', $data);
	}

	public function service()
	{
		$this->load->view('frontend/services');
	}

	public function contactus()
	{
		$this->load->library("form_validation");
		$this->load->model('front/Contact_model');
		$this->form_validation->set_rules("name","Name", "required|trim");
		$this->form_validation->set_rules("email","E-Mail", "required|trim|valid_email");
		$this->form_validation->set_rules("phone","Phone", "required|numeric|max_length[12]|min_length[10]");
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
		if ($this->form_validation->run() == true) {

			$contactarray['name'] = $this->input->post('name');
			$contactarray['email'] = $this->input->post('email');
			$contactarray['phone'] = $this->input->post('phone');
			$contactarray['message'] = $this->input->post('message');
			$contactarray['dateandtime'] = date("d-m-y H:i:s");


			$this->Contact_model->insertDetail($contactarray);
			$this->load->library("email");

			$this->email->from(set_value('email'), set_value('name'));
			$this->email->to("indoriprogrammers@gmail.com");
			$this->email->subject("Contact Detail");
			$this->email->message($contactarray['message']);
			$this->email->set_newline("\r\n");

			if (!$this->email->send()) {
				show_error($this->email->print_debugger());
			} else {
				
			 $this->session->set_flashdata("mailsend", "Thank you");
			redirect(base_url()."Pages/contactus");
			}
				
		} else {

			$this->load->view('frontend/contact');
		}
		
	}

	public function registration()
	{

		$this->load->library("form_validation");
		$this->load->library("session");
		$this->load->model('front/Programmer_model');
		$this->form_validation->set_message('is_unique', 'Email already registered');
		$this->form_validation->set_rules("rname", "Name","required|trim");
		$this->form_validation->set_rules("email","E-Mail", "required|trim|valid_email|is_unique[programmersrequests.email]");
		$this->form_validation->set_rules("num","Phone Number", "required|numeric|max_length[12]|min_length[10]");
		$this->form_validation->set_rules("skills","Skills", "required|trim");
		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

		if($this->form_validation->run() == true){
			$programmerarray['name'] = $this->input->post('rname');
			$programmerarray['email'] = $this->input->post('email');
			$programmerarray['phone'] = $this->input->post('num');
			$programmerarray['skill'] = $this->input->post('skills');
			$programmerarray['tm_and_cd'] = "yes"; 
			$programmerarray['dateandtime'] = date("d-m-y H:i:s");

			$inserting = $this->Programmer_model->insertDetail($programmerarray);
			$this->load->library("email");
			$this->email->from(set_value('email'), set_value('name'));
			$this->email->to("indoriprogrammers@gmail.com");
			$this->email->subject("Registration Detail");
			$this->email->message($programmerarray['skill']);
			$this->email->set_newline("\r\n");

			if (!$this->email->send()) {
				show_error($this->email->print_debugger());
			} else {
				
				$this->session->set_flashdata('pinsert', 'Thank you for registration we will contact you for further details');
				redirect(base_url()."Pages/registration");
			}
			
		}else{
		$this->load->view('frontend/registrationform');
		}
	}

	public function programmerProfile($id)
	{
		$this->load->model("front/Programmer_model");
		
		$fetchingProgrammerDetail =  $this->Programmer_model->getProgrammersProfile_home($id);
		$data['fetchingProgrammerDetail'] = $fetchingProgrammerDetail;
		$this->load->view('frontend/programmerProfile', $data);
	}

}
