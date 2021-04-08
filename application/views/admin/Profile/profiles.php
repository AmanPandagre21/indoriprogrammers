<?php $this->load->view("admin/header.php"); ?>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
</style>

        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Programmers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Programmer Profile</li>
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
          <?php if($this->session->flashdata('insert') != "") { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('insert');?></div>
          <?php }?>
            <div class="card card-primary card-outline">
            	<div class="card-header">
            		<div class="card-title">
            			<form id="searchForm" name="searchForm" method="get" action="<?php echo base_url().'admin/Programmer_profile/index'; ?>">
            				<div class="input-group mb-0">
            					<input type="text" name="searchProgrammer" value="" class="form-control" placeholder="search" style="width: 150px">
            					<div class="input-group-append">
            						<button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
            					</div>
            				</div>
            			</form>
            		</div>
            		<div class="card-tools">
            			<a href="<?php echo base_url().'admin/Programmer_profile/addProfiles' ?>" class="btn btn-primary"><i class="fas fa-plus"></i> ADD</a>
            		</div><br>
            		<div class="card-body">
                 <div style="overflow-x:auto;">
            			<table  class="table">
            				<tr>
                      <th class="text-center">S No.</th>
                      <th class="text-center">Profile Name</th>
            					<th class="text-center">created_at</th>
            					<th class="text-center">Action</th>
            				</tr>
            				<?php if (!empty($getProgrammerProfile)) { ?>
                      <?php foreach ($getProgrammerProfile as  $value) { ?>
            				<tr>
                       <td class="text-center pt-5">##</td> 
            					 <td class="text-center pt-5"><?php echo $value['programmer_profile'] ?></td>
                       <td class="text-center pt-5"><?php echo date('y-M-d', strtotime($value['dateandtime'])); ?></td>
                
                     <td class="text-center pt-5" >
                      <a href="javascript:void(0);" onclick="deleteProfile(<?php echo $value['id']; ?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  <?php } }else{ ?>
                    <tr>
                      <td colspan="7">Records not found</td>
                        </tr>
                  <?php } ?>
                      
            			</table>
                  <div>
                    <?php echo $pagination_link; ?>
                  </div>
                </div>
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

