<body>
    
    <!-- page content -->
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Feedback </h3>
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

                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Feedback to Students</h2>

                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                                
                                <div class="row">
                                    <div class="form-group col-xs-4"> 
                                        <label for="select_class"> Class: </label>
                                        <select id="feedback_select_class" name="select_class" class="form-control" required>
                                          <option value="">Select Class</option>
                                          <option value="1">Nursery</option>
                                          <option value="2">LKG</option>
                                          <option value="3">UKG</option>
                                          <option value="4">First</option>
                                          <option value="5">Second</option>
                                          <option value="6">Third</option>
                                          <option value="7">Fourth</option>
                                          <option value="8">Fifth</option>
                                          <option value="9">Sixth</option>
                                          <option value="10">Seventh</option>
                                          <option value="11">Eighth</option>
                                          <option value="12">Ninth</option>
                                          <option value="13">Tenth</option>
                                        </select>
                                    </div>   
                                </div>    
                                
                                
                                <div class="row">
                                    <div class="form-group col-xs-4">     

                                        <label for="select_section"> Section: </label>
                                        <select id="feedback_select_section" name="select_section" class="form-control" required>
                                            <option value="">Select Section</option>
                                        </select>
                                    </div>    
                                </div>    

                                <div class="x_content">
                                    <p class="text-muted font-13 m-b-30">
                                      <!--descriptive text -- if any-->
                                    </p>
                                    <table hidden id="feedback_table" class="table table-striped table-bordered dt-responsive wrap" width="100%">
                                    </table>
                                </div>
                                


                        <br />
                        <br />
                      </div>
                    </div>
                  </div>
                
            </div>
          </div>
        <!--  page content -->

</body>

