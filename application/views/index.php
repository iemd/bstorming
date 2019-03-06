<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php $Role = $this->session->userdata('role');?>
 <?php if (!empty($Loginid)){ ?>
      <?php if($Role==HR){ ?>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">360<sup>o</sup> Report</span>
               <div id="time" style="float: right"></div>
            </h1>

          </div>
          <div class="row gutter-xs">
            <div class="col-md-6 col-lg-3 col-lg-push-0">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-middle media-left">
                      <span class="bg-primary circle sq-48">
                        <span class="icon icon-user"></span>
                      </span>
                    </div>
                    <div class="media-middle media-body">
                      <h6 class="media-heading">HR</h6>
                      <h3 class="media-heading">
                        <span class="fw-l"></span>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-lg-push-3">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-middle media-left">
                      <span class="bg-primary circle sq-48">
                        <span class="icon icon-user"></span>
                      </span>
                    </div>
                    <div class="media-middle media-body">
                      <h6 class="media-heading">NH</h6>
                      <h3 class="media-heading">
                        <span class="fw-l"></span>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-lg-pull-3">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-middle media-left">
                       <span class="bg-primary circle sq-48">
                        <span class="icon icon-user"></span>
                      </span>
                    </div>
                    <div class="media-middle media-body">
                      <h6 class="media-heading">ZM</h6>
                      <h3 class="media-heading">
                        <span class="fw-l"></span>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-lg-pull-0">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-middle media-left">
                      <span class="bg-primary circle sq-48">
                        <span class="icon icon-user"></span>
                      </span>
                    </div>
                    <div class="media-middle media-body">
                      <h6 class="media-heading">ASM</h6>
                      <h3 class="media-heading">
                        <span class="fw-l"></span>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <?php } if($Role==NH){ ?>
        <div class="layout-content">
          <div class="layout-content-body">
            <div class="title-bar">

              <h1 class="title-bar-title">
                  <span class="d-ib">360<sup>o</sup> Report</span>
                <div id="time" style="float: right"></div>
              </h1>

            </div>



          </div>
        </div>
      <?php } if($Role == ZM){ ?>
        <div class="layout-content">
         <div class="layout-content-body">
           <div class="title-bar">

             <h1 class="title-bar-title">
                 <span class="d-ib">360<sup>o</sup> Report</span>
               <div id="time" style="float: right"></div>
             </h1>

           </div>



         </div>
       </div>
       <?php } if($Role == ASM){ ?>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/calendar/fullcalendar.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme1.css');?>"/>
         <div class="layout-content">
                <div class="layout-content-body">
                  <div class="title-bar">

                    <h1 class="title-bar-title">
                        <span class="d-ib">360<sup>o</sup> Report</span>
                      <div id="time" style="float: right"></div>
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
                        .calendar{
                            cursor: pointer;
                        }

                    </style>

                   <div class="row gutter-xs" style="margin-top: 30px">
                     <div class="col-md-6">
                         <div class="panel panel-default">
                             <div class="panel-body">
                                 <div id="calendar" class="calendar">

                                   </div>
                             </div>
                         </div>
                     </div>
                        <div class="col-md-6">
                          <div class="text-right">
                            <a href="<?php echo base_url('Asm/createMeeting'); ?>" class="btn btn-primary" type="button">New Meeting</a>
                           </div>
                             <div class="panel m-b-lg">
                             <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#today" data-toggle="tab">Today Meetings</a></li>
                          <!--<li><a href="#remark" data-toggle="tab">Remark</a></li>-->



                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane fade active in" id="today">
                            <div class="row" style="margin-bottom:10px">
                                <div class="col-sm-6">
                                    <p><b>Date :</b>&nbsp;<?php echo date('Y-m-d'); ?></p>
                                </div>
                            </div>
                            <?php $i=1; foreach($todaymeetings as $row){ ?>

                              <div class="row">
                                  <div class="col-sm-4">
                                      <p><b><?php echo $i; ?>.Time :</b>&nbsp;<?php echo $row['meeting_time']; ?></p>
                                  </div>
                                  <div class="col-sm-4">
                                      <p><b>Store :</b>&nbsp;<?php echo $row['store_name']; ?></p>
                                  </div>
                                  <div class="col-sm-4">
                                      <p><b>Status :</b>&nbsp;<?php echo $row['status']; ?></p>
                                  </div>
                              </div>
                            <?php $i++; } ?>
                          </div>

                          <!--<div class="tab-pane fade" id="remark">
                              <div class="row">
                                  <div class="col-md-2">
                                      <p><b>Remark :</b></p>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" name="remark" />
                                  </div>
                              </div>
                          </div>-->

                        </div>
                      </div>

                        </div>
                    </div>
                </div>
              </div>
         <?php } ?>
    <?php } else { ?>

   				  <?php redirect(base_url('AdminPanel')); ?>

   	<?php } ?>
<script>
(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script>
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
   <!--<script src="<?php //echo base_url('assets/js/caleandar.js');?>"></script>
   <script src="<?php //echo base_url('assets/js/demo.js');?>"></script>-->
   <script src="<?php echo base_url('assets/js/lib/calendar/moment.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/lib/calendar/fullcalendar.min.js'); ?>"></script>
   <script type="text/javascript">
   <?php
   if(!empty($allmeetings)){
     foreach ($allmeetings as $key => $value) {
         $data[$key]['title'] = $value->noofmeetings;
         $data[$key]['start'] = $value->meeting_date;
         $data[$key]['end'] = $value->meeting_date;
         $data[$key]['backgroundColor'] = "#0288d1";
     }
   }else{
     $data[][]='';
   }
    ?>
   var events = <?php echo json_encode($data) ?>;

   var date = new Date();
   var d    = date.getDate(),
       m    = date.getMonth(),
       y    = date.getFullYear();

   jQuery('#calendar').fullCalendar({

     header    : {
       left  : 'prev,next today',
       center: 'title',
       right : 'month,agendaWeek,agendaDay'
     },
     dayClick: function(date, jsEvent, view) {
       //alert('Clicked on: ' + date.format());
       var caldate = date.format();
       $.ajax({
           url : "<?php echo site_url('Asm/getMeetingsByDate');?>",
           method : "POST",
           data:'caldate='+caldate,
           success: function(data){
             $('#today').html(data);
             //alert(data);
           }
         });
     },
     buttonText: {
       today: 'today',
       month: 'month',
       week : 'week',
       day  : 'day'
     },
     events    : events,

   })
   </script>
 </body>
</html>
