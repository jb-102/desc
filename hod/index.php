<?php ob_start();  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SchoolManagement</title>

    <script src="../include/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../include/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../include/vendors/bootstrap/js/carousel.js"></script>
    
    <!-- Bootstrap -->
    <link href="../include/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../include/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../include/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../include/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../include/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../include/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    
    <!-- PNotify -->
    <link href="../include/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../include/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../include/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>School Admin!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/admin_logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['user_name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li id="dashboard_nav"><a id="dashboard"><i class="fa fa-home"></i> Dashboard <span class="fa active"></span></a>
                    
                  </li>
                  
                  <li id="teacher_nav"><a id="teacher"><i class="fa fa-desktop"></i> Teachers <span class=""></span></a> 
                  </li>
                  
                  <li id="student_nav"><a><i class="fa fa-users"></i> Students <span class="fa fa-chevron-down"></span></a>
                      <ul id="student" class="nav child_menu">
                          <li><a id="st1" href="#">Nursery</a></li>
                        <li><a id="st2" href="#">LKG</a></li>
                        <li><a id="st3" href="#">UKG</a></li>
                        <li><a id="st4" href="#">First</a></li>
                        <li><a id="st5" href="#">Second</a></li>
                        <li><a id="st6" href="#">Third</a></li>
                        <li><a id="st7" href="#">Forth</a></li>
                        <li><a id="st8" href="#">Fifth</a></li>
                        <li><a id="st9" href="#">Sixth</a></li>
                        <li><a id="st10" href="#">Seventh</a></li>
                        <li><a id="st11" href="#">Eighth</a></li>
                        <li><a id="st12" href="#">Ninth</a></li>
                        <li><a id="st13" href="#">Tenth</a></li>
                    </ul>
                  </li>
                  
                  <li id="classes_nav"><a><i class="fa fa-bar-chart-o"></i> Classes <span class="fa fa-chevron-down"></span></a>
                    <ul id="classes" class="nav child_menu">
                        <li><a id="1" >Nursery</a></li>
                        <li><a id="2" >LKG</a></li>
                        <li><a id="3" >UKG</a></li>
                        <li><a id="4" >First</a></li>
                        <li><a id="5" >Second</a></li>
                        <li><a id="6" >Third</a></li>
                        <li><a id="7" >Forth</a></li>
                        <li><a id="8" >Fifth</a></li>
                        <li><a id="9" >Sixth</a></li>
                        <li><a id="10" >Seventh</a></li>
                        <li><a id="11" >Eighth</a></li>
                        <li><a id="12" >Ninth</a></li>
                        <li><a id="13" >Tenth</a></li>
                    </ul>
                  </li>
                  
                  <li><a id="timetable"><i class="fa fa-table"></i> Time Table <span class="fa fa-chevron-down"></span></a>
                    <ul  class="nav child_menu">
                        <li><a id="timetable_upload" >Upload</a></li>
                        <li><a id="timetable_view_all" >View All</a></li>
                    </ul>
                  </li>
                  
                  <li><a id="worksheet"  id="worksheets"><i class="fa fa-list-alt"></i> Worksheets <span class="fa fa-chevron-down"></span></a>
                      <ul  class="nav child_menu">
                        <li><a id="worksheets_upload" >Upload</a></li>
                        <li><a id="worksheets_view_all" >View All</a></li>
                    </ul>
                  </li>
                  
                  <li id="academia_nav" ><a id="academia"><i class="fa fa-book"></i> Academia <span class="fa fa-active"></span></a>
                     
                  </li>
                  
                  <li id="feedback_nav" ><a id="feedback"><i class="fa fa-send"></i> Feedback <span class="fa fa-active"></span></a>
                     
                  </li>
                  
                  <li><a id="exams"><i class="fa fa-pencil-square-o"></i> Exams <span class="fa fa-chevron-down"></span></a>
                      <ul  class="nav child_menu">
                        <li><a id="exams_upload" >Upload</a></li>
                        <li><a id="exams_view_all" >View All</a></li>
                    </ul>
                  </li>
                  
                  <li><a id="notes"><i class="fa fa-file-pdf-o"></i> Notes <span class="fa fa-chevron-down"></span></a>
                      <ul  class="nav child_menu">
                        <li><a id="notes_upload" >Upload</a></li>
                        <li><a id="notes_view_all" >View All</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!--<div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!--top navigation-->  
        <?php include './top_nav.php';?>
        <!--top navigation-->  
        
        <!-- page content -->
        
        <div class="right_col" role="main">
            
            <?php include './application.php';?>
            
            <!--validate before using this page-->
            <?php

                if(!(array_key_exists ( 'admin_login' , $_SESSION))){
                    header("Location: login.php");
                }
                else{
                    if(array_key_exists ( 'timetable_uploaded' , $_SESSION)){

                        ?> <script type="text/javascript">
                            
                             var message = "";
                            
                             $(document).ready(function () {
                                $("#dashboard_div").hide();  
                                $("#timetable_div").show();
                             });
                            </script>  <?php

                        if($_SESSION['timetable_uploaded'] == 'success'){
                            ?> <script>
                                $(document).ready(function () {
                                    new PNotify({
                                          title: 'Status',
                                          text: 'File has uploaded successfully!',
                                          type: 'success',
                                          styling: 'bootstrap3'
                                      });
                                });      
                                </script> 
                            <?php

                        } else {
                            
                            if($_SESSION['error_code'] === "2"){
                            
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'File already exists',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                            } else{
                                
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'Error occured while uploading this file',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                                
                            }
                        } 
                        unset($_SESSION['error_code']);
                        unset($_SESSION['timetable_uploaded']);

                    } elseif(array_key_exists ( 'worksheet_uploaded' , $_SESSION)){
                        ?> <script type="text/javascript">
                             $(document).ready(function () {
                                $("#dashboard_div").hide();  
                                $("#worksheets_div").show();
                             });
                            </script>  <?php

                        if($_SESSION['worksheet_uploaded'] == 'success'){
                            ?> <script>
                                $(document).ready(function () {
                                    new PNotify({
                                          title: 'Status',
                                          text: 'Worksheet file has uploaded successfully!',
                                          type: 'success',
                                          styling: 'bootstrap3'
                                      });
                                });      
                                </script> 
                            <?php
                        } else {
                            if($_SESSION['error_code'] === "2"){
                            
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'File already exists',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                            } else{
                                
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'Error occured while uploading this file',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                                
                            }
                        } 
                        unset($_SESSION['error_code']);
                        unset($_SESSION['worksheet_uploaded']);

                    } elseif(array_key_exists ( 'exam_data_uploaded' , $_SESSION)){
                        ?> <script type="text/javascript">
                             $(document).ready(function () {
                                $("#dashboard_div").hide();  
                                $("#exams_div").show();
                             });
                            </script>  <?php

                        if($_SESSION['exam_data_uploaded'] == 'success'){
                            ?> <script>
                                $(document).ready(function () {
                                    new PNotify({
                                          title: 'Status',
                                          text: 'File has uploaded successfully!',
                                          type: 'success',
                                          styling: 'bootstrap3'
                                      });
                                });      
                                </script> 
                            <?php
                        } else {
                            
                            if($_SESSION['error_code'] === "2"){
                            
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'File already exists',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                            } else{
                                
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'Error occured while uploading this file',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                                
                            }
                        } 
                        unset($_SESSION['error_code']);
                        unset($_SESSION['exam_data_uploaded']);

                    } elseif(array_key_exists ( 'notes_uploaded' , $_SESSION)){
                        ?> <script type="text/javascript">
                             $(document).ready(function () {
                                $("#dashboard_div").hide();  
                                $("#notes_div").show();
                             });
                            </script>  <?php

                        if($_SESSION['notes_uploaded'] == 'success'){
                            ?> <script>
                                $(document).ready(function () {
                                    new PNotify({
                                          title: 'Status',
                                          text: 'File has uploaded successfully!',
                                          type: 'success',
                                          styling: 'bootstrap3'
                                      });
                                });      
                                </script> 
                            <?php
                        } else {
                            
                            if($_SESSION['error_code'] === "2"){
                            
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'File already exists',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                                
                            } else{
                                
                                ?> 
                                    <script>

                                    $(document).ready(function () {
                                        new PNotify({
                                              title: 'Status',
                                              text: 'Error occured while uploading this file',
                                              type: 'error',
                                              styling: 'bootstrap3'
                                          });
                                    });      
                                    </script> 
                                <?php
                                
                            }
                        }
                        unset($_SESSION['error_code']);
                        unset($_SESSION['notes_uploaded']);
                    }

                }

            ?>
            
           
            <div visible id="dashboard_div">
                <?php include './dashboard.php';?>
            </div>
            
            <div hidden id="teacher_div">
                <?php include './teacher.php';?>
            </div>
            
            <div hidden id="student_div">
                <?php include './student.php';?>
            </div>
            
            
            <div hidden id="classes_div">
                <?php include './classes.php';?>
            </div>
           
            <div hidden id="timetable_div">
               <?php include './timetable.php';?>
            </div>
                            
            <div hidden id="worksheets_div">
               <?php include './worksheets.php';?>
            </div> 
               
            <div hidden id="academia_div">
               <?php include './academia.php';?>
            </div>
                            
            <div hidden id="feedback_div">
               <?php include './feedback.php';?>
            </div>
            
            <div hidden id="exams_div">
               <?php include './exams.php';?>
            </div>
                            
            <div hidden id="notes_div">
               <?php include './notes.php';?>
            </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Powered by - <a href="http://www.iacsoftware.com/">IAC Software Solutions</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="../include/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../include/vendors/jquery-ui/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link href="../include/vendors/jquery-ui/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="../include/vendors/jquery-ui/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="../include/vendors/jquery-ui/jquery-ui-1.12.1/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" />

    <!-- bootstrap-daterangepicker -->
    <script src="../include/vendors/moment/min/moment.min.js"></script>
    <script src="../include/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Bootstrap -->
    <script src="../include/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../include/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../include/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../include/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../include/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../include/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../include/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../include/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../include/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../include/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../include/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../include/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../include/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../include/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../include/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../include/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../include/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../include/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../include/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../include/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../include/build/js/custom.min.js"></script>
    
    <!--bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <!--dataTables-->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <!--dataTables.buttons-->
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
    <!--dataTables.select-->
    <script src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script> 
    <!--dataTables.responsive-->
    <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>

    <!--dataTables.Editor-->
    <script src="../include/vendors/Editor/js/dataTables.editor.min.js"></script>
    <script type="text/javascript" src="js/dataTables.altEditor.js"></script>

    
    <link href="../include/vendors/Editor/css/editor.dataTables.min.css" rel="stylesheet">
    <link href="../include/vendors/buttons/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../include/vendors/buttons/buttons.dataTables.min.css" rel="stylesheet">
    <link href="../include/vendors/buttons/select.dataTables.min.css" rel="stylesheet">
    
    <!-- PNotify -->
    <script src="../include/vendors/pnotify/dist/pnotify.js"></script>
    <script src="../include/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../include/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    
    
    <!--transition effects-->
    <script type="text/javascript" src="js/slide_effects.js">

    </script>
    <!--transition effect-->
    
    <!--datatable-->
    <script type="text/javascript" src="js/dashboard.js"></script>
    <script type="text/javascript" src="js/teacher_datatable.js"></script>
    <script type="text/javascript" src="js/student_datatable.js"></script>
    <script type="text/javascript" src="js/section_datatable.js"></script>
    <script type="text/javascript" src="js/timetable_datatable.js"></script>
    <script type="text/javascript" src="js/worksheets_datatable.js"></script>
    <script type="text/javascript" src="js/academia_datatables.js"></script>
    <script type="text/javascript" src="js/feedback_datatables.js"></script>
    <script type="text/javascript" src="js/datesheet.js"></script>
    <script type="text/javascript" src="js/result.js"></script>
    <script type="text/javascript" src="js/notes.js"></script>
    <!--datatable-->
    
    <link  href="css/exams.css" rel="stylesheet">

  </body>
</html>
