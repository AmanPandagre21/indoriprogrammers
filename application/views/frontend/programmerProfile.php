<?php $this->load->view('frontend/header.php'); ?>

<img src="<?php echo base_url().'/public/images/profiles.png'; ?>" class="profileimgs">

<?php if(!empty($fetchingProgrammerDetail)){ ?>

<div class="programmersProfile pb-4">
  <img src="<?php echo base_url().'/public/uploads/programmers/'.$fetchingProgrammerDetail['image']; ?>" class="rounded-circle programmerprofileimg">
  <h1 class="programmerProfileHead text-center pt-1"><?php echo strtoupper($fetchingProgrammerDetail['name']); ?></h1>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card mb-3" style="border: 2px solid white; box-shadow: none;">
        <div class="card-body">
         
              <h2 class="mb-0 infoText">Profile</h2>
            <hr>
              <h4 class="text-secondary ml-5"><?php echo strtoupper($fetchingProgrammerDetail['programmerProfile_name']); ?></h4>
    
         
              <h2 class="mb-0 mt-3 infoText">Skills</h2>
          <hr>
                <h4 class="text-secondary ml-5"><?php echo strtoupper($fetchingProgrammerDetail['skills']); ?></h4  >
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin: auto 0 auto 0;">
    <center><a href="<?php echo $fetchingProgrammerDetail['projects_link']; ?>" class="btn btn-primary" id="programmerProfilebtn"><i class="fab fa-android" style="font-size: 27px;"></i> Project</a></center>

    </div>

  </div>
  <center><a href="<?php echo base_url().'Pages/contactus' ?>" class="btn btn-primary" id="hirenowbtn"> Hire Now</a></center>

</div>

<?php } ?>

<?php $this->load->view('frontend/footer.php'); ?>
