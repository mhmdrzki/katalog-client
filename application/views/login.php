<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/login.css">
<script src="<?=base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?=base_url();?>assets/img/ekatalog_logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <?php echo form_open('auth/aksi_login'); ?>
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <br><br>
      <?php
if ($this->session->flashdata('failed')) {
	echo "<div class='alert alert-block alert-danger show'>
					<span>Username atau Password Salah!</span>
				</div>";
}
?>
      <input type="submit" class="fadeIn fourth" value="Log In">
	<?php echo form_close(); ?>



  </div>
</div>