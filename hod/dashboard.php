<!DOCTYPE html>

<?php

  include './php/connection.php';
  
?>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DESC | HOD</title>


    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="vendors/datatables.net/extensions/FixedHeader/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Scroller/css/scroller.bootstrap.min.css" rel="stylesheet">
    

    
    <link href="vendors/datatables.net/media/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Select/css/select.dataTables.css" rel="stylesheet">
    <link href="vendors/datatables.net-editor/css/editor.dataTables.css" rel="stylesheet">



  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>DESC</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>HOD</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li id="home_nav"><a class="link active"><i class="fa fa-home"></i> Home </a></li>

                  <li id="coordinator_nav"><a class="link"><i class="fa fa-edit"></i> My Coordinators </a></li>

                  <li id="faculty_nav"><a class="link"><i class="fa fa-desktop"></i> My Faculty </a></li>

                  <li id="student_nav"><a class="link"><i class="fa fa-table"></i> My Students </a></li>

                  <li id="greviences_nav"><a class="link" ><i class="fa fa-bar-chart-o"></i> Greveinces </a></li>

                </ul>
              </div>
              <div class="menu_section">
                <h3>ADMIN SETTING</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Admin Profile </a></li>

                  <li><a><i class="fa fa-windows"></i> Messages </a></li>
               
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">HOD
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a> Profile</a></li>
                    <li><a><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="menu_tabs">
            <!-- top menu tabs -->
            <div class="top_menu" >

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h2 style="margin-left: 10px;">MY FACULTY</h2>
                  
                  <p>No. Of Teachers.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                    
                  <div class="count">389</div>

                  <h2 style="margin-left: 10px;">MY STUDENTS</h2>
                  
                  <p>No. Of Students</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h2 style="margin-left: 10px;">MY CO-ORDINATOR</h2>
                  
                  <p>No. Of Co-ordinators</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h2 style="margin-left: 10px;">GREVEINCES</h2>
                  
                  <p>No. Of Greviences.</p>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
          </div>

          <div class="clearfix"></div>

          <div id="content_main">
            
            <!-- coordinator -->
            <div hidden class="row" id="coordinator_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>CO-ORDINATOR DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="coordinator_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>COURSE</th>
                          <th>SEMESTER</th>
                          <th>SECTION</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>
            </div>    

            <!-- faculty -->
            <div hidden class="row" id="faculty_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>FACULTY DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="faculty_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>ADDRESS</th>
                          <th>PHONE</th>
                          <th>EMAIL</th>
                          <th>QUALIFICATION</th>
                          <th>DESIGNATION</th>
                          <th>D.O.J</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>
            </div>   

            <!-- students -->
            <div hidden  class="row" id="student_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>STUDENTS DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="students_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ENROLL</th>
                          <th>NAME</th>
                          <th>COURSE</th>
                          <th>SEMESTER</th>
                          <th>SECTION</th>
                          <th>ADDRESS</th>
                          <th>PHONE</th>
                          <th>EMAIL</th>
                          <th>REG STATUS</th>
                          <th>REG NO</th>
                          <th>BATCH</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>

                </div>

              </div>
            </div> 

            <!-- Greviences -->
            <div hidden  class="row" id="grevience_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>GREVIENCES</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="grevience_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>SUBJECT</th>
                          <th>MESSAGE</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>

                </div>

              </div>
            </div> 
          </div>

        </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            DESC
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/datatables.net/media/js/jquery.js"></script>               
    
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>

    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="vendors/parsleyjs/dist/laravel-parsley.js"></script> 

    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>

    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <script src="vendors/datatables.net/media/js/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net/media/js/dataTables.bootstrap.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net/extensions/Responsive/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/datatables.net/extensions/Select/js/dataTables.select.min.js"></script>
    <script src="vendors/datatables.net-editor/js/dataTables.editor.js"></script>
    


