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
              <li class="breadcrumb-item active"><a href="<?php echo base_url().'admin/Programmer/index' ?>">Programmers</a></li>
              <li class="breadcrumb-item active">Edit Programmer</li>
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
            <?php  if(!empty($editDetail)){ ?>
             <form name="categoryform" enctype="multipart/form-data" id="categoryform" method="post" action="<?php echo base_url().'admin/Programmer/edit_programmers/'.$editDetail['id']; ?>">
            	<div class="card-header">
            		<div class="card-title ">
            		EDIT PROGRAMMER
            		</div>
              </div>
            		<div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="nm" id="name" value="<?php echo set_value('nm', $editDetail['name']); ?>" class="form-control <?php echo (form_error('nm') != '') ? 'is-invalid' : ''; ?>" placeholder="Enter Programmers Name">
                                <?php echo form_error('nm'); ?> 
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phn" id="phonenumber" value="<?php echo set_value('phn', $editDetail['phone']); ?>" class="form-control <?php echo (form_error('phn') != '') ? 'is-invalid' : ''; ?>" placeholder="Enter Programmers Number">
                                <?php echo form_error('phn'); ?> 
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="eml" id="email" value="<?php echo set_value('eml', $editDetail['email']); ?>" class="form-control <?php echo (form_error('eml') != '') ? 'is-invalid' : ''; ?>"  placeholder="Enter Programmers Email">
                                <?php echo form_error('eml'); ?> 
                            </div>

                            <div class="form-group">
                            <label>Image</label><br>
                            <input type="file" name="image" id="img" class="<?php echo (!empty($imageError)) ? 'is-invalid' : '' ; ?>">
                            <?php if(!empty($imageError)) echo $imageError;  ?>
                            <br>
                                <?php if ($editDetail['image'] != "" && file_exists("./public/uploads/programmers/".$editDetail['image'])) { ?>
                                    <img class="mt-3" src="<?php echo base_url().'public/uploads/programmers/'.$editDetail['image']; ?>"  width=300>
                                    <?php }else{ ?>
                                    <img class="my-3" src="<?php echo base_url()."public/uploads/programmers/No-image.jpg"; ?> " width=300>
                                <?php }?> 
                            </div>

                            <div class="form-group">
                                <label>Projects link</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Link &nbsp <i class="fas fa-link"></i></span><input type="text" name="plnk" id="plink" value="<?php echo set_value('plnk', $editDetail['projects_link']); ?>" class="form-control <?php echo (form_error('plnk') != '') ? 'is-invalid' : ''; ?>"  placeholder="Enter Programmers Projects Link">
                                </div>
                                <?php echo form_error('plnk'); ?> 
                            </div>
                            
                            <div class="form-group">
                                <label>Languages</label>
                                <input type="text" name="lang" id="language" value="<?php echo set_value('lang', $editDetail['skills']); ?>" class="form-control <?php echo (form_error('lang') != '') ? 'is-invalid' : ''; ?>"  placeholder="Enter Programmers Skills">
                                <?php echo form_error('lang'); ?> 
                            </div>

                            <div class="form-group">
                                  <label>Profile</label>
                                  <select name="profile" id="prfl" class="form-control <?php echo (form_error('profile') != '') ? 'is-invalid' : ''; ?>">
                                    <option value="">Select a Profile</option>
                                    <?php if (!empty($getProgrammerProfile)) { ?>
                                    <?php foreach ($getProgrammerProfile as  $value) { 
                                       $selected = ($editDetail['profile'] == $value['id']) ? true : false; 
                                      ?>
                                      <option <?php echo set_select('profile', $value['id'], $selected);  ?> value="<?php echo $value['id'];?>"><?php echo $value['programmer_profile']; ?></option>
                                      <?php  } }  ?>
                                  </select>
                                  <?php echo form_error('profile'); ?> 
                            </div>
                            
                            <div class="form-group">
                              <label>Terms and Conditions</label><br>
                             
                                <div class="custom-control custom-radio float-left">
                                          <input class="custom-control-input" value="1" type="radio" id="statusActive" name="tmc"  <?php echo ($editDetail['tm_and_cd'] == 1) ? "checked" : '' ;  ?> >
                                          <label for="statusActive" class="custom-control-label">Accepted</label>
                                    </div>                              
                                    <div class="custom-control custom-radio float-left ml-3">
                                          <input class="custom-control-input"  value="0" type="radio" id="statusBlock" name="tmc"  <?php echo ($editDetail['tm_and_cd'] == 0) ? "checked" : '' ;  ?>>
                                          <label for="statusBlock" class="custom-control-label">Not Accepted</label>
                                    </div>
                                    
                                </div><br>
                                      
                                <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Update</button>
                                    </div>

                                    <div class="col-md-6">
                                    <a href="<?php echo base_url().'admin/Programmer/index' ?>" class="btn btn-secondary btn-block">Back</a>
                                    </div>
                      </div>
                    </div> 
                 </form>
                 <?php } ?>
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