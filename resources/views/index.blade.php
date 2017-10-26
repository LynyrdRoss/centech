@extends ('master')

        @section ('nav')
        <!--Home page style-->
        @include ('partials.home-nav')
        @endsection

        @section ('content')
        <!--Home Sections-->
        <section id="home" class="home bg-black fix">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_home text-center">
                        <div class="col-md-12">
                            <div class="hello_slid">
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h2 class="text-white"><strong>CenTech </strong>knows your needs </h2>
                                        <h1 class="text-white">We have the need to fulfill your need</h1>
                                        <h3 class="text-white">- Create concepts that work for everyone  -</h3>
                                    </div>

                                    <div class="home_btns m-top-40">
                                        <!-- <a href="" class="btn btn-primary m-top-20">Buy Now</a> -->
                                        <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                    </div>
                                </div><!-- End off slid item -->
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h2 class="text-white"><strong>CenTech </strong>gives you options</h2>
                                        <h3 class="text-white">Find laptop or mobile for your need. . . And budget</h3>
                                    </div>

                                    <div class="home_btns m-top-40">
                                        <a href="" class="btn btn-primary m-top-20">Find options</a>
                                        <!-- <a href="" class="btn btn-default m-top-20">Take a Tour</a> -->
                                    </div>
                                </div><!-- End off slid item -->
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h2 class="text-white">People are taking about <strong>CenTech</strong></h2>
                                        <h1 class="text-white">Meet the people behind the innovation</h1>
                                        <h3 class="text-white"> And hear out other customers experience</h3>
                                    </div>

                                    <div class="home_btns m-top-40">
                                        <!-- <a href="" class="btn btn-primary m-top-20">Buy Now</a> -->
                                        <a href="" class="btn btn-default m-top-20">About idea</a>
                                    </div>
                                </div><!-- End off slid item -->
                            </div>
                        </div>

                    </div>

                </div><!--End off row-->
            </div><!--End off container -->
        </section> <!--End off Home Sections-->

        <!--Featured Section-->
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="main_features fix roomy-70">
                        <div class="col-md-4">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-gears"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3>SIMPLIFY THE PROCESS</h3>
                                    <p>What’s important is making the process as easy as possible for customers. Priority in offering solutions needed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-commenting"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3>SELLING PROPOSITION</h3>
                                    <p>Determining a unique selling proposition is a foundational step in any good brand strategy.  The goal is to differentiate your brand from competitors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-sliders"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3>PERSONALIZE CHOICES</h3>
                                    <p>Beautiful craftsmanship and detail went into every aspect of the ordering experience, right down to the customized packaging. .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End off row -->
            </div><!-- End off container -->
        </section><!-- End off Featured Section-->

        <!--Business Section-->
        <section id="business" class="business bg-grey roomy-70">
            <div class="container">
                <div class="row">
                    <div class="main_business">

                        <div class="col-md-6 vertical-push-25">
                            <div class="vertical-push-27"></div>
                            <div class="business_item sm-m-top-50">
                                <h2 class="text-uppercase"><strong>CenTech</strong> is here for you . . . always!</h2>
                                <ul>
                                    <li><i class="fa fa-arrow-circle-right"></i> Collaboration with Trusted Brands</li>
                                    <li><i class="fa  fa-arrow-circle-right"></i> Experience First then Quality</li>
                                    <li><i class="fa  fa-arrow-circle-right"></i> Top Trend for Everyone</li>
                                </ul>
                                <p class="m-top-20">We're a team of builders. Of technological innovations. It's our job to make bold, sure risks, and we get our energy from inventing on behalf of customers. Concepts structures, frame-worked and specialized by <strong>CenTech</strong>, and we're always looking for the next one..</p>

                                    <!-- Button temporarily removed -->
<!--                                 <div class="business_btn">
                                    <a href="https://bootstrapthemes.co" class="btn btn-default m-top-20">Read More</a>
                                    <a href="" class="btn btn-primary m-top-20">Buy Now</a>
                                </div> -->
                                <div class="vertical-push-25"></div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="business_slid">
                                <div class="slid_shap bg-grey"></div>
                                <div class="business_items text-center">
                                    <div class="business_item">
                                        <div class="business_img">
                                            <img src="css/images/people1.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="business_item">
                                        <div class="business_img">
                                            <img src="css/images/people2.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="business_item">
                                        <div class="business_img">
                                            <img src="css/images/people3.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section><!-- End off Business section -->
        @endsection

        @section ('footer')
        @include ('partials.footer')
        @endsection