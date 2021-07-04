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
    <div class="widget">
        <ul class="list-unstyled">
            <li><a href="#" class="nocolor">Our Story</a></li>
            <li><a href="#" class="nocolor">Terms of Use</a></li>
            <li><a href="#" class="nocolor">Privacy Policy</a></li>
            <li><a href="#" class="nocolor">Contact Us</a></li>
        </ul>
    </div>
    <!-- /.widget -->
    <div class="widget">
        <h3 class="widget-title">Follow Us</h3>
        <ul class="social social-mute social-s ml-auto">
            <li><a href="#"><i class="jam jam-twitter"></i></a></li>
            <li><a href="#"><i class="jam jam-facebook"></i></a></li>
            <li><a href="#"><i class="jam jam-instagram"></i></a></li>
            <li><a href="#"><i class="jam jam-vimeo"></i></a></li>
            <li><a href="#"><i class="jam jam-youtube"></i></a></li>
        </ul>
    </div>
    <!-- /.widget -->
</div>
<div class="wrapper white-wrapper">
    <div class="container inner pt-0">
        <div class="space50"></div>
        <div class="grid grid-view">
            <div class="tiles">
                <div class="row isotope">
                    <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                        <figure class="rounded mb-20">
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
                    <!-- /.item -->
                    <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                        <figure class="rounded mb-20">
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
                    <!-- /.item -->
                    <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                        <figure class="rounded mb-20">
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
                    <!-- /.item -->
                    <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                        <figure class="rounded mb-20">
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
                    <!-- /.item -->
                    <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                        <figure class="rounded mb-20">
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
                    <!-- /.item -->
                    <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                        <figure class="rounded mb-20">
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
                </div>
                <!-- /.row -->
            </div>
            <!-- /.tiles -->
        </div>
        <!-- /.grid -->
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
</div>
@endsection