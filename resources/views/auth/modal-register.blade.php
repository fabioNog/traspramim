<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="modal-02" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="container-fluid boxed p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="image-block-wrapper">
              <div class="image-block col-lg-6">
                <div class="image-block-bg bg-image" data-image-src="style/images/art/bg22.jpg"></div>
              </div>
              <!--/.image-block -->
              <div>
                <div class="row no-gutters">
                  <div class="col-lg-6 offset-lg-6">
                    <div class="box p-50 d-flex">
                      <div class="align-self-center">
                        <h2 class="section-title mb-30">Sign Up</h2>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                          <div class="form-row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Address 2">
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" placeholder="City">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group custom-select-wrapper">
                                <select class="custom-select">
                                  <option selected>State</option>
                                  <option>New York</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-12">
                              <a class="btn" href="#!">Sign Up</a>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /div -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/div -->
            </div>
            <!--/.image-block-wrapper -->
          </div>
          <!--/.boxed -->
        </div>
        <!--/.modal-content -->
      </div>
      <!--/.modal-dialog -->
    </div>