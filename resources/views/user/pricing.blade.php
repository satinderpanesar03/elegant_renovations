@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')
<div class="pricing-page header-content-wrapper">
                <div class="pricing-page header-content pt-4">
                    <div class="pricing-page header-content-detail py-4">
                        <h2 class="ls-1">Featured Kitchen <br> Renovation Projects and Pricing</h2>
                        <p class="pricing-page header-content-desc fw-400 line-height-1-7">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quisquam, voluptate amet minima aspernatur tempore magni! Nesciunt, nisi, quam aliquam iste
                            perferendis voluptatem laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quisquam, voluptate amet minima aspernatur tempore magni! Nesciunt, nisi, quam aliquam iste
                            perferendis voluptatem laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quisquam, voluptate amet minima aspernatur tempore magni! Nesciunt, nisi, quam aliquam iste
                            perferendis voluptatem laborum. Lorem ipsum dolor sit amet.</p>
                    </div>                   
                </div>
            </div>
            
    <div class="pricing-page pricing-cards-section-wrapper">
        <div class="pricing-page pricing-cards-section-cards">
            <div class="pricing-page card-1 card">
                <div class="pricing-page img"></div>
                <div class="pricing-page desc">
                    <h4 class="pricing-page desc-heading">Featured Project 1</h4>
                    <div class="pricing-page desc-sub-heading">( include )</div>
                    <div class="pricing-page tags">
                        <div>Kitchen Design</div>
                        <div>Extra tall 48" Custom Cabinets for 9 ft ceiling</div>
                        <div>Demolition, Delivery, Installation, Cleanup</div>
                        <div>Shaker Cabinet Doors</div>
                        <div>Backsplash</div>
                        <div>Cabinet Hardware</div>
                        <div>Countertop</div>
                    </div>
                </div>
                <div class="pricing-page cost">
                    Project cost: $58,200
                </div>
            </div>
            <div class="pricing-page card-2 card">
                <div class="pricing-page img"></div>
                <div class="pricing-page desc">
                    <h4 class="pricing-page desc-heading">Featured Project 1</h4>
                    <div class="pricing-page desc-sub-heading">( include )</div>
                    <div class="pricing-page tags">
                        <div>Kitchen Design</div>
                        <div>Extra tall 48" Custom Cabinets for 9 ft ceiling</div>
                        <div>Demolition, Delivery, Installation, Cleanup</div>
                        <div>Shaker Cabinet Doors</div>
                        <div>Backsplash</div>
                        <div>Cabinet Hardware</div>
                        <div>Countertop</div>
                    </div>
                </div>
                <div class="pricing-page cost">
                    Project cost: $58,200
                </div>
            </div>
            <div class="pricing-page card-3 card">
                <div class="pricing-page img"></div>
                <div class="pricing-page desc">
                    <h4 class="pricing-page desc-heading">Featured Project 1</h4>
                    <div class="pricing-page desc-sub-heading">( include )</div>
                    <div class="pricing-page tags">
                        <div>Kitchen Design</div>
                        <div>Extra tall 48" Custom Cabinets for 9 ft ceiling</div>
                        <div>Demolition, Delivery, Installation, Cleanup</div>
                        <div>Shaker Cabinet Doors</div>
                        <div>Backsplash</div>
                        <div>Cabinet Hardware</div>
                        <div>Countertop</div>
                    </div>
                </div>
                <div class="pricing-page cost">
                    Project cost: $58,200
                </div>
            </div>
        </div>
    </div>

    <!-- pricing-cards-section ends here -->


    <!-- What are customers says about us section start -->
    <div class="what-our-customer-say-section-wrapper  pt-0">

        <div class="what-our-customer-say-section container px-0 ">
            <div class="row g-0 m-0  d-flex">
                <div class="what-our-customer-say-section-heading col-lg-4  col-sm-12 mb-sm-2 pb-xs-4 mt-5 px-3">
                    <h1 class="">What are customers says about us ?</h1>
                    <hr class="m-lg-0 gallery-what-our-customer-says-hr rounded ">
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
                            <div class=" swiper-js carousel-wrapper px-5">
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

    <!--  What are customers says about us end -->


    <!-- latest-blog-posts-section start here -->
    <div class="pricing-page latest-blog-posts-section-wrapper">
        <div class="pricing-page latest-blog-posts-section-heading">
            <h2>Latest Blog Posts</h2>
            <div class="pricing-page below-heading-line"></div>
        </div>
        <div class="pricing-page latest-blog-posts-section-content">
            <div class="pricing-page latest-blog-posts-section-content-cards">
                <div class="pricing-page card-1 card">
                    <div class="pricing-page img"></div>
                    <span>APR 09</span>
                    <p>Chief clubhouse for female excecutives opens in Manhattan</p>
                </div>
                <div class="pricing-page card-2 card">
                    <div class="pricing-page img"></div>
                    <span>APR 09</span>
                    <p>Chief clubhouse for female excecutives opens in Manhattan</p>
                </div>
                <div class="pricing-page card-3 card">
                    <div class="pricing-page img"></div>
                    <span>APR 09</span>
                    <p>Chief clubhouse for female excecutives opens in Manhattan</p>
                </div>
            </div>
            <div class="pricing-page latest-blog-posts-section-content-btn">
                <button>View more</button>
            </div>
        </div>
    </div>
    <!-- latest-blog-posts-section end here -->

    <!-- get-a-free-quote-section start here -->
    <div class="pricing-page get-a-free-quote-section">
        <div class="pricing-page get-a-free-quote-section-heading">
            <h2>Get A Free Quote</h2>
        </div>
        <div class="pricing-page get-a-free-quote-section-content">
            <p>Contact our Kitchen renovation experts serving calgary, edmonton & vancouver</p>
            <form>
                <div class="pricing-page row">
                    <div class="pricing-page col">
                        <input type="text" class="pricing-page form-control" placeholder="First name" name="firstname">
                    </div>
                    <div class="pricing-page col">
                        <input type="text" class="pricing-page form-control" placeholder="last name" name="lastname">
                    </div>
                </div>
                <div class="pricing-page row">
                    <div class="pricing-page col">
                        <input type="text" class="pricing-page form-control" placeholder="Phone no" name="phone">
                    </div>
                    <div class="pricing-page col">
                        <input type="text" class="pricing-page form-control" placeholder="E-mail" name="email">
                    </div>
                </div>
                <textarea class="pricing-page form-control" placeholder="Enter your message" rows="5" id="comment" name="text"></textarea>

            </form>
            <button type="submit">Submit</button>
        </div>
    </div>
@endsection

@push('head')
<script src="{{asset('js/master.js')}}"></script>
@endpush