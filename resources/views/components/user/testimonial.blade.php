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

                                    @foreach($testimonials as $testimonial_note)
                                        <div class=" swiper-js swiper-slide bg-white m-1">
                                            <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px ">
                                                <div class=" swiper-js  shadow-lg"></div>
                                                <div class=" swiper-js Customers-profile ">
                                                    <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                </div>
                                                <div class="swiper-js card-content p-3 ">
                                                    <div class=" swiper-js text-center mb-md-4">
                                                        <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style"></i>
                                                    </div>

                                                    <p class=" swiper-js text-center card-desc mb-md-4 p-2 text-wrap  " style="width: 250px;" >
                                                        "{{$testimonial_note->text}}"</p>

                                                    <h5 class=" swiper-js text-center fs-20">
                                                        <b>{{$testimonial_note->name}}.</b>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



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
<script>
    $(document).ready(function () {
        // Initialize the swiper
        var swiper = new Swiper('.swiper-js.swiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            navigation: {
                prevEl: '.carousel-control-left',
                nextEl: '.carousel-control-right',
            },
        });
    });
</script>
