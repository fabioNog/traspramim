<nav class="navbar transparent nav-uppercase navbar-expand-lg">
@guest
      <div class="container flex-row justify-content-center">
        <div class="navbar-brand"><a href="{{url('/')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" style="width: 50%;" alt="" /></a></div>
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
            <a href="{{url('/')}}"><img src="#" style="width: 50%;" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2 x" alt="" /></a>
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
        <div class="navbar-brand"><a href="{{url('/home')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a></div>
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
            <a href="{{url('/')}}" style="width: 50%!important;"><img  src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2 x" alt="" /></a>
            <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
          </div>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
@endguest
      <!-- /.container -->
    </nav>