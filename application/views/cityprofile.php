<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
        <style>
            .manageprofile ul {
                display: block;
                list-style: none;
            }
            .manageprofile ul li {
                display: inline-block;
                list-style: none;
                
            }
            .manageprofile ul li a {
                display: inline-block;
                margin-right: 30px;
                margin-top: 10px;
                min-width: 160px;
            }
        </style>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">MANAGE CITY</span>

            </h1>

          </div>
            <div class="row gutter-xs">
                
                <div class="col-md-12 manageprofile">
                    <ul>
                        <li>
                            <a type="button" href="<?php echo base_url(); ?>create-city" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Create City</a>
                        </li>
                        <li>
                            <a type="button" href="<?php echo base_url('view-city'); ?>" class="btn btn-primary"><i class="fa fa-eye"></i> View All City List</a>

                        </li>
                    </ul>
                    
                     
                </div>
                
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
   
 </body>
</html>
