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
        <h1 class="m-0 text-dark">DASHBOARD</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/adminhome/index' ?>">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
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
          <div class="card-body text-center">
            <div style="overflow-x:auto;">
              <table class="table">
                  <thead>
                      <tr>
                          <th width="50">#</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">E-Mail</th>
                          <th class="text-center">Contact Number</th>
                          <th class="text-center" >Send At</th>
                          <th width="200" class="text-center" >Action</th>

                      </tr>
                  </thead>

                  <tbody>
                      <?php 
                      if(!empty($fetchcontact)) { ?>
                            <?php foreach ($fetchcontact as $value) {
                            
                          ?>
                      <tr>
                          <td class="text-center"><?php echo "#"; ?></td>
                          <td class="text-center"><?php echo $value['name']; ?></td>
                          <td class="text-center"><?php echo $value['email']; ?></td>
                          <td class="text-center"><?php echo $value['phone']; ?></td>
                          <td class="text-center" style="text-align:in-line;"><?php echo date('y-M-d', strtotime($value['dateandtime'])); ?></td>
                          <td class="text-center">
                          <?php if( $value['status'] == 0){  ?>
                      <span class="badge badge-warning">Unseen</span>
                    <?php }else{ ?>
                      <span class="badge badge-success">Seen</span>
                    <?php } ?>
                          <a href="<?php echo base_url().'admin/Contact/showContact/'.$value['id']; ?>" class="btn btn-outline-success ml-2"><i class="fas fa-eye"></i> VIEW</a>
                        </td>
                        </tr>
                              <?php } 
                      }else{
                            ?>
                      <tr>
                      <td colspan="6"> Records not found........ </td>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
          <div class="pr-3 ml-auto">
          <?php echo $pagination_link; ?>
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