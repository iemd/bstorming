<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <?php foreach($editstore as $row){} ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">EDIT STORE</span>

            </h1>
            <div class="text-center">
               <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
               <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
             </div>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">

                <div class="col-md-1"></div>
                <div class="col-sm-9">
                <form action="<?php echo base_url('Store/updateStore/').$row['store_id'] ?>" method="post" class="form form-horizontal" >

                    <div class="row">
                      <label for="name" class="col-sm-2">Store Name:</label>
                      <div class="col-sm-6"><input id="storename" name="storename" value="<?php echo $row['store_name'] ?>" class="form-control" type="text" placeholder="Enter Store Name"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Address:</label>
                      <div class="col-sm-6"><input id="address" name="address" value="<?php echo $row['address'] ?>" class="form-control" type="text" placeholder="Enter Address"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">City:</label>
                      <div class="col-sm-6"><input id="city" name="city" value="<?php echo $row['city'] ?>" class="form-control" type="text" placeholder="Enter City"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">PinCode:</label>
                      <div class="col-sm-6"><input id="pincode" name="pincode" value="<?php echo $row['pincode'] ?>" class="form-control" type="text" placeholder="Enter Pincode"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Manager Name:</label>
                      <div class="col-sm-6"><input id="manager" name="manager" value="<?php echo $row['manager_name'] ?>" class="form-control" type="text" placeholder="Enter Manager Name"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Mobile No.:</label>
                      <div class="col-sm-6"><input id="mobileno" name="mobileno" value="<?php echo $row['mobileno'] ?>" class="form-control" type="text" placeholder="Enter Mobile No."></div>
                    </div><br/>
                    <div class="row">
                          <label for="id" class="col-sm-2">Store ID:</label>
                          <div class="col-sm-6"><input id="storeid" name="storeid" value="<?php echo $row['StoreID'] ?>" class="form-control" type="text"  readonly></div>
                    </div><br/>
                    <div class="row">
                    <label for="password" class="col-sm-2">Password:</label>
                    <div class="col-sm-6"><input id="password" name="password" value="<?php echo $row['password'] ?>" class="form-control" type="password" autocomplete="off" placeholder="Enter Password" readonly></div>
                    </div><br/>

                    <div class="row">
                      <div class="col-sm-4">&nbsp;</div>
                      <div class="col-sm-4">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a href="<?php echo base_url('Store/viewStore'); ?>" class="btn btn-danger" type="button">Cancel</a>
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
