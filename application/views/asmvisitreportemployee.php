<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
     <div class="layout-content-body">
       <div class="title-bar">
         <h1 class="title-bar-title">
             <span class="d-ib">EMPLOYEE COMPETENCY ASSESSMENT</span>
         </h1>
       </div>
         <style>
             p.cc{
               text-align:center;
             }
             @media(max-width:765px){
                p.cc{
                     margin-top: 12px;
                    text-align: center;
                 }
             }
         </style>
         <div class="row gutter-xs" style="margin-top: 30px">
             <div class="col-md-1">

             </div>
             <div class="col-md-10">
               <div class="signup">
                 <div class="signup-body">
                 <!--<a class="signup-brand" href="index.html">
                   <img class="img-responsive" src="img/logo.svg" alt="Elephant">
                 </a>-->
           <!--<p class="signup-heading">
             <em>&nbsp;</em>
           </p>-->
           <div class="signup-form">
             <form action="<?php //echo base_url('Asm/saveVisitReportStore/').$store_id; ?>" class="form-wizard" data-toggle="validator" novalidate="novalidate" method="post">
               <ul class="steps">
                 <li class="step col-xs-3 active">
                   <a class="step-segment" href="#step-1" data-toggle="tab">
                     <span class="step-icon icon icon-black-tie"></span>

                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">DRESS CODE</strong>
                   </div>
                 </li>
                 <li class="step col-xs-3">
                   <a class="step-segment" href="#step-2" data-toggle="tab">
                     <span class="step-icon icon icon-users"></span>
                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">GEST (greet, engange, sell and thanks)</strong>
                   </div>
                 </li>
                 <li class="step col-xs-3">
                   <a class="step-segment" href="#step-3" data-toggle="tab">
                     <span class="step-icon icon icon-bookmark"></span>
                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">AWARENESS</strong>
                   </div>
                 </li>
                 <li class="step col-xs-3">
                   <a class="step-segment" href="#step-4" data-toggle="tab">
                     <span class="step-icon icon icon-bar-chart"></span>
                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">DRIVE FOR RESULTS</strong>
                   </div>
                 </li>
               </ul>
               <div class="tab-content">
                 <div id="step-1" class="tab-pane active">
                   <h4 class="tab-pane-heading">
                     <!--<span>Sign up with your email address</span>-->
                   </h4>
                   <div class="row"><!--Dress Code-->

                            <div class="col-sm-4">
                            <label>Employee wear proper uniform/neat clothes batches</label>
                            </div>
                            <div class="col-sm-2 col-xs-4">
                            <select class="form-control">
                                <option value="">Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                 <option value="5">5</option>
                            </select>

                            </div>
                            <div class="col-sm-3 col-xs-4">
                            <input type="text" class="form-control" name="remark" placeholder="Remark" />
                            </div>
                            <div class="col-sm-3 col-xs-4">
                            <input type="file" class="form-control" name="image" />
                            </div>

                            </div><br/>
                            <div class="row">
                            <div class="col-sm-4">
                            <label>Maintains proper hygiene .</label>
                            </div>
                            <div class="col-sm-2 col-xs-4">
                            <select class="form-control">
                            <option value="">Rating</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                             <option value="5">5</option>
                            </select>
                            </div>
                            <div class="col-sm-3 col-xs-4">
                            <input type="text" class="form-control" name="remark" placeholder="Remark" />
                            </div>
                            <div class="col-sm-3 col-xs-4">
                            <input type="file" class="form-control" name="image" />
                            </div>
                            </div><br/>
                            <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                            <p class="cc"><button class="btn btn-primary btn-pill btn-next disabled" type="button">Continue</button></p>
                            </div>
                            <div class="col-sm-4"></div>

                     </div><!--Dress Code-->
                 </div>
                 <div id="step-2" class="tab-pane">
                   <h4 class="tab-pane-heading">
                     <!--<span>Choose your personal plan</span>-->
                   </h4>
                   <div class="row"><!--Gest-->
                           <div class="col-sm-4">
                               <label>Welcome the customer with a smile. </label>
                           </div>
                           <div class="col-sm-2 col-xs-4">
                               <select class="form-control">
                                   <option value="">Rating</option>
                                   <option value="1">1</option>
                                    <option value="2">2</option>
                                     <option value="3">3</option>
                                      <option value="4">4</option>
                                       <option value="5">5</option>
                               </select>
                           </div>
                          <div class="col-sm-3 col-xs-4">
                             <input type="text" class="form-control" name="remark" placeholder="Remark" />
                           </div>
                            <div class="col-sm-3 col-xs-4">
                                <input type="file" class="form-control" name="image" />
                           </div>
                       </div><br/>
                       <div class="row">
                           <div class="col-sm-4">
                               <label>Asks politely for assistance/help to the customer .</label>
                           </div>
                           <div class="col-sm-2 col-xs-4">
                               <select class="form-control">
                                   <option value="">Rating</option>
                                   <option value="1">1</option>
                                    <option value="2">2</option>
                                     <option value="3">3</option>
                                      <option value="4">4</option>
                                       <option value="5">5</option>
                               </select>
                           </div>
                          <div class="col-sm-3 col-xs-4">
                             <input type="text" class="form-control" name="remark" placeholder="Remark" />
                           </div>
                            <div class="col-sm-3 col-xs-4">
                                <input type="file" class="form-control" name="image" />
                           </div>
                       </div><br/>
                        <div class="row">
                           <div class="col-sm-4">
                               <label>understang customer need and requirement</label>
                           </div>
                           <div class="col-sm-2 col-xs-4">
                               <select class="form-control">
                                   <option value="">Rating</option>
                                   <option value="1">1</option>
                                    <option value="2">2</option>
                                     <option value="3">3</option>
                                      <option value="4">4</option>
                                       <option value="5">5</option>
                               </select>
                           </div>
                          <div class="col-sm-3 col-xs-4">
                             <input type="text" class="form-control" name="remark" placeholder="Remark" />
                           </div>
                            <div class="col-sm-3 col-xs-4">
                                <input type="file" class="form-control" name="image" />
                           </div>
                       </div><br/>
                        <div class="row">
                           <div class="col-sm-4">
                               <label>Tries to build a relationship/bond with the customer</label>
                           </div>
                           <div class="col-sm-2 col-xs-4">
                               <select class="form-control">
                                   <option value="">Rating</option>
                                   <option value="1">1</option>
                                    <option value="2">2</option>
                                     <option value="3">3</option>
                                      <option value="4">4</option>
                                       <option value="5">5</option>
                               </select>
                           </div>
                          <div class="col-sm-3 col-xs-4">
                             <input type="text" class="form-control" name="remark" placeholder="Remark" />
                           </div>
                            <div class="col-sm-3 col-xs-4">
                                <input type="file" class="form-control" name="image" />
                           </div>
                       </div><br/>
                        <div class="row">
                           <div class="col-sm-4">
                               <label>Add on sales to improve (UPT/QPC).</label>
                           </div>
                           <div class="col-sm-2 col-xs-4">
                               <select class="form-control">
                                   <option value="">Rating</option>
                                   <option value="1">1</option>
                                    <option value="2">2</option>
                                     <option value="3">3</option>
                                      <option value="4">4</option>
                                       <option value="5">5</option>
                               </select>
                           </div>
                          <div class="col-sm-3 col-xs-4">
                             <input type="text" class="form-control" name="remark" placeholder="Remark" />
                           </div>
                            <div class="col-sm-3 col-xs-4">
                                <input type="file" class="form-control" name="image" />
                           </div>
                       </div><br/>
                       <div class="row">
                           <div class="col-sm-4">
                               <label>Create a wow moment to ensure repeat purchase from the store. Thanks you</label>
                           </div>
                           <div class="col-sm-2 col-xs-4">
                               <select class="form-control">
                                   <option value="">Rating</option>
                                   <option value="1">1</option>
                                    <option value="2">2</option>
                                     <option value="3">3</option>
                                      <option value="4">4</option>
                                       <option value="5">5</option>
                               </select>
                           </div>
                          <div class="col-sm-3 col-xs-4">
                             <input type="text" class="form-control" name="remark" placeholder="Remark" />
                           </div>
                            <div class="col-sm-3 col-xs-4">
                                <input type="file" class="form-control" name="image" />
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-4"></div>
                           <div class="col-sm-4">
                                <p class="cc"><button class="btn btn-primary btn-pill btn-next disabled" type="button">Continue</button></p>
                           </div>
                           <div class="col-sm-4"></div>
                      </div><!--Gest-->
                  </div>
                 <div id="step-3" class="tab-pane">
                   <h4 class="tab-pane-heading">
                     <!--<span>Enter your payment details</span>-->
                   </h4>
                  <div class="row"><!--Awareness-->

                      <div class="col-sm-4">
                          <label>Well aware about the current offers in the store and competitos products</label>
                      </div>
                       <div class="col-sm-2 col-xs-4">
                          <select class="form-control">
                              <option value="">Rating</option>
                              <option value="1">1</option>
                               <option value="2">2</option>
                                <option value="3">3</option>
                                 <option value="4">4</option>
                                  <option value="5">5</option>
                          </select>
                      </div>
                     <div class="col-sm-3 col-xs-4">
                        <input type="text" class="form-control" name="remark" placeholder="Remark" />
                      </div>
                       <div class="col-sm-3 col-xs-4">
                           <input type="file" class="form-control" name="image" />
                      </div>
                  </div><br/>

                   <div class="row">
                      <div class="col-sm-4">
                          <label>Well aware about the product categories in the store.</label>
                      </div>
                      <div class="col-sm-2 col-xs-4">
                          <select class="form-control">
                              <option value="">Rating</option>
                              <option value="1">1</option>
                               <option value="2">2</option>
                                <option value="3">3</option>
                                 <option value="4">4</option>
                                  <option value="5">5</option>
                          </select>
                      </div>
                     <div class="col-sm-3 col-xs-4">
                        <input type="text" class="form-control" name="remark" placeholder="Remark" />
                      </div>
                       <div class="col-sm-3 col-xs-4">
                           <input type="file" class="form-control" name="image" />
                      </div>
                  </div><br/>
                   <div class="row">
                      <div class="col-sm-4">
                          <label>Has the basic knowledge about the brand .</label>
                      </div>
                       <div class="col-sm-2 col-xs-4">
                          <select class="form-control">
                              <option value="">Rating</option>
                              <option value="1">1</option>
                               <option value="2">2</option>
                                <option value="3">3</option>
                                 <option value="4">4</option>
                                  <option value="5">5</option>
                          </select>
                      </div>
                     <div class="col-sm-3 col-xs-4">
                        <input type="text" class="form-control" name="remark" placeholder="Remark" />
                      </div>
                       <div class="col-sm-3 col-xs-4">
                           <input type="file" class="form-control" name="image" />
                      </div>
                  </div><br/>
                   <div class="row">
                      <div class="col-sm-4">
                          <label>Aware about his targets along with the store target.</label>
                      </div>
                      <div class="col-sm-2 col-xs-4">
                          <select class="form-control">
                              <option value="">Rating</option>
                              <option value="1">1</option>
                               <option value="2">2</option>
                                <option value="3">3</option>
                                 <option value="4">4</option>
                                  <option value="5">5</option>
                          </select>
                      </div>
                     <div class="col-sm-3 col-xs-4">
                        <input type="text" class="form-control" name="remark" placeholder="Remark" />
                      </div>
                       <div class="col-sm-3 col-xs-4">
                           <input type="file" class="form-control" name="image" />
                      </div>
                   </div><br/>
                   <div class="row">
                       <div class="col-sm-4"></div>
                      <div class="col-sm-4">
                          <p class="cc"><button class="btn btn-primary btn-pill btn-next disabled" type="button">Continue</button></p>
                      </div>
                       <div class="col-sm-4"></div>

                  </div><!--Awareness-->
               </div>
               <div id="step-4" class="tab-pane">
                 <h4 class="tab-pane-heading">
                   <!--<span>Enter your payment details</span>-->
                 </h4>
                <div class="row"><!--Drive for results-->
                       <div class="col-sm-4">
                           <label>Strong commitment to achieve objectives / targets.</label>
                       </div>
                       <div class="col-sm-2 col-xs-4">
                           <select class="form-control">
                               <option value="">Rating</option>
                               <option value="1">1</option>
                                <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                   <option value="5">5</option>
                           </select>
                       </div>
                      <div class="col-sm-3 col-xs-4">
                         <input type="text" class="form-control" name="remark" placeholder="Remark" />
                       </div>
                        <div class="col-sm-3 col-xs-4">
                            <input type="file" class="form-control" name="image" />
                       </div>
                   </div><br/>

                    <div class="row">
                       <div class="col-sm-4">
                           <label>Monitors the actions regularly to achieve the results</label>
                       </div>
                       <div class="col-sm-2 col-xs-4">
                           <select class="form-control">
                               <option value="">Rating</option>
                               <option value="1">1</option>
                                <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                   <option value="5">5</option>
                           </select>
                       </div>
                      <div class="col-sm-3 col-xs-4">
                         <input type="text" class="form-control" name="remark" placeholder="Remark" />
                       </div>
                        <div class="col-sm-3 col-xs-4">
                            <input type="file" class="form-control" name="image" />
                       </div>
                   </div><br/>
                    <div class="row">
                       <div class="col-sm-4">
                           <label>Is flexible to adapt changes when needed.</label>
                       </div>
                       <div class="col-sm-2 col-xs-4">
                           <select class="form-control">
                               <option value="">Rating</option>
                               <option value="1">1</option>
                                <option value="2">2</option>
                                 <option value="3">3</option>
                                  <option value="4">4</option>
                                   <option value="5">5</option>
                           </select>
                       </div>
                      <div class="col-sm-3 col-xs-4">
                         <input type="text" class="form-control" name="remark" placeholder="Remark" />
                       </div>
                        <div class="col-sm-3 col-xs-4">
                            <input type="file" class="form-control" name="image" />
                       </div>
                    </div><br/>
                   <div class="row">
                       <div class="col-sm-4"></div>
                       <div class="col-sm-4">
                            <p class="cc"><button class="btn btn-primary btn-pill" type="submit">Submit</button></p>
                       </div>
                        <div class="col-sm-4"></div>
                </div><!--Drive for results-->
             </div>
             </form>
           </div>
         </div>

     <div class="col-md-1">

     </div>

 </div>
 <p class="cc"> <a href="<?php echo base_url('Asm/calendarDetails') ?>"  type="button" name="back" class="btn btn-danger">Back</a></p>
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

   <script src="<?php echo base_url('assets/js/signup-1.min.js');?>"></script>
  <script>
   $(document).ready(function() {
    $('#bootstrap-data-table').DataTable( {
        scrollY:        '50vh',
        scrollCollapse: true,
        paging:         false,
        ordering: false
    } );
   } );
 </script>
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
