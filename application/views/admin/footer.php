<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright <a href="#">CODE SINGERS</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>

<script src="<?php echo base_url()?>public/js/typed.min.js"></script>
<!-- summernote -->
<script src="<?php echo base_url()?>public/admin/plugins/summernote/summernote-bs4.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    function deleteProgrammer(id) {
      if (confirm("Are you sure want to delete this Programmer")) {
        window.location.href = '<?php echo base_url()."admin/Programmer/delete_programmers/"; ?>' + id; 
      }
    }
  </script>


<script type="text/javascript">
    function deleteProfile(id) {
      if (confirm("Are you sure want to delete this Programmer Profile")) {
        window.location.href = '<?php echo base_url()."admin/Programmer_profile/deleteProfile/"; ?>' + id; 
      }
    }
  </script>


<script type="text/javascript">
	$(function () {
		$('.textarea').summernote({
			height: '100px'
		})
	});
</script>
</body>
</html>
