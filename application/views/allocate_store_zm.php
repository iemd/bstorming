<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">ALLOCATE STORE [<?php echo $zmlist[0]["ID"]; ?>]</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
              <form action="<?php echo base_url('Zm/allocateStore/'); ?>" method="post" class="form form-horizontal" >
                <input type="hidden" name="zmid" value="<?php echo $zmlist[0]['user_id']; ?>">
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
                          <th>Manager Name</th>
                          <th>Mobile No.</th>
                          <th>Date</th>
                          <th>Select Store</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if(!empty($allstore)){
                            $i=1;
                            foreach ($allstore as $srow){
                                ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                             <td><?php echo $srow["StoreID"]; ?></td>
                             <td><?php echo $srow["store_name"]; ?></td>
                             <td><?php echo $srow["address"]; ?></td>
                             <td><?php echo $srow["manager_name"]; ?></td>
                             <td><?php echo $srow["mobileno"]; ?></td>
                            <td><?php echo $srow["created_at"]; ?></td>
                             <td>

                                 <input type="checkbox" name="store[]" value="<?php echo $srow["sid"]; ?>" <?php if($srow["sid"] == $srow["zsid"]) { ?> disabled="" checked="" <?php } ?>  style="width:20px;height:20px;">

                              </div>
                            </td>
                        </tr>
                          <?php
                          $i++;
                            }
                        }else {
                            ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url('Store/createStore'); ?>" class="btn btn-primary" type="button">Create Store</a>
                             </td>
                          </tr>
                        <?php
                        }
                        ?>
                        
                        
                        
                        
                          
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="text-right">
                 
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

 </body>
</html>
