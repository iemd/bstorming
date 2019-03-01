<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <?php foreach($profileasm as $asm){} ?>
   <style>
     .image{

     }
     .image img{
         border-radius: 10px;
           border: solid 1px #ddd;
         padding: 12px;
         margin: auto;
     }
     @media (max-width:765px){
         .desk{
             display: none;
         }
          .mobile{
             margin-bottom: 15px;
         }
     }
     @media (min-width:766px){
         .mobile{
             display: none;
         }

     }
 </style>
 <div class="layout-content">
         <div class="layout-content-body">
           <div class="title-bar">

             <h1 class="title-bar-title">
                 <span class="d-ib">PROFILE SETTING</span>

             </h1>

           </div>
             <div class="row gutter-xs desk" style="margin-top: 30px">
                 <div class="col-sm-1"></div>
                 <div class="col-sm-6">
                     <form action="" method="post">
                         <div class="row"> <label class="col-sm-2"><b>Full Name :</b></label><div class="col-sm-10">
                             <input type="text" class="form-control" name="name" value="<?php echo $asm['name']; ?>" readonly/>
                         </div></div><br/>
                         <div class="row">
                             <label class="col-sm-2"><b>Mobile No. :</b></label><div class="col-sm-10">
                             <input type="text" class="form-control" name="mobile"  value="<?php echo $asm['mobile']; ?>"/>
                         </div>
                         </div><br/>
                         <div class="row">
                              <label class="col-sm-2"><b>Employee ID :</b></label><div class="col-sm-10">
                            <input type="text" class="form-control" name="employeeid" value="<?php echo $asm['ID']; ?>" readonly/>
                         </div>
                         </div><br/>
                         <div class="row">
                            <label class="col-sm-2"><b>Email :</b></label><div class="col-sm-10">
                           <input type="email" class="form-control" name="email" value="<?php echo $asm['username']; ?>" readonly/>
                         </div>
                         </div><br/>
                         <div class="row">
                             <label class="col-sm-2"><b>Change Password :</b></label><div class="col-sm-10">
                           <input type="password" class="form-control" name="password" value="<?php echo $asm['password']; ?>" readonly/>
                         </div>
                         </div><br/>

                         <p align="center"><button type="submit" class="btn btn-primary" name="save">SAVE</button></p>
                     </form>
                 </div>
                 <div class="col-sm-4">

                         <div class="image">
                             <img src="<?php echo base_url('assets/images/profile.png') ?>" class="img-responsive" />
                         </div>

                 </div>
                 <div class="col-sm-1"></div>
             </div>
              <div class="row gutter-xs mobile" style="margin-top: 30px">
                 <div class="col-sm-1"></div>
                 <div class="col-sm-4">

                         <div class="image">
                             <img src="<?php echo base_url('assets/images/profile.png') ?>" class="img-responsive" />
                         </div>

                 </div>
                 <div class="col-sm-6">
                     <form action="" method="post">
                         <div class="row"> <label class="col-sm-2"><b>Full Name :</b></label><div class="col-sm-10">
                             <input type="text" class="form-control" name="name" value="<?php echo $asm['name']; ?>" readonly/>
                         </div></div><br/>
                         <div class="row">
                             <label class="col-sm-2"><b>Mobile No. :</b></label><div class="col-sm-10">
                             <input type="text" class="form-control" name="mobile" value="<?php echo $asm['mobile']; ?>" />
                         </div>
                         </div><br/>
                         <div class="row">
                              <label class="col-sm-2"><b>Employee ID :</b></label><div class="col-sm-10">
                            <input type="text" class="form-control" name="employeeid" value="<?php echo $asm['ID']; ?>" readonly/>
                         </div>
                         </div><br/>
                         <div class="row">
                            <label class="col-sm-2"><b>Email :</b></label><div class="col-sm-10">
                           <input type="email" class="form-control" name="email" value="<?php echo $asm['username']; ?>" readonly/>
                         </div>
                         </div><br/>
                         <div class="row">
                             <label class="col-sm-2"><b>Change Password :</b></label><div class="col-sm-10">
                           <input type="password" class="form-control" name="password" value="<?php echo $asm['password']; ?>" readonly/>
                         </div>
                         </div><br/>

                         <p align="center"><button type="submit" class="btn btn-primary" name="save">SAVE</button></p>
                     </form>
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
