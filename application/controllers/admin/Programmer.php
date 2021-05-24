<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer extends CI_Controller {
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
    $this->load->model('admin/Programmerpannel_model');

    $this->load->library("pagination");
    $config['base_url']   = base_url('admin/Programmer/index');
    $config['total_rows'] =   $this->Programmerpannel_model->programmersCount($param);
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

    $getProgrammer = $this->Programmerpannel_model->getProgrammers($param);

    $data['mainModule'] = "programmer";
    $data['subModule'] = "sub";
    $data['pagination_link'] = $pagination_link;
    $data['getProgrammer'] = $getProgrammer;

    $this->load->view("admin/Programmers/programmers", $data);    
}


public function addDeveloper()
{
    $this->load->helper('common_helper');

    $this->load->model('admin/Programmerpannel_model');

    $this->load->model('admin/Programmer_profile_model');

    $getProgrammerProfile = $this->Programmer_profile_model->getProgrammersProfile();
    $data['getProgrammerProfile'] = $getProgrammerProfile;

    $config['upload_path']   = './public/uploads/programmers/';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['encrypt_name']  = TRUE;
    $this->load->library('upload', $config);

    $this->load->library("form_validation");
    
    $this->form_validation->set_rules("nm", "Name","required|trim");
    $this->form_validation->set_rules("eml","E-Mail", "required|trim|valid_email");
    $this->form_validation->set_rules("phn","Phone Number", "required|numeric|max_length[12]|min_length[10]");
    $this->form_validation->set_rules("plnk","Projects Link", "required|trim");
    $this->form_validation->set_rules("lang","Language", "required|trim");
    $this->form_validation->set_rules("profile","Profile", "required|trim");
    $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
 
    if ($this->form_validation->run() == true) {
      
       

        if (!empty($_FILES['image']['name'])) {

            if ($this->upload->do_upload('image')) {

                $data = $this->upload->data();
				resizeimage($config['upload_path'].$data['file_name'], $config['upload_path'].'thumb_front/'.$data['file_name'], 1120, 800);

				resizeimage($config['upload_path'].$data['file_name'], $config['upload_path'].'thumb_admin/'.$data['file_name'], 300, 250);
                
                $inputarray['image'] = $data['file_name'];
				$inputarray['name']	= $this->input->post('nm');
				$inputarray['phone']	= $this->input->post('phn');
				$inputarray['email']	= $this->input->post('eml');
                $inputarray['projects_link']	= $this->input->post('plnk');
                $inputarray['skills']	= $this->input->post('lang');
                $inputarray['profile']	= $this->input->post('profile');
                $inputarray['tm_and_cd']	= $this->input->post('tmc');

                $inputarray['dateandtime']	= date("d-m-y H:i:s");
                
                $this->Programmerpannel_model->insert($inputarray);
                $this->session->set_flashdata("inserted", "Programmer added sucessfully");
				redirect(base_url()."admin/Programmer/index");

            }else{
                $error = $this->upload->display_errors('<p class="invalid-feedback">', '</p>');
                $data['imageError'] =  $error;
                $this->load->view("admin/Programmers/addProgrammer",$data);
            }

        }else{

            $inputarray['name']	= $this->input->post('nm');
            $inputarray['phone']	= $this->input->post('phn');
            $inputarray['email']	= $this->input->post('eml');
            $inputarray['projects_link']	= $this->input->post('plnk');
            $inputarray['skills']	= $this->input->post('lang');
            $inputarray['profile']	= $this->input->post('profile');
            $inputarray['tm_and_cd']	= $this->input->post('tmc');

            $inputarray['dateandtime']	= date("d-m-y H:i:s");
            
            $this->Programmerpannel_model->insert($inputarray);
            $this->session->set_flashdata("addprogrammer", "Programmer added sucessfully");
            redirect(base_url()."admin/Programmer/index");

        }	

    }else{
        $data['mainModule'] = "programmer";
        $data['subModule'] = "sub";
    $this->load->view("admin/Programmers/addProgrammer", $data);    
    }
}

public function programmers_detailing($id)
{
    $this->load->model("admin/Programmerpannel_model");
    $fetching = $this->Programmerpannel_model->getProgrammers_detail($id);
    $data['fetching'] = $fetching;
    $this->load->view("admin/Programmers/viewProgrammers", $data);
}

