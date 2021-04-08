<?php $this->load->view("frontend/header"); ?>

<div class="contact pb-4" >
    <h5 class="contacthead text-center">CONTACT US</h5>
</div>

<div class="container mt-3 mb-4" >
    <div class="row">
    <div class="col-md-5">
    <h5 style="text-align: justify; font-weight: inherit; font-size: 1.1rem;">For any project work or to hire any programmers or designer feel free to contact us any time. We are always ready to give our best to help you to achieve your target.</h5>

    <img id="contactimg" src="<?php echo base_url().'public/images/contactus.gif'; ?>">
    

    </div>

        <div class="col-md-7">
                    <form method="POST" name="contactform" id="contact" action="<?php echo base_url().'Pages/contactus'; ?>">
                        <div class="form-group">
                            <label class="contactlabel" for="fullname"><i class="fas fa-user"></i> NAME</label>
                            <input type="text" class="form-control <?php echo (form_error('name') != '') ? 'is-invalid' : ''; ?>" value="<?php echo set_value('name') ?>" name="name"  id="fullname" value="" placeholder="Enter your Name">
                            <?php echo "<p style='color: red;'>". form_error('name') ."</p>"; ?>
                        </div>
                        <div class="form-group">
                            <label class="contactlabel" for="email"><i class="fas fa-envelope"></i> E-MAIL</label>
                            <input type="text" class="form-control <?php echo (form_error('email') != '') ? 'is-invalid' : ''; ?>" value="<?php echo set_value('email') ?>" name="email"  id="mail" value="" placeholder="Enter your E-MAIL Address">
                            <?php echo "<p style='color: red;'>". form_error('email') ."</p>"; ?>
                        </div>
                        <div class="form-group">
                            <label class="contactlabel" for="contact"><i class="fas fa-phone"></i> CONTACT NUMBER</label>
                            <input type="text" class="form-control <?php echo (form_error('phone') != '') ? 'is-invalid' : ''; ?>" value="<?php echo set_value('phone') ?>" name="phone"  id="cphone" value="" placeholder="Enter your Contact Number">
                            <?php echo "<p style='color: red;'>". form_error('phone') ."</p>"; ?>
                        </div>
                        <div class="form-group">
                            <label class="contactlabel" for="message"><i class="fas fa-comment-alt"></i> MESSAGE</label>
                            <textarea id="mess" class="form-control <?php echo (form_error('message') != '') ? 'is-invalid' : ''; ?>"  name="message" id="mssg" placeholder="Enter your Message" rows="3" style="border: none; border-bottom: 2px solid black;"><?php echo set_value('message') ?></textarea>
                            <?php echo "<p style='color: red;'>". form_error('message') ."</p>"; ?>
                        </div>
                        
                        <center><button class="btn btn-primary m-auto" name="submit" id="sub"><i class="fas fa-paper-plane"></i> SUBMIT</button></center>
                    </form>
        </div>

        
    </div>
</div>

<?php $this->load->view("frontend/footer"); ?>
<script type="text/javascript">
    $(document).ready(function () {     
        <?php  
            $mssg=$this->session->flashdata('mailsend');
            if(!empty($mssg)) { ?>
                swal({
                title: "Thank You",
                text: "We will get back to you soon.",
                icon: "success",
                button: false
            });
          
        <?php }
         $this->session->sess_destroy();
        ?>
 
    });
</script>