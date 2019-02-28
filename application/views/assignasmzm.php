<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <?php foreach($zmdetail as $zm){} ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">ASSIGN ASM [<?php echo $zm['ID']; ?>]</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
              <form action="<?php echo base_url('Zm/assignAsm/'); ?>" method="post" class="form form-horizontal" >
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
                          <th>Emp.ID</th>
                          <th>DOJ</th>
                          <th>Name</th>
                          <th>Mobile No.</th>
                          <th>View Report</th>
                          <!--<th>Store</th>-->
                          <th>Select ASM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        <?php $count = count($asmlist); ?>
                        <?php if($count>0){ ?>
                        <?php
                            $checked =0;
                            foreach($asmlist as $asm) {
                              foreach($zmasmlist as $row) {
                                if($asm['user_id'] == $row['asm_id']){
                                    $checked =1;
                                }
                              }


                          ?>
                        <tr>
                           <td><?php echo $i; ?></td>
                           <td><?php echo $asm['ID']; ?></td>
                           <td><?php echo $asm['doj']; ?></td>
                           <td><?php echo $asm['name']; ?></td>
                           <td><?php echo $asm['mobile']; ?></td>
                           <td><a href="<?php //echo base_url('NewMeeting/editMeeting/').$row['meet_id']; ?>"><i class="fa fa-eye" style="font-size:18px;color:#0288d1"></i></a></td>
                           <!--<td><a href="<?php //echo base_url('Asm/selectStore/').$asm['user_id']; ?>" class="btn btn-primary btn-xs" type="button">Allocate Store</a></td>-->
                             <td style="<?php if($checked){echo "background:#0288d1";} ?>">

                                <input type="checkbox" name="asm[]" value="<?php echo $asm['user_id']; ?>" <?php if($checked){echo "checked";} ?> style="width:20px;height:20px;">

                              </div>
                            </td>
                        </tr>
                        <?php $i++; $checked =0;} }else{ ?>
                          <tr>
                            <td>
                                <a href="<?php echo base_url('Asm/createAsm'); ?>" class="btn btn-primary" type="button">Create Asm</a>
                             </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="text-right">
                 <input type="hidden" name="zmid" value="<?php echo $zm['user_id']; ?>">
                 <button class="btn btn-primary" type="submit">Submit</button>
                 <a href="<?php echo base_url('Zm/viewZm'); ?>" class="btn btn-danger" type="button">Back</a>
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
