@inject('constants', 'App\Models\Design')
@extends('user.layouts.header')

@section('title', 'AMKA Homes - Transform Your Home Into A Dream Home')


@push('header_meta_content')

    <meta name="description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://amkahomes.ca" />
    <meta property="og:title" content="AMKA Homes - Transform Your Home Into A Dream Home" />
    <meta property="og:description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />
    <meta property="og:image" content="https://amkahomes.ca/user/images/homeg4_ga.jpeg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://amkahomes.ca" />
    <meta property="twitter:title" content="AMKA Homes - Transform Your Home Into A Dream Home" />
    <meta property="twitter:description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />
    <meta property="twitter:image" content="https://amkahomes.ca/user/images/homeg4_ga.jpeg" />

@endpush



@section('content')

                         <x-User.Homeheader/>
    <!-- reflect-your-sense-of-style-section start here-->


                        <x-User.Uniquecap/>
        <!-- reflect-your-sense-of-style-section ends here -->


                         <x-Customer.Showvideos/>



                         {{-- new construction --}}

                         <!-- why-choose-us-section start here-->
                         <x-User.Chooseus/>
        <!-- why-choose-us-section end here-->

        <!-- our-recent-kitchens-design-section start here -->
                        <x-User.Recentdesign :design=$constants::New_Remodelling_Kicthen />
        <!-- our-recent-kitchens-design-section-end-here -->

                {{--    Testimonials--}}
                        <x-User.Testimonial/>

                {{--Testimonial End--}}

                {{--     gallery start--}}
                        <x-User.Gallery/>
                <!-- gallery-section end here -->
                         <x-User.Faq/>
        <!-- latest-blog-posts-section start here -->
                        <x-User.Homeblog/>
        <!-- latest-blog-posts-section end here -->



        <!-- get-a-free-quote-section start here -->
                        <x-User.Getquote/>
        <!-- get-a-free-quote-section end here -->
        @endsection
        <!-- footer start here -->

@push('head')
<script src="{{asset('js/master.js')}}"></script>

<meta name="title" content="AMKA Homes - Transform Your Home Into A Dream Home" />
<meta name="description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />

<!-- Open Graph / Facebook -->

<meta property="og:title" content="AMKA Homes - Transform Your Home Into A Dream Home" />
<meta property="og:description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />
<meta property="og:image" content="{{asset('user/images/meta_head_amka.png')}}"  />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://amkahomes.ca/" />
<meta property="twitter:title" content="@yield('title')" />
<meta property="twitter:description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />
<meta property="twitter:image" content="{{asset('user/images/meta_head_amka.png')}}" />

@endpush
