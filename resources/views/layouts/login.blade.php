<!DOCTYPE html>
<html lang="en">

<head>
  @component("layouts.meta")
  @endcomponent
  @component("layouts.links") 
  @endcomponent
</head>

<body>
  <div class="content-wrapper white-wrapper">
    <nav class="navbar transparent nav-uppercase navbar-expand-lg">
      <div class="container flex-row justify-content-center">
        <div class="navbar-brand"><a href="index.html"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a></div>
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
            <a href="index.html"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a>
            <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
          </div>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{url('layout/login')}}">Logar</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Cadastrar</a>
            </li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas-info inverse-text">
      <button class="plain offcanvas-close offcanvas-info-close"><i class="jam jam-close"></i></button>
      <a href="index.html"><img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" /></a>
      <div class="space30"></div>
      <p>Snowlake is a multi-concept and powerful site template contains rich layouts with possibility of unlimited combinations & beautiful elements.</p>
      <div class="space20"></div>
      <div class="widget">
        <h5 class="widget-title">Contact Info</h5>
        <address> Moonshine St. 14/05 <br /> Light City, London <div class="space20"></div>
          <a href="mailto:first.last@email.com" class="nocolor">info@email.com</a><br /> +00 (123) 456 78 90 </address>
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h3 class="widget-title">Learn More</h3>
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

    <!--/.modal -->
    <div class="wrapper white-wrapper">
      <div class="container inner pt-0">
        <div class="basic-slider owl-carousel grid dots-on-top" data-margin="5">
          <div class="item item-detailed">
            <figure class="rounded mb-20">
              <div class="item-detailed-image"><img src="style/images/art/s10.jpg" alt="" /></div>
              <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
              <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
            </figure>
            <div class="item-content">
              <h2 class="post-title mb-10"><a href="#">Packaging Boxes</a></h2>
              <div class="price mb-0"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.00</span></ins></div>
              <span class="ratings four"></span>
            </div>
            <!-- /.item-content -->
          </div>
          <div class="item item-detailed">
            <figure class="rounded mb-20">
              <div class="item-detailed-image"><img src="style/images/art/s11.jpg" alt="" /></div>
              <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
              <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
            </figure>
            <div class="item-content">
              <h2 class="post-title mb-10"><a href="#">Childrens Book</a></h2>
              <div class="price mb-0"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.00</span></ins></div>
              <span class="ratings four"></span>
            </div>
            <!-- /.item-content -->
          </div>
          <div class="item item-detailed">
            <figure class="rounded mb-20">
              <div class="item-detailed-image"><img src="style/images/art/s12.jpg" alt="" /></div>
              <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
              <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
            </figure>
            <div class="item-content">
              <h2 class="post-title mb-10"><a href="#">Pure Jar Mini</a></h2>
              <div class="price mb-0"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.00</span></ins></div>
              <span class="ratings four"></span>
            </div>
            <!-- /.item-content -->
          </div>
        </div>
        <!-- /.basic-slider -->
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
              <!-- /.item -->
              <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                <figure class="rounded mb-20">
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
              <!-- /.item -->
              <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                <figure class="rounded mb-20">
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
              <!-- /.item -->
              <div class="item item-detailed grid-sizer col-md-6 col-lg-4">
                <figure class="rounded mb-20">
                  <div class="item-detailed-image"><img src="style/images/art/s9.jpg" alt="" /><img src="style/images/art/s9-2.jpg" alt="" /></div>
                  <a href="#" class="hover-icon-first" data-tip="Add to Wishlist"><i class="jam jam-heart"></i></a>
                  <a href="#" class="hover-icon-second" data-tip="Add to cart"><i class="jam jam-shopping-cart"></i></a>
                </figure>
                <div class="item-content">
                  <h2 class="post-title mb-10"><a href="#">Wine Bag</a></h2>
                  <div class="price mb-0"><span class="amount">$45.00</span></div>
                  <span class="ratings four"></span>
                </div>
                <!-- /.item-content -->
              </div>
              <!-- /.item -->
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
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <footer class="dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row">
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <img src="#" srcset="style/images/logo/logo.png 1x, style/images/logo/logo.png 2x" alt="" />
              <div class="space40"></div>
              <p>© 2020 Snowlake App. <br class="d-none d-lg-block" />All rights reserved.</p>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <h3 class="widget-title">Get in Touch</h3>
              <address>Moonshine St.<br class="d-none d-lg-block" /> 14/05 Light City,<br class="d-none d-lg-block" /> London, United Kingdom</address>
              <a href="mailto:first.last@email.com">info@email.com</a><br /> +00 (123) 456 78 90
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <h3 class="widget-title">Learn More</h3>
              <ul class="list-unstyled">
                <li><a href="#" class="nocolor">About Us</a></li>
                <li><a href="#" class="nocolor">Our Story</a></li>
                <li><a href="#" class="nocolor">Projects</a></li>
                <li><a href="#" class="nocolor">Terms of Use</a></li>
                <li><a href="#" class="nocolor">Privacy Policy</a></li>
                <li><a href="#" class="nocolor">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="space30 d-none d-md-block d-lg-none"></div>
          <div class="col-md-12 col-lg-3">
            <div class="widget">
              <h3 class="widget-title">Our Newsletter</h3>
              <p>Subscribe to our newsletter to get our news & deals delivered to your inbox!</p>
              <div class="space10"></div>
              <div class="newsletter-wrapper">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2" class="input-group">
                    <input type="email" value="" name="EMAIL" class="email form-control mb-0 mr-2 mb-sm-0" id="mce-EMAIL2" placeholder="Email Address" required>
                    <button type="submit" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-rounded btn-default mr-0 mb-0 pull-right">Join</button>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                      <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" tabindex="-1" value="">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
              <!-- /.newsletter-wrapper -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </footer>
  </div>

</body>
  @component("layouts.scripts") 
  @endcomponent
</html>