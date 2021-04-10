<?php $this->load->view('frontend/header.php'); ?>
<div class="aboutUs pb-4">
    <h5 class="abouthead text-center">ABOUT US</h5>
</div>


<div class="container aboutcontainer" data-aos="fade-up">
    <div class="row">
        <div class="col-md-6">
            <h2 class="aboutmid pb-1">ABOUT US</h2>
            <p class="aboutcontents">Indori Programmers is a startup based in Indore and a platform for all programmers, developers, designers to come together and collaborate to work.
Usually, programmers lack in experience and knowledge of various domains needed to complete a project. By our platform a team of versatile members comes up having the knowledge of various domains which supports them to accomplish their work efficiently.
</p>
        </div>
        
        <div class="col-md-6">
            <center><video controls autoplay muted class="vidplay">
                <source src="<?php echo base_url().'public/video/Indori.mp4'; ?>" >
            </video>
            <!-- <img src="<?php echo base_url().'public/images/aboutus.gif'; ?>" class="aboutimgs"> -->
        </center>
        </div>
    </div>
</div>
<!-- 
<section class="section">
    <div class="container center-div">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="videohead">
                    <h2>Video</h2>
                </div>
                <div class="discription"> 
                    <h2>who is indori programmers</h2>
                </div>
                <div class="watchtag">
                    <h2>Watch the Video <i class="fas fa-video"></i></h2>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <video controls autoplay>
                    <source src="<?php echo base_url().'public/images/promo_video.mp4'; ?>" >
                </video>
            </div>
        </div>
    </div>
</section> -->



<!-- <div class="founderportal mt-5 mb-5">
    <div class="container-fluid" id="foundercontainer">
        <h3 class="founderhead text-center pb-4 pt-4">our founders</h3>
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card" id="mainfounder">
                    <a href="#" class="founderanchor">
                        <div class="card-body text-center">
                            <img class="rounded-circle" src="<?php echo base_url().'public/images/box3.jpg'; ?>">
                            <div class="card-title text-center">
                                <h3 class="foname pt-3">Aman Pandagre</h3>
                                <hr id="fohr">
                                <div class="card-text text-center">
                                    <h5 class="fowork">WEB DEVELOPER</h5>
                                </div>
                                <hr id="fohrb">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>

    
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="cofoundercard1">
                    <a href="#" class="founderanchor">
                        <div class="card-body text-center">
                            <img class="rounded-circle" src="<?php echo base_url().'public/images/box3.jpg'; ?>">
                            <div class="card-title text-center">
                                <h3 class="foname pt-3">Aman Pandagre</h3>
                                <hr id="fohr">
                                <div class="card-text text-center">
                                    <h5 class="fowork">WEB DEVELOPER</h5>
                                </div>
                                <hr id="fohrb">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card" id="cofoundercard2">
                    <a href="#" class="founderanchor">
                        <div class="card-body text-center">
                            <img class="rounded-circle" src="<?php echo base_url().'public/images/box3.jpg'; ?>">
                            <div class="card-title text-center">
                                <h3 class="foname pt-3">Aman Pandagre</h3>
                                <hr id="fohr">
                                <div class="card-text text-center">
                                    <h5 class="fowork">WEB DEVELOPER</h5>
                                </div>
                                <hr id="fohrb">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div> -->

<?php $this->load->view('frontend/footer.php'); ?>
