<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
     <div class="layout-content-body">
       <div class="title-bar">
         <h1 class="title-bar-title">
             <span class="d-ib">STORES PARAMETERS</span>
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
             <form action="<?php echo base_url('Asm/saveVisitReportStore/').$store_id; ?>" class="form-wizard" data-toggle="validator" novalidate="novalidate" method="post">
               <ul class="steps">
                 <li class="step col-xs-4 active">
                   <a class="step-segment" href="#step-1" data-toggle="tab">
                     <span class="step-icon icon icon-building"></span>

                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">SALES FLOOR</strong>
                   </div>
                 </li>
                 <li class="step col-xs-4">
                   <a class="step-segment" href="#step-2" data-toggle="tab">
                     <span class="step-icon icon icon-users"></span>
                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">STORE TEAM</strong>
                   </div>
                 </li>
                 <li class="step col-xs-4">
                   <a class="step-segment" href="#step-3" data-toggle="tab">
                     <span class="step-icon icon icon-credit-card"></span>
                   </a>
                   <div class="step-content">
                     <strong class="hidden-xs">TRIAL ROOM & BOH</strong>
                   </div>
                 </li>
               </ul>
               <div class="tab-content">
                 <div id="step-1" class="tab-pane active">
                   <h4 class="tab-pane-heading">
                     <!--<span>Sign up with your email address</span>-->
                   </h4>
                   <div class="row"><!--SALES FLOOR-->
                                  <div class="col-sm-4">
                                      <label>Front Façade (Including Signage, Window communication)</label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="salesFrontFacade" class="form-control" >
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="salesFrontFacadeRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="salesFrontFacadeImage" />
                                  </div>
                              </div><br/>
                              <div class="row">
                                  <div class="col-sm-4">
                                      <label>Overall Ambience (Music/Cleanliness/Housekeeping/ lights/ temperature/ fragrance) </label>
                                  </div>
                                   <div class="col-sm-2 col-xs-4">
                                      <select name="salesOverallAmbience" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="salesOverallAmbienceRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="salesOverallAmbienceImage" />
                                  </div>
                              </div><br/>
                              <div class="row">
                                  <div class="col-sm-4">
                                      <label>VM (Stock Display, Shelf Talkers, initiative etc)</label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="salesVm" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="salesVmRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="salesVmImage" />
                                  </div>
                              </div><br/>
                              <div class="row">
                                  <div class="col-sm-4">
                                      <label>Cash Till Management ( Cleanliness, EDC working)</label>
                                  </div>
                                   <div class="col-sm-2 col-xs-4">
                                      <select name="salesCashTill" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="salesCashTillRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="salesCashTillImage" />
                                  </div>
                              </div><br/>
                              <div class="row">
                                  <div class="col-sm-4">
                                      <label>Window Communication (Initiatives, discounts, if any)</label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="salesWindowCommunication" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="salesWindowCommunicationRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="salesWindowCommunicationImage" />
                                  </div>
                              </div><br/>
                              <div class="row">
                     <div class="col-sm-4"></div>
                                  <div class="col-sm-4">
                                      <p class="cc"><button class="btn btn-primary btn-pill btn-next disabled" type="button">Continue</button></p>
                                  </div>
                       <div class="col-sm-4"></div>
                              </div>

                 </div><!--SALES FLOOR-->
                 <div id="step-2" class="tab-pane">
                   <h4 class="tab-pane-heading">
                     <!--<span>Choose your personal plan</span>-->
                   </h4>
                   <div class="row"><!--STORE TEAM-->
                          <div class="col-sm-4">
                              <label>About Store Manager ( Business acuman, Market knowledge, KPIs)</label>
                            </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="storeAboutManager" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="storeAboutManagerRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="storeAboutManagerImage" />
                                  </div>
                              </div><br/>
                              <div class="row">
                                  <div class="col-sm-4">
                                      <label>About store team (Product Knowledge, KPIs, Team SWOT)</label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="storeAboutTeam" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="storeAboutTeamRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="storeAboutTeamImage" />
                                  </div>
                              </div><br/>
                               <div class="row">
                                  <div class="col-sm-4">
                                      <label>Communication Skills (Store Manager)</label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="storeManagerCommunication" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="storeManagerCommunicationRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="storeManagerCommunicationImage" />
                                  </div>
                              </div><br/>
                               <div class="row">
                                  <div class="col-sm-4">
                                      <label>Staff Avalibility </label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="storeStaffAvalibility" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="storeStaffAvalibilityRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="storeStaffAvalibilityImage" />
                                  </div>
                              </div><br/>

                              <div class="row">
                                  <div class="col-sm-4">
                                      <label>Uniform</label>
                                  </div>
                                  <div class="col-sm-2 col-xs-4">
                                      <select name="storeUniform" class="form-control">
                                          <option value="">Rating</option>
                                          <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                             <option value="4">4</option>
                                              <option value="5">5</option>
                                      </select>

                                  </div>
                                  <div class="col-sm-3 col-xs-4">
                                      <input type="text" class="form-control" name="storeUniformRemark" placeholder="Remark" />
                                  </div>
                                   <div class="col-sm-3 col-xs-4">
                                       <input type="file" class="form-control" name="storeUniformRemarkImage" />
                                  </div>
                      </div><br/>
                      <div class="row">
                       <div class="col-sm-4"></div>
                                  <div class="col-sm-4">
                                       <p class="cc"><button class="btn btn-primary btn-pill btn-next disabled" type="button">Continue</button></p>
                                  </div>
                       <div class="col-sm-4"></div>
                              </div><br/>

                    </div><!--STORE TEAM-->

                 <div id="step-3" class="tab-pane">
                   <h4 class="tab-pane-heading">
                     <!--<span>Enter your payment details</span>-->
                   </h4>
                          <div class="row"><!--TRIAL ROOM & BOH-->
                              <div class="col-sm-4">
                                  <label>Lock and light</label>
                              </div>
                              <div class="col-sm-2 col-xs-4">
                                  <select name="trialLockLight" class="form-control">
                                      <option value="">Rating</option>
                                      <option value="1">1</option>
                                       <option value="2">2</option>
                                        <option value="3">3</option>
                                         <option value="4">4</option>
                                          <option value="5">5</option>
                                  </select>

                              </div>
                              <div class="col-sm-3 col-xs-4">
                                  <input type="text" class="form-control" name="trialLockLightRemark" placeholder="Remark" />
                              </div>
                               <div class="col-sm-3 col-xs-4">
                                   <input type="file" class="form-control" name="trialLockLightImage" />
                              </div>
                          </div><br/>
                           <div class="row">
                              <div class="col-sm-4">
                                  <label>Overall Ambience</label>
                              </div>
                              <div class="col-sm-2 col-xs-4">
                                  <select name="trialOverallAmbience" class="form-control">
                                      <option value="">Rating</option>
                                      <option value="1">1</option>
                                       <option value="2">2</option>
                                        <option value="3">3</option>
                                         <option value="4">4</option>
                                          <option value="5">5</option>
                                  </select>

                              </div>
                              <div class="col-sm-3 col-xs-4">
                                  <input type="text" class="form-control" name="trialOverallAmbienceRemark" placeholder="Remark" />
                              </div>
                               <div class="col-sm-3 col-xs-4">
                                   <input type="file" class="form-control" name="trialOverallAmbienceImage" />
                              </div>
                          </div><br/>
                           <div class="row">
                              <div class="col-sm-4">
                                  <label>Stock Wrack ( Condition, Fire Extinguisher)</label>
                              </div>
                              <div class="col-sm-2 col-xs-4">
                                  <select name="trialStockWrack" class="form-control">
                                      <option value="">Rating</option>
                                      <option value="1">1</option>
                                       <option value="2">2</option>
                                        <option value="3">3</option>
                                         <option value="4">4</option>
                                          <option value="5">5</option>
                                  </select>

                              </div>
                              <div class="col-sm-3 col-xs-4">
                                  <input type="text" class="form-control" name="trialStockWrackRemark" placeholder="Remark" />
                              </div>
                               <div class="col-sm-3 col-xs-4">
                                   <input type="file" class="form-control" name="trialStockWrackImage" />
                              </div>
                          </div><br/>
                           <div class="row">
                              <div class="col-sm-4">
                                  <label>Back Store Management (Proper category headers, Apparels in polybag)</label>
                              </div>
                              <div class="col-sm-2 col-xs-4">
                                  <select name="trialBackStore" class="form-control">
                                      <option value="">Rating</option>
                                      <option value="1">1</option>
                                       <option value="2">2</option>
                                        <option value="3">3</option>
                                         <option value="4">4</option>
                                          <option value="5">5</option>
                                  </select>

                              </div>
                              <div class="col-sm-3 col-xs-4">
                                  <input type="text" class="form-control" name="trialBackStoreRemark" placeholder="Remark" />
                              </div>
                               <div class="col-sm-3 col-xs-4">
                                   <input type="file" class="form-control" name="trialBackStoreImage" />
                              </div>
                          </div><br/>
                           <div class="row">
                              <div class="col-sm-4">
                                  <label>Communication Board (Target & Team, Updated with targets & Details of Achievers)</label>
                              </div>
                              <div class="col-sm-2 col-xs-4">
                                  <select name="trialCommunication" class="form-control">
                                      <option value="">Rating</option>
                                      <option value="1">1</option>
                                       <option value="2">2</option>
                                        <option value="3">3</option>
                                         <option value="4">4</option>
                                          <option value="5">5</option>
                                  </select>

                              </div>
                              <div class="col-sm-3 col-xs-4">
                                  <input type="text" class="form-control" name="trialCommunicationRemark" placeholder="Remark" />
                              </div>
                               <div class="col-sm-3 col-xs-4">
                                   <input type="file" class="form-control" name="trialCommunicationImage" />
                              </div>
                  </div><br/>
                  <div class="row">
                  <div class="col-sm-4"></div>
                              <div class="col-sm-4">
                                  <p class="cc"> <button type="submit" name="submit" class="btn btn-primary btn-pill">Submit</button></p>

                              </div>
                  <div class="col-sm-4"></div>
                          </div><br/>


                 </div><!--TRIAL ROOM & BOH-->
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
