<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">NEW MEETING</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
              <div class="text-center">
                 <h5><span class="label label-outline-success"><?php echo $this->session->flashdata('message'); ?></span></h5>
                 <h5><span class="label label-outline-danger"><?php echo $this->session->flashdata('error'); ?></span></h5>
               </div>
                <div class="col-md-1"></div>
                <div class="col-sm-9">
                <form action="<?php echo base_url('Asm/assignMeeting/') ?>" method="post" class="form form-horizontal" >
                  <div class="row">
                        <label for="store" class="col-sm-2">Select Store:</label>
                        <div class="col-sm-6">
                          <select name="store" class="form-control store" required>
                            <option value="">Select Store</option>
                            <?php foreach($storelist as $store){ ?>
                              <option value="<?php echo $store['store_id'];  ?>"><?php echo $store['store_name'];  ?></option>
                            <?php } ?>
                         </select>
                        </div>
                  </div><br/>

                  <div class="row">
                    <label for="lastmeeting" class="col-sm-2">&nbsp;</label>
                    <div class="col-sm-6" id="lastmeeting"></div>

                  </div><br/>
                  <div class="row">
                    <label for="meetingdate" class="col-sm-2">Meeting Date:</label>
                    <div class="col-sm-6"><input id="meetingdate" name="meetingdate" class="form-control" type="text" data-provide="datepicker" data-date-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" required></div>

                  </div><br/>

                  <div class="row">
                    <label for="meetingtime" class="col-sm-2">Meeting Time:</label>
                    <div class="col-sm-6">
                      <input id="demo-timepicker-1" name="meetingtime" class="form-control ui-timepicker-input" type="text" autocomplete="off" placeholder="HH:MM" required>

                    </div>

                  </div><br/>


                    <div class="row">
                      <div class="col-sm-4">&nbsp;</div>
                      <div class="col-sm-4">
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Create Meeting</button>
                            <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>" class="btn btn-danger" type="button">Cancel</a>
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
   <script type="text/javascript">
   $(document).ready(function(){
       $("select.store").change(function(){
           var store_id = $(".store option:selected").val();
       //alert(dist_id);
       $.ajax({
           url : "<?php echo site_url('Asm/StoreLastMeeting');?>",
           method : "POST",
           data:'store_id='+store_id,
           success: function(data){
             $('#lastmeeting').html(data);
             //alert(data);
           }
         });
       });
   });
   </script>
 </body>
</html>
