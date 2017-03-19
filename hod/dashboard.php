<!DOCTYPE html>
<html lang="en">
  
  <head>
      <style type="text/css">
        div.dashboard_tiles:hover {
            background-color: #ddd;
        }
      </style>
  </head>  
  <body>
       
        <!-- page content -->
        
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-7 col-xs-13">
                  <div id="dashboard_students" class="dashboard_tiles tile-stats">
                    <div class="icon"><a href="#/plus"><i class="fa fa-users"></i></a></div>
                    <div id="students_count" class="count">0</div>
                  <h3>Students</h3>
                  <p>Total numbers of students</p>
                </div>
              </div>
              <div id="dashboard_teachers" class="animated flipInY col-lg-4 col-md-4 col-sm-7 col-xs-13">
                <div class="dashboard_tiles tile-stats">
                  <div class="icon"><a href="#/plus"><i class="fa fa-user"></i></a></div>
                  <div id="teachers_count" class="count">0</div>
                  <h3>Teachers</h3>
                  <p>Total number of teachers</p>
                </div>
              </div>
              <div id="dashboard_sections" class="animated flipInY col-lg-4 col-md-4 col-sm-7 col-xs-13">
                <div class="dashboard_tiles tile-stats">
                  <div class="icon"><a href="#/plus"><i class="fa fa-institution"></i></a></div>
                  <div id="sections_count" class="count">0</div>
                  <h3>Sections</h3>
                  <p>Total Number of sections</p>
                </div>
              </div>
<!--              <div id="dashboard_signups" class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard_tiles tile-stats">
                  <div class="icon"><a href="#/plus"><i class="fa fa-check-square-o"></i></a></div>
                  <div class="count">100</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>-->
            </div>
             
            <?php include './school_carousel.php';?>  
              
             <!--student table-->  
            <div hidden id="dashboard_students_div" class="x_content">
              <p class="text-muted font-13 m-b-30">
                <!--descriptive text -- if any-->
              </p>
              <table id="dstudents_table"  class="table table-striped table-bordered dt-responsive wrap" width="100%">
              </table>
            </div> 

            <!--teachers-->  
            <div hidden id="dashboard_teachers_div" class="x_content">
             <p class="text-muted font-13 m-b-30">
               <!--descriptive text -- if any-->
             </p>
             <table id="dteachers_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
             </table>
            </div>  
            
            <!--section div-->
            <div hidden id="dashboard_sections_div" class="x_content">
            <p class="text-muted font-13 m-b-30">
              <!--descriptive text -- if any-->
            </p>
            <table id="dsections_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
            </table>
           </div>  

            
          </div>
        <!-- /page content -->
  </body>
</html>