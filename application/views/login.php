<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brain Storming</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="brain storming.">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon-16x16.png'); ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url('manifest.json');?>">
    <link rel="mask-icon" href="<?php echo base_url('assets/images/safari-pinned-tab.svg');?>" color="#0288d1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.min.css');  ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elephant.min.css');  ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-3.min.css');  ?>">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="index.php">
          <!---<img class="img-responsive" src="img/logo.svg" alt="Elephant">-->
            <h2 align="center">Brain Storming</h2>
        </a>
        <h3 class="login-heading">Sign in</h3>
        <div class="login-form">
             <?php //if(isset($_SESSION["errormsg"])) {echo $_SESSION["errormsg"]; }?>
            <form data-toggle="md-validator" action="<?php echo base_url(); ?>AdminPanel/adminloginAction" method="post">
		 <div class="md-form-group">
                     <select class="md-form-control" name="role">
                         <option value="">Select Role</option>
                         <option value="ASM">ASM</option>
                           <option value="ZM">ZM</option>
                             <option value="NH">NH</option>
                               <option value="HR">HR</option>

                     </select>
                     <label class="md-control-label"></label>
                 </div>
            <div class="md-form-group md-label-floating">
                 <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="md-form-group md-label-floating">
              <input class="md-form-control" type="text" name="username" spellcheck="false" autocomplete="off" placeholder="Email"  required>
              <!--<label class="md-control-label">Username</label>-->
            </div>
            <div class="md-form-group md-label-floating">
              <input class="md-form-control" type="password" name="password" placeholder="Password" required>
              <!--<label class="md-control-label">Password</label>-->
            </div>

                <button class="btn btn-primary btn-block" type="submit" name="submit">Sign in</button>
          </form>
        </div>
      </div>

    </div>
      <hr>
      <div class="row-fluid">
          <div id="footer" class="span12" style="text-align: center;"> 2019 &copy; BRAIN STORMING. Designed And Developed By <a href="http://aytis.in" title="AYTIS CLOUD SOLUTIONS PVT. LTD.">AYTIS CLOUD SOLUTIONS PVT. LTD.</a> </div>
    </div>
    <script src="<?php echo base_url('assets/js/vendor.min.js');  ?>"></script>
    <script src="<?php echo base_url('assets/js/elephant.min.js'); ?>"></script>
    <!--<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>-->
  </body>

<!-- Mirrored from demo.madebytilde.com/elephant-v1.4.0/theme-11/login-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 05:53:09 GMT -->
</html>
