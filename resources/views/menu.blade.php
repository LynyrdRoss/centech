@extends ('master')

  @section ('page-css')
  <link href="css/catalog/bootstrap.min.css" rel="stylesheet">
  <link href="css/catalog/catalog-nav.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="css/catalog/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/catalog/agency.min.css" rel="stylesheet">
  @endsection

    @section ('nav')
    <nav class="navbar bootsnav navbar-expand-sm">
        <div class="top-search">
            <div class="container">
                <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input
                    type="text" class="form-control" placeholder="Search"> <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><!-- <i class="fa fa-search"> --></a>
                    </li>
                </ul>
            </div>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i>
            </button> <a class="navbar-brand" href="#brand">

                            <img src="{{ URL::asset('css/images/2_resize.png') }}" class="logo logo-size" alt="">

                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->

                        </a>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto catalog-nav-font">
                    <li class="nav-item"><a href="home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item"><a href="#business" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item"><a href="#work" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item"><a href="#test" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item"><a href="/cart" class="nav-link">{{Auth::user()->name}}<span class="space"></span>( 5 )</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    @endsection

    @section ('content')
    <!-- Navigation -->
<!--     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- Header -->
<!--     <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
          <div class="intro-heading">It's Nice To Meet You</div>
          <a class="btn btn-xl js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header> -->

    <!-- Services -->
<!--     <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Responsive Design</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">There's a Gadjet for everyone!</h2>
            <h3 class="section-subheading text-muted">Choose the best suit for you</h3>
          </div>
        </div>
        <div class="row">
          @foreach ($items as $item)

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" data-title="{{$item->name}}"
            data-price="{{$item->price}}"
            data-image="{{$item->product_image}}"
            data-product-id="{{ $item->id }}">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{$item->product_thumb}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>{{$item->name}}</h4>
              <p class="text-muted">{{$item->barcode}}</p>
            </div>
          </div>

          @endforeach
        </div>
      </div>
    </section>

    <!-- Portfolio Modals -->

    <!-- Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">

              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="project-title"></h2>
                  <p class="item-intro text-muted"></p>
                  <img class="img-fluid d-block mx-auto product_thumb" src="" alt="">
                  <p class="project-description"></p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary add-to-cart" data-product-id="" data-dismiss="modal" type="button">
                    <i class="fa fa-shopping-cart"></i>
                    Add TO Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

    @section ('footer')
    <footer id="contact" class="footer bg-black p-top-80">
    <!--<div class="action-lage"></div>-->
    <div class="container">
        <div class="row">
            <div class="widget_area">
                <div class="col-md-4">
                    <div class="widget_item widget_about">
                        <div class="footer-align">
                          <h5 class="text-white">Get in touch!</h5>
                          <!-- <p class="m-top-20">Lorem ipsum dolor sit amet consec tetur adipiscing elit 
                              nulla aliquet pretium nisi in cursus 
                              maecenas nec eleifen.</p> -->
                          <div class="widget_ab_item m-top-30">
                              <div class="widget_ab_item_text">
                                  <h6 class="text-white">
                                    <i class="fa fa-location-arrow spacing-icon"></i>
                                    Location
                                  </h6>
                                  <p class="text-white">
                                      123 suscipit ipsum nam auctor
                                      mauris dui, ac sollicitudin mauris,
                                      Bandung
                                  </p>
                              </div>
                          </div>
                          <div class="m-top-30">
                              <div class="widget_ab_item_text">
                                  <h6 class="text-white">
                                    <i class="fa fa-phone spacing-icon"></i>
                                    Phone :
                                  </h6>
                                  <p class="text-white">+1 2345 6789</p>
                              </div>
                          </div>
                          <div class="m-top-30">
                              <div class="widget_ab_item_text">
                                  <h6 class="text-white">
                                    <i class="fa fa-envelope-o spacing-icon"></i>
                                    Email Address :
                                  </h6>
                                  <p class="text-white">youremail@mail.com</p>
                                  <div class="vertical-push-25-rev"></div>
                              </div>
                          </div>
                        </div>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

                <div class="col-md-4">
                    <div class="widget_item widget_latest sm-m-top-50">
                        <div class="footer-align">
                        <h5 class="text-white">Latest News</h5>
                        <div class="widget_latst_item m-top-30">
                            <div class="item_icon"><img src="css/images/ltst-img-1.jpg" alt="" /></div>
                            <div class="widget_latst_item_text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <a href="">21<sup>th</sup> July 2016</a>
                            </div>
                        </div>
                        <div class="widget_latst_item m-top-30">
                            <div class="item_icon"><img src="css/images/ltst-img-2.jpg" alt="" /></div>
                            <div class="widget_latst_item_text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <a href="">21<sup>th</sup> July 2016</a>
                            </div>
                        </div>
                        <div class="widget_latst_item m-top-30">
                            <div class="item_icon"><img src="css/images/ltst-img-3.jpg" alt="" /></div>
                            <div class="widget_latst_item_text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <a href="">21<sup>th</sup> July 2016</a>
                            </div>
                        </div>
                        </div>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

