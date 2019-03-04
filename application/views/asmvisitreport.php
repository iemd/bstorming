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
                  <div class="panel m-b-lg">
             <ul class="nav nav-tabs nav-justified">
               <li class="active"><a href="#sales" data-toggle="tab">SALES FLOOR</a></li>
               <li><a href="#store" data-toggle="tab">STORE TEAM</a></li>
               <li>
                 <a href="#trial" data-toggle="tab">TRIAL ROOM & BOH</a>

               </li>
             </ul>
             <div class="tab-content">
               <div class="tab-pane fade active in" id="sales">
                   <form action="">
                   <div class="row">
                       <div class="col-sm-4">
                           <label>Front Façade (Including Signage, Window communication)</label>
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
                           <label>Overall Ambience (Music/Cleanliness/Housekeeping/ lights/ temperature/ fragrance) </label>
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
                           <label>VM (Stock Display, Shelf Talkers, initiative etc)</label>
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
                           <label>Cash Till Management ( Cleanliness, EDC working)</label>
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
                           <label>Window Communication (Initiatives, discounts, if any)</label>
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
                           <p class="cc"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></p>
                       </div>
            <div class="col-sm-4"></div>
                   </div>
                       </form>
               </div>

               <div class="tab-pane fade" id="store">
                  <form action="">
                   <div class="row">
                       <div class="col-sm-4">
                           <label>About Store Manager ( Business acuman, Market knowledge, KPIs)</label>
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
                           <label>About store team (Product Knowledge, KPIs, Team SWOT)</label>
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
                           <label>Communication Skills (Store Manager)</label>
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
                           <label>Staff Avalibility </label>
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
                           <label>Uniform</label>
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
                            <p class="cc"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></p>
                       </div>
            <div class="col-sm-4"></div>
                   </div><br/>
                       </form>
               </div>
                 <div class="tab-pane fade" id="trial">
                      <form action="">
                   <div class="row">
                       <div class="col-sm-4">
                           <label>Lock and light</label>
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
                           <label>Overall Ambience</label>
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
                           <label>Stock Wrack ( Condition, Fire Extinguisher)</label>
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
                           <label>Back Store Management (Proper category headers, Apparels in polybag)</label>
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
                           <label>Communication Board (Target & Team, Updated with targets & Details of Achievers)</label>
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
                           <p class="cc"> <button type="submit" name="submit" class="btn btn-primary">Sugbmit</button></p>

                       </div>
           <div class="col-sm-4"></div>
                   </div><br/>

                       </form>
                 </div>
             </div>
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
