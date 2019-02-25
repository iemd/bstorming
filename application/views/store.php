<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
       <div class="layout-content-body">
         <div class="title-bar">

           <h1 class="title-bar-title">
               <span class="d-ib">BRAND MANAGEMENT</span>

           </h1>

         </div>
           <div class="row gutter-xs" style="margin-top: 30px">
               <div class="col-md-1"></div>
               <div class="col-md-10">
                   <div class="row">
                       <div class="col-md-3">

                                  <a type="button" href="<?php echo base_url('Brand/viewBrand'); ?>" class="btn btn-primary">Manage Brand</a>

                       </div>
                        <div class="col-md-3">

                                   <a type="button" href="<?php echo base_url('Store/viewStore'); ?>" class="btn btn-primary">Manage Store</a>

                       </div>
                        <div class="col-md-3">

                                   <button type="button" class="btn btn-primary">Store Manager Management</button>

                       </div>
                        <div class="col-md-3">

                                   <button type="button" class="btn btn-primary">Complain Management</button>

                       </div>
                   </div>
                    <div class="row" style="margin-top:40px">
                       <div class="col-md-3">

                                  <button type="button" class="btn btn-primary">ASM Report</button>

                       </div>
                        <div class="col-md-3">

                                   <button type="button" class="btn btn-primary">ZM Report</button>

                       </div>
                        <div class="col-md-3">

                                   <button type="button" class="btn btn-primary">NH Report</button>

                       </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary">Operations Report</button>
                        </div>

                   </div>
                   <div class="row" style="margin-top:40px">
                      <div class="col-md-3">

                                  <button type="button" class="btn btn-primary">Status Reporting</button>

                       </div>
                        <div class="col-md-3">

                                   <button type="button" class="btn btn-primary">Dashboard With Calender</button>

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
