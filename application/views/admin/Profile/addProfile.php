<?php $this->load->view("admin/header.php"); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Programmers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url().'admin/Programmer_profile/index' ?>">Programmers Profile</a></li>
              <li class="breadcrumb-item active">Add Programmers Proile</li>
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
            <div class="card card-primary">
             <form name="categoryform" enctype="multipart/form-data" id="categoryform" method="post" action="<?php echo base_url().'admin/Programmer_profile/addProfiles' ?>">
            	<div class="card-header">
            		<div class="card-title ">
            			ADD NEW PROGRAMMER PROFILE
            		</div>
              </div>
            		<div class="card-body">
                <div class="form-group">
                      <label>Profile Name</label>
                      <input type="text" name="pronm" id="profilename" value="<?php echo set_value('pronm'); ?>" class="form-control <?php echo (form_error('pronm') != '') ? 'is-invalid' : ''; ?>" placeholder="Enter Programmers Profile Name">
                      <?php echo form_error('pronm'); ?> 
                </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-md-6">
                          <button class="btn btn-primary btn-block" type="submit" name="submit">ADD</button>
                        </div>

                        <div class="col-md-6">
                          <a href="<?php echo base_url().'admin/Programmer_profile/index' ?>" class="btn btn-secondary btn-block">Back</a>
                        </div>
                      </div>
                    </div> 

                 </form>
               </div>
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
  <?php $this->load->view("admin/footer.php"); ?>