public function edit_programmers($id)
{
    $this->load->helper('common_helper');

    $this->load->model('admin/Programmerpannel_model');
    $this->load->model('admin/Programmer_profile_model');

    $getProgrammerProfile = $this->Programmer_profile_model->getProgrammersProfile();

    $data['getProgrammerProfile'] = $getProgrammerProfile;
    
    $editDetail = $this->Programmerpannel_model->getProgrammers_detail($id);

    if (empty($editDetail)) {
        $this->session->set_flashdata('error','Programmer not found');
            redirect(base_url()."admin/Programmer/index");
        }
        $data['mainModule'] = "programmer";
        $data['subModule'] = "sub";
        $data['editDetail'] = $editDetail;

    $config['upload_path']   = './public/uploads/programmers/';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['encrypt_name']  = TRUE;
    $this->load->library('upload', $config);

    $this->load->library("form_validation");
    
    $this->form_validation->set_rules("nm", "Name","required|trim");
    $this->form_validation->set_rules("eml","E-Mail", "required|trim|valid_email");
    $this->form_validation->set_rules("phn","Phone Number", "required|numeric|max_length[12]|min_length[10]");
    $this->form_validation->set_rules("plnk","Projects Link", "required|trim");
    $this->form_validation->set_rules("lang","Language", "required|trim");
    $this->form_validation->set_rules("profile","Profile", "required|trim");
    $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
 
    if ($this->form_validation->run() == true) {

        if (!empty($_FILES['image']['name'])) {

            if ($this->upload->do_upload('image')) {

                $data = $this->upload->data();

                if($editDetail['image'] != "" && file_exists("./public/uploads/programmers/".$editDetail['image'])) {
                    unlink("./public/uploads/programmers/".$editDetail['image']);
               }

               if ($editDetail['image'] != "" && file_exists("./public/uploads/programmers/thumb_admin/".$editDetail['image'])) {
                unlink("./public/uploads/programmers/thumb_admin/".$editDetail['image']);
           }

           if ($editDetail['image'] != "" && file_exists("./public/uploads/programmers/thumb_front/".$editDetail['image'])) {
                unlink("./public/uploads/programmers/thumb_front/".$editDetail['image']);
           }

				resizeimage($config['upload_path'].$data['file_name'], $config['upload_path'].'thumb_front/'.$data['file_name'], 1120, 800);

				resizeimage($config['upload_path'].$data['file_name'], $config['upload_path'].'thumb_admin/'.$data['file_name'], 300, 250);
                
                $inputarray['image'] = $data['file_name'];
				$inputarray['name']	= $this->input->post('nm');
				$inputarray['phone']	= $this->input->post('phn');
				$inputarray['email']	= $this->input->post('eml');
                $inputarray['projects_link']	= $this->input->post('plnk');
                $inputarray['skills']	= $this->input->post('lang');
                $inputarray['profile']	= $this->input->post('profile');
                $inputarray['tm_and_cd']	= $this->input->post('tmc');

                $inputarray['updated_at']	= date("d-m-y H:i:s");
                
                $this->Programmerpannel_model->editProgrammer($id, $inputarray);
                $this->session->set_flashdata("updated", "Programmer Updated sucessfully");
				redirect(base_url()."admin/Programmer/index");

            }else{
                $error = $this->upload->display_errors('<p class="invalid-feedback">', '</p>');
                $data['imageError'] =  $error;
                $this->load->view("admin/Programmers/editProgrammers",$data);
            }

        }else{

            $inputarray['name']	= $this->input->post('nm');
            $inputarray['phone']	= $this->input->post('phn');
            $inputarray['email']	= $this->input->post('eml');
            $inputarray['projects_link']	= $this->input->post('plnk');
            $inputarray['skills']	= $this->input->post('lang');
            $inputarray['profile']	= $this->input->post('profile');
            $inputarray['tm_and_cd']	= $this->input->post('tmc');

            $inputarray['updated_at']	= date("d-m-y H:i:s");
            
            $this->Programmerpannel_model->editProgrammer($id, $inputarray);
            $this->session->set_flashdata("updated", "Programmer updated sucessfully");
            redirect(base_url()."admin/Programmer/index");

        }	

    }else{
    $this->load->view("admin/Programmers/editProgrammers", $data);
    }
}

public function delete_programmers($id)
{
    $this->load->model("admin/Programmerpannel_model");
		 $programmer = $this->Programmerpannel_model->getProgrammers_detail($id);

		if (empty($programmer)) {
			$this->session->set_flashdata('error','Programmer not found');
				redirect(base_url()."admin/Programmer/index");
			}

			if (file_exists("./public/uploads/programmers/".$programmer['image'])) {
					 unlink("./public/uploads/programmers/".$programmer['image']);
				}

				if (file_exists("./public/uploads/programmers/thumb_admin/".$programmer['image'])) {
					 unlink("./public/uploads/programmers/thumb_admin/".$programmer['image']);
				}

				if (file_exists("./public/uploads/programmers/thumb_front/".$programmer['image'])) {
					 unlink("./public/uploads/programmers/thumb_front/".$programmer['image']);
				}

		$this->Programmerpannel_model->deleteProrammer($id);
		$this->session->set_flashdata("delete", "Programmer delete Successfully");
		redirect(base_url()."admin/Programmer/index");

}

// public function getProfile_for_programmer()
// {
//     $this->load->model('admin/Programmer_profile_model');
//     $getProgrammerProfile = $this->Programmer_profile_model->getProgrammersProfile($param);
//     $data['getProgrammerProfile'] = $getProgrammerProfile;

//     $this->load->view("admin/Programmer/addProgrammer", $data);
// }


}