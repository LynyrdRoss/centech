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

                                        <img src="{{ URL::asset('css/images/2_resize.png') }}" class="logo" style="margin-top: -13px;" alt="">

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
                                <li class="nav-item"><a href="#contact" class="nav-link">{{Auth::user()->name}}<span class="space"></span>( 5 )</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>