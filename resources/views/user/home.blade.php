@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')

    <!--  What are customers says about us end -->
@section('content')
<div class="header-content-wrapper">
                <div class="header-content">
                    <div class="header-content-detail">
                        <p>Reliable and Accredited Home Renovation Firm</p>
                        <h2>Masterful Home  <span>Renovators</span></h2>
                        <p class="header-content-desc"> Exquisite Home Concepts - Punctual Completion - Budget Adherence</p>
                    </div>
                    <div class="header-content-buttons">
                        <button>Get a Quote</button>
                        <button>Explore More</button>
                    </div>
                </div>
            </div>
        <!-- reflect-your-sense-of-style-section start here-->
        <div class="reflect-your-sense-of-style-section-wrapper">
            <div class="reflect-your-sense-of-style-section-heading">
                <h2> Capture Your Unique Style and Transform Your Kitchen Dreams into Tangible Reality</h2>
                <div class="below-heading-line"></div>
            </div>
            <div class="reflect-your-sense-of-style-section-content">
                <div class="reflect-your-sense-of-style-section-content-images col-md-12 col-lg-6">
                    <div class="d-flex">
                        <div class="Kitchen-Design-img-1 Kitchen-design-wrapper">
                        </div>
                        <div class="Kitchen-Design-img-2 Kitchen-design-wrapper">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="Kitchen-Design-img-3 Kitchen-design-wrapper">
                        </div>
                        <div class="Kitchen-Design-img-4 Kitchen-design-wrapper">
                        </div>
                    </div>
                </div>
                <div class="reflect-your-sense-of-style-section-content-desc col-md-12 col-lg-6">
                    <div class="desc-1 desc-wrapper">
                        <div><img src="{{asset('user/images/success-tick.png.png')}}" alt=""></div>
                        <div>
                            <h5>All-in-One Experience</h5>
                            <p> Experience a seamless kitchen renovation journey with our all-in-one service. Our experts handle everything from start to finish, ensuring a stress-free process and remarkable results that exceed your expectations.</p>
                        </div>
                    </div>
                    <div class="desc-2 desc-wrapper">
                        <div><img src="{{asset('user/images/success-tick.png.png')}}" alt=""></div>
                        <div>
                            <h5>Stunning Design</h5>
                            <p> Transform your kitchen into a masterpiece with our captivating designs. Our team blends beauty and functionality, creating a space that's visually striking and incredibly practical, making cooking a joy and entertaining a breeze.</p>
                        </div>
                    </div>
                    <div class="desc-3 desc-wrapper">
                        <div><img src="{{asset('user/images/success-tick.png.png')}}" alt=""></div>
                        <div>
                            <h5>Quality Materials</h5>
                            <p> Discover a kitchen built to last. We source the finest materials, from sturdy cabinetry to elegant countertops, ensuring your renovated kitchen is as durable as it is stunning.</p>
                        </div>
                    </div>
                    <div class="desc-btn-wrapper">
                        <button class="">Get a Quote</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- reflect-your-sense-of-style-section ends here -->

        <!-- why-choose-us-section start here-->
        <div class="why-choose-us-section-wrapper py-0">
            <div class="why-choose-us-section-heading">
                <h2>Why Choose Us</h2>
                <div class="below-heading-line"></div>
            </div>
            <div class="why-choose-us-section-content">
                <div class="why-choose-us-section-content-desc col-10 col-lg-6">
                    <p> Our track record of satisfied clients speaks for itself. We take pride in not just meeting but exceeding expectations, ensuring that you're thrilled with the final outcome.</p>
                    <ul>
                        <li>Expertise and Experience: With years of industry experience, we bring a wealth of expertise to every project. Our skilled team has successfully transformed countless kitchens, ensuring your renovation is in capable hands.</li>
                        <li>Tailored Solutions: We understand that each homeowner has unique preferences and needs. That's why we offer personalized design and renovation solutions, ensuring your kitchen reflects your individual style and functions perfectly for your lifestyle.</li>
                        <li>Quality Craftsmanship: Our commitment to quality is evident in every detail. From the selection of premium materials to the precision of installation, we take pride in delivering impeccable craftsmanship that stands the test of time.</li>
                        <li>Transparent Process: We believe in open communication. Throughout the entire renovation process, you'll be kept informed about progress, timelines, and any developments. Our transparency ensures you're always in the loop.</li>
                        <li>Timely Delivery: We understand the importance of timelines. Our team is dedicated to delivering your dream kitchen on schedule, without compromising on the quality of workmanship.</li>
                        <li>Budget-Friendly: Renovations can be daunting, especially when it comes to costs. We work closely with you to create a plan that aligns with your budget while still achieving outstanding results.</li>

                    </ul>
                    <p>Choose us for your kitchen renovation, and experience a seamless blend of creativity, professionalism, and exceptional service. Your dream kitchen awaits.</p>
                </div>
                <div class="why-choose-us-section-content-images col-10 col-lg-6"></div>
            </div>
        </div>
        <!-- why-choose-us-section end here-->

        <!-- our-recent-kitchens-design-section start here -->
        <div class="our-recent-kitchens-design-section-wrapper">
            <div class="our-recent-kitchens-design-section-heading">
                <h2>Our Recent Kitchen Designs</h2>
                <div class="below-heading-line"></div>
            </div>
            <div class="our-recent-kitchens-design-section-content">
                <div class="our-recent-kitchens-design-section-content-card-1">
                    <div class="img-wrapper">
                    </div>
                    <div class="detail-wrapper">
                        <div class="desc-wrapper">
                            <p>Minimalist Kitchen Design</p>
                            <label>Our own design</label>
                        </div>
                        <div class="btn-wrapper">
                            <p>See the design</p>
                            <img src="{{asset('user/images/orange-arrow.png.png')}}" alt="">
                        </div>
                    </div>
                </div>{{asset('user/images/orange-arrow.png.png')}}
                <div class="our-recent-kitchens-design-section-content-card-2">
                    <div class="img-wrapper">
                    </div>
                    <div class="detail-wrapper">
                        <div class="desc-wrapper">
                            <p>Minimalist Kitchen Design</p>
                            <label>Our own design</label>
                        </div>
                        <div class="btn-wrapper">
                            <p>See the design</p>
                            <img src="{{asset('user/images/orange-arrow.png.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="our-recent-kitchens-design-section-content-card-3">
                    <div class="img-wrapper">
                    </div>
                    <div class="detail-wrapper">
                        <div class="desc-wrapper">
                            <p>Minimalist Kitchen Design</p>
                            <label>Our own design</label>
                        </div>
                        <div class="btn-wrapper">
                            <p>See the design</p>
                            <img src="{{asset('user/images/orange-arrow.png.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="our-recent-kitchens-design-section-content-card-4">
                    <div class="img-wrapper">
                    </div>
                    <div class="detail-wrapper">
                        <div class="desc-wrapper">
                            <p>Minimalist Kitchen Design</p>
                            <label>Our own design</label>
                        </div>
                        <div class="btn-wrapper">
                            <p>See the design</p>
                            <img src="{{asset('user/images/orange-arrow.png.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="our-recent-kitchens-design-section-content-btn-wrapper">
                    <button>View more</button>
                </div>
            </div>
        </div>
        <!-- our-recent-kitchens-design-section-end-here -->

        <!-- What are customers says about us section start -->
        <div class="what-our-customer-say-section-wrapper  pt-0">

            <div class="what-our-customer-say-section container px-0 ">
                <div class="row g-0 m-0  d-flex">
                    <div class="what-our-customer-say-section-heading col-lg-4  col-sm-12 mb-sm-2 pb-xs-4 mt-5 px-3">
                        <h1 class="">What are customers says about us ?</h1>
                        <hr class="m-lg-0  gallery-what-our-customer-says-hr rounded ">
                    </div>

                    <div class="col-lg-8 col-sm-12">
                        <div id="container">
                            <section class=" swiper-js section-with-carousel section-with-left-offset position-relative ">

                                <div class=" swiper-js carousel-controls d-flex">
                                    <div class=" swiper-js carousel-control carousel-control-left ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                                            <path fill-rule="evenodd" d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.75.75 0 111.06 1.06L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class=" swiper-js carousel-control carousel-control-right mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                                            <path fill-rule="evenodd" d="M13.22 19.03a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 10-1.06 1.06l4.97 4.97H3.75a.75.75 0 000 1.5h14.44l-4.97 4.97a.75.75 0 000 1.06z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class=" swiper-js carousel-wrapper px-5 ">
                                    <div class=" swiper-js swiper">
                                        <div class=" swiper-js swiper-wrapper">

                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js display-card"></div>
                                                    <div class=" swiper-js Customers-profile">
                                                        <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                    </div>
                                                    <div class=" swiper-js card-content p-3">
                                                        <div class=" swiper-js text-center mb-md-4">
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                            <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p class=" swiper-js text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js text-center fs-20">
                                                            <b>Ward U.</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- gallery-section start here -->
         <div class="gallery-section-wrapper gallery-section pb-0">
            <div class="gallery-section-heading gallery-section">
                <h2>Gallery</h2>
                <div class="below-heading-line gallery-section"></div>
            </div>
            <div class="gallery-section-content gallery gallery-cards gallery-section">
                <div class="gallery-section-content-left-img-wrapper col-sm-10 col-lg-5 images panel gallery-section">
                    <div class="gallery-section-content-left-img-1 slide gallery-section" data-order="1">
                    </div>
                    <div class="gallery-section-content-left-img-2 slide gallery-section" data-order="2">
                    </div>
                    <div class="gallery-section-content-left-img-3 slide gallery-section" data-order="3">
                    </div>
                </div>
                <div class="gallery-section-content-right-img col-sm-10 col-lg-5 gallery-section">
                    <div>
                        <div class="img-1 gallery-section"></div>
                        <div class="img-2 gallery-section"></div>
                    </div>
                    <div>
                        <div class="img-3 gallery-section"></div>
                        <div class="img-4 gallery-section"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-section end here -->

        <!-- latest-blog-posts-section start here -->
        <div class="latest-blog-posts-section-wrapper">
            <div class="latest-blog-posts-section-heading">
                <h2>Latest Blog Posts</h2>
                <div class="below-heading-line"></div>
            </div>
            <div class="latest-blog-posts-section-content">
                <div class="latest-blog-posts-section-content-cards">
                    <div class="card-1 card">
                        <div class="img"></div>
                        <span>APR 09</span>
                        <p>Chief clubhouse for female excecutives opens in Manhattan</p>
                    </div>
                    <div class="card-2 card">
                        <div class="img"></div>
                        <span>APR 09</span>
                        <p>Chief clubhouse for female excecutives opens in Manhattan</p>
                    </div>
                    <div class="card-3 card">
                        <div class="img"></div>
                        <span>APR 09</span>
                        <p>Chief clubhouse for female excecutives opens in Manhattan</p>
                    </div>
                </div>
                <div class="latest-blog-posts-section-content-btn">
                    <button>View more</button>
                </div>
            </div>
        </div>
        <!-- latest-blog-posts-section end here -->

        <!-- get-a-free-quote-section start here -->
        <div class="get-a-free-quote-section">
            <div class="get-a-free-quote-section-heading">
                <h2>Get A Free Quote</h2>
            </div>
            <div class="get-a-free-quote-section-content">
                <p>Contact our Kitchen renovation experts serving calgary, edmonton & vancouver</p>
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" name="firstname">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="last name" name="lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Phone no" name="phone">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="E-mail" name="email">
                        </div>
                    </div>
                    <textarea class="form-control"  placeholder="Enter your message" rows="5" id="comment"
                        name="text"></textarea>

                </form>
                <button type="submit">Submit</button>
            </div>
        </div>
        <!-- get-a-free-quote-section end here -->
        @endsection
        <!-- footer start here -->



        <!-- footer end here -->


@push('head')
<script src="{{asset('js/master.js')}}"></script>
@endpush
