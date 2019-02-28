<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <?php foreach($asmdetail as $asm){} ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">ALLOCATE STORE [<?php echo $asm['ID']; ?>]</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
              <form action="<?php echo base_url('Asm/allocateStore/'); ?>" method="post" class="form form-horizontal" >
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
                        <tr>
                          <th>Sl. No.</th>
                          <th>Store ID</th>
                          <th>Store Name</th>
                          <th>Address</th>
                          <!--<th>City</th>-->
                          <!--<th>Pincode</th>-->
                          <th>Manager Name</th>
                          <th>Mobile No.</th>
                          <th>Date</th>
                          <!--<th>Brand</th>-->
                          <th>Select Store</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        <?php $count = count($storelist); ?>
                        <?php if($count>0){ ?>
                        <?php
                            $checked =0;
                            foreach($storelist as $store) {
                              foreach($asmstorelist as $row) {
                                if($store['store_id'] == $row['store_id']){
                                    $checked =1;
                                }
                              }


                          ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                             <td><?php echo $store['StoreID']; ?></td>
                             <td><?php echo $store['store_name']; ?></td>
                             <td><?php echo $store['address']; ?></td>
                             <!--<td><?php //echo $store['city']; ?></td>
                             <td><?php //echo $store['pincode']; ?></td>-->
                             <td><?php echo $store['manager_name']; ?></td>
                             <td><?php echo $store['mobileno']; ?></td>
                            <td><?php echo $store['created_at']; ?></td>
                             <!--<td><a href="<?php //echo base_url('Store/selectBrand/').$store['store_id']; ?>" class="btn btn-primary btn-xs" type="button">Add Brand</a></td>-->
                             <td style="<?php if($checked){echo "background:#0288d1";} ?>">

                                <input type="checkbox" name="store[]" value="<?php echo $store['store_id']; ?>" <?php if($checked){echo "checked";} ?> style="width:20px;height:20px;">

                              </div>
                            </td>
                        </tr>
                        <?php $i++; $checked =0;} }else{ ?>
                          <tr>
                            <td>
                                <a href="<?php echo base_url('Store/createStore'); ?>" class="btn btn-primary" type="button">Create Store</a>
                             </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="text-right">
                 <input type="hidden" name="asmid" value="<?php echo $asm['user_id']; ?>">
                 <button class="btn btn-primary" type="submit">Submit</button>
                 <a href="<?php echo base_url('Asm/viewAsm'); ?>" class="btn btn-danger" type="button">Back</a>
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
