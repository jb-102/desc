<body>
    
    <!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Examination </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                
                  <!--upload pdf-->

                    <div id="upload_exams_div" class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Upload</h2>

                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                              <!-- start form for validation -->

                              <form id="upload_form"  method="POST"  action='upload_exams_data.php' role="form"  enctype="multipart/form-data" data-parsley-validate>

                                    <!--choose file-->
                                    <div class="row">
                                        <div class="form-group col-xs-4">    
                                            <label for="pdf_file"> Choose file: </label>
                                            <input type="file" id="file" name="file" class="form-control" required />

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xs-4"> 
                                            <label for="select_class"> Class: </label>
                                            <select id="select_class" name="select_class" class="form-control" required>
                                              <option value="">Select Class</option>
                                              <option value="11">EIGHTH</option>
                                              <option value="12">NINTH</option>
                                              <option value="13">TENTH</option>
                                            </select>
                                        </div>   
                                    </div>        

                                    <div class="row">
                                        <div class="form-group col-xs-4"> 
                                            <label for="select_type"> Type: </label>
                                            <select id="select_type" name="select_type" class="form-control" required>
                                              <option value="">Select Type</option>
                                              <option value="datesheet">Datesheet</option>
                                              <option value="result">Result</option>
                                            </select>
                                        </div>   
                                    </div>
                                    
                                    <br/>
                                    <input id="upload_exams_button" name="upload_exams_button" type="submit" class="btn btn-primary" value="Upload"/>

                                </form>


                                <div id='viewimage'></div>
                                <!-- end form for validations -->
                            <br />
                            <br />
                            <br />
                            <br />
                          </div>
                        </div>
                  </div>
                    
                   <!--view content-->
                    <div hidden id="view_all_exam_div" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>View All</h2>

                        <div class="clearfix"></div>
                      </div>
                        
                        <!-- Exams - content--> 
                        <div class="x_content">


                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <!--tabs-->
                                <ul id="academia_tabs" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#datesheet_content" id="datsheets-tab" role="tab" data-toggle="tab" aria-expanded="true">Datesheets</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#result_content" role="tab" id="results-tab" data-toggle="tab" aria-expanded="false">Results</a>
                                    </li>
                                  </ul>
                                <!--tabs-->
                                <!--tab content-->
                                <div id="exams_content_div" class="tab-content">
                                    
                                    <div role="panels" class="tab-pane fade active in" id="datesheet_content" aria-labelledby="datesheets-tab">
                                        <div class="x_content">
                                            <p class="text-muted font-13 m-b-30">
                                              <!--descriptive text -- if any-->
                                            </p>
                                            <table id="datesheet_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div role="panels" class="tab-pane fade" id="result_content" aria-labelledby="results-tab">
                                        <div class="x_content">
                                            <p class="text-muted font-13 m-b-30">
                                              <!--descriptive text -- if any-->
                                            </p>
                                            <table id="result_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--tab content-->
                            </div>

                        </div>
                        <!-- Exams - content-->   
                        
                    </div>
                  </div>
                   
                   <!--view content-->
                
            </div>
          </div>
        <!--  page content -->

</body>



