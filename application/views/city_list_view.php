<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">CITY LIST</span>

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
                          <th>City Name</th>
                          <th>Pincode</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        <?php if(!empty($result)) {
                            foreach($result as $row) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                             <td><?php echo $row['city_name']; ?></td>
                             <td><?php echo $row['city_pincode']; ?></td>
                             <td>
                               <a href="<?php echo base_url('').$row['city_id']; ?>"><i class="fa fa-edit" style="font-size:18px;color:green"></i></a>&nbsp;&nbsp;
                               <a href="<?php echo base_url('').$row['city_id']; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" style="font-size:18px;color:red"></i></a></td>
                            </td>

                        </tr>
                      <?php $i++; } 
 }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="text-right">
                 <a href="<?php echo base_url('city-management'); ?>" class="btn btn-danger" type="button">Back</a>
              </div>
                </div>
              <div class="col-sm-1"></div>
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
