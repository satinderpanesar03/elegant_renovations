<div class="mobile-display mt-4">

@foreach($testimonials as $testimonial_note)
    <div class="swiper-js card-content p-3 mt-4">
        <div class=" swiper-js text-center mb-md-4">
            <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
            <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
            <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
            <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
            <i class=" swiper-js fa fa-star star-icon-style yellow-star"></i>
        </div>

        <p class=" swiper-js text-center card-desc mb-md-4 p-2 text-wrap  "   >
        "{{$testimonial_note->text}}"</p>

        <h5 class=" swiper-js text-center fs-20">
            <b>{{$testimonial_note->name}}.</b>
        </h5>
    </div>
@endforeach

</div>
