 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">CREATE CITY</span>

            </h1>

          </div>
            
                     <div class="row gutter-xs">
              <div class="text-center">
                 <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
                 <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
               </div>
              <div class="col-sm-12 col-md-6 col-xs-12">
                  <div class="card">
                      <div class="card-body">
                           <form action="<?php echo base_url() ?>save-city" method="post" class="form form-horizontal" >
                  <br/>
                               <div class="row">
                      <label for="cityname" class="col-sm-3">City Name:</label>
                      <div class="col-sm-9"><input id="cityname" name="cityname" class="form-control" type="text" placeholder="Enter City Name" required=""></div>
                    </div><br/>
                    <div class="row">
                      <label for="pincode" class="col-sm-3">Pincode:</label>
                      <div class="col-sm-9"><input id="pincode" name="pincode" class="form-control" type="text" placeholder="Enter Pincode" maxlength="6" required=""></div>
                    </div><br/>
                   
                    
                    <div class="row">
                   <div class="col-sm-12">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Create CITY</button>
                            <a href="<?php echo base_url('city-management'); ?>" class="btn btn-danger" type="button">Cancel</a>
                        </div>
                     </div>
                    </div>
                    </form>
                      </div>
                  </div>
                  
               
                  </div>

                <div class="col-md-6"></div>
            </div>
                
        </div>
      </div>
	<?php } else { ?>

   	    <?php redirect(base_url('AdminPanel')); ?>

   	<?php } ?>
   
   <script src="<?php echo base_url('assets/js/vendor.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/elephant.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/application.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/demo.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/compose.min.js');?>"></script>
   
 </body>
</html>
