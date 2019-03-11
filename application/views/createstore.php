<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">CREATE STORE</span>

            </h1>
            <div class="text-center">
               <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
               <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
             </div>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">

                <div class="col-md-1"></div>
                <div class="col-sm-9">
                <form action="<?php echo base_url('Store/addStore/') ?>" method="post" class="form form-horizontal" >

                    <div class="row">
                      <label for="name" class="col-sm-2">Store Name:</label>
                      <div class="col-sm-6"><input id="storename" name="storename" class="form-control" type="text" required placeholder="Enter Store Name"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Address:</label>
                      <div class="col-sm-6"><input id="address" name="address" class="form-control" type="text" required placeholder="Enter Address"></div>
                    </div><br/>
                    <div class="row">
                      <label for="city" class="col-sm-2">City:</label>
                      <div class="col-sm-6">
                          <select name="city" id="city" class="form-control" required >
                              <option value="" disabled selected>--Select City Name--</option>
                              <?php 
                              if(!empty($result)){
                                  foreach($result as $crow){
                                      ?>
                                      <option value="<?php echo $crow["city_id"]; ?>"><?php echo $crow["city_name"]; ?></option>
                                      <?php
                                  }
                              }
                              ?>
                          </select>
                          
                          </div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">PinCode:</label>
                      <div class="col-sm-6"><input id="pincode" name="pincode" class="form-control" type="text" readonly placeholder="Enter Pincode"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Manager Name:</label>
                      <div class="col-sm-6"><input id="manager" name="manager" class="form-control" type="text" placeholder="Enter Manager Name"></div>
                    </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Mobile No.:</label>
                      <div class="col-sm-6"><input id="mobileno" name="mobileno" class="form-control" type="text" placeholder="Enter Mobile No."></div>
                    </div><br/>
                    <div class="row">
                          <label for="id" class="col-sm-2">Store ID:</label>
                          <div class="col-sm-6"><input id="storeid" name="storeid" class="form-control" type="text" value="STORE00<?php echo count($store)+1; ?>" readonly></div>
                    </div><br/>
                    <div class="row">
                    <label for="password" class="col-sm-2">Password:</label>
                    <div class="col-sm-6"><input id="password" name="password" class="form-control" type="password" required autocomplete="off" placeholder="Enter Password"></div>
                    </div><br/>

                    <div class="row">
                      <div class="col-sm-4">&nbsp;</div>
                      <div class="col-sm-4">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Create Store</button>
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
   <script type="text/javascript">
$(document).ready(function(){
    $('#city').on('change',function(){
        var cityid = $(this).val();        
        if(cityid){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url() ?>fetch-pincode',
                dataType: 'JSON',
                data:'city_id='+cityid,
                success:function(html){
                    
                   $('#pincode').val(html.pincode); 
                   
                   
                   
                }
            }); 
        }else{
            $('#durationlimit').val(''); 
            
        }
    });
	});
	</script>
   
 </body>
</html>
