<!DOCTYPE html>
<?php $Loginid = $this->session->userdata('ID');?>
<?php $Role = $this->session->userdata('role');?>
<?php //print_r($this->session); ?>
<?php if (!empty($Loginid)){ ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brain Storming | <?php echo $Role; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="brain storming.">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon-16x16.png'); ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url('manifest.json');?>">
    <link rel="mask-icon" href="<?php echo base_url('assets/images/safari-pinned-tab.svg');?>" color="#0288d1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elephant.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/application.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="<?php echo base_url('AdminPanel/Dasboard'); ?>">
            <img class="navbar-brand-logo" src="<?php echo base_url('assets/images/logo.png');?>" alt="Brain storming">

          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
               <img class="ellipsis-object" width="32" height="32" src="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" alt="Brain Storming">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li class="visible-xs-block">
                <h4 class="navbar-text text-center"></h4>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-envelope-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">8</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">8</span>
                    Messages
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="">New Message</a>
                    <h5 class="dropdown-heading">Recent messages</h5>
                  </div>
                  <div class="dropdown-body">

                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-bell-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">7</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-bell icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">7</span>
                    Notifications
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="#">Mark all as read</a>
                    <h5 class="dropdown-heading">Recent Notifications</h5>
                  </div>
                  <div class="dropdown-body">

                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="rounded" width="36" height="36" src="<?php echo base_url('assets/images/admin.png');?>" alt=""> Welcome <?php echo $Role; ?>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">

                  <li class="divider"></li>

                  <li class="divider"></li>
                  <li><a href="">Contacts</a></li>
                  <li><a href="">Profile</a></li>
                  <li><a href="<?php echo base_url('AdminPanel/logOut'); ?>">Sign out</a></li>
                </ul>
              </li>
              <li class="visible-xs-block">
                <a href="">
                  <span class="icon icon-users icon-lg icon-fw"></span>
                  Contacts
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="profile.html">
                  <span class="icon icon-user icon-lg icon-fw"></span>
                  Profile
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="<?php echo base_url('AdminPanel/logOut'); ?>">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
      <style>
          .sidenav-item span.sidenav-icon{
              color: #0288d1;
          }
      </style>
      <?php if($Role==HR){ ?>
      <div class="layout-main"><!--left sidebar -->
        <div class="layout-sidebar">
          <div class="layout-sidebar-backdrop"></div>
          <div class="layout-sidebar-body">
            <div class="custom-scrollbar">
              <nav id="sidenav" class="sidenav-collapse collapse">
                <ul class="sidenav">
                  <li class="sidenav-search hidden-md hidden-lg">
                    <form class="sidenav-form" action="">
                      <div class="form-group form-group-sm">
                        <div class="input-with-icon">
                          <input class="form-control" type="text" placeholder="Search…">
                          <span class="icon icon-search input-icon"></span>
                        </div>
                      </div>
                    </form>
                  </li>
                  <li class="sidenav-heading">Brain Storming | <?php echo $Role; ?></li>

                  <li class="sidenav-item has-subnav active">
                      <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-home"></span>
                      <span class="sidenav-label">Dashboards</span>
                    </a>

                  </li>

                 <li class="sidenav-item has-subnav">
                      <a href="#" title="Employee Management" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Employee Management</span>
                    </a>
                      <ul class="sidenav-subnav collapse">

                          <li><a href="<?php echo base_url('Employee/manageAsmProfile'); ?>">Manage ASM Profile</a></li>
                          <li><a href="<?php echo base_url('Employee/manageZmProfile'); ?>">Manage ZM Profile</a></li>
                          <li><a href="<?php echo base_url('Employee/manageNhProfile'); ?>">Manage NH Profile</a></li>
                    </ul>
                  </li>
                   <li class="sidenav-item has-subnav">
                      <a href="#" title="Store Management" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Store Management</span>
                    </a>
                      <ul class="sidenav-subnav collapse">

                          <li><a href="brand_management.php">Brand Management</a></li>
                          <li><a href="store_management.php">Store ID & Password Management</a></li>
                          <li><a href="view_store.php">View Store Activity</a></li>
                      <li><a href="#">Complain Management</a></li>
                    </ul>
                  </li>
                   <li class="sidenav-item has-subnav">
                      <a href="#" title="Operations Management" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Operations Management</span>
                    </a>
                      <ul class="sidenav-subnav collapse">

                      <li><a href="#">Manage Business Developement Profile</a></li>
                      <li><a href="#">Manage Training Profile</a></li>
                      <li><a href="#">Manage Planning Profile</a></li>
                      <li><a href="#">Complain Management</a></li>
                    </ul>
                  </li>
                  <li class="sidenav-item has-subnav">
                      <a href="#" title="Task Management" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Task Management</span>
                    </a>
                      <ul class="sidenav-subnav collapse">

                      <li><a href="#">Create Task</a></li>
                      <li><a href="#">Task Status</a></li>
                      <li><a href="#">Revert Pending</a></li>
                      <li><a href="#">Reports</a></li>
                    </ul>
                  </li>
                  <li class="sidenav-item has-subnav">
                      <a href="#" title="Reporting Management" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Reporting Management</span>
                    </a>
                      <ul class="sidenav-subnav collapse">

                      <li><a href="#">View Employee Movement</a></li>
                      <li><a href="#">Movement Calender</a></li>
                      <li><a href="#">Store Rating History</a></li>
                      <li><a href="#">Complain Management</a></li>
                       <li><a href="#">Training Movement</a></li>
                      <li><a href="#">Business Developement Movement</a></li>
                      <li><a href="#">Location Pin Access</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div><!--left sidebar -->
      <?php } if($Role==NH){ ?>
        <div class="layout-main"><!--left sidebar -->
        <div class="layout-sidebar">
          <div class="layout-sidebar-backdrop"></div>
          <div class="layout-sidebar-body">
            <div class="custom-scrollbar">
              <nav id="sidenav" class="sidenav-collapse collapse">
                <ul class="sidenav">
                  <li class="sidenav-search hidden-md hidden-lg">
                    <form class="sidenav-form" action="">
                      <div class="form-group form-group-sm">
                        <div class="input-with-icon">
                          <input class="form-control" type="text" placeholder="Search…">
                          <span class="icon icon-search input-icon"></span>
                        </div>
                      </div>
                    </form>
                  </li>
                  <li class="sidenav-heading">Brain Storming | <?php echo $Role; ?></li>
                  <li class="sidenav-item has-subnav active">
                      <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-home"></span>
                      <span class="sidenav-label">Dashboards</span>
                    </a>

                  </li>

                  <li class="sidenav-item has-subnav">
                      <a href="calendar.php" title="Today Meeting Status">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Calendar</span>
                    </a>
                  </li>

                  <li class="sidenav-item has-subnav">
                      <a href="task.php" title="Employee Status">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Task Management</span>
                    </a>
                  </li>

                  <li class="sidenav-item has-subnav">
                      <a href="rate_store.php" title="Top 20 Ranking of stores">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Rate Store</span>
                    </a>
                  </li>

                  <li class="sidenav-item has-subnav">
                      <a href="push_message.php" title="Brand Store Status">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Push Message</span>
                    </a>
                  </li>

                  <li class="sidenav-item has-subnav">
                      <a href="complain.php" title="Feedback Parameter Wise Report">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Complain Management</span>
                    </a>
                  </li>

                  <li class="sidenav-item has-subnav">
                      <a href="profile.php" title="Bottom 20 Ranking of Stores">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Profile Setting</span>
                    </a>
                  </li>

                   <li class="sidenav-item has-subnav">
                       <a href="employee_competency.php" title="EMPLOYEE COMPETENCY ASSESSMENT">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Employee Competency</span>
                    </a>
                  </li>

                  <li class="sidenav-item">
                       <a href="#" title="ASM MANAGEMENT">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">ASM Management</span>
                    </a>
                  </li>
                  <li class="sidenav-item">
                       <a href="#" title="ZM MANAGEMENT">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">ZM Management</span>
                    </a>
                  </li>
                  <li class="sidenav-item">
                       <a href="#" title="WORK MANAGEMENT">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Work Management</span>
                    </a>
                  </li>
                  <li class="sidenav-item">
                      <a href="<?php echo base_url('AdminPanel/logOut'); ?>" title="LOGOUT">
                      <span class="sidenav-icon icon icon-columns"></span>
                      <span class="sidenav-label">Logout</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div><!--left sidebar -->
      <?php } if($Role == ZM){ ?>
        <div class="layout-main">
     <div class="layout-sidebar">
       <div class="layout-sidebar-backdrop"></div>
       <div class="layout-sidebar-body">
         <div class="custom-scrollbar">
           <nav id="sidenav" class="sidenav-collapse collapse">
             <ul class="sidenav">
               <li class="sidenav-search hidden-md hidden-lg">
                 <form class="sidenav-form" action="">
                   <div class="form-group form-group-sm">
                     <div class="input-with-icon">
                       <input class="form-control" type="text" placeholder="Search…">
                       <span class="icon icon-search input-icon"></span>
                     </div>
                   </div>
                 </form>
               </li>
               <li class="sidenav-heading">Brain Storming | <?php echo $Role; ?></li>

               <li class="sidenav-item has-subnav active">
                   <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>" aria-haspopup="true">
                   <span class="sidenav-icon icon icon-home"></span>
                   <span class="sidenav-label">Dashboards</span>
                 </a>

               </li>

               <li class="sidenav-item has-subnav">
                   <a href="calendar.php" title="Today Meeting Status">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Calendar</span>
                 </a>
               </li>

               <li class="sidenav-item has-subnav">
                   <a href="task.php" title="Employee Status">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Task Management</span>
                 </a>
               </li>

               <li class="sidenav-item has-subnav">
                   <a href="rate_store.php" title="Top 20 Ranking of stores">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Rate Store</span>
                 </a>
               </li>

               <li class="sidenav-item has-subnav">
                   <a href="push_message.php" title="Brand Store Status">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Push Message</span>
                 </a>
               </li>

               <li class="sidenav-item has-subnav">
                   <a href="complain.php" title="Feedback Parameter Wise Report">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Complain Management</span>
                 </a>
               </li>

               <li class="sidenav-item has-subnav">
                   <a href="profile.php" title="Bottom 20 Ranking of Stores">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Profile Setting</span>
                 </a>
               </li>

                <li class="sidenav-item has-subnav">
                    <a href="employee_competency.php" title="EMPLOYEE COMPETENCY ASSESSMENT">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Employee Competency</span>
                 </a>
               </li>

               <li class="sidenav-item">
                    <a href="#" title="ASM MANAGEMENT">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">ASM Management</span>
                 </a>
               </li>
               <li class="sidenav-item">
                    <a href="#" title="WORK MANAGEMENT">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Work Management</span>
                 </a>
               </li>
               <li class="sidenav-item">
                   <a href="<?php echo base_url('AdminPanel/logOut'); ?>" title="LOGOUT">
                   <span class="sidenav-icon icon icon-columns"></span>
                   <span class="sidenav-label">Logout</span>
                 </a>
               </li>
             </ul>
           </nav>
         </div>
       </div>
     </div>
      <?php } if($Role == ASM){ ?>
        <div class="layout-main">
    <div class="layout-sidebar">
      <div class="layout-sidebar-backdrop"></div>
      <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
          <nav id="sidenav" class="sidenav-collapse collapse">
            <ul class="sidenav">
              <li class="sidenav-search hidden-md hidden-lg">
                <form class="sidenav-form" action="">
                  <div class="form-group form-group-sm">
                    <div class="input-with-icon">
                      <input class="form-control" type="text" placeholder="Search…">
                      <span class="icon icon-search input-icon"></span>
                    </div>
                  </div>
                </form>
              </li>
              <li class="sidenav-heading">Brain Storming | <?php echo $Role; ?></li>

              <li class="sidenav-item has-subnav active">
                  <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>" aria-haspopup="true">
                  <span class="sidenav-icon icon icon-home"></span>
                  <span class="sidenav-label">Dashboards</span>
                </a>

              </li>

              <li class="sidenav-item has-subnav">
                  <a href="calendar.php" title="Today Meeting Status">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Calendar</span>
                </a>
              </li>

              <li class="sidenav-item has-subnav">
                  <a href="task.php" title="Employee Status">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Task Management</span>
                </a>
              </li>

              <li class="sidenav-item has-subnav">
                  <a href="rate_store.php" title="Top 20 Ranking of stores">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Rate Store</span>
                </a>
              </li>

              <li class="sidenav-item has-subnav">
                  <a href="push_message.php" title="Brand Store Status">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Push Message</span>
                </a>
              </li>

              <li class="sidenav-item has-subnav">
                  <a href="complain.php" title="Feedback Parameter Wise Report">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Complain Management</span>
                </a>
              </li>

              <li class="sidenav-item has-subnav">
                  <a href="profile.php" title="Bottom 20 Ranking of Stores">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Profile Setting</span>
                </a>
              </li>

               <li class="sidenav-item has-subnav">
                   <a href="employee_competency.php" title="EMPLOYEE COMPETENCY ASSESSMENT">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Employee Competency</span>
                </a>
              </li>

              <li class="sidenav-item">
                  <a href="<?php echo base_url('AdminPanel/logOut'); ?>" title="LOGOUT">
                  <span class="sidenav-icon icon icon-columns"></span>
                  <span class="sidenav-label">Logout</span>
                </a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
      <?php } ?>
  <?php } ?>
