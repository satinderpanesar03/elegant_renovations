@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')
<div class="relative-position-for-Kitchen-Design-And-Renovation-Header ">
            <div class="Kitchen-Design-And-Renovation-Header">
                <div class="container">

                    <div class="Kitchen-Renovation-And-Design-Vancouver-center px-1">

                        <div class="text-center">
                            <h5 class="text-white m-0 py-2 fs-20">Elevate Your Renovations - On-Time, In-Budget</h5>
                        </div>
                        <div class="text-center ">
                            {!! $heading !!}
                        </div>
                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-orange text-white header-button-style mx-1 mb-2 border-radius-12px"><a href="{{route('user.contact.us')}}" class="text-decoration-none text-white"> Get Free
                                Estimate
                                    Now </a></button>
                            <button type="button" class="btn btn-outline-light text-white header-button-style mx-1 mb-2 border-radius-12px">
                                <a href="tel:+16047860949" class="text-decoration-none text-white">
                                Call:
                                    +1 604-786-0949
                                </a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-background-section-for-kitchen-renovation-experts-in-calgary"></div>

        </div>
  <!-- Our Recent Kitchen Designs section start -->

                <x-User.RenovationDesignLooks/>

        <!-- Our Recent Kitchen Designs section start -->


        <!-- Beauty , Functionality & Space section start -->


                <x-User.Revolutionprocess/>

        <!--  Beauty , Functionality & Space section end -->

        <!-- Featured Before & After Transformation section start -->
        <div class="container mt-5 py-2">
            <h1 class="text-center mb-4">Featured Trends in Kitchen Transformation</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-2">


            <div id="FeaturedBeforeAndAfterTransformationcarousel" class="carousel slide" data-bs-ride="carousel">


                <div class="carousel-inner">
                    <div class="carousel-item active">


                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3  ">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white"><x-User.StarRating/></h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/renovations/renovatekitchen_1.jpeg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white"><x-User.StarRating/></h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/renovations/renovatekitchen_2.jpeg')}}"
                                        class="border-radius-20px h-550 w-100">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item ">

                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3  ">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white"><x-User.StarRating/></h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/renovations/renovatekitchen_3.jpeg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white"><x-User.StarRating/></h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/renovations/renovatekitchen_4.jpeg')}}" class="border-radius-20px h-550 w-100">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item ">


                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white"><x-User.StarRating/></h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/renovations/renovatekitchen_5.jpeg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white"><x-User.StarRating/></h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/renovations/renovatekitchen_6.jpeg')}}"
                                        class="border-radius-20px h-550 w-100">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button"
                    data-bs-target="#FeaturedBeforeAndAfterTransformationcarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#FeaturedBeforeAndAfterTransformationcarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>


            </div>

            <div class="text-center  ml-2">
                <p> <b><span class="carousel-control-prev prev-before-button-for-before-After fs-20"
                            data-bs-target="#FeaturedBeforeAndAfterTransformationcarousel" data-bs-slide="prev">&larr;
                            &nbsp;</span></b> Use Arrow Keys to Navigate <b><span
                            class="carousel-control-next fs-20 next-after-button-for-before-After"
                            data-bs-target="#FeaturedBeforeAndAfterTransformationcarousel" data-bs-slide="next">&nbsp;
                            &rarr;</span></b></p>
            </div>

            <div class="text-center">
                <h5 class="fs-20 mb-4 feature-before-after-beautiful-kitchen-heading"> This beautiful kitchen renovatio/remodelling in calgary was done for $16,900</h5>
            </div>
            <div class="mb-3 ">
                <p class="line-height-1-5 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis
                    risus et
                    nunc cursus
                    eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis risus et nunc
                    cursus
                    eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. Pellentesque quis risus et nunc
                   </p>
            </div>
            <div class="text-center feature-before-after-beautiful-kitchen-button">
                <button type="button" class="btn btn-orange text-white header-button-style border-radius-12px mr-2  fs-18">Get Free
                    Quote Now</button>
            </div>

        </div>


        <!--  Featured Before & After Transformation section end -->

        <!-- Estimated Cost Example section start -->

        <div class="container mt-5 p-0">
            <h1 class="text-center mb-3">Deciphering Home Renovation Costs: A Comprehensive Guide</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-5">

            <div class="row d-flex m-0 px-xs-2 px-lg-0">

                <div class="col-xl-7 col-lg-12 p-0 border-radius-20px mb-4 mb-xl-0 h-100">

                    <div class="img-rounded px-4 m-0 pt-4 esimated-section-style">
                        <h5 class="mb-3 fs-20 fw-bolder"> Various expenses typically associated with a home renovation project, without specific cost figures:</h5>

                        <div class="py-1">

                            <p>
                                <b>Demolition and Removal: </b>
                                This category covers the cost of tearing down or removing existing structures, fixtures, and materials to prepare the space for renovation. Expenses may include labor for demolition, waste disposal, and cleanup. </p>
                            <p>
                                <b>Cabinetry and Countertops:</b>
                            These expenses encompass the cost of custom or pre-made kitchen or bathroom cabinets and the countertops that go with them. It includes both materials and installation.
                            </p>


                            <p>
                                <b>Appliances:</b>

                            This category includes the cost of new kitchen appliances, such as a refrigerator, stove/oven, dishwasher, and microwave. Prices can vary significantly based on brand and features.
                            </p>
                            <p>
                                <b> Flooring:</b>

                            Flooring expenses involve the choice and installation of new flooring materials, such as hardwood, engineered wood, tile, or laminate.
                            </p>
                            <p>
                                <b> Lighting:</b>

                            Lighting costs encompass the purchase and installation of various light fixtures, including recessed lighting, pendant lights, chandeliers, and under-cabinet lighting.

                            </p>
                            <p>
                                <b> Plumbing Fixtures: </b>

                                Expenses related to plumbing fixtures include the purchase and installation of sinks, faucets, garbage disposals, and any necessary plumbing work.
                            </p>

                            <div class="mb-3">
                                <button type="button" class="btn btn-orange text-white header-button-style mr-2 border-radius-12px fs-18">Get
                                    Free Quote
                                    Now</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-5 col-lg-12 px-xl-3  ">

                    <div class="img-rounded px-xl-4 px-lg-4 h-100">
                        <div class="row h-100">
                            <div class="col-12 border-radius-20px p-3 section-backgroud-style  mb-4">
                                <p>
                                    <b> Electrical:</b>

                                This category covers the cost of electrical work, including rewiring, installing new outlets, switches, and any electrical upgrades required for the renovation.
                                </p>
                                <p>
                                    <b>  Painting:</b>

                                Painting expenses include the purchase of paint and painting supplies, as well as labor costs if you hire professionals to paint the renovated space.

                                </p>
                                <p>
                                    <b>
                                Permits and Inspections:</b>

                                These expenses cover the necessary permits from local authorities and any inspections required to ensure the renovation complies with building codes and regulations.
                                </p>
                                <p>
                                    <b>
                                Design and Planning Fees:</b>

                                Costs associated with hiring a designer or architect for planning and design services. This may include consultations, drawings, and project coordination.
                                </p>
                            </div>

                            <div class="col-12 border-radius-20px p-3 section-backgroud-style">
                                <p>
                                    <b>Miscellaneous:
                                    </b>
                                This catch-all category can include various additional expenses, such as architectural fees, structural modifications, and other unexpected costs that may arise during the renovation.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!--  Estimated Cost Example section end -->

         <!-- gallery-section start here -->

        <!-- gallery-section end here -->


            <!-- reflect-your-sense-of-style-section start here-->
            <x-User.Uniquecap/>
            <!-- reflect-your-sense-of-style-section ends here -->

        <!-- reflect-your-sense-of-style-section start here-->

