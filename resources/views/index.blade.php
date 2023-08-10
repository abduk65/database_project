@extends('layouts.app')

@section('styles')
    <style>
        .home-table {

            border-collapse: collapse;
            border-collapse: collapse;
            border-radius: 13px;
            overflow: hidden;
            box-shadow: 3px 1px 35px #999898;
        }
    </style>
@endsection

@section('content')
    <section class="c3" style="height: 600px">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/slider/1600.png" alt="Available Largest Saudi Executive Database" width="460"
                            height="345">
                        <div class="carousel-caption slider-cap">
                            <h1 class="wow fadeInUp" data-wow-duration="1s">Available Largest Saudi Executive
                                Database.</h1>
                            <h5 class="wow fadeInUp" data-wow-duration="1.2s">Complete Saudi Executive database for
                                businesses of all sizes. </h5>
                            <br><br>
                            <a href="" class="hs2" data-toggle="modal" data-target="#myModal">Company
                                Owners</a>
                            <a href="" class="hs1" data-toggle="modal" data-target="#myModal">Presidents</a>
                            <a href="" class="hs1" data-toggle="modal" data-target="#myModal">Doctors</a>
                            <a href="" class="hs2" data-toggle="modal" data-target="#myModal">Managing
                                Director</a> <br><br>
                            <a href="" class="hs1" data-toggle="modal" data-target="#myModal">Finance
                                Manager</a>
                            <a href="" class="hs1" data-toggle="modal" data-target="#myModal">Egineers</a>
                            <a href="" class="hs1" data-toggle="modal" data-target="#myModal">Purchase
                                Manager</a>
                            <a href="" class="hs1" data-toggle="modal" data-target="#myModal">Human
                                Resources</a>

                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slider/niche1-300-clear.png" alt="Target Your Customers">
                        <div class="carousel-caption slider-cap">
                            <h1 class="wow fadeInUp" data-wow-duration="1s">Target Your Customers</h1>
                            <h5 class="wow fadeInUp" data-wow-duration="1.2s">Sell your products and Services by
                                Targeting B2B and B2C businesses.</h5>
                            <p style=" color:white;" class="wow fadeInUp" data-wow-duration="1.5s">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Reach your Targeted customers
                                Directly.<br>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Increase your Sales by 50%<br>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Make Information as a tool<br>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Help in start New Business<br>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Get Updates Regularly
                            </p>
                            <br>
                            <!--<a href="#request" class="hs2" data-toggle="modal" data-target="#myModal">Buy Now</a>
                                                                                  <a href="#request" class="hs1" data-toggle="modal" data-target="#myModal">Register</a> -->

                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slider/is5.jpg" alt="We Offer Three Types of Different Business Database">
                        <div class="carousel-caption slider-cap">
                            <h1 class="wow fadeInUp" data-wow-duration="1s">We Offer Three Types of Different Business
                                Database</h1>
                            <h5 class="wow fadeInUp" data-wow-duration="1.2s">To Increase your sales</h5>
                            <p class="wow fadeInUp" data-wow-duration="1.5s">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Top Executive Business
                                Contacts<br>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Categorised Mobile Contacts<br>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i> Email Address List<br>
                            </p>
                            <br>
                            <!--<a href="#request" class="hs1" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now</a>
                                                                                  <a href="#request" class="hs2" data-toggle="modal" data-target="#myModal">Register</a> </div>-->
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span
                            class="glyphicon" aria-hidden="true"><i class="fa fa-chevron-left"
                                aria-hidden="true"></i></span> </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span
                            class="glyphicon" aria-hidden="true"><i class="fa fa-chevron-right"
                                aria-hidden="true"></i></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>

    </section>

    <section class="suggest-part">
        <div class="container">
            <div class="suggest-slider slider-arrow">
                @foreach ($categories as $category)
                    <a href="#" class="suggest-card"><img src="images/suggest/automobile.png" alt="car" />
                        <h6>{{ $category->Bussiness_Type }}</h6>
                        <p>(4,521)</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 50px">
            <div class="row justify-content-center" style="gap: 15px">
                <!--HOME Highlight: 1-->
                <div class="col-md-3 col-sm-6" style="border-radius: 10px">
                    <div class="hom-pro">
                        <img src="images/icon/1.png" alt="" />
                        <h4>Executive Database</h4>
                        <p>
                            Complete Saudi Executive database for businesses of all sizes.
                        </p>
                    </div>
                </div>
                <!--HOME Highlight: 2-->
                <div class="col-md-3 col-sm-6" style="border-radius: 10px">
                    <div class="hom-pro">
                        <img src="images/icon/7.png" alt="" />
                        <h4>Increase your sales</h4>
                        <p>
                            Explore Business Ideas for Success using direct marketing &
                            Multiply sales.
                        </p>
                    </div>
                </div>
                <!--HOME Highlight: 3-->
                <div class="col-md-3 col-sm-6" style="border-radius: 10px">
                    <div class="hom-pro">
                        <img src="images/icon/3.png" alt="" />
                        <h4>Target your Customer</h4>
                        <p>
                            Sell your products and Services by Targeting B2B and B2C
                            businesses.
                        </p>
                    </div>
                </div>
                <!--HOME Highlight: 4-->
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>CONTACT, CONNECT, CONVERT</h2>
                        <p>
                            Taajer helps data-driven B2B marketers find and reach new
                            opportunities better through robust data solutions and targeted
                            marketing services. We give you the resources and expertise
                            needed to turn marketing data into business results.
                        </p>
                        <a href="ad-post.html" class="btn btn-outline"><i class="fas fa-plus-circle"></i><span>Help
                                in Starting New Business</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Packages For Business Leads</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            aspernatur illum vel sunt libero voluptatum repudiandae veniam
                            maxime tenetur.
                        </p>
                    </div>
                </div>
            </div>
            @guest

                <div class="row">
                    @foreach ($packages as $package)
                        <div class="col-md-6 col-lg-6">
                            <div class="price-card">
                                <div class="price-head">
                                    <i class="flaticon-bicycle"></i>
                                    <h3>${{ $package->price }}</h3>
                                    <h4>{{ $package->name }}</h4>
                                </div>
                                <ul class="price-list">
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <p>1 Regular Ad for 7 days</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        <p>No Credit card required</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        <p>No Top or Featured Ad</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-times"></i>
                                        <p>No Ad will be bumped up</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <p>Limited Support</p>
                                    </li>
                                </ul>
                                <div class="price-btn">
                                    <a href="user-form.html" class="btn btn-inline"><i
                                            class="fas fa-sign-in-alt"></i><span>Register Now</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endguest
        </div>
    </section>
    <section class="mt-5 mb-5 px-5 home-table">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Company Name</th>
                    <th scope="col">Primary Sector</th>
                    <th scope="col">Person Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sampleData as $sample)
                    <tr>
                        <td>{{ $sample->Company_Name }}</td>
                        <td>{{ $sample->Bussiness_Type }}</td>
                        <td>{{ $sample->Person_Name }}</td>
                        <td>{{ $sample->Company_Name }}</td>
                        <td><a href="{{ route('single-company-info', $sample->id) }}">view</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <section class="p-about-count" style="background-color: #a3afbe">
        <div class="com-title mb-0">
            <h2 style="color: #ffffff">Our Clients</h2>
            <p style="color: #ffffff">
                We are proud to have many satisfied customers from around the region.
                <br />Our customers vary in size from small to large companies.
            </p>
        </div>
        <div id="myCarousel2" class="carousel slide mt-0" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Add your carousel items here -->
                <div class="carousel-item active">
                    <img src="images/clients/1.png" alt="" />
                    <img src="images/clients/2.png" alt="" />
                    <img src="images/clients/3.png" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/clients/2.png" alt="" />
                    <img src="images/clients/3.png" alt="" />
                    <img src="images/clients/4.png" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/clients/3.png" alt="" />
                    <img src="images/clients/4.png" alt="" />
                    <img src="images/clients/5.png" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/clients/4.png" alt="" />
                    <img src="images/clients/5.png" alt="" />
                    <img src="images/clients/6.png" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/clients/5.png" alt="" />
                    <img src="images/clients/6.png" alt="" />
                    <img src="images/clients/7.png" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/clients/6.png" alt="" />
                    <img src="images/clients/7.png" alt="" />
                    <img src="images/clients/8.png" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/clients/7.png" alt="" />
                    <img src="images/clients/8.png" alt="" />
                    <img src="images/clients/1.png" alt="" />
                </div>
                <!-- Add more carousel items as needed -->
            </div>

            <!-- Add carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
@endsection
