<style>
    .header-content-wrapper {
        position: relative;
        overflow: hidden;
    }

    .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; /* Ensures the video is behind other content */
    }

    #video-background {
        object-fit: cover; /* Ensures the video covers the entire container */
    }
</style>
<!--  What are customers says about us end -->
{{--@section('content')--}}
<div class="header-content-wrapper"  style="background-size: cover;background-image: url('images/way-white-house.jpg')">
    <div class="video-background">
{{--        <video autoplay muted loop id="video-background"  playsinline>--}}
{{--            <source src="{{asset('user/video/amka_home_web.mp4')}}" type="video/mp4">--}}
{{--            <!-- Add additional source elements for other video formats like WebM or Ogg if needed -->--}}
{{--        </video>--}}

    </div>
    <div class="header-content ">
        <div class="header-content-detail">
            <p>Reliable and Accredited Home Renovation Firm</p>
            <h2 class="heading_hompage">Transform Your Home Into A Dream Home With  <span>AMKA Homes</span></h2>
            <p class="header-content-desc">Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces.</p>
        </div>
        <div class="header-content-buttons">
            <button><a href="{{route('user.contact.us')}}" class="text-decoration-none text-white">Get a Quote</a></button>
            <button><a href="{{route('user.aboutus.index')}}" class="text-decoration-none text-white">About us</a></button>
        </div>
    </div>
</div>



