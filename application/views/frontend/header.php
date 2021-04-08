<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo base_url('public/images/logo5.png'); ?>">
    <link rel="stylesheet" href="<?php echo base_url().'public/css/styles.css'; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    
    <style>
      @media only screen and (max-width: 700px){
        .navbar-nav{
            background: linear-gradient(to left, #0c274e, #0068ac) !important;
            }
          }
                
        .bgcolor.scrolled{
            background: linear-gradient(to left, #0c274e, #0068ac) !important;    
          }
          
          #navul.scrolled{
              color: white;
            }
          #logo.scrolled{
              color: black;
            }
          #loader{
            text-align: center  ;
            }

          .aboutcontainerHome{
              margin-top: 5%;
              padding-left: 50px;
              padding-right: 50px;
              margin-bottom: 2%;
          }
          @media only screen and (min-width: 300px) and (max-width: 991px){
            .aboutcontainerHome{
                  margin-top: 5%;
                  padding-left: 20px;
                  padding-right: 20px;
                  margin-bottom: 4%;
              }
            .aboutmid{
                text-align: center;
                margin-top: 10px;
              }
          }

    </style>

    <title>IndoriProgrammers</title>
  </head>
  <body onload="preloader()" class="ball">

  <div id="loader"> </div>
  
  <section class="main-content">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bgcolor">
        <img src="<?php echo base_url('public/images/logo4.png'); ?>" class="navlogo ml-3">
            <!-- <a class="navbar-brand" href="#" id="logo" style="color: white;"> <b><i> INDORI PROGRAMMERS </i></b></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars" style = "color: white; font-size: 30px;"></i>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link " id="navul" href="<?php echo base_url().'Home/index' ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="navul" href="<?php echo base_url().'Pages/aboutUs' ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navul" href="<?php echo base_url().'Pages/programmer' ?>">Programmers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navul" href="<?php echo base_url().'Pages/service' ?>">What We Do</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" id="navul" href="<?php echo base_url().'Pages/contactus' ?>">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url().'Pages/registration' ?>" class="btn my-2 my-sm-0 mr-3 navbtn"  style="color: white; font-size: 20.5px;  border: none;  padding-left: 20px;
                       padding-right: 20px;"><i class="fas fa-user-plus"></i> REGISTER </a>
                </li>
            </ul>
            </div>
          </nav>
    </header>
    