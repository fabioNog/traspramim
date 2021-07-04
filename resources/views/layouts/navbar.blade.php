<nav class="navbar transparent nav-uppercase navbar-expand-lg">
@guest
      <div class="container flex-row justify-content-center">
        <div class="navbar-brand"><a href="{{url('/')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a></div>
        <div class="navbar-other ml-auto order-lg-3">
          <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
            <li class="nav-item">
              <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
        <div class="navbar-collapse offcanvas-nav">
          <div class="offcanvas-header d-lg-none d-xl-none">
            <a href="{{url('/')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2 x" alt="" /></a>
            <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
          </div>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><button class="btn btn-pink" onclick="logar()">Entrar</button>
              <!--/.dropdown-menu -->
            </li>
            <li class="nav-item"><a class="btn btn-blue btn-link" href="{{route('register')}}">Cadastro</a>
              <!--/.dropdown-menu -->
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
@else
<div class="container flex-row justify-content-center">
        <div class="navbar-brand"><a href="{{url('/')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a></div>
        <div class="navbar-other ml-auto order-lg-3">
          <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
            <li class="nav-item">
              <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
            </li>
            <li class="dropdown cart-dropdown position-static nav-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="jam jam-shopping-cart"></i><span class="badge-cart bg-default">3</span></a>
              <div class="dropdown-menu dropdown-menu dropdown-menu-right cart-dropdown-menu inverse-text">
                <h5 class="mb-30">Shopping Cart</h5>
                <ul class="image-list">
                  <li>
                    <figure class="rounded"><a href="#"><img src="style/images/art/a4.jpg" alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="#">Brand Box</a> </h6>
                      <div class="meta price"><em class="quantity">1</em><span class="amount">$45.00</span></div>
                    </div>
                  </li>
                  <li>
                    <figure class="rounded"> <a href="#"><img src="style/images/art/a5.jpg" alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="#">Shopping Bag</a> </h6>
                      <div class="meta price"><em class="quantity">2</em><span class="amount">$45.00</span></div>
                    </div>
                  </li>
                  <li>
                    <figure class="rounded"><a href="#"><img src="style/images/art/a6.jpg" alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="#">Brown Paper Card</a> </h6>
                      <div class="meta price"><em class="quantity">1</em><span class="amount">$45.00</span></div>
                    </div>
                  </li>
                </ul>
                <!-- /.image-list -->
                <div class="space30"></div>
                <div class="row align-items-center">
                  <div class="col-md-4">
                    <h6>Total:</h6>
                    <div class="meta price mb-0"><span class="amount">$45.00</span></div>
                  </div>
                  <!--/column -->
                  <div class="col-md-8 text-md-right">
                    <a href="#" class="btn btn-default mb-0">Checkout</a>
                  </div>
                  <!--/column -->
                </div>
              </div>
            </li>
            <li class="dropdown search-dropdown position-static nav-item">
              <a href="#" role="button" class="collapse-toggle" data-toggle="collapse" data-target=".search-dropdown-menu" aria-haspopup="true" aria-expanded="false"><i class="jam jam-search"></i></a>
              <div class="dropdown-menu search-dropdown-menu w-100 collapse">
                <div class="form-wrapper">
                  <form class="inverse-text">
                    <input type="text" class="form-control" placeholder="Search something">
                  </form>
                  <!-- /.search-form -->
                  <i class="dropdown-close jam jam-close"></i>
                </div>
                <!-- /.form-wrapper -->
              </div>
            </li>
            <li class="nav-item"><button class="plain" data-toggle="offcanvas-info"><i class="jam jam-info"></i></button></li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
        <div class="navbar-collapse offcanvas-nav">
          <div class="offcanvas-header d-lg-none d-xl-none">
            <a href="{{url('/')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2 x" alt="" /></a>
            <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
          </div>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="{{route('comprar')}}">Comprar</a>
              <!--/.dropdown-menu -->
            </li>
            <li class="nav-item"><a class="nav-link" href="{{route('viajar')}}">Viajar</a>
              <!--/.dropdown-menu -->
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
@endguest
      <!-- /.container -->
    </nav>