<?php $this->load->view('frontend/header.php'); ?>



<!-- front Img -->

<section class="front-section">
  <div class="frontimg-div">
    <div class="left-div">
      <h1 class="text-left text-uppercase"><span class="typedHome"></span></h1>
    </div>

    <a href="#aboutSection" class="expand-btn">
      <img src="<?php echo base_url().'public/images/scroll.webp'; ?>">
    </a>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
  </div>
</section>

<!-- about us -->
<section class="about-section mt-3 mb-3" data-aos="fade-up">
  <div class="container-fluid aboutcontainerHome">
    <div class="row">
      <div class="col-lg-4 pt-3 pb-3">
        <center><img src="<?php echo base_url().'public/images/logo1.png'; ?>" class="aboutimg">
          <center>
      </div>

      <div class="col-lg-8">
        <h2 class="aboutmid pb-2">What is Indori Programmers?</h2>
        <p class="aboutcontent">Indori programmers is a social platform for all the programmers, developers and
          designers.
          You will find most skilled, talented and innovative programmers, developers and designers here. We’re here to
          help you achieve all that you want. Ours is a team of young, enthusiastic and skilled individuals and we tend
          to
          help others like us to grow and find a way of their own. Our aim is to create a path to follow; and achieve
          success, for all the individuals out there without guidance trying to find their way into the digital world.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ----------Needs----------- -->

<section class="needs-section" data-aos="fade-up">
  <div class="container-fluid needs-img">
    <img src="<?php echo base_url().'public/images/needs.gif'; ?>">
  </div>
</section>

<!-- ---------hier now------- -->

<section class="hire-section" data-aos="fade-up">
  <div class="container">
    <div class="hireheading">
      <h1 class="text-uppercase text-center">Hire Now</h1>
    </div>
    <div class="card-div">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card text-center text-uppercase">
            <div class="card-header" style=" background-color: #0068AC; height: 170px;">
              <h1 class="mt-3" style="color: white;">Hire A Team</h1>
            </div>
            <svg style="margin-top: -20%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#fff" fill-opacity="1"
                d="M0,192L48,186.7C96,181,192,171,288,192C384,213,480,267,576,250.7C672,235,768,149,864,122.7C960,96,1056,128,1152,154.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
            <!-- <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div> -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>   
            </ul>
            <div class="card-body text-center text-uppercase">
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-12">
          <div class="card text-center text-uppercase">
            <div class="card-header" style=" background-color: #0068AC; height: 170px;">
              <h1  class="mt-3"  style="color: white;">hire an individual</h1>
            </div>
            <svg style="margin-top: -20%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path fill="#fff" fill-opacity="1"
                d="M0,192L48,186.7C96,181,192,171,288,192C384,213,480,267,576,250.7C672,235,768,149,864,122.7C960,96,1056,128,1152,154.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
            <!-- <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div> -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body text-center text-uppercase">
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Programmers   -->

<section class="programmer-section">
  <div class="programmerheading">
    <h1 class="text-uppercase text-center"  data-aos="fade-up">Programmers </h1>
  </div>
  <div class="container-fluid mb-5"  data-aos="fade-up">
    <div class="owl-carousel owl-theme">
      <?php                    
      if(!empty($fetchingHomeDetail)){ 
            foreach ($fetchingHomeDetail as  $value) { ?>
      <center>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <?php  
        $path = "./public/uploads/programmers/".$value['image'];
        if($value['image'] != "" && file_exists($path)){  
        ?>
              <center>
                <img class="img rounded-circle"
                  src="<?php echo base_url().'/public/uploads/programmers/'.$value['image']; ?>"
                  style="width:240px; height:240px;">
                <?php   }else{ ?><br>
                <img src="<?php  echo base_url()." public/uploads/programmers/No-image.jpg"; ?>" style="width:300px;
                height:300px;">
                <?php } ?>
              </center>
            </div>
            <div class="flip-card-back">
              <h1>
                <?php echo strtoupper($value['name']); ?>
              </h1>
              <p>[
                <?php echo strtoupper($value['programmer_profile_name']); ?>]
              </p>
              <!-- <a href="<?php echo base_url().'Pages/programmer'?> " class="btn btn-outline-danger">Profile</a> -->
            </div>
          </div>
        </div>
      </center>
      <?php } } ?>
    </div>
  </div>

</section>


<?php $this->load->view('frontend/footer.php'); ?>
</section>