@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')
<div class="relative-position-for-Kitchen-Design-And-Renovation-Header ">
            <div class="Kitchen-Design-And-Renovation-Header">
                <div class="container">

                    <div class="Kitchen-Renovation-And-Design-Vancouver-center px-1">

                        <div class="text-center">
                            <h5 class="text-white m-0 py-2 fs-20">Elevate Your Kitchen - On-Time, In-Budget</h5>
                        </div>
                        <div class="text-center ">
                            {!! $heading !!}
                        </div>
                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-orange text-white header-button-style mx-1 mb-2 border-radius-12px">Get Free
                                Estimate
                                Now</button>
                            <button type="button" class="btn btn-outline-light text-white header-button-style mx-1 mb-2 border-radius-12px">Call:
                                (003) 014-1024
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-background-section-for-kitchen-renovation-experts-in-calgary"></div>

        </div>
  <!-- Our Recent Kitchen Designs section start -->

  <div class="container recent-kitchen-margin-top pt-5">
            <h1 class="text-center mb-4">Our Recent Kitchen Designs</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-2">

            <div id="OurRecentKitchenBeforeAndAfterTransformationcarousel" class="carousel slide"
                data-bs-ride="carousel">


                <div class="carousel-inner">
                    <div class="carousel-item active">


                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3  ">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">Before</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/section2-Image.jpg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">After</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/blog-post-kitchen-design-image1.webp')}}"
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
                                        <h4 class="text-white">Before</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/Kitchen-Design-2.png')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">After</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/Kitchen-Design-5.png')}}" class="border-radius-20px h-550 w-100">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item ">


                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">Before</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/section2-Image2.jpg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">After</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/kitchen-background-image.jpg')}}"
                                        class="border-radius-20px h-550 w-100">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button"
                    data-bs-target="#OurRecentKitchenBeforeAndAfterTransformationcarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#OurRecentKitchenBeforeAndAfterTransformationcarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>


            </div>

            <div class="text-center  ml-2">
                <p> <b><span class="carousel-control-prev prev-before-button-for-before-After fs-20"
                            data-bs-target="#OurRecentKitchenBeforeAndAfterTransformationcarousel"
                            data-bs-slide="prev">&larr;
                            &nbsp;</span></b> Use Arrow Keys to Navigate <b><span
                            class="carousel-control-next fs-20 next-after-button-for-before-After"
                            data-bs-target="#OurRecentKitchenBeforeAndAfterTransformationcarousel"
                            data-bs-slide="next">&nbsp;
                            &rarr;</span></b></p>
            </div>
        </div>

        <!-- Our Recent Kitchen Designs section start -->


        <!-- Beauty , Functionality & Space section start -->

        <div class="container mt-5 p-0">
            <h1 class="text-center mb-3 px-1">" Beauty , Functionality & Space "</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-3">
            <p class="text-center mb-4 px-1 fs-20 fw-500">We balance these 3 elements in your kitchen design.</p>

            <div class="row p-0 m-0">
                <div class=" col-lg-5 col-sm-12  px-3 border-radius-20px">
                    <div class="img-rounded px-4 m-0 pt-4 beauty-section-style pb-xxl-1">

                        <h2 class="mr-4">Hundreds of colours, finishes, designs and materials to choose from.</h2>
                        <p class="mb-3 line-height-1-7 fw-500">
                            Creativity <br>
                            Empathy <br>
                            Analytical skills <br>
                            Technical skills <br>
                            Understanding human behavior <br>
                            Conclusions <br>
                            Creativity <br>
                            Empathy <br>
                            Analytical skills <br>
                            Technical skills <br>
                            Technical skills <br>
                            Understanding human behavior <br>
                            Kitchen

                        </p>
                        <div class="m-0 p-0 mb-sm-4 mb-xs-4 pb-sm-4 pb-xs-4">
                            <p class="line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis risus et nunc
                                cursus
                                eleifend. Sed hendrerit purus odio, id rutrum neque hendrerit a </p>
                        </div>

                    </div>

                </div>

                <div class=" col-lg-7 col-sm-12  px-3 border-radius-20px">

                    <div class="img-rounded px-4 m-0 pt-4 beauty-section-style">
                        <h2 class="mb-3">Our Kitchen Revolution Process</h2>
                        <hr class="  revolution-process-hr rounded m-0">
                        <div class="py-4">
                            <p class="">
                                <ul class="px-3">
                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque quis risus et
                                        nunc cursus
                                        eleifend. </li>
                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque quis risus et
                                        nunc cursus
                                        eleifend. </li>
                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque quis risus et
                                        nunc cursus
                                        eleifend. </li>
                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque quis risus et
                                        nunc cursus
                                        eleifend. </li>
                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque quis risus et
                                        nunc cursus
                                        eleifend. </li>
                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque quis risus et
                                        nunc cursus
                                        eleifend. </li>

                                    <li class="mb-4 line-height-1-7 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>

                                </ul>
                            </p>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <!--  Beauty , Functionality & Space section end -->

        <!-- Featured Before & After Transformation section start -->
        <div class="container mt-5 py-2">
            <h1 class="text-center mb-4">Featured Before & After Transformation</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-2">


            <div id="FeaturedBeforeAndAfterTransformationcarousel" class="carousel slide" data-bs-ride="carousel">


                <div class="carousel-inner">
                    <div class="carousel-item active">


                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3  ">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">Before</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/section5-Image2.jpg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">After</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/kitchen-background-image.jpg')}}"
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
                                        <h4 class="text-white">Before</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/Kitchen-Design-2.png')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">After</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/Kitchen-Design-5.png')}}" class="border-radius-20px h-550 w-100">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item ">


                        <div class="row">
                            <div class="  col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">Before</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/section2-Image.jpg')}}" class="border-radius-20px h-550 w-100">
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 px-3">
                                <div class="overlay-recent-kitchen border-bottom-20">
                                    <div class="text-center py-2">
                                        <h4 class="text-white">After</h4>
                                    </div>
                                </div>

                                <div class="">
                                    <img src="{{asset('user/images/blog-post-kitchen-design-image1.webp')}}"
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
            <h1 class="text-center mb-3">Estimated Cost Example</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-5">

            <div class="row d-flex m-0 px-xs-2 px-lg-0">

                <div class="col-xl-7 col-lg-12 p-0 border-radius-20px mb-4 mb-xl-0 h-100">

                    <div class="img-rounded px-4 m-0 pt-4 esimated-section-style">
                        <h5 class="mb-3 fs-20 fw-bolder">Quotes depend on many variables. Some of the significants variables
                                are:</h5>

                        <div class="py-1">
                            <p class="">

                                <ul class="">
                                    <li class="mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                    <li class="mb-2 fw-500">Lorem ipsum dolor sit amet, </li>
                                    <li class="mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque
                                    </li>
                                    <li class="mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque
                                    </li>
                                    <li class="mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Pellentesque
                                    </li>

                                </ul>

                            </p>
                            <div class="mb-4 p-0">
                                <p class="fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis risus et
                                    nunc cursus
                                    eleifend. Sed hendrerit purus odio, id rutrum neque hendrerit a Lorem ipsum dolor
                                    sit amet,
                                    consectetur adipiscing elit. </p>
                            </div>
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

                                <h5 class="mb-3 fs-20 text-center pt-4 fw-bolder">Example 1-9 ft x 6 ft</h5>

                                <p class="text-center fw-500">Showing Results for "6 X 9 Kitchen Ideas". Browse through the
                                    largest collection
                                    of home design ideas for every room in your home.</p>

                            </div>

                            <div class="col-12 border-radius-20px p-3 section-backgroud-style">

                                <h5 class=" fs-20 text-center pt-4 fw-bolder">Example 1-9 ft x 6 ft</h5>

                                <p class="text-center fw-500">Showing Results for "6 X 9 Kitchen Ideas". Browse through the
                                    largest collection
                                    of home design ideas for every room in your home.</p>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!--  Estimated Cost Example section end -->

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



        <!-- reflect-your-sense-of-style-section start here-->
        <div class="reflect-your-sense-of-style-section-wrapper">
            <div class="reflect-your-sense-of-style-section-heading">
                <h2>Reflect Your sense of style and Turn your dream kitchen into reality</h2>
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
                        <div><img src="./images/success-tick.png.png" alt=""></div>
                        <div>
                            <h5>All-in-One Experience</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil natus, at explicabo dicta
                                delectus alias architecto sint harum quos itaque debitis maxime earum minima adipisci
                                ab!
                                Dignissimos optio delectus eius.</p>
                        </div>
                    </div>
                    <div class="desc-2 desc-wrapper">
                        <div><img src="./images/success-tick.png.png" alt=""></div>
                        <div>
                            <h5>Stunning Design</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed dignissimos! Dolorum,
                                obcaecati sunt tempora corporis veritatis repellendus laboriosam voluptate vitae
                                incidunt ut
                                tempore, ipsa deleniti explicabo doloremque cupiditate. Molestias!</p>
                        </div>
                    </div>
                    <div class="desc-3 desc-wrapper">
                        <div><img src="./images/success-tick.png.png" alt=""></div>
                        <div>
                            <h5>Quality Materials</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur asperiores
                                dolorem totam natus amet rerum expedita ipsa, veniam beatae animi? Eum, commodi iste?
                                Cupiditate quisquam repellat reiciendis architecto aperiam?</p>
                        </div>
                    </div>
                    <div class="desc-btn-wrapper">
                        <button class="">Get a Quote</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- reflect-your-sense-of-style-section ends here -->


        <!-- Premier Equipment section start -->

        <div class="container premier-equipment-section py-2 px-4 ">
            <h1 class="text-center mb-4">Premier Equipment</h1>
            <hr class="Kitchen-Design-page-5-hr text-center rounded mb-5">
            <div class="row mb-5 section-backgroud-style border-radius-20px px-5 pt-5 d-flex">
                <div class="col-lg-6 col-sm-12 px-5">

                    <h5 class="mb-3 fs-20 fw-700 line-height-1-7 -ls-1">Quotes depend on many variables. Some of the significants variables
                            are:</h5>

                    <div class="mb-4 p-0">
                        <p class="mb-3 fw-500">Lorem ipsum dolor sit amet </p>
                        <p class="mb-3 fw-500">Quotes depend on many variables. Some of the </p>

                        <p class="mb-3 fw-500 line-height-1-7 ws-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque quis
                            risus et nunc cursus
                            eleifend. Sed hendrerit purus odio, id rutrum neque hendrerit a Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque quis
                            risus et nunc cursus
                            eleifend. Sed hendrerit purus odio, id rutrum neque hendrerit a Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.eleifend. </p>
                    </div>

                </div>

                <div class="col-lg-6 col-sm-12 px-3 pb-1">
                    <div id="robotcarousel" class="carousel slide" data-bs-ride="carousel">


                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <img src="images/equipment.jpg" height="380" class="border-radius-20px w-100 d-block"
                                    alt="swamp">
                            </div>
                            <div class="carousel-item ">

                                <img src="images/Kitchen-Design-1.jpeg" height="380"
                                    class="border-radius-20px w-100 d-block" alt="swamp">
                            </div>
                            <div class="carousel-item ">

                                <img src="images/Kitchen-Design-2.jpeg" height="380"
                                    class="border-radius-20px w-100 d-block" alt="swamp">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#robotcarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#robotcarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                        <ol class="carousel-indicators position-relative">
                            <li class="dot active" data-bs-target="#robotcarousel" data-bs-slide-to="0"
                                aria-current="true" aria-label="Slide 1"></li>
                            <li class="dot" data-bs-target="#robotcarousel" data-bs-slide-to="1" aria-label="Slide 2">
                            </li>
                            <li class="dot" data-bs-target="#robotcarousel" data-bs-slide-to="2" aria-label="Slide 3">
                            </li>
                        </ol>
                    </div>

                </div>

            </div>
        </div>

        <!--  Premier Equipment section end -->

        <!-- What are customers says about us section start -->
        <div class="kitchen-renovation-page what-our-customer-say-section-wrapper  pt-0">

            <div class="kitchen-renovation-page what-our-customer-say-section container px-0 ">
                <div class="kitchen-renovation-page row g-0 m-0  d-flex">
                    <div
                        class="kitchen-renovation-page what-our-customer-say-section-heading col-lg-4  col-sm-12 mb-sm-2 pb-xs-4 mt-5 px-3">
                        <h1 class="kitchen-renovation-page">What are customers says about us ?</h1>
                        <hr class="m-lg-0 gallery-what-our-customer-says-hr rounded ">
                    </div>

                    <div class="kitchen-renovation-page col-lg-8 col-sm-12">
                        <div id="container">
                            <section
                                class=" swiper-js section-with-carousel section-with-left-offset position-relative ">

                                <div class=" swiper-js carousel-controls d-flex">
                                    <div class=" swiper-js carousel-control carousel-control-left ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40"
                                            height="40">
                                            <path fill-rule="evenodd"
                                                d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.75.75 0 111.06 1.06L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class=" swiper-js carousel-control carousel-control-right mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40"
                                            height="40">
                                            <path fill-rule="evenodd"
                                                d="M13.22 19.03a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 10-1.06 1.06l4.97 4.97H3.75a.75.75 0 000 1.5h14.44l-4.97 4.97a.75.75 0 000 1.06z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class=" swiper-js carousel-wrapper px-5 ">
                                    <div class=" swiper-js swiper">
                                        <div class=" swiper-js swiper-wrapper">

                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" swiper-js swiper-slide ">
                                                <div
                                                    class=" swiper-js kitchen-renovation-page slide px-4 pt-5 pb-3 border-radius-20px">
                                                    <div class=" swiper-js kitchen-renovation-page display-card"></div>
                                                    <div class=" swiper-js kitchen-renovation-page Customers-profile">
                                                        <img src="./images/quotation-mark-icon.png" height="25px"
                                                            class=" swiper-js kitchen-renovation-page quotation">
                                                    </div>
                                                    <div class=" swiper-js kitchen-renovation-page card-content p-3">
                                                        <div
                                                            class=" swiper-js kitchen-renovation-page text-center mb-md-4">
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                            <i
                                                                class=" swiper-js kitchen-renovation-page fa fa-star star-icon-style"></i>
                                                        </div>

                                                        <p
                                                            class=" swiper-js kitchen-renovation-page text-center  card-desc mb-md-4">
                                                            "Browse through
                                                            the largest
                                                            collection
                                                            of home design ideas for every room in your home. "</p>

                                                        <h5 class=" swiper-js kitchen-renovation-page text-center fs-20">
                                                            <b>Ward U.</b></h5>
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
        @include('user.layouts.qoute')
@endsection

@push('head')
<script src="{{asset('js/master.js')}}"></script>
@endpush
