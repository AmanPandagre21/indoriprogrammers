<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer_profile extends CI_Controller {

public function __construct(){
    parent::__construct();
    if(empty($this->session->userdata('adminsession'))){
        redirect(base_url().'admin/Admin/index');		
        }
}

public function index($page = 1)
{
   $perpage = 6;
   $param['offset'] = $perpage;
   $param['limit'] = ($page*$perpage-$perpage);
   $param['searchProgrammer'] = $this->input->get('searchProgrammer');
   $this->load->model('admin/Programmer_profile_model');

   $this->load->library("pagination");
   $config['base_url']   = base_url('admin/Programmer_profile/index');
    $config['total_rows'] =   $this->Programmer_profile_model->profileCount($param);
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

    $getProgrammerProfile = $this->Programmer_profile_model->getProgrammersProfile($param);

    $data['mainModule'] = "profile";
    $data['subModule'] = "sub";
    $data['pagination_link'] = $pagination_link;
    $data['getProgrammerProfile'] = $getProgrammerProfile;


   $this->load->view("admin/Profile/profiles", $data);
}

public function addProfiles()
{
   $this->load->library("form_validation");
   $this->load->model('admin/Programmer_profile_model');
   $this->form_validation->set_rules('pronm', 'Profiles Name', 'required|trim');

   if($this->form_validation->run() == true){

      $addprofile['programmer_profile'] = $this->input->post('pronm');
      $addprofile['dateandtime']	= date("d-m-y H:i:s");
      $profile = $this->Programmer_profile_model->addProfile($addprofile);

      $this->session->set_flashdata('addprogrammerprofile', 'Profile added sucessfully');
      redirect(base_url()."admin/Programmer_profile/index");

   }else{
      $data['mainModule'] = "profile";
      $data['subModule'] = "sub";
       $this->load->view("admin/Profile/addProfile", $data);
   }
}

public function deleteProfile($id)
{
   $this->load->model('admin/Programmer_profile_model');
   $this->Programmer_profile_model->delete_profile($id);
   redirect(base_url()."admin/Programmer_profile/index");
}

}