<!-- collapsable content -->
<script>

  $("#home_nav").click(function(){

    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');
    $("#content_main").slideUp();
  });

  $("#coordinator_nav").click(function(){

    $(".link").removeClass('active');
    $("#coordinator_nav .link").addClass('active');
    $("#content_main").slideDown();
  	$("#coordinator_div").slideDown();
    $("#faculty_div").slideUp();
    $("#student_div").slideUp();
    $("#grevience_div").slideUp();
    coordinator_datatable.ajax.reload();
  });

  $("#faculty_nav").click(function(){

    $(".link").removeClass('active');
    $("#faculty_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#coordinator_div").slideUp();
    $("#faculty_div").slideDown();
    $("#student_div").slideUp();
    $("#grevience_div").slideUp();
    faculty_datatable.ajax.reload();
  });

  $("#student_nav").click(function(){

    $(".link").removeClass('active');
    $("#student_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#coordinator_div").slideUp();
    $("#faculty_div").slideUp();
    $("#student_div").slideDown();
    $("#grevience_div").slideUp();
    student_datatable.ajax.reload();
  });  

  $("#greviences_nav").click(function(){

    $(".link").removeClass('active');
    $("#greviences_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#coordinator_div").slideUp();
    $("#faculty_div").slideUp();
    $("#student_div").slideUp();
    $("#grevience_div").slideDown();
    greveince_datatable.ajax.reload();
  });  

</script>

<!-- Autosize -->
<script>
  $(document).ready(function() {
    autosize($('.resizable_textarea'));
  });
</script>
<!-- /Autosize -->


