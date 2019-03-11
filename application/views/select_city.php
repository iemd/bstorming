 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
<style>
    #selectcity ul{
        display: block;
        list-style: none;
        margin: 0px;
    }
    #selectcity ul li {
        display: block;
        list-style: none;
        margin: 0px;
        padding: 0px;
    }
    label{
        cursor: pointer;
    }
</style>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">SELECT CITY</span>

            </h1>

          </div>
            
                     <div class="row gutter-xs">
              
              <div class="col-sm-12 col-md-6 col-xs-12">
                  <div class="card">
                      <div class="card-body">
                           <form action="<?php echo base_url() ?>Zm/saveCityForZm" method="post" class="form form-horizontal" >
                  <br/>
                  <input type="hidden" name="zmid" value="<?php echo $zmid; ?>" />
                               <div class="row">
                      <label for="cityname" class="col-sm-12">City Name:</label>
                      <div class="col-sm-12" id="selectcity">
                         <?php
                         if(!empty($allcity)){
                             foreach($allcity as $cityrow){
                                 ?>
                          <ul>
                              <li>
                                  <label for="<?php echo $cityrow["city_id"]; ?>">
                                      <input type="checkbox" name="cityid[]" class="cityid" id="<?php echo $cityrow["city_id"]; ?>" value="<?php echo $cityrow["city_id"]; ?>"> <?php echo $cityrow["city_name"]; ?>
                                  </label>
                              </li>
                          </ul>
                          <?php
                             }
                         }
                         ?>
                      </div>
                    </div><br/>
                     <div class="row">
                   <div class="col-sm-12">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="<?php echo base_url('Zm/viewZm'); ?>" class="btn btn-danger" type="button">Cancel</a>
                        </div>
                     </div>
                    </div>
                   
                    </form>
                      </div>
                  </div>
                  
               
                  </div>

                         <div class="col-md-6">
                             <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
                             <table class="table table-striped table-bordered">
                                 <thead>
                                     <tr>
                                         <th>Store ID</th>
                                            <th>Store Name</th>
                                            <th>City</th>
                                            <th>Action</th>

                                     </tr>
                                 </thead>
                                 <tbody id="storename">
                                     
                                 </tbody>
                             </table>
                         
                         
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
   <script src="<?php echo base_url('assets/js/compose.min.js');?>"></script>
   <script>
       $(document).ready(function(){
           $("input[type='checkbox']").change(function(){
              // alert('dfd');
              var cityid = [];
              $('.cityid').each(function(){
                  if($(this).is(":checked")){
                      cityid.push($(this).val());
                  }
              });
              //alert(cityid);
              if(cityid){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url(); ?>Zm/getStorName',
                data: {city_id: cityid},
                success:function(html){
                    $('#storename').html(html);
                    
                }
            }); 
        }else{
            $('#cityname').html('<option value="">Select CityName Name</option>');
             
        }
              
           });
       });
   </script>
   
 </body>
</html>
