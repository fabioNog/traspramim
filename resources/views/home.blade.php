@extends('layouts.app')

@section('content')
<div class="offcanvas-info inverse-text">
    <button class="plain offcanvas-close offcanvas-info-close"><i class="jam jam-close"></i></button>
    <a href="{{url('/')}}"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a>
    <div class="space30"></div>
    <p>Você encontra TUDO!</p>
    <div class="space20"></div>
    <!-- Logout -->
    <a class="btn btn-red" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        {{ __('Sair') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>


    <!-- /.widget -->
</div>
<div class="wrapper light-wrapper">
      <div class="container inner">
        <div class="row">
          <div class="col-lg-8">
            <div class="grid grid-view boxed">
              <div class="tiles">
                <div class="row isotope">
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s1.jpg" alt="" /><img src="style/images/art/s1-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                        <span class="item-label bg-rose">Sale!</span>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Shopping Bag</a></h2>
                        <div class="price mb-0"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.00</span></ins></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s2.jpg" alt="" /><img src="style/images/art/s2-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Paperback Book</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s3.jpg" alt="" /><img src="style/images/art/s3-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                        <span class="item-label bg-meander">New!</span>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Clipboard Office</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s4.jpg" alt="" /><img src="style/images/art/s4-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Branding Stationery</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s5.jpg" alt="" /><img src="style/images/art/s5-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Brown Paper Card</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s6.jpg" alt="" /><img src="style/images/art/s6-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Shopping Paperbag</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s7.jpg" alt="" /><img src="style/images/art/s7-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Half Fold Book</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                  <div class="item item-detailed grid-sizer col-md-6">
                    <div class="box bg-white shadow p-30">
                      <figure class="main rounded mb-30">
                        <div class="item-detailed-image"><img src="style/images/art/s8.jpg" alt="" /><img src="style/images/art/s8-2.jpg" alt="" /></div>
                        <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                        <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                      </figure>
                      <div class="item-content">
                        <h2 class="post-title mb-10"><a href="#">Brand Box</a></h2>
                        <div class="price mb-0"><span class="amount">$45.00</span></div>
                        <span class="ratings four"></span>
                      </div>
                      <!-- /.item-content -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.item -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.tiles -->
            </div>
            <!-- /.grid -->
            <div class="space30"></div>
            <div class="pagination text-center">
              <ul>
                <li><a href="#" class="pl-0"><i class="jam jam-arrow-left"></i></a></li>
                <li class="active"><a href="#"><span>1</span></a></li>
                <li><a href="#"><span>2</span></a></li>
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#" class="pr-0"><i class="jam jam-arrow-right"></i></a></li>
              </ul>
            </div>
            <!-- /.pagination -->
          </div>
          <!--/column -->
          <div class="space30 d-none d-md-block d-lg-none"></div>
          <aside class="col-lg-4 sidebar">
            <div class="sidebox widget">
              <h3 class="widget-title">Search</h3>
              <form class="search-form fields-white">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search something">
                </div>
                <!-- /.form-group -->
              </form>
              <!-- /.search-form -->
            </div>
 
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Price</h3>
              <ul class="list-unstyled">
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-check1">
                    <label class="custom-control-label" for="price-check1">0 - $50</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-check2">
                    <label class="custom-control-label" for="price-check2">$50 - $100</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-check3">
                    <label class="custom-control-label" for="price-check3">$100 - $150</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-check4">
                    <label class="custom-control-label" for="price-check4">$150 - $200</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-check5">
                    <label class="custom-control-label" for="price-check5">$200 - $250</label>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">About Us</h3>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit.</p>
              <ul class="social social-color social-s">
                <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                <li><a href="#"><i class="jam jam-pinterest"></i></a></li>
                <li><a href="#"><i class="jam jam-vimeo"></i></a></li>
                <li><a href="#"><i class="jam jam-instagram"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Popular Products</h3>
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="#"><img src="style/images/art/a4.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="#">Brand Box</a> </h6>
                    <div class="meta price"><span class="amount">$45.00</span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="#"><img src="style/images/art/a5.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="#">Shopping Bag</a> </h6>
                    <div class="meta price"><span class="amount">$45.00</span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="#"><img src="style/images/art/a6.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="#">Brown Paper Card</a> </h6>
                    <div class="meta price"><span class="amount">$45.00</span></div>
                  </div>
                </li>
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="icon-list">
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Lifestyle (21)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Photography (19)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Journal (16)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Works (7)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Conceptual (12)</a></li>
                <li class="bullet-default"><i class="jam jam-chevron-right"></i><a href="#">Videography (14)</a></li>
              </ul>
            </div>

            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
@endsection