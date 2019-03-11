 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
<style>
    #selectcity ul{
        display: block;
        list-style: none;
        margin: 0px;
    }
    #selectcity ul li {
        display: inline-block;
        list-style: none;
        margin: 0px 10px 0px;
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
                <span class="d-ib">SELECT STORE</span>

            </h1>

          </div>
            
            <div class="row gutter-xs" id="selectcity">
              
              <div class="col-sm-12 col-md-12 col-xs-12">
                  <div class="card">
                      <div class="card-body">
                           <form action="<?php echo base_url() ?>Zm/selectStoreForZm" method="post" class="form form-horizontal" >
                  <br/>
                  
                               <div class="row">
                      <label for="cityname" class="col-sm-12">Patna:</label>
                      <ul>
                          <li>
                              <label>
                                  <input type="checkbox" name="storeid[]" value="1"> STORE 001
                              </label>
                          </li>
                          <li>
                              <label>
                                  <input type="checkbox" name="storeid[]" value="1"> STORE 002
                              </label>
                          </li>
                          <li>
                              <label>
                                  <input type="checkbox" name="storeid[]" value="1"> STORE 003
                              </label>
                          </li>
                      </ul>
                      
                    </div>
                  
                       <div class="row">
                      <label for="cityname" class="col-sm-12">Patna:</label>
                      <ul>
                          <li>
                              <label>
                                  <input type="checkbox" name="storeid[]" value="1"> STORE 001
                              </label>
                          </li>
                      </ul>
                      
                    </div>
                    
                    
                    
                    
                    
                     <div class="row">
                   <div class="col-sm-12">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                           
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
