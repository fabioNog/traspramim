<nav class="navbar transparent nav-uppercase navbar-expand-lg">
      <div class="container flex-row justify-content-center">
        <div class="navbar-brand"><a href="{{url('/')}}"><img src="" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a></div>
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
            <a href="{{url('/')}}"><img src="{{url('/')}}" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a>
            <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
          </div>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown"><button onclick="logar()"  type="button" class="dropdown-toggle btn btn-rose" data-bs-toggle="modal">LOGAR</button>
            </li>
            <li class="nav-item dropdown" style="padding-left:5px;"><a  type="button" href="{{route('register')}}" class="dropdown-toggle btn btn-blue" data-bs-toggle="modal">CADASTRAR</a>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>