<!-- Datatables -->
<script>

  var coordinator_editor,faculty_editor,grevience_editor,student_editor,coordinator_datatable,faculty_datatable,greveince_datatable,student_datatable;

  $(document).ready(function() {


    {
          coordinator_editor = new $.fn.dataTable.Editor( {
              ajax: "./php/get_coordinator_data.php",
              keys: true,
              table: "#coordinator_datatable-responsive",
              idSrc:  'teacher_id',
              fields: [ 
                  {
                      label: "ID:",
                      name: "teacher_id",
                      type: "select",
                      options: []
                  }, 
                  {
                      label: "COURSE:",
                      name: "coordinating_course",
                      type: "select",
                      options: [
                        { label: "BE", value: "BE" },
                        { label: "DIPLOMA", value: "DIPLOMA" }
                      ]
                  }, 
                  {
                      label: "SEMESTER:",
                      name: "coordinating_sem",
                      type: "select",
                      options: [
                        { label: "1st", value: "1" },
                        { label: "2nd", value: "2" },
                        { label: "3rd", value: "3" },
                        { label: "4th", value: "4" },
                        { label: "5th", value: "5" },
                        { label: "6th", value: "6" },
                        { label: "7th", value: "7" },
                        { label: "8th", value: "8" }
                      ]

                  }, 
                  {
                      label: "SECTION:",
                      name: "coordinating_sec", 
                      type: "select",
                      options: [
                        { label: "A", value: "A" },
                        { label: "B", value: "B" }
                      ]

                  }
            ]
          } );

          $.post("./php/get_extras.php",{get:"teacher_ids"},function(data){

            coordinator_editor.field('teacher_id').update(data);

          },"json");

          coordinator_editor.dependent( 'coordinating_course', function ( val ) {
              
              if (val === 'BE') 
              {
                coordinator_editor.field('coordinating_sem').update([{ label: "1st", value: "1" },{ label: "2nd", value: "2" },{ label: "3rd", value: "3" },{ label: "4th", value: "4" },{ label: "5th", value: "5" },{ label: "6th", value: "6" },{ label: "7th", value: "7" },{ label: "8th", value: "8" }]);
              }
              else
              {
                coordinator_editor.field('coordinating_sem').update([{ label: "1st", value: "1" },{ label: "2nd", value: "2" },{ label: "3rd", value: "3" },{ label: "4th", value: "4" },{ label: "5th", value: "5" },{ label: "6th", value: "6" }]);
              }

              return true;

          } );

          coordinator_datatable = $('#coordinator_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_coordinator_data.php",
              columns: [
                  { 
                    data: "teacher_id", 
                    
                  },
                  { 
                    data: "teacher_name",
                  },
                  { 
                    data: "coordinating_course", 
                    className: 'editable'
                  },
                  { 
                    data: "coordinating_sem",
                    className: 'editable'
                  },
                  { 
                    data: "coordinating_sec",
                    className: 'editable'
                  }
              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: [2,3,4],
                  keys: [ 9 ]
              },
              select: {
                style:    'os',
                selector: 'td:first-child'
              },
              responsive: true,
                buttons: [
                  { extend:"create", editor:coordinator_editor },
                  { extend:"remove", editor:coordinator_editor }
                ]
          });


          $('#coordinator_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              coordinator_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#coordinator_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              coordinator_editor.inline( cell.index() , {
                  submitOnBlur: true
              });
          } );



          coordinator_editor.on( 'preSubmit', function ( e, o, action ) {

              if ( action !== 'remove' ) {

                  var teacher_id = coordinator_editor.field( 'teacher_id' );
                  var coordinating_course = coordinator_editor.field( 'coordinating_course' );
                  var coordinating_sem = coordinator_editor.field( 'coordinating_sem' );
                  var coordinating_sec = coordinator_editor.field( 'coordinating_sec' ); 
                  // Only validate user input values - different values indicate that
                  // the end user has not entered a value
                  if ( ! teacher_id.isMultiValue() ) {
                      if (teacher_id.val() == -1) {
                          teacher_id.error( 'Value is required' );
                      }
                  }

                  if ( ! coordinating_course.isMultiValue() ) {
                      if (coordinating_course.val() == -1) {
                          coordinating_course.error( 'Value is required' );
                      }
                  }

                  if ( ! coordinating_sem.isMultiValue() ) {
                      if (coordinating_sem.val() == -1) {
                          coordinating_sem.error( 'Value is required' );
                      }
                  }

                  if ( ! coordinating_sec.isMultiValue() ) {
                      if (coordinating_sec.val() == -1) {
                          coordinating_sec.error( 'Value is required' );
                      }
                  }


                  // ... additional validation rules
       
                  // If any error was reported, cancel the submission so it can be corrected
                  if ( this.inError() ) {
                      return false;
                  }
              }

          } );
    }

    {
      faculty_editor = new $.fn.dataTable.Editor( {
            ajax: "./php/get_faculty_data.php",
            keys: true,
            table: "#faculty_datatable-responsive",
            idSrc:  'teacher_id',
            fields: [  
                {
                    label: "NAME:",
                    name: "teacher_name",
                    type: "text"
                }, {
                    label: "ADDRESS:",
                    name: "address",
                    type: "textarea"
                }, {
                    label: "PHONE:",
                    name: "contact_no",
                    type: "text"
                }, {
                    label: "EMAIL:",
                    name: "email",
                    type: "text"
                }, {
                    label: "QUALIFICATION:",
                    name: "qualification",
                    type: "text"
                }, {
                    label: "DESIGNATION:",
                    name: "designation",
                    type: "text"
                }, {
                    label: "D.O.J:",
                    name: "date_of_joining",
                    type: "datetime"
                }
            ]
        } );


      faculty_datatable = $('#faculty_datatable-responsive').DataTable({
          dom: "Bfrtip",
          ajax: "./php/get_faculty_data.php",
          columns: [
              { 
                data: "teacher_id", 
                
              },
              { 
                data: "teacher_name",
                className: 'editable'
              },
              { 
                data: "address", 
                className: 'editable'
              },
              { 
                data: "contact_no",
                className: 'editable'
              },
              { 
                data: "email", 
                className: 'editable'
              },
              { 
                data: "qualification",
                className: 'editable'
              },
              { 
                data: "designation", 
                className: 'editable'
              },
              { 
                data: "date_of_joining",
                className: 'editable'
              }
          ],
          order: [ 0, 'asc' ],
          keys: {
              columns: ':not(:first-child)',
              keys: [ 9 ]
          },
          select: {
            style:    'os',
            selector: 'td:first-child'
          },
          responsive: true,
            buttons: [
              { extend:"create", editor:faculty_editor },
              { extend:"remove", editor:faculty_editor }
            ]
      });


      $('#faculty_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
          faculty_editor.inline( this, {
              submitOnBlur: true
          } );
      } );

      $('#faculty_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
          faculty_editor.inline( cell.index() , {
              submitOnBlur: true
          });
      } );

      faculty_editor.on( 'preSubmit', function ( e, o, action ) {

          if ( action !== 'remove' ) {

              var teacher_name = faculty_editor.field( 'teacher_name' );
              var address = faculty_editor.field( 'address' );
              var contact_no = faculty_editor.field( 'contact_no' );
              var email = faculty_editor.field( 'email' );
              var qualification = faculty_editor.field( 'qualification' );
              var designation = faculty_editor.field( 'designation' );
              var date_of_joining = faculty_editor.field( 'date_of_joining' );
              
              // Only validate user input values - different values indicate that
              // the end user has not entered a value
  
              if ( ! teacher_name.isMultiValue() ) {
                  if ( ! teacher_name.val() ) {
                      teacher_name.error( 'Value is required' );
                  }
              }

              if ( ! address.isMultiValue() ) {
                  if ( ! address.val() ) {
                      address.error( 'Value is required' );
                  }
              }

              if ( ! contact_no.isMultiValue() ) {
                  if ( ! contact_no.val() ) {
                      contact_no.error( 'Value is required' );
                  }
              }

              if ( ! email.isMultiValue() ) {
                  if ( ! email.val() ) {
                      email.error( 'Value is required' );
                  }
              }

              if ( ! qualification.isMultiValue() ) {
                  if ( ! qualification.val() ) {
                      qualification.error( 'Value is required' );
                  }
              }

              if ( ! designation.isMultiValue() ) {
                  if ( ! designation.val() ) {
                      designation.error( 'Value is required' );
                  }
              }

              if ( ! date_of_joining.isMultiValue() ) {
                  if ( ! date_of_joining.val() ) {
                      date_of_joining.error( 'Value is required' );
                  }
              }

              // ... additional validation rules
   
              // If any error was reported, cancel the submission so it can be corrected
              if ( this.inError() ) {
                  return false;
              }
          }

      } );
    }

    {
          student_editor = new $.fn.dataTable.Editor( {
              ajax: "./php/get_students_data.php",
              keys: true,
              table: "#students_datatable-responsive",
              idSrc:  'enroll',
              fields: [ 
                  {
                      label: "ENROLL:",
                      name: "enroll",
                      type: "text"
                  }, 
                  {
                      label: "NAME:",
                      name: "name",
                      type: "text"
                  }, 
                  {
                      label: "COURSE:",
                      name: "course", 
                      type: "select",
                      options: [
                        { label: "BE", value: "BE" },
                        { label: "DIPLOMA", value: "DIPLOMA" }
                      ]
                  },
                  {
                      label: "SEMESTER:",
                      name: "semester",
                      type: "select",
                      options: []
                  },  
                  {
                      label: "SECTION:",
                      name: "section",
                      type: "select",
                      options: [
                        { label: "A", value: "A" },
                        { label: "B", value: "B" }
                      ]
                  }, 
                  {
                      label: "ADDRESS:",
                      name: "address",
                      type: "textarea"
                  }, 
                  {
                      label: "PHONE:",
                      name: "contact_no",
                      type: "text"
                  }, 
                  {
                      label: "EMAIL:",
                      name: "email", 
                      type: "text"
                  },
                  {
                      label: "REG No:",
                      name: "reg_no",
                      type: "text"
                  }, 
                  {
                      label: "BATCH:",
                      name: "batch",
                      type: "text"
                  }, 
                  {
                      label: "REG STATUS:",
                      name: "reg_status", 
                      type: "select",
                      options: [
                        { label: "no", value: "no" },
                        { label: "yes", value: "yes" }
                      ]
                  },
              ]
          } );


          student_datatable = $('#students_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_students_data.php",
              columns: [
                  { 
                    data: "enroll", 
                    
                  },

                  { 
                    data: "name",
                    className: 'editable'
                  },

                  { 
                    data: "course",
                    className: 'editable'
                  },

                  { 
                    data: "semester", 
                    className: 'editable'
                  },

                  { 
                    data: "section", 
                    className: 'editable'
                  },

                  { 
                    data: "address",
                    className: 'editable'
                  },
                  
                  { 
                    data: "contact_no", 
                    className: 'editable'
                  },
                  
                  { 
                    data: "email", 
                    className: 'editable'
                  },
                  
                  { 
                    data: "reg_status",
                    className: 'editable'
                  },

                  { 
                    data: "reg_no",
                  },

                  { 
                    data: "batch",
                  }

              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: [1,2,3,4,5,6,7,8],
                  keys: [ 9 ]
              },
              select: {
                style:    'os',
                selector: 'td:first-child'
              },
              responsive: true,
                buttons: [
                  { extend:"create", editor:student_editor },
                  { extend:"remove", editor:student_editor }
                ]
          });


          student_editor.dependent( 'course', function ( val ) {
              
              if (val === 'BE') 
              {
                student_editor.field('semester').update([{ label: "1st", value: "1" },{ label: "2nd", value: "2" },{ label: "3rd", value: "3" },{ label: "4th", value: "4" },{ label: "5th", value: "5" },{ label: "6th", value: "6" },{ label: "7th", value: "7" },{ label: "8th", value: "8" }]);
              }
              else
              {
                student_editor.field('semester').update([{ label: "1st", value: "1" },{ label: "2nd", value: "2" },{ label: "3rd", value: "3" },{ label: "4th", value: "4" },{ label: "5th", value: "5" },{ label: "6th", value: "6" }]);
              }

              return true;

          } );

          $('#students_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              student_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#students_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              student_editor.inline( cell.index() , {
                  submitOnBlur: true
              });
          } );

          student_editor.on( 'preSubmit', function ( e, o, action ) {

            if ( action !== 'remove' ) {

                var enroll = student_editor.field( 'enroll' );
                var name = student_editor.field( 'name' );
                var semester = student_editor.field( 'semester' );
                var course = student_editor.field( 'course' );
                var address = student_editor.field( 'address' );
                var contact_no = student_editor.field( 'contact_no' );
                var email = student_editor.field( 'email' );
                var reg_no = student_editor.field( 'reg_no' );
                var batch = student_editor.field( 'batch' );

                // Only validate user input values - different values indicate that
                // the end user has not entered a value
    
                if ( ! enroll.isMultiValue() ) {
                    if ( ! enroll.val() ) {
                        enroll.error( 'Value is required' );
                    }
                }

                if ( ! name.isMultiValue() ) {
                    if ( ! name.val() ) {
                        name.error( 'Value is required' );
                    }
                }

                if ( ! semester.isMultiValue() ) {
                    if ( ! semester.val() ) {
                        semester.error( 'Value is required' );
                    }
                }

                if ( ! course.isMultiValue() ) {
                    if ( ! course.val() ) {
                        course.error( 'Value is required' );
                    }
                }

                if ( ! address.isMultiValue() ) {
                    if ( ! address.val() ) {
                        address.error( 'Value is required' );
                    }
                }

                if ( ! contact_no.isMultiValue() ) {
                    if ( ! contact_no.val() ) {
                        contact_no.error( 'Value is required' );
                    }
                }

                if ( ! email.isMultiValue() ) {
                    if ( ! email.val() ) {
                        email.error( 'Value is required' );
                    }
                }

                if ( ! reg_no.isMultiValue() ) {
                    if ( ! reg_no.val() ) {
                        reg_no.error( 'Value is required' );
                    }
                }

                if ( ! batch.isMultiValue() ) {
                    if ( ! batch.val() ) {
                        batch.error( 'Value is required' );
                    }
                }


                // ... additional validation rules
     
                // If any error was reported, cancel the submission so it can be corrected
                if ( this.inError() ) {
                    return false;
                }
            }

          } );
    }

    {

          greveince_datatable = $('#grevience_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_grevience_data.php",
              columns: [
                  { 
                    data: "grevience_id", 
                  },
                  { 
                    data: "grevience_subject",
                  },
                  { 
                    data: "grevience_message", 
                  }
              ],
              order: [ 0, 'asc' ],
              responsive: true,
              buttons: [
                
              ]
          });
    }

    
  });
  
</script>
<!-- /Datatables -->



  </body>


</html>