{{--        <div class="reflect-your-sense-of-style-section-wrapper">--}}
{{--            <div class="reflect-your-sense-of-style-section-heading">--}}
{{--                <h2>Reflect Your sense of style and Turn your dream kitchen into reality</h2>--}}
{{--                <div class="below-heading-line"></div>--}}
{{--            </div>--}}
{{--            <div class="reflect-your-sense-of-style-section-content">--}}
{{--                <div class="reflect-your-sense-of-style-section-content-images col-md-12 col-lg-6">--}}
{{--                    <div class="d-flex">--}}
{{--                        <div class="Kitchen-Design-img-1 Kitchen-design-wrapper">--}}
{{--                        </div>--}}
{{--                        <div class="Kitchen-Design-img-2 Kitchen-design-wrapper">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex">--}}
{{--                        <div class="Kitchen-Design-img-3 Kitchen-design-wrapper">--}}
{{--                        </div>--}}
{{--                        <div class="Kitchen-Design-img-4 Kitchen-design-wrapper">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reflect-your-sense-of-style-section-content-desc col-md-12 col-lg-6">--}}
{{--                    <div class="desc-1 desc-wrapper">--}}
{{--                        <div><img src="./images/success-tick.png.png" alt=""></div>--}}
{{--                        <div>--}}
{{--                            <h5>All-in-One Experience</h5>--}}
{{--                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil natus, at explicabo dicta--}}
{{--                                delectus alias architecto sint harum quos itaque debitis maxime earum minima adipisci--}}
{{--                                ab!--}}
{{--                                Dignissimos optio delectus eius.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="desc-2 desc-wrapper">--}}
{{--                        <div><img src="./images/success-tick.png.png" alt=""></div>--}}
{{--                        <div>--}}
{{--                            <h5>Stunning Design</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed dignissimos! Dolorum,--}}
{{--                                obcaecati sunt tempora corporis veritatis repellendus laboriosam voluptate vitae--}}
{{--                                incidunt ut--}}
{{--                                tempore, ipsa deleniti explicabo doloremque cupiditate. Molestias!</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="desc-3 desc-wrapper">--}}
{{--                        <div><img src="./images/success-tick.png.png" alt=""></div>--}}
{{--                        <div>--}}
{{--                            <h5>Quality Materials</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur asperiores--}}
{{--                                dolorem totam natus amet rerum expedita ipsa, veniam beatae animi? Eum, commodi iste?--}}
{{--                                Cupiditate quisquam repellat reiciendis architecto aperiam?</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="desc-btn-wrapper">--}}
{{--                        <button class="">Get a Quote</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- reflect-your-sense-of-style-section ends here -->


        <!-- Premier Equipment section start -->
                <x-User.Equipment/>

        <!--  Premier Equipment section end -->

                {{--    Testimonials--}}
                <x-User.Testimonial/>
                {{--Testimonial End--}}

                {{--     gallery start--}}
                <x-User.Gallery/>
                <!-- gallery-section end here -->

                <!-- latest-blog-posts-section start here -->
                <x-User.Homeblog/>
                <!-- latest-blog-posts-section end here -->

                <!-- get-a-free-quote-section start here -->
                <x-User.Getquote/>
                <!-- get-a-free-quote-section end here -->

        <!-- get-a-free-quote-section start here -->
{{--        @include('user.layouts.qoute')--}}
@endsection

@push('head')
<script src="{{asset('js/master.js')}}"></script>
@endpush
