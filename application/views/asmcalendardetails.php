<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
<link href="<?php echo base_url('assets/css/fSelect.css'); ?>" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/fSelect.js'); ?>"></script>
<script>
(function($) {
    $(function() {
        $('.test').fSelect();
    });
})(jQuery);
</script>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 align="center" class="title-bar-title">
                <span class="d-ib">CALENDAR DETAILS</span>

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
                <div class="col-md-1"></div>
                <div class="col-md-10">
                     <div class="panel m-b-lg">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="#today" data-toggle="tab">Today Meetings</a></li>
                  <li><a href="#day" data-toggle="tab">Day Report</a></li>



                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade active in" id="today">
                        <div class="table-flip-scroll">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Sl.No.</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Store Name</th>
                          <th>Assigned by</th>
                          <th>Scheduled</th>
                          <th>Visit Report</th>


                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        <?php foreach($meetinglist as $meeting) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                             <td><?php echo $meeting['meeting_date']; ?></td>
                             <td><?php echo $meeting['meeting_time']; ?></td>
                             <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#store">Store</button></td>

                             <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ass">Assigned by</button></td>
                             <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#sch">Schedule</button></td>
                             <td><a type="button" class="btn btn-info" href="<?php echo base_url('Asm/visitReport') ?>">Visit Report</a></td>

                        </tr>
                      <?php $i++; } ?>                      
                      </tbody>
                    </table>
                  </div>
                  </div>

                  <div class="tab-pane fade" id="day">
                     <div class="table-flip-scroll">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Sl.No.</th>
                          <th>Date Time</th>
                          <th>Store Name</th>
                          <th>Status</th>
                          <th>Complain</th>


                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                             <td>1</td>
                             <td>---</td>
                             <td>---</td>
                             <td><button type="button" class="btn btn-info">Verify</button></td>
                             <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#complain">Complain</button></td>

                        </tr>

                      </tbody>
                    </table>
                  </div>
                  </div>

                </div>
              </div>
                </div>
                <div class="col-md-1"></div>
            </div>

        </div>
      </div>
    <div id="store" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Store Details</h4>
      </div>
      <div class="modal-body">
          <p><b>Store Name :</b>&nbsp;</p><br/>
          <p><b>Manager Name :</b>&nbsp;</p><br/>
          <p><b>Address :</b>&nbsp;</p><br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="ass" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Assigned by</h4>
      </div>
      <div class="modal-body">
          <p><b>Self :</b>&nbsp;</p><br/>
          <p><b>HR :</b>&nbsp;</p><br/>
          <p><b>ZM(NAME) :</b>&nbsp;</p><br/>
          <p><b>NH(NAME) :</b>&nbsp;</p><br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="sch" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Schedule</h4>
      </div>
      <div class="modal-body">
          <form action="#" method="post">
              <div class="form-group">
                  <div class="row">
                      <div class="col-sm-2">
                          <label>Schedule :</label>
                      </div>
                      <div class="col-sm-10">
                           <input type="date" name="date" class="form-control"/>
                      </div>
                  </div><br/>
                  <div class="row">
                      <div class="col-sm-2">
                          <label>Reason :</label>
                      </div>
                      <div class="col-sm-5">
                           <input type="text" name="reason" class="form-control"/>
                      </div>
                      <div class="col-sm-5">
                           <input type="file" name="image" class="form-control"/>
                      </div>
                  </div><br/>

                  <p align="center"><button type="submit" class="btn btn-info" name="submit">Submit</button></p>

              </div>
          </form>
      </div>

    </div>

  </div>
</div>


<div id="complain" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Complain</h4>
      </div>
      <div class="modal-body">
          <form action="#" method="post">
              <div class="row" style="margin-top:6px">
                                    <div class="col-sm-12">
                                        <div class="compose">
                                      <div class="compose-body">
              <div class="compose-message">
                <div class="compose-editor"></div>
                <div class="compose-toolbar">
                  <div class="btn-toolbar" data-role="editor-toolbar">
                    <div class="btn-group">
                      <div class="btn-group dropup">
                        <button class="btn btn-link link-muted" title="Font Size" data-toggle="dropdown" type="button">
                          <span class="icon icon-text-height"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="fs-Five" data-edit="fontSize 5">Huge</a></li>
                          <li><a class="fs-Three" data-edit="fontSize 3">Normal</a></li>
                          <li><a class="fs-One" data-edit="fontSize 1">Small</a></li>
                        </ul>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-link link-muted" title="Bold (Ctrl/Cmd+B)" data-edit="bold" type="button">
                          <span class="icon icon-bold"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Italic (Ctrl/Cmd+I)" data-edit="italic" type="button">
                          <span class="icon icon-italic"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Strikethrough" data-edit="strikethrough" type="button">
                          <span class="icon icon-strikethrough"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Underline (Ctrl/Cmd+U)" data-edit="underline" type="button">
                          <span class="icon icon-underline"></span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-link link-muted" title="Bullet list" data-edit="insertunorderedlist" type="button">
                          <span class="icon icon-list-ul"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Number list" data-edit="insertorderedlist" type="button">
                          <span class="icon icon-list-ol"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Reduce indent (Shift+Tab)" data-edit="outdent" type="button">
                          <span class="icon icon-outdent"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Indent (Tab)" data-edit="indent" type="button">
                          <span class="icon icon-indent"></span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-link link-muted" title="Align Left (Ctrl/Cmd+L)" data-edit="justifyleft" type="button">
                          <span class="icon icon-align-left"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Center (Ctrl/Cmd+E)" data-edit="justifycenter" type="button">
                          <span class="icon icon-align-center"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Align Right (Ctrl/Cmd+R)" data-edit="justifyright" type="button">
                          <span class="icon icon-align-right"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Justify (Ctrl/Cmd+J)" data-edit="justifyfull" type="button">
                          <span class="icon icon-align-justify"></span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <label class="btn btn-link link-muted file-upload-btn" title="Insert picture">
                          <span class="icon icon-picture-o"></span>
                          <input class="file-upload-input" type="file" name="file" data-edit="insertImage">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
                                        </div>
                                        </div>
                                </div><br/>
              <div class="row">
                  <div class="col-sm-6">
                      <input type="file" name="file1" class="form-control" multiple="multiple" />
                  </div>
                  <div class="col-sm-6">
                      <select name="department" class="test" multiple="multiple">

            <option value="HR">HR</option>
            <option value="ZM">ZM</option>
            <option value="NH">NH</option>
            <option value="BD">BD</option>
            <option value="Trainee">Trainee</option>


    </select>
                  </div>
              </div><br/>
              <p align="center"><button type="submit" class="btn btn-info" name="submit">Submit</button></p>
          </form><hr>
          <div class="row">
              <h3 align="center">Review</h3>
              <div class="col-sm-12">
                  <div class="table-flip-scroll">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Sl.No.</th>
                          <th>Date Time</th>
                          <th>View Complain</th>
                          <th>Status</th>
                          <th>Remark</th>


                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                             <td>1</td>
                             <td>---</td>
                             <td>---</td>
                             <td>---</td>
                             <td>---</td>

                        </tr>

                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>

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
