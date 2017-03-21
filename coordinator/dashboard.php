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

    <title>DESC | COORDINATOR</title>


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
                <h2>Coordinator</h2>
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

                  <li id="timetable_nav"><a class="link"><i class="fa fa-edit"></i> Time Table </a></li>

                  <li id="sessionals_nav"><a class="link"><i class="fa fa-desktop"></i> Sessionals </a></li>

                  <li id="projects_nav"><a class="link"><i class="fa fa-table"></i> Projects </a></li>

                  <li id="classroutine_nav"><a class="link" ><i class="fa fa-bar-chart-o"></i> Class Routine </a></li>

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
                    <img src="images/img.jpg" alt="">Administrator
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
            
            <!-- content to add/edit slider -->
            <div hidden class="row" id="coordinator_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT CATEGORY DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="coordinator_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>TEACHER ID</th>
                          <th>CATEGORY NAME</th>
                          <th>CATEGORY DESCRIPTION</th>
                          <th>STOCK</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>
            </div>    

            <!-- content to edit/delete card -->
            <div hidden class="row" id="edit_card_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT CARD DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="faculty_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>CARD NAME</th>
                          <th>CARD DESCRIPTION</th>
                          <th>CARD PRICE</th>
                          <th>CARD CATEGORY</th>
                          <th>CARD IMAGE</th>
                          <th>CARD ON HOME</th>
                          <th>LATEST</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>
                </div>
              </div>
            </div>   

            <!-- content to edit/delete testimonials -->
            <div hidden  class="row" id="classroutine_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>Class Routine</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="classroutine_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>SUBJECT CODE</th>
                          <th>SUBJECT NAME</th>
                          <th>SEMESTER</th>
                          <th>TEACHER</th>
                          <th>TOTAL CLASSES</th>
                        </tr>
                      </thead>
                    </table>  
                  </div>

                </div>

              </div>
            </div>

            <div hidden  class="row" id="projects_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>Ongoing Projects</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="projects_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>PROJECT ID</th>
                          <th>PROJECT NAME</th>
                          <th>NO OF MEMBERS</th>
                          <th>MEMBERS</th>
                          <th>YEAR</th>
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
    




<!-- file extention validation -->
<script>
    $(document).ready(function() {
        window.ParsleyValidator
            .addValidator('fileextension', function (value, requirement) {
                // the value contains the file path, so we can pop the extension
                var fileExtension = value.split('.').pop();
                var extent = requirement.split(" ");

                return fileExtension === extent[0] || fileExtension === extent[1];
            }, 32)
            .addMessage('en', 'fileextension', 'The extension doesn\'t match the required');

        $("#slider_form").parsley();
        $("#card_form").parsley();
        $("#tile_form").parsley();
        $("#testimonial_form").parsley();
    });
</script>


<!-- dropdown validation -->
<script>
    $(document).ready(function() {
        window.ParsleyValidator
            .addValidator('dropdown', function (value, requirement) {
                // the value contains the file path, so we can pop the extension
                if (requirement) 
                {
                  return value != -1;
                }

            }, 32)
            .addMessage('en', 'dropdown', 'Please select a valid option');

        $("#slider_form").parsley();
        $("#card_form").parsley();
        $("#tile_form").parsley();
        $("#testimonial_form").parsley();
    });
</script>




