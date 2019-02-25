<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">CREATE BRAND</span>

            </h1>
            <div class="text-center">
               <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
               <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
             </div>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">

                <div class="col-md-1"></div>
                <div class="col-sm-9">
                <form action="<?php echo base_url('Brand/addBrand/') ?>" method="post" class="form form-horizontal" >

                    <div class="row">
                      <label for="name" class="col-sm-2">Brand Name:</label>
                      <div class="col-sm-6"><input id="brandname" name="brandname" class="form-control" type="text" placeholder="Enter Brand Name"></div>
                    </div><br/>

                    <div class="row">
                      <div class="col-sm-4">&nbsp;</div>
                      <div class="col-sm-4">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Create Brand</button>
                            <a href="<?php echo base_url('Brand/viewBrand'); ?>" class="btn btn-danger" type="button">Cancel</a>
                        </div>
                     </div>
                    </div>
                    </form>
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
   <script src="<?php echo base_url('assets/js/compose.min.js');?>"></script>
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
