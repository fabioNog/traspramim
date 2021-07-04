<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modal-02" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="container-fluid boxed p-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="image-block-wrapper">
          <div class="image-block col-lg-6">
            <div class="image-block-bg bg-image" data-image-src="style/images/art/rocket2.png"></div>
          </div>
          <!--/.image-block -->
          <div>
            <div class="row no-gutters">
              <div class="col-lg-6 offset-lg-6">
                <div class="box p-50 d-flex">
                  <div class="align-self-center">
                    <h2 class="section-title mb-30" style="text-align: center;">Entrar</h2>
                    <form>
                      <div class="form-row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                        </div>
                      </div>
                      <div class="form-row" style="text-align: center;">
                        <div class="col-md-3 offset-md-2 col-sm-3">
                          <a class="btn" href="#!">Entrar</a>
                        </div>
                        <div class="col-md-3 offset-md-1 col-sm-1">
                          <a class="btn btn-blue" href="#!">Cadastrar</a>
                        </div>
                      </div>
                      <div class="col-md-6 offset-md-3"  style="background-color: #3587A4; top:10px!important; border-radius:2%;">
                        <div class="form-group">
                          <a class="col-md-6 offset-md-2" href="{{url('auth/google')}}" style="color: #FBFEFB; border-radius:50%;">
                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="color: blue;">
                              <path d="M24.823 16.207c0-.612-.05-1.227-.156-1.83h-8.489v3.467h4.862a4.166 4.166 0 01-1.8 2.734v2.25h2.9c1.704-1.568 2.683-3.883 2.683-6.621z" stroke="none"></path>
                              <path d="M16.178 25c2.428 0 4.475-.797 5.966-2.173l-2.9-2.248c-.807.549-1.849.86-3.062.86-2.348 0-4.34-1.585-5.053-3.714H8.136v2.318A9.001 9.001 0 0016.178 25z" stroke="none"></path>
                              <path d="M11.125 17.725a5.392 5.392 0 010-3.446V11.96h-2.99a9.008 9.008 0 000 8.083l2.99-2.318z" stroke="none"></path>
                              <path d="M16.178 10.562a4.89 4.89 0 013.453 1.349l2.57-2.57A8.65 8.65 0 0016.177 7a8.998 8.998 0 00-8.042 4.96l2.99 2.319c.71-2.133 2.704-3.717 5.052-3.717z" stroke="none"></path>
                            </svg>
                            Google</a>
                        </div>
                      </div>
                      <div class="form-group row mb-0" style="text-align: center;">
                        <div class="col-md-6 offset-md-6" style="padding-top: 15px;font-size: 0.75rem!important;">
                          @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" style="color: #3587A4;">
                            {{ __('Esqueci Minha Senha?') }}
                          </a>
                          @endif
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