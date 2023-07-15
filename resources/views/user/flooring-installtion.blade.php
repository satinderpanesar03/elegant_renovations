@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')
      <!-- header section start -->
      <div class="relative-position-for-Kitchen-Design-And-Renovation-Header ">
            <div class="Kitchen-Design-And-Renovation-Header">
                <div class="container">

                    <div class="Kitchen-Design-And-Renovation-center">

                        <div class="text-center">
                            <h5 class="text-white m-0 py-2 fs-20">Quality - Delivered On Time - Within Budget</h5>
                        </div>
                        <div class="text-center ">
                            <h2 class="fs-70 fw-700"> <span class="text-white">Flooring Installation </span><br><span class="text-orange">
                                Experts in Calgary</span></h2>
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
            <div class="header-background-section-for-flooring-installation"></div>

        </div>

        <!-- header section ends -->




        <!-- our-process-section start here-->

        <div class="our-process-section-wrapper recent-kitchen-margin-top ">
            <div class="our-process-section-heading">   
                <h2>Our Process</h2>
                <div class="below-heading-line"></div>
            </div>
            <div class="our-process-section-content">
                <div class="our-process-section-content-desc col-10 col-lg-5">
                  <h5>Save Time & Money</h5>
                  <ul>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa necessitatibus totam rerum impedit, quibusdam saepe maiores vel. Ratione porro nobis non facere reiciendis molestias dolorem quisquam aspernatur velit deleniti cumque officiis, beatae dignissimos, veniam dicta quae at tenetur. Qui pariatur et delectus esse provident quas facilis culpa distinctio possimus explicabo.</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa necessitatibus totam rerum impedit, quibusdam saepe maiores vel. Ratione porro nobis non facere reiciendis molestias dolorem quisquam aspernatur velit deleniti cumque officiis, beatae dignissimos, veniam dicta quae at tenetur. Qui pariatur et delectus esse provident quas facilis culpa distinctio possimus explicabo.</li>
                  </ul>
                </div>
                <div class="our-process-section-content-list col-10 col-lg-6">
                    <div class="our-process-section-content-list-item">
                        <img src="{{asset('user/images/our-process-list-icon.png')}}" alt="">
                        <p>We will visit your home to discuss and measure your requirements and options.</p>
                    </div>
                    <div class="our-process-section-content-list-item">
                        <img src="{{asset('user/images/our-process-list-icon.png')}}" alt="">
                        <p>We will visit your home to discuss and measure your requirements and options.</p>
                    </div>
                    <div class="our-process-section-content-list-item">
                        <img src="{{asset('user/images/our-process-list-icon.png')}}" alt="">
                        <p>We will visit your home to discuss and measure your requirements and options.</p>
                    </div>
                    <div class="our-process-section-content-list-item">
                        <img src="{{asset('user/images/our-process-list-icon.png')}}" alt="">
                        <p>We will visit your home to discuss and measure your requirements and options.</p>
                    </div>
                    <div class="our-process-section-content-list-item">
                        <img src="{{asset('user/images/our-process-list-icon.png')}}" alt="">
                        <p>We will visit your home to discuss and measure your requirements and options.</p>
                    </div>
                    <div class="our-process-section-content-list-item">
                        <img src="{{asset('user/images/our-process-list-icon.png')}}" alt="">
                        <p>We will visit your home to discuss and measure your requirements and options.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- our-process-section end here-->


        <!-- Flooring Samples Designs section start -->

        <div class="container mt-4 flooring-sample-design-section">
            <h1 class="text-center mb-3">Flooring Samples</h1>
            <p class="text-center mb-5 px-xs-5 px-sm-5 px-md-4 px-lg-0 fs-20 fw-500">Some of the popular selling vinyl flooring samples are shown below.</p>

            <div class="mb-4 flooring-samples-design-section">
                <div class="owl-carousel owl-theme">
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-3.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-4.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-7.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-7.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-3.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-4.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-7.jpeg')}}" alt="" height="150"></div>
                  </div>

                <div class="text-center  pb-3">
                    <p class="text-center text-muted fs-18">Luxury Vinyl</p>
                </div>
            </div>

            <div class="mb-4 flooring-samples-design-section">

                <div class="owl-carousel owl-theme">
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-3.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-6.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-6.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-3.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-6.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-6.jpeg')}}" alt="" height="150"></div>
                  </div>

                <div class="text-center  pb-3">
                    <p class="text-center text-muted fs-18">Laminate Flooring</p>
                </div>
            </div>

            <div class="mb-4 flooring-samples-design-section">

                <div class="owl-carousel owl-theme">
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-6.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-3.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-4.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-2.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-5.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-3.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-4.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-2.jpeg')}}" alt="" height="150"></div>
                    <div class="item flooring-samples-design"><img src="{{asset('user/images/flooring-design-1.jpeg')}}" alt="" height="150"></div>
                  </div>

                <div class="text-center  pb-3">
                    <p class="text-center text-muted fs-18">Engineered Hardwood</p>
                </div>
            </div>
        </div>


      

 
        <!-- Flooring Samples Designs section start -->


        <!-- Estimated Cost Example section start -->

        <div class="container mt-4 p-0">
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

        <!-- why-choose-us-section start here-->
        <div class="why-choose-us-section-wrapper pb-0">
            <div class="why-choose-us-section-heading">
                <h2>Why Choose Us</h2>
                <div class="below-heading-line"></div>
            </div>
            <div class="why-choose-us-section-content">
                <div class="why-choose-us-section-content-desc col-10 col-lg-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sint explicabo. Eos in
                        aliquid sint rerum numquam veniam voluptas. Est nam sapiente quia atque ex laboriosam facilis
                        fugit, quis cum quibusdam illum. Debitis ab</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus suscipit impedit et
                            hic maiores delectus. Voluptates nostrum velit.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quasi! Saepe iusto
                            laborum maiores nemo, aspernatur est magni evenies.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore nostrum
                            deleniti saepe qui. Architecto officia exercitationeti distinctio.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus suscipit impedit et
                            hic maiores delectus. Voluptates nostrum velit.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quasi! Saepe iusto
                            laborum maiores nemo, aspernatur est magni evenies.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore nostrum
                            deleniti saepe qui. Architecto officia exercitationeti distinctio.</li>

                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio odit facere, temporibus natus
                        autem repellat voluptates, iure accusantium quis fugit atque.</p>
                </div>
                <div class="why-choose-us-section-content-images col-10 col-lg-6"></div>
            </div>
        </div>
        <!-- why-choose-us-section end here-->

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

         <!-- gallery-section start here -->
         <div class="gallery-section-wrapper gallery-section py-0">
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


         <!-- why-Our-customer-say-section start here-->
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
        <!-- why-Our-customer-say-section end here-->


        <!-- latest-blog-posts-section start here -->
        <div class="latest-blog-posts-section-wrapper ">
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