<!-- collapsable content -->
<script>


  $("#home_nav").click(function(){

    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');
    $("#content_main").slideUp();
  });

  $("#timetable_nav").click(function(){

    $(".link").removeClass('active');
    $("#timetable_nav .link").addClass('active');
    $("#content_main").slideDown();
  	//$("#category_div").slideUp();
    //$("#edit_card_div").slideUp();
    //$("#testimonials_div").slideUp();

  });

  $("#sessionals_nav").click(function(){

    $(".link").removeClass('active');
    $("#sessionals_nav .link").addClass('active');
    $("#content_main").slideUp();
   // $("#category_div").slideUp();
    //$("#edit_card_div").slideUp();
    //$("#testimonials_div").slideUp();

  });

  $("#projects_nav").click(function(){

    $(".link").removeClass('active');
    $("#projects_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#projects_div").slideDown();
     $("#classroutine_div").slideUp();

  });  

    $("#classroutine_nav").click(function(){

    $(".link").removeClass('active');
    $("#classroutine_nav .link").addClass('active');
    $("#content_main").slideDown();
   // $("#category_div").slideUp();
    $("#classroutine_div").slideDown();
    $("#projects_div").slideUp();
    //$("#testimonials_div").slideUp();

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

  var slider_editor,category_editor,card_editor,student_editor,testimonials_editor;

  $(document).ready(function() {

    {
          slider_editor = new $.fn.dataTable.Editor( {
              ajax: "./php/get_slider_data.php",
              keys: true,
              table: "#slider_datatable-responsive",
              idSrc:  'slider_id',
              fields: [ 
                  {
                      label: "SLIDER ID:",
                      name: "slider_id",
                  }, 
                  {
                      label: "MAIN TEXT:",
                      name: "main_text",
                  }, 
                  {
                      label: "TOP HEADING:",
                      name: "sub_heading_top",
                  }, 
                  {
                      label: "BOTTOM HEADING:",
                      name: "sub_heading_bottom",
                  }, 
                  {
                      label: "IMAGE:",
                      name: "background_img", 
                      type: "upload"
                  }, 
                  {
                      label: "STATUS:",
                      name: "status",
                      type:  "select",
                      options: [
                          { label: "published", value: "published" },
                          { label: "unpublished", value: "unpublished" } 
                        ]
                  }
            ]
          } );

          $('#slider_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_slider_data.php",
              columns: [
                  { 
                    data: "slider_id", 
                    
                  },
                  { 
                    data: "main_text",
                    className: 'editable'
                  },
                  { 
                    data: "sub_heading_top", 
                    className: 'editable'
                  },
                  { 
                    data: "sub_heading_bottom",
                    className: 'editable'
                  },
                  { 
                    data: "background_img",
                    className: 'editable'
                  },
                  { 
                    data: "status", 
                    className: 'editable'
                  }
              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
                buttons: [
                  
                ]
          });


          $('#slider_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              slider_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#slider_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              slider_editor.inline( cell.index() , {
                  
                  submitOnBlur: true
              });
          } );



          slider_editor.on( 'preSubmit', function ( e, o, action ) {

              if ( action !== 'remove' ) {

                  var main_text = slider_editor.field( 'main_text' );
                  var sub_heading_top = slider_editor.field( 'sub_heading_top' );
                  var sub_heading_bottom = slider_editor.field( 'sub_heading_bottom' );
                  var background_img = slider_editor.field( 'background_img' ); 
                  // Only validate user input values - different values indicate that
                  // the end user has not entered a value
                  if ( ! main_text.isMultiValue() ) {
                      if ( ! main_text.val() ) {
                          main_text.error( 'Value is required' );
                      }
                  }

                  if ( ! sub_heading_top.isMultiValue() ) {
                      if ( ! sub_heading_top.val() ) {
                          sub_heading_top.error( 'Value is required' );
                      }
                  }

                  if ( ! sub_heading_bottom.isMultiValue() ) {
                      if ( ! sub_heading_bottom.val() ) {
                          sub_heading_bottom.error( 'Value is required' );
                      }
                  }

                  var ext = background_img.val().split('.').pop();
                  if ( ! background_img.isMultiValue() ) {
                      if ( ext !== 'jpg' && ext !== 'png' ) {
                          background_img.error( 'Please upload an image (jpg or png only).' );
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
      category_editor = new $.fn.dataTable.Editor( {
            ajax: "./php/get_category_data.php",
            keys: true,
            table: "#category_datatable-responsive",
            idSrc:  'category_id',
            fields: [  {
                    label: "CATEGORY NAME:",
                    name: "category_name",
                    type: "text"
                }, {
                    label: "CATEGORY DESCRIPTION:",
                    name: "category_description",
                    type: "textarea"
                }
            ]
        } );


      $('#category_datatable-responsive').DataTable({
          dom: "Bfrtip",
          ajax: "./php/get_category_data.php",
          columns: [
              { 
                data: "category_id", 
                
              },
              { 
                data: "category_name",
                className: 'editable'
              },
              { 
                data: "category_description", 
                className: 'editable'
              },
              { 
                data: "stock",
              }
          ],
          order: [ 0, 'asc' ],
          keys: {
              columns: [1,2],
              keys: [ 9 ]
          },
          buttons: [
            { extend:"create", editor:category_editor },
          ]
      });


      $('#category_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
          category_editor.inline( this, {
              submitOnBlur: true
          } );
      } );

      $('#category_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
          category_editor.inline( cell.index() , {
              submitOnBlur: true
          });
      } );

      category_editor.on( 'preSubmit', function ( e, o, action ) {

          if ( action !== 'remove' ) {

              var category_name = category_editor.field( 'category_name' );
              var category_description = category_editor.field( 'category_description' );
              
              // Only validate user input values - different values indicate that
              // the end user has not entered a value
              if ( ! category_name.isMultiValue() ) {
                  if ( ! category_name.val() ) {
                      category_name.error( 'Value is required' );
                  }
              }

              if ( ! category_description.isMultiValue() ) {
                  if ( ! category_description.val() ) {
                      category_description.error( 'Value is required' );
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
      card_editor = new $.fn.dataTable.Editor( {
        ajax: "./php/get_card_data.php",
        keys: true,
        table: "#card_datatable-responsive",
        idSrc:  'card_id',
        fields: [ {
                label: "CARD NAME:",
                name: "card_name",
                type: "text"
            }, {
                label: "CARD DESCRIPTION:",
                name: "card_description",
                type: "textarea"
            }, {
                label: "CARD PRICE:",
                name: "card_price",
                type: "text"
            }, {
                label: "CARD CATEGORY:",
                name: "card_category",
                type: "select",
            }, {
                label: "CARd IMAGE:",
                name: "card_image", 
                type: "upload"
            }, {
                label: "CARD ON HOME:",
                name: "on_home",
                type:  "select",
                options: [
                    { label: "no", value: "no" },
                    { label: "yes", value: "yes" } 
                  ]
            }, {
                label: "LATEST:",
                name: "is_latest",
                type:  "select",
            }
          ]
      });


      $.post("./php/get_category_data.php",{getOptions:"yes"},function(data){

      card_editor.field('card_category').update(data);

      },"json");


      card_editor.on('initCreate',function(){

        card_editor.field('is_latest').hide();
        card_editor.field('on_home').hide();

      });


      $('#card_datatable-responsive').DataTable({
          dom: "Bfrtip",
          ajax: "./php/get_card_data.php",
          columns: [  
              {
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
              },
              { 
                data: "card_name",
                className: 'editable'
              },
              { 
                data: "card_description", 
                className: 'editable'
              },
              { 
                data: "card_price",
                className: 'editable'
              },
              { 
                data: "card_category",
                className: 'editable'
              },
              { 
                data: "card_image", 
                className: 'editable'
              },
              { 
                data: "on_home", 
                className: 'editable'
              },
              { 
                data: "is_latest", 
                className: 'editable'
              }
          ],
          select: {
            style:    'os',
            selector: 'td:first-child'
          },
          order: [ 1, 'asc' ],
          keys: {
              columns: ':not(:first-child)', 
              keys: [ 9 ]
          },
          buttons: [
              {extend:"create", editor:card_editor},
              {extend:"remove", editor:card_editor}
          ]
      });


      $('#card_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {

          $.post("./php/get_card_data.php",{getLatest:"yes"},function(data){

          card_editor.field('is_latest').update(data);

          },"json");


          card_editor.inline( this, {
              submitOnBlur: true
          } );
      } );

      $('#card_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {

          $.post("./php/get_card_data.php",{getLatest:"yes"},function(data){

          card_editor.field('is_latest').update(data);

          },"json");

          card_editor.inline( cell.index() , {
              submitOnBlur: true
          });
      } );



      card_editor.on( 'preSubmit', function ( e, o, action ) {

          if ( action !== 'remove' ) {

              var card_name = card_editor.field( 'card_name' );
              var card_description = card_editor.field( 'card_description' );
              var card_price = card_editor.field( 'card_price' );
              var card_image = card_editor.field( 'card_image' ); 
              // Only validate user input values - different values indicate that
              // the end user has not entered a value
              if ( ! card_name.isMultiValue() ) {
                  if ( ! card_name.val() ) {
                      card_name.error( 'Value is required' );
                  }
              }

              if ( ! card_description.isMultiValue() ) {
                  if ( ! card_description.val() ) {
                      card_description.error( 'Value is required' );
                  }
              }

              if ( ! card_price.isMultiValue() ) {
                  if ( ! card_price.val() ) {
                      card_price.error( 'Value is required' );
                  }
              }

              var ext = card_image.val().split('.').pop();
              if ( ! card_image.isMultiValue() ) {
                  if ( ext !== 'jpg' && ext !== 'png' ) {
                      card_image.error( 'Please upload an image (jpg or png only).' );
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
          classroutine_editor = new $.fn.dataTable.Editor( {
              ajax: "./php/get_classroutine_data.php",
              keys: true,
              table: "#classroutine_datatable-responsive",
              idSrc:  'subject_code',
              fields: [ 
                  {
                      label: "SUBJECT CODE:",
                      name: "subject_code",
                      type: "text"
                  }, 
                  {
                      label: "SUBJECT NAME:",
                      name: "subject_name",
                      type: "text"
                  }, 
                  {
                      label: "SEMESTER:",
                      name: "semester",
                      type: "text"
                  }, 
                  {
                      label: "TEACHER:",
                      name: "teacher",
                      type: "text"
                  }, 
                  {
                      label: "TOTAL CLASSES:",
                      name: "total_classes", 
                      type: "text"
                  },
                      ]
          } );


          $('#classroutine_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_classroutine_data.php",
              columns: [
                  { 
                    data: "subject_code", 
                    
                  },
                  { 
                    data: "subject_name",
                    className: 'editable'
                  },
                  { 
                    data: "semester", 
                    className: 'editable'
                  },
                  
                  { 
                    data: "teacher",
                    className: 'editable'
                  },

                  { 
                    data: "total_classes",
                    className: 'editable'
                  },

                 
              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
              responsive: 'true',
              buttons: [
                
              ]
          });


          $('#classroutine_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              classroutine_editor.inline( this, {
                   submitOnBlur: true
              } );
          } );

          $('#classroutine_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              classroutine_editor.inline( cell.index() , {
                  submitOnBlur: true
              });
          } );

          // student_editor.on( 'preSubmit', function ( e, o, action ) {

          //   if ( action !== 'remove' ) {

          //       var tile_main_text = student_editor.field( 'tile_main_text' );
          //       var top_heading = student_editor.field( 'top_heading' );
                
          //       // Only validate user input values - different values indicate that
          //       // the end user has not entered a value
          //       if ( ! tile_main_text.isMultiValue() ) {
          //           if ( ! tile_main_text.val() ) {
          //               tile_main_text.error( 'Value is required' );
          //           }
          //       }

          //       if ( ! top_heading.isMultiValue() ) {
          //           if ( ! top_heading.val() ) {
          //               top_heading.error( 'Value is required' );
          //           }
          //       }


          //       // ... additional validation rules
     
          //       // If any error was reported, cancel the submission so it can be corrected
          //       if ( this.inError() ) {
          //           return false;
          //       }
          //   }

          // } );
    }

    {
          projects_editor = new $.fn.dataTable.Editor( {
              ajax: "./php/get_projects_data.php",
              keys: true,
              table: "#projects_datatable-responsive",
              idSrc:  'project_id',
              fields: [ 
                  {
                      label: "PROJECT ID:",
                      name: "project_id",
                      type: "text"
                  }, 
                  {
                      label: "PROJECT NAME:",
                      name: "project_name",
                      type: "text"
                  }, 
                  {
                      label: "NO OF MEMBERS:",
                      name: "no_of_members",
                      type: "text"
                  }, 
                  {
                      label: "MEMBERS:",
                      name: "project_members",
                      type: "text"
                  }, 
                  {
                      label: "YEAR:",
                      name: "year", 
                      type: "text"
                  },
                      ]
          } );


          $('#projects_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_projects_data.php",
              columns: [
                  { 
                    data: "project_id", 
                    
                  },
                  { 
                    data: "project_name",
                    className: 'editable'
                  },
                  { 
                    data: "no_of_members", 
                    className: 'editable'
                  },
                  
                  { 
                    data: "project_members",
                    className: 'editable'
                  },

                  { 
                    data: "year",
                    className: 'editable'
                  },

                 
              ],
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
              responsive: 'true',
              buttons: [
                
              ]
          });


          $('#projects_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              projects_editor.inline( this, {
                   submitOnBlur: true
              } );
          } );

          $('#projects_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              projects_editor.inline( cell.index() , {
                  submitOnBlur: true
              });
          } );
    }

    {
          testimonials_editor = new $.fn.dataTable.Editor( {
              ajax: "./php/get_testimonials_data.php",
              keys: true,
              table: "#testimonials_datatable-responsive",
              idSrc:  'testimonial_id',
              fields: [ {
                      label: "TILE ID:",
                      name: "testimonial_id",
                      type: "text"
                  }, {
                      label: "CUSTOMER NAME:",
                      name: "customer_name",
                      type: "text"
                  }, {
                      label: "CUSTOMER MESSAGE:",
                      name: "customer_message",
                      type: "text"
                  }, {
                      label: "CUSTOMER IMAGE:",
                      name: "customer_image", 
                      type: "upload"
                  }, {
                      label: "ON HOME:",
                      name: "testimonial_on_home", 
                      type: "select",
                      options: [
                        { label: "no", value: "no" },
                        { label: "yes", value: "yes" }
                      ]

                  }
              ]
          } );


          $('#testimonials_datatable-responsive').DataTable({
              dom: "Bfrtip",
              ajax: "./php/get_testimonials_data.php",
              columns: [
                  { 
                    data: "testimonial_id", 
                    
                  },
                  { 
                    data: "customer_name",
                    className: 'editable'
                  },
                  { 
                    data: "customer_message", 
                    className: 'editable'
                  },  
                  { 
                    data: "customer_image",
                    className: 'editable'
                  },
                  { 
                    data: "testimonial_on_home",
                    className: 'editable'
                  }
              ],
              select: {
                style:    'os',
                selector: 'td:first-child'
              },
              order: [ 0, 'asc' ],
              keys: {
                  columns: ':not(:first-child)',
                  keys: [ 9 ]
              },
              buttons: [
                
              ]
          });


          $('#testimonials_datatable-responsive').on( 'click', 'tbody td.editable', function (e) {
              testimonials_editor.inline( this, {
                  submitOnBlur: true
              } );
          } );

          $('#testimonials_datatable-responsive').on( 'key-focus', function ( e, datatable, cell ) {
              testimonials_editor.inline( cell.index() , {
                  
                  submitOnBlur: true
              });
          } );


            
          testimonials_editor.on( 'preSubmit', function ( e, o, action ) {

              if ( action !== 'remove' ) {

                  var customer_name = testimonials_editor.field( 'customer_name' );
                  var customer_message = testimonials_editor.field( 'customer_message' );
                  var customer_image = testimonials_editor.field( 'customer_image' ); 
                  // Only validate user input values - different values indicate that
                  // the end user has not entered a value
                  if ( ! customer_name.isMultiValue() ) {
                      if ( ! customer_name.val() ) {
                          customer_name.error( 'Value is required' );
                      }
                  }

                  if ( ! customer_message.isMultiValue() ) {
                      if ( ! customer_message.val() ) {
                          customer_message.error( 'Value is required' );
                      }
                  }

                  var ext = customer_image.val().split('.').pop();
                  if ( ! customer_image.isMultiValue() ) {
                      if ( ext !== 'jpg' && ext !== 'png' ) {
                          customer_image.error( 'Please upload an image (jpg or png only).' );
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

    
  });
  
</script>
<!-- /Datatables -->




<!-- <script>
  var notice = new PNotify({ title: 'Regular Success', text: 'Data Entered Successfully!', type: 'success', styling: 'bootstrap3'});
</script> -->


  </body>


  <?php 


  if (isset($_POST['submit_card_details'])) {
               
      $target_dir = "./images/";
      $base_path = "";
      
      // saving and retrieving image path from database
      $target_path = $base_path . basename($_FILES['card_image']['name']); 
      $target_file = $target_dir . basename($_FILES['card_image']['name']);
      
      
      $query = "INSERT into cards (card_name,card_price,card_category,card_description,card_image) "
      . "VALUES ('{$_POST['card_name']}','{$_POST['card_price']}','{$_POST['card_category']}','{$_POST['card_description']}','{$target_path}')";
     
      if (move_uploaded_file($_FILES["card_image"]["tmp_name"], $target_file)) {
      if ($conn->query($query) === TRUE){

          if (stock($_POST['card_category'])) {
            # code...

            echo "<script>alert('Data has been inserted successfully.');</script>";

          }
          else
          {
            echo "<script>alert('some error');</script>";
          }

      
        } 
      // else{
      //        echo "--------------------------------------------Some error occured" . "Error: " . $query ." -------  ". $conn->error;
      //     }
      } else {
      echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
          }
      $conn->close();     
    
  }


  function stock($card_category)
  {

    $res =  $GLOBALS['conn']  -> query("SELECT stock from category WHERE category_name = '$card_category'");
    $count = 0;
    while ($row = $res -> fetch_assoc()) {
        # code...
        $count = $row['stock'] + 1;
    }

    $chk = $GLOBALS['conn'] -> query("UPDATE category SET stock='$count' WHERE  category_name = '$card_category'");

    return $chk;
  }


  if (isset($_POST['submit_testimonial_details'])) {              
               
    $target_dir = "./images/";
    $base_path = "";
    
    // saving and retrieving image path from database
    $target_path = $base_path . basename($_FILES['customer_image']['name']); 
    $target_file = $target_dir . basename($_FILES['customer_image']['name']);
    
    
    $query = "INSERT into testimonials (customer_name,customer_message,customer_image) "
    . "VALUES ('{$_POST['customer_name']}','{$_POST['customer_message']}','{$target_path}')";
   
    if (move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file)) {
    if ($conn->query($query) === TRUE){
    echo "<script>alert('data successfully entered')</script>";
        } 
    else{
           echo "--------------------------------------------Some error occured" . "Error: " . $query ." -------  ". $conn->error;
        }
    } else {
    echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    $conn->close();     
    
  }

?>



</html>
