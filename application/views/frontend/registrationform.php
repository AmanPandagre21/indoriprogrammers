<?php $this->load->view("frontend/header"); ?>

<div class="register pb-4">
    <h5 class="registerhead text-center">REGISTER AS A PROGRAMMER</h5>
</div>

<div class="container mt-3 mb-4" data-aos="fade-up">
   
        <div class="content" style="margin-left: 0px;">
     <h5 style="text-align: justify; font-weight: inherit; ">Registration Procedure:</h5>
       <ol>
            <li>First, Fill this registration form.</li>
            <li>Then We will contact you for other details.</li>
            <li>After that you just have to fill a google form to create your profile.</li>
        </ol> 
</div> 

    <div class="row">
    <div class="col-lg-5">
        <img id="registerimg" src="<?php echo base_url().'public/images/register.gif'; ?>">
       
    </div>
            <div class="col-lg-7">
            <form method="POST" name="contactform" id="contact" action="<?php echo base_url().'Pages/registration'; ?>">
            
                <div class="form-group">
                    <label class="registerlabel" for="fullname"><i class="fas fa-user"></i> Name</label>
                    <input type="text" class="form-control <?php echo (form_error('rname') != '') ? 'is-invalid' : ''; ?>"  name="rname"  id="fullname" value="<?php echo set_value('rname'); ?>" placeholder="Enter your Name">
                    <?php echo form_error('rname'); ?>
                </div>

                <div class="form-group">
                    <label class="registerlabel" for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="text" class="form-control <?php echo (form_error('email') != '') ? 'is-invalid' : ''; ?>" name="email"  id="mail" value="<?php echo set_value('email'); ?>" placeholder="Enter your Email">
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <label class="registerlabel" for="number"><i class="fas fa-phone"></i> Mobile No.</label>
                    <input type="text" class="form-control <?php echo (form_error('num') != '') ? 'is-invalid' : ''; ?>" name="num"  id="number" value="<?php echo set_value('num'); ?>" placeholder="Enter your Mobile Number">
                    <?php echo form_error('num'); ?>
                </div>
                <div class="form-group">
                    <label class="registerlabel" for="skills"><i class="fas fa-comment-alt"></i> Your Skill</label>
                    <input type="text" class="form-control <?php echo (form_error('skills') != '') ? 'is-invalid' : ''; ?>" name="skills"  id="skill" value="<?php echo set_value('skills'); ?>" placeholder="Enter your Skill">
                    <?php echo form_error('skills'); ?>
                </div>

                <center><button class="btn btn-primary" id="rsub" name="submit" ><i class="fas fa-paper-plane"></i> SUBMIT</button></center>
            </form>     
                
        </div>
<!-- <div class="col-md-3"></div> -->
    </div>
</div>


<?php $this->load->view("frontend/footer"); ?>

<script type="text/javascript">
    $(document).ready(function () {     
        <?php  
            $mssg=$this->session->flashdata('pinsert');
            if(!empty($mssg)) { ?>
                swal({
                title: "Thank You",
                text: "We will contact you for further details.",
                icon: "success",
                button: false
            });
          
        <?php }
         $this->session->sess_destroy();
        ?>
 
    });
</script>
