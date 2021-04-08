<?php $this->load->view('frontend/header.php'); ?>

<div class="programmers pb-4">
    <h5 class="prohead text-center">Search <span class="typed"></span></h5>
</div>

<div class="container-fluid prolist" data-aos="fade-up">
    <form method="get" id="searchprofile" name="searchprofiles" action="">
        <div class="input-group mt-3 mx-auto" style="width: 340px;">
            <select name="profile" id="prfl" class="form-control <?php echo (form_error('profile') != '') ? 'is-invalid' : ''; ?>" >
                <option value="">Select a Profile</option>
                <?php if (!empty($getProgrammerProfile)) { ?>   
                <?php foreach ($getProgrammerProfile as  $value) { ?>
                <option name="profiles" value="<?php echo $value['id'];?>" <?php echo set_select('profile', $value['id'], FALSE);  ?>><?php echo strtoupper($value['programmer_profile']); ?></option>
                <?php  } }  ?>
            </select>
            <div class="input-group-append">
                <button class="input-group-text" id="basic-addon1" style="width: 50px; font-size: 20px;"><i class="fas fa-search"></i></button>
            </div>
            <?php echo form_error('profile'); ?> 
        </div>
    </form>

    <div class="row">
    <?php                    
    if(!empty($fetchingDetail)){ 
           foreach ($fetchingDetail as  $value) { ?>
        <div class="col-md-3">
            <div class="card" id="procard">
               
                <div class="card-body text-center" >
                <?php  

                    $path = "./public/uploads/programmers/".$value['image'];
                    if($value['image'] != "" && file_exists($path)){
                            
                    ?>
                    <img class="rounded-circle proimages proimg" src="<?php echo base_url().'/public/uploads/programmers/'.$value['image']; ?>">
                    <?php   }else{ ?><br>
                        <img class="rounded-circle proimages proimg" src="<?php  echo base_url()."public/uploads/programmers/No-image.jpg"; ?>" width=300> 
                <?php } ?>

                    <div class="card-title text-center">
                        <h3 class="proname pt-2"><?php echo strtoupper($value['name']); ?></h3>
                        <hr id="prohr">
                        <div class="card-text text-center">
                            <h5 class="prowork"><?php echo strtoupper($value['programmer_profile_name']); ?></h5>
                        </div>
                        <hr id="prohrb">
                        <a href="<?php echo base_url().'Pages/programmerProfile/'.$value['id']; ?>" class="btn btn-primary view_btn" id="programmerprofile">VIEW PROFILE</a>
                    </div>
                </div>
            </div>
        </div>
        <?php }   
              } ?>
    </div>
</div>

<?php $this->load->view('frontend/footer.php'); ?>