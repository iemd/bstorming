<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">CREATE ASM</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
              <div class="text-center">
                 <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
                 <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
               </div>
                <div class="col-md-1"></div>
                <div class="col-sm-9">
                <form action="<?php echo base_url('Asm/addAsm/') ?>" method="post" class="form form-horizontal" >
                  <div class="row">
                        <label for="date" class="col-sm-2">Date:</label>
                        <div class="col-sm-6"><input id="date" name="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" type="text" placeholder="YYYY-MM-DD" readonly></div>
                  </div><br/>
                  <div class="row">
                        <label for="id" class="col-sm-2">ID:</label>
                        <div class="col-sm-6"><input id="asmid" name="asmid" class="form-control" type="text" value="ASM00<?php echo count($asm)+1; ?>" readonly></div>
                  </div><br/>
                    <div class="row">
                      <label for="name" class="col-sm-2">Name:</label>
                      <div class="col-sm-6"><input id="name" name="name" class="form-control" type="text" placeholder="Enter Name"></div>
                    </div><br/>
                    <div class="row">
                      <label for="mobile" class="col-sm-2">Mobile No.:</label>
                      <div class="col-sm-6"><input id="mobile" name="mobile" class="form-control" type="number" placeholder="Enter Mobile No."></div>
                    </div><br/>
                    <div class="row">
                      <label for="email" class="col-sm-2">Email ID:</label>
                      <div class="col-sm-6"><input id="username" name="username" class="form-control" type="email" placeholder="Enter Email"></div>
                    </div><br/>
                    <div class="row">
                      <label for="doj" class="col-sm-2">Date of Joining:</label>
                      <div class="col-sm-6"><input id="doj" name="doj" class="form-control" type="text" data-provide="datepicker" data-date-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD"></div>

                    </div><br/>
                    <div class="row">
                    <label for="password" class="col-sm-2">Password:</label>
                    <div class="col-sm-6"><input id="password" name="password" class="form-control" type="password" autocomplete="off" placeholder="Enter Password"></div>
                    </div><br/>
                    <div class="row">
                      <div class="col-sm-4">&nbsp;</div>
                      <div class="col-sm-4">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Create ASM</button>
                            <a href="<?php echo base_url('Employee/manageAsmProfile'); ?>" class="btn btn-danger" type="button">Cancel</a>
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
