<?php $this->load->view("admin/header.php"); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">DASHBOARD</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/adminhome/index' ?>">Home</a></li>
          <li class="breadcrumb-item active"><a href="<?php echo base_url().'admin/Requests/index'; ?>">Requests</a></li>
          <li class="breadcrumb-item active">View</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-primary card-outline">
          <div class="card-title text-center pt-3">
            <h1 class="adminacontacthead">MESSAGE</h1>
          </div>
          <div class="card-body" style="height: 450px;">
           <?php
          if(!empty($fetchskill)){
            echo $fetchskill['skill'];
          }
           ?>
          </div>
          <div class="card-footer" style="margin-top: -100px;">
          <a href="<?php echo base_url().'admin/Requests/updatestatus/'.$fetchskill['id']; ?>" class="btn btn-danger btn-block" style="font-size: 20px;">SEEN</a>
          </div>
        </div><!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
<div class="p-3">
  <h5>Title</h5>
  <p>Sidebar content</p>
</div>
</aside>

<!-- /.control-sidebar -->

<?php $this->load->view("admin/footer.php"); ?>