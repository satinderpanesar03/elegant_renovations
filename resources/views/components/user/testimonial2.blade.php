<div class="mobile-display mt-4">

@foreach($testimonials as $testimonial_note)
                                        <div class=" swiper-js swiper-slide bg-white h-100 m-1">
                                            <div class=" swiper-js slide px-4 pt-5 pb-3 border-radius-20px ">
                                                <div class=" swiper-js  shadow-lg"></div>
                                                <div class=" swiper-js Customers-profile ">
                                                    <img src="{{asset('user/images/quotation-mark-icon.png')}}" height="25px" class=" swiper-js quotation">
                                                </div>
                                                <div class="swiper-js card-content p-3 ">
                                                    <div class=" swiper-js text-center mb-md-4">
                                                        <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
                                                        <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
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
