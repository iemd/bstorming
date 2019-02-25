<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">STORE LIST</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
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
                          <th>Brand</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        <?php foreach($storelist as $store) { ?>
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
                              <td></td>
                             <td>
                               <a href="<?php //echo base_url('Store/'); ?>" class="btn btn-primary btn-xs" type="button">Add Brand</a>
                               <a href="<?php echo base_url('Store/editStore/').$store['store_id']; ?>"><i class="fa fa-edit" style="font-size:18px;color:green"></i></a>&nbsp;&nbsp;
                               <a href="<?php echo base_url('Store/deleteStore/').$store['store_id']; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" style="font-size:18px;color:red"></i></a></td>
                            </td>
                        </tr>
                      <?php $i++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="text-right">
                 <a href="<?php echo base_url('Store/createStore'); ?>" class="btn btn-primary" type="button">Create Store</a>
                 <a href="<?php echo base_url('Store/'); ?>" class="btn btn-danger" type="button">Back</a>
              </div>
                </div>
              <div class="col-sm-1"></div>
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
