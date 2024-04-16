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
<style>
        /* CSS for the enlarged image overlay */
.img-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* semi-transparent black background */
    display: none; /* initially hidden */
    justify-content: center;
    align-items: center;
    z-index: 9999; /* ensure it's above other content */
    backdrop-filter: blur(5px); /* blur effect for the background */
}

.enlarged-img {
    max-width: 90%; /* adjust as needed */
    max-height: 90%; /* adjust as needed */
}
</style>
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
<script>
        // JavaScript for displaying enlarged image upon clicking
document.addEventListener("DOMContentLoaded", function() {
    // Get all elements with class "enlarge-image"
    var enlargeTriggers = document.querySelectorAll(".enlarge-image");

    // Loop through each element
    enlargeTriggers.forEach(function(trigger) {
        // Add click event listener to each element
        trigger.addEventListener("click", function() {
            // Get the background image URL of the clicked element
            var imageUrl = window.getComputedStyle(this).getPropertyValue("background-image");
            // Create an image element for the enlarged image
            var enlargedImage = document.createElement("img");
            enlargedImage.src = imageUrl.slice(4, -1).replace(/"/g, "");
            enlargedImage.classList.add("enlarged-img");

            // Create a div for the image overlay
            var imgOverlay = document.createElement("div");
            imgOverlay.classList.add("img-overlay");
            imgOverlay.appendChild(enlargedImage);

            // Append the overlay to the body
            document.body.appendChild(imgOverlay);

            // Show the overlay
            imgOverlay.style.display = "flex";

            // Add click event listener to the overlay to close it
            imgOverlay.addEventListener("click", function() {
                imgOverlay.style.display = "none";
                imgOverlay.remove(); // Remove the overlay from the DOM
            });
        });
    });
});
</script>
@endpush
