<body>
    
    <!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Worksheets </h3>
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

                    <div id="upload_worksheet_div" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Upload</h2>

                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        
                          <!-- start form for validation -->
                          
                          <form id="upload_form"  method="POST"  action='upload_worksheet.php' role="form"  enctype="multipart/form-data" data-parsley-validate>

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
                                          <option value="1">Nursery</option>
                                          <option value="2">LKG</option>
                                          <option value="3">UKG</option>
                                        </select>
                                    </div>   
                                </div>        

                                <br/>
                                <input id="upload_worksheet_pdf" name="upload_worksheet_pdf" type="submit" class="btn btn-primary" value="Upload"/>
                                
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

                    <!--upload pdf-->
                
                <!--view pdf-->

                <div hidden id="view_worksheet_div" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>View All</h2>

                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                          <!--descriptive text -- if any-->
                        </p>
                        <table id="worksheets_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
                        </table>


                      </div>
                    </div>
                  </div>

                <!--view pdf-->
                
            </div>
          </div>
        <!--  page content -->

</body>

