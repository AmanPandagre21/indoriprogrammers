  <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>DASHBOARD</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url().'public/css/styles.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" />



</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <strong>ADMINISTRATOR</strong>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url().'admin/Admin/logout' ?>" class="dropdown-item">
            <i class="fas fa-door-closed mr-2" aria-hidden="true"></i> Logout
          </a>
          <a href="<?php echo base_url().'admin/Admin/changePassword' ?>" class="dropdown-item">
            <i class="fas fa-lock mr-2" aria-hidden="true"></i> Change Password
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link pt-4 pb-4">
      <img src="<?php echo base_url('public/images/logo5.png'); ?>" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Pannel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('adminsession') ?></a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item  <?php echo (!empty($mainModule) && $mainModule == 'dashboard') ? 'menu-open' : ''; ?>">
                <a href="<?php echo base_url().'admin/adminhome/index' ?>" class="nav-link  <?php echo (!empty($mainModule) && $mainModule == 'dashboard') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DASHBOARD</p>
                </a>
              </li>
            </ul>
          </nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php echo (!empty($mainModule) && $mainModule == 'contact') ? 'menu-open': ''; ?>">
            <a href="<?php echo base_url().'admin/Contact/index'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == 'contact') ? 'active': ''; ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                CONTACT
              </p>
            </a>
          </li>

          <li class="nav-item <?php echo (!empty($mainModule) && $mainModule == 'programmer') ? 'menu-open': ''; ?>">
            <a href="<?php echo base_url().'admin/Programmer/index'; ?>" class="nav-link  <?php echo (!empty($mainModule) && $mainModule == 'programmer' && !empty($subModule) && $subModule == 'sub') ? 'active': ''; ?> ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                PROGRAMMERS
              </p>
            </a>
          </li>

          <li class="nav-item <?php echo (!empty($mainModule) && $mainModule == 'Requests') ? 'menu-open': ''; ?>">
            <a href="<?php echo base_url().'admin/Requests/index'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == 'Requests') ? 'active': ''; ?> ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                REQUESTS
              </p>
            </a>
          </li>

          <li class="nav-item <?php echo (!empty($mainModule) && $mainModule == 'profile') ? 'menu-open': ''; ?>">
            <a href="<?php echo base_url().'admin/Programmer_profile/index'; ?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == 'profile' && !empty($subModule) && $subModule == 'sub') ? 'active': ''; ?> ">
              <i class="far fa-circle nav-icon"></i>
              <p>
               PROGRAMER PROFILE
              </p>
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview <?php echo (!empty($mainModule) && $mainModule == 'article') ? 'menu-open': ''; ?>">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Articles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo (!empty($mainModule) && $mainModule == 'article' && !empty($subModule) && $subModule == 'createArticle') ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Aricles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link <?php echo (!empty($mainModule) && $mainModule == 'article' && !empty($subModule) && $subModule == 'viewArticle') ? 'active': ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Aricles</p>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
