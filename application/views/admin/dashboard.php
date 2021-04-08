
<?php $this->load->view("admin/header.php"); ?>
<style>
#contactscroll{
  overflow-y:scroll;
height:160px;
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
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="card-header text-center" style="background: linear-gradient(to left, #0c274e, #51abcf);">
        <h3 style="color: white;"><strong>WELCOME ADMIN</strong></h3>
        </div>
          <div class="card-body">
                <a href="<?php echo base_url().'admin/Contact/index';  ?>" style="color: black;"><h4><strong><i class="fas fa-envelope"></i> Contact Messages</strong></h4></a>
                  <div id="contactscroll">
                    <table class="table" >
                          <thead>
                              <tr>
                                  <th width="50">#</th>
                                  <th class="text-center">Name</th>
                                  <th class="text-center">E-Mail</th>
                                  <th class="text-center">Contact Number</th>
                                  <th class="text-center" >Send At</th>
                                  <th width="200" class="text-center" >Detail</th>

                              </tr>
                          </thead>
                          <tbody>
                          <?php if(!empty($dashboardContact)){
                                    foreach($dashboardContact as $value){
                                      if( $value['status'] == 0){ 
                          ?>
                            <tr>
                                <td class="text-center">#</td>
                                <td class="text-center"><?php echo $value['name']; ?></td>
                                <td class="text-center"><?php echo $value['email']; ?></td>
                                <td class="text-center"><?php echo $value['phone']; ?></td>
                                <td class="text-center"><?php echo date('d-m-y', strtotime($value['dateandtime'])); ?></td>
                                <td class="text-center">
                                  <?php if( $value['status'] == 0){  ?>
                              <span class="badge badge-warning">Unseen</span>
                            <?php }else{ ?>
                              <span class="badge badge-success">Seen</span>
                            <?php } ?>
                                  <a href="<?php echo base_url().'admin/Contact/showContact/'.$value['id']; ?>" class="btn btn-outline-success ml-2"><i class="fas fa-eye"></i> VIEW</a>
                                </td>
                            </tr>
                            <?php  }  } 
                            }else{ ?>
                              ?>
                              <tr><td colspan="6"> All message are seened........ </td></tr>
                              <?php } ?>
                          </tbody>
                    </table>
                  </div><br><br>


              <a href="<?php echo base_url().'admin/Requests/index'; ?>" style="color: black;"><h4><strong><i class="fas fa-envelope"></i> Candidate Requests</strong></h4></a>
                <div id="contactscroll">
                  <table class="table" >
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">E-Mail</th>
                                <th class="text-center">Contact Number</th>
                                <th class="text-center" >Apply at</th>
                                <th width="200" class="text-center" >Detail</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($dashboardRequest)){
                                  foreach($dashboardRequest as $value){
                                    if( $value['status'] == 0){ 
                        ?>
                          <tr>
                              <td class="text-center">#</td>
                              <td class="text-center"><?php echo $value['name']; ?></td>
                              <td class="text-center"><?php echo $value['email']; ?></td>
                              <td class="text-center"><?php echo $value['phone']; ?></td>
                              <td class="text-center"><?php echo date('d-m-y', strtotime($value['dateandtime'])); ?></td>
                              <td class="text-center">
                                <?php if( $value['status'] == 0){  ?>
                                  <span class="badge badge-warning">unseen</span>
                                <?php }else{ ?>
                                <span class="badge badge-success">seen</span>
                                <?php } ?>
                                <a href="<?php echo base_url().'admin/Requests/getSkill/'.$value['id']; ?>" class="btn btn-outline-success ml-2"><i class="fas fa-eye"></i> VIEW</a>                
                                </td> 
                          </tr>
                          <?php  }  } 
                          }else{ ?>
                            <tr><td colspan="6"> All message are seened........ </td></tr>
                            <?php } ?>
                        </tbody>
                  </table>
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
<!-- /.control-sidebar -->

<?php $this->load->view("admin/footer.php"); ?>
