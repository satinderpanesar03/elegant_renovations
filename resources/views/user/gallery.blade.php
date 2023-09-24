@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')
        <!-- header start here -->
        <!-- L-shaped Kitchen with Island Remodel Before & After section start here -->
        <div class="container recent-kitchen-margin-top mt-5">
            <h1 class="text-center mb-4">L-shaped Kitchen wiq1th Island Remodel Before & After</h1>
            <div class="d-flex justify-content-center py-2 gap-1">
                <button class="btn btn-primary" id="prev_g1_button"> Prev </button>
                <button class="btn btn-primary" id="next_g1_button"> Next </button>
            </div>

            <hr class="Kitchen-Design-page-5-hr text-center rounded my-0">
            <div id="L-Shaped-KitchenBeforeAndAfterTransformationcarousel" class="carousel slide" data-bs-ride="carousel">

                <center>
                <div class="center_my_gallery d-flex">
                        @for($i=1;$i<=7;$i++)
                            <div class="m-2">
                                <img src="{{asset('user/images/gallery/g1/g'.$i.'.jpg')}}" class="border-radius-20px    " style="height: 400px;max-width: 100%;">
                            </div>
                        @endfor
                </div>
                </center>
            </div>
        </div>

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


<script>
    $('.center_my_gallery').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay:true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow:document.getElementById('prev_g1_button'),
        nextArrow:document.getElementById('next_g1_button'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2                       ,
                    infinite: true,
                    dots: false,
                    prevArrow:'',
                    nextArrow:'',
                }
            },
            {
                breakpoint: 600,
                settings: {
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:false,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
@endsection


@push('head')
<script src="{{asset('js/master.js')}}"></script>

@endpush

