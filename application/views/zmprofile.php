<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
     <div class="layout-content-body">
       <div class="title-bar">

         <h1 class="title-bar-title">
             <span class="d-ib">MANAGE ZM PROFILE</span>

         </h1>

       </div>
         <div class="row gutter-xs" style="margin-top: 30px">
             <div class="col-md-1"></div>
             <div class="col-md-10">
                 <div class="row">
                     <div class="col-md-3">

                                <a href="<?php echo base_url('Zm/createZm'); ?>" type="button" class="btn btn-primary">Create ZM</a>

                     </div>
                      <div class="col-md-3">

                                 <button type="button" class="btn btn-primary">View ZM Profile</button>

                     </div>
                      <div class="col-md-3">

                                 <button type="button" class="btn btn-primary">Work Activity</button>

                     </div>
                      <div class="col-md-3">

                                 <button type="button" class="btn btn-primary">Complain Management</button>

                     </div>
                 </div>
                  <div class="row" style="margin-top:40px">
                     <div class="col-md-3">

                                <button type="button" class="btn btn-primary">Calender With Notification</button>

                     </div>
                      <div class="col-md-3">

                                 <button type="button" class="btn btn-primary">Statistics</button>

                     </div>
                      <div class="col-md-3">

                                 <button type="button" class="btn btn-primary">Task Management</button>

                     </div>
                      <div class="col-md-3">

                      </div>

                 </div>
             </div>
             <div class="col-md-1"></div>
         </div>
     </div>
   </div>
	<?php } else { ?>

   	    <?php redirect(base_url('AdminPanel')); ?>

   	<?php } ?>
   <!--<div class="layout-footer">
       <div class="layout-footer-body">
         <small class="version"></small>
         <small class="copyright">2019 &copy; Brain Storming. Designed And Developed By <a href="http://aytis.in" title="AYTIS CLOUD SOLUTIONS PVT. LTD.">AYTIS CLOUD SOLUTIONS PVT. LTD.</a></small>
       </div>
     </div>
   </div>-->
   <script src="<?php echo base_url('assets/js/vendor.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/elephant.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/application.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/demo.min.js');?>"></script>
   <!--<script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-83990101-1', 'auto');
     ga('send', 'pageview');
   </script>-->
 </body>
</html>