<!--                         <div class="col-md-3">
                    <div class="widget_item widget_service sm-m-top-50">
                        <h5 class="text-white">Latest News</h5>
                        <ul class="m-top-20">
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Design</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> E- Commerce</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Themes</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Support Forums</a></li>
                        </ul>
                    </div><!-- End off widget item -->
                <!-- </div> --><!-- End off col-md-3 -->

                <div class="col-md-4">
                    <div class="widget_item widget_newsletter sm-m-top-50">

      <!-- Newsletter email -->
<!--                                 <h5 class="text-white">Newsletter</h5>
                        <form class="form-inline m-top-30">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter you Email">
                                <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                            </div>

                        </form> -->

                        <div class="widget_brand"><!-- m-top-40 -->
                            <a href="" class="text-uppercase">Your Logo</a>
                            <p>Lorem ipsum dolor sit amet consec tetur 
                                adipiscing elit nulla aliquet pretium nisi in</p>
                        </div>
                        <ul class="list-inline m-top-20">
                            <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-behance"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                        </ul>

                    </div><!-- End off widget item -->
                    <div class="vertical-push-25-rev"></div>
                </div><!-- End off col-md-3 -->
            </div>
        </div>
    </div>

<!-- Copyright acknowledgment -->
<!--             <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
        <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s">
                Made with 
                <i class="fa fa-heart"></i>
                by 
                <a target="_blank" href="https://bootstrapthemes.co">Bootstrap Themes</a> 
                2016. All Rights Reserved
            </p>
        </div>
    </div> -->
    <form action="add-to-cart-end-point" method="POST" id="add-to-cart-form" hidden>
      {{ csrf_field() }}
      <input type="hidden" name="product_id" class="product_id">
    </form>
    </footer>
    @endsection

  @section ('page-js')
  <!-- Bootstrap core JavaScript -->
  <script src="js/catalog/jquery.min.js"></script>
  <script src="js/catalog/popper.min.js"></script>
  <script src="js/catalog/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/catalog/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/catalog/agency.min.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function() {
    $('.portfolio-link').click(function(event) {
      var title = $(this).data('title'),
          price = $(this).data('price'),
          image = $(this).data('image'),
          product_id = $(this).data('product-id');

      $('#portfolioModal .project-title').text(title);
      $('#portfolioModal .item-intro').html(price);
      $('#portfolioModal .product_thumb').attr('src', image);
      $('#portfolioModal .add-to-cart').data('product-id', product_id);
    });

    $('.add-to-cart').click(function(event) {
      var product_id = $(this).data('product-id');

      var form = $('#add-to-cart-form');
      form.find('.product_id').val(product_id);
      form.submit();
    });
  });
  </script>  
  @endsection