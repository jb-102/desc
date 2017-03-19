<body>
    
    <!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Notes </h3>
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

                    <div id="upload_notes_div" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Upload</h2>

                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        
                          <!-- start form for validation -->
                          
                          <form id="upload_form"  method="POST"  action='notesDAO.php' role="form"  enctype="multipart/form-data" data-parsley-validate>

                                <!--choose file-->
                                <div class="row">
                                    <div class="form-group col-xs-4">    
                                        <label for="pdf_file"> Choose file: </label>
                                        <input type="file" id="file" name="file" class="form-control" required />

                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-xs-4"> 
                                        <label for="notes_select_class"> Class: </label>
                                        <select id="notes_select_class" name="notes_select_class" class="form-control" required>
                                          <option value=""> Select Class </option>
                                          <option value="11"> EIGHTH </option>
                                          <option value="12"> NINTH </option>
                                          <option value="13"> TENTH </option>
                                        </select>
                                    </div>   
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-xs-4"> 
                                        <label for="notes_select_subject"> Subject: </label>
                                        <select id="notes_select_subject" name="notes_select_subject" class="form-control" required>
                                          <option value="">Select Subject</option>
                                        </select>
                                    </div>   
                                </div>

                                <br/>
                                <input id="upload_notes_button" name="upload_notes_button" type="submit" class="btn btn-primary" value="Upload"/>
                                
                            </form>

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

                <div hidden id="view_notes_div" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>View All</h2>

                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                          <!--descriptive text -- if any-->
                        </p>
                        <table id="notes_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
                        </table>


                      </div>
                    </div>
                  </div>

                <!--view pdf-->
                
            </div>
          </div>
        <!--  page content -->

</body>

