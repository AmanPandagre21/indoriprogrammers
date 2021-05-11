<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        if (!empty($this->session->userdata('adminsession'))) {
            redirect(base_url().'admin/Adminhome/index');
        }
        
		$this->load->view('admin/adminlogin');
    }
    
    public function adminLogin(){

        $this->load->library("form_validation");
        $this->load->library("session");
        $this->load->model("admin/Admin_model");

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

        if($this->form_validation->run() == true) {

           $name =  $this->input->post('username');
          
           $admin_detail = $this->Admin_model->adminInfo($name);
     
         if (!empty($admin_detail)) {
                     $pass =  $this->input->post('password');
                    if (password_verify($pass, $admin_detail['password']) == true) {
                            
                        $adminarray['admin_id'] = $admin_detail['id'];
                        $adminarray['admin_name'] = $admin_detail['username'];
                        $this->session->set_userdata('adminsession', $adminarray);
                        redirect(base_url().'admin/Adminhome/index');

                    }else {
                        $this->session->set_flashdata('admsg', 'password is wrong');
                        redirect(base_url().'admin/Admin/index');
                    }

            } else {
                $this->session->set_flashdata('admssg', 'Either username or password is wrong');
                redirect(base_url().'admin/Admin/index');
            }

        }else{
            $this->load->view("admin/adminlogin");
        }
    }


public function changePassword()
{
    $this->load->library("form_validation");
    $this->load->model("admin/Admin_model");

    $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

    if($this->form_validation->run() == true) {

       $pass = $this->input->post('password');
       $cpass = $this->input->post('cpassword');

       if($pass == $cpass){
        $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
        $change_pass = $this->Admin_model->changePass($pass_hash);

            $this->session->set_flashdata('success',"Password has changed successfully");
            return redirect(base_url().'admin/Admin/changePassword');
        
       } else{
           $this->session->set_flash('fail', 'Password and Confirm Password are not same');
          
       }

    }else{
    $this->load->view("admin/changepass");
    }
}


public function logout()
{
    $this->session->unset_userdata('adminsession');
    redirect(base_url().'admin/Admin/index');
}




}
