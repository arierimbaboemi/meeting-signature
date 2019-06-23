<!DOCTYPE html>
<html>
<?php $this->load->view('include/header');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <?php $this->load->view($main_view);?>
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('include/footer');?>
  <?php $this->load->view('include/notif');?>
</body>
</html>
