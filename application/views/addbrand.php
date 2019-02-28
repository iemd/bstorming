<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <?php foreach($storedetail as $store){} ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">ADD BRANDS [<?php echo $store['StoreID']; ?>]</span>

            </h1>

          </div>
            <div class="row gutter-xs">
              <form action="<?php echo base_url('Store/addBrand/'); ?>" method="post" class="form form-horizontal" >
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                     <div class="card">
                <div class="card-header">
                <!--<h3 align="center">Rate Store</h3>-->
                <div class="text-left">
                   <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
                   <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
                 </div>
                </div>
                <div class="card-body">
                <!--<h3 align="center">&nbsp;</h3>-->
                  <div class="table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>

                      </thead>
                      <tbody>
                        <?php $count = count($brandlist); ?>
                        <?php if($count>0){ ?>
                        <?php
                             $checked =0;
                             foreach($brandlist as $brand) {
                               foreach($storebrand as $row) {
                                 if($brand['brand_id'] == $row['brand_id']){
                                     $checked =1;
                                 }
                               }

                          ?>
                        <tr>
                          <td>
                              <div class="checkbox">

                                    <label class="label-primary" style="color:#ffffff;">&nbsp;
                                      <input type="checkbox" name="brand[]" value="<?php echo $brand['brand_id']; ?>" <?php if($checked){echo "checked";} ?>>&nbsp;<?php echo $brand['brand_name']; ?>&nbsp;&nbsp;
                                    </label>

                                </div>
                           </td>
                        </tr>
                        <?php $checked =0;} }else{ ?>
                          <tr>
                            <td>
                                <a href="<?php echo base_url('Brand/createBrand'); ?>" class="btn btn-primary" type="button">Create Brand</a>
                             </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="text-right">
                <input type="hidden" name="storeid" value="<?php echo $store['store_id']; ?>" />
                 <button class="btn btn-primary" type="submit">Submit</button>
                 <a href="<?php echo base_url('Store/viewStore'); ?>" class="btn btn-danger" type="button">Back</a>
              </div>
                </div>
              <div class="col-sm-1"></div>
              </form>
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
