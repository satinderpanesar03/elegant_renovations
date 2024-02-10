@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>

    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Amka Homes">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}" />
    @stack('header_meta_content')

    <!-- Meta Tags Generated with https://metatags.io -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cardo:wght@400;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
  integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
  integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('css/master-style.css')}}">

  <script src="https://kit.fontawesome.com/cc528d7a8e.js" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/cc528d7a8e.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
  integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>

<body>
    <div class="blog-post-page main-wrapper ">
        <!-- header start here -->
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href="/">
                        <img class="brand-logo navbar-brand" src="{{asset('user/images/amka_svg_logo.svg')}}" style="scale: 1.3;" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-items collapse navbar-collapse" id="collapsibleNavbar">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Homes Renovation</a>
                                    <ul class="dropdown-menu" style="width: 200px;">
                                        {{--                                        <li><a class="dropdown-item" href="{{route('user.kitchen.renovation.calgary')}}">Kitchen Renovation Calgary</a></li>--}}
                                        {{--                                        <li><a class="dropdown-item" href="{{route('user.kitchen.renovation.edmonton')}}">Kitchen Renovation Edmonton</a></li>--}}
                                        <li><a class="dropdown-item" href="{{route('user.kitchen.renovation.vancouver')}}">Homes Renovation Vancouver</a></li>
                                        {{--                                        <li><a class="dropdown-item" href="{{route('user.kitchen.designer')}}">Kitchen Designer</a></li>--}}
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">All
                                        Services</a>
                                    <ul class="dropdown-menu">
{{--                                        <li><a class="dropdown-item" href="#">Kitchen Remodeling</a></li>--}}
                                        <li><a class="dropdown-item" href="{{route('user.flooring.installation')}}">Flooring Installation</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.building.services')}}">Building Permits</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.basement.renovation')}}">Basement Renovations & development</a>
                                        </li>
                                    </ul>
                                </li>
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a class="nav-link" href="{{route('user.pricing.index')}}">Pricing</a>--}}
                                {{--                                </li>--}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.gallery.index')}}">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.aboutus.index')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.blogs.index')}}     ">Blogs</a>
                                </li>
                                <li class="nav-item mobile-display">
                                    <a class="nav-link" href="{{route('user.contact.us')}}     ">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <button class="desktop-display"> <a class="text-decoration-none text-white " href="{{route('user.contact.us')}}"  >Contact Us</a></button>
                    </div>
                </div>
            </nav>

        </header>

        <div>
            @yield('content')
        </div>

        <footer class="blog-post-page">
            <div class="blog-post-page footer-content">
              <div class="blog-post-page row p-0 m-0">
                <div class="blog-post-page col-lg-5 col-md-12 col-sm-12">
                    <div class="blog-post-page desc">
                        <div class="brand-logo-wrapper">
                            <img class="brand-logo" src="{{asset('user/images/amka_svg_logo.svg')}}" height="70" />
                        </div>
                        <p>
                            Welcome to Amka Homes, your trusted partner for all your home renovation needs. We are a premier home renovation company dedicated to transforming your living spaces into the epitome of style, comfort, and functionality. With a focus on home, stair, kitchen, floor, and interior and exterior renovations, we have the expertise to bring your vision to life.

                        </p>
                    </div>

                </div>
                <div class="blog-post-page col-lg-2 col-md-12 col-sm-12">
                    <div class="blog-post-page helpful-links">
                        <h6 class="blog-post-page ff-other">Helpful Links</h6>
                        <ul>
                            <li><a href="{{route("user.aboutus.index")}}" > About Us</a></li>
                            <li> <a href="{{route("user.blogs.index")}}"> Blogs </a> </li>
                            <li> <a href="{{route("user.contact.us")}}"> Contact us </a> </li>
                            <li> <a href="/info/term-conditions"> Terms & Condition </a></li>
                        </ul>
                    </div>

                </div>
                <div class="blog-post-page col-lg-2 col-md-12 col-sm-12">



                </div>
                <div class="blog-post-page col-lg-3 col-md-12 col-sm-12">
                    <div class="blog-post-page contact-us">
                        <h6 class="blog-post-page ff-other">Contact Us</h6>
                        <div>{{$setting->address}}</div>
                        <div>
                            Phone: ({{$setting->country_code}}) {{$setting->phone_number}}</div>
                        <div>E-Mail: {{$setting->email}}</div>
                    </div>

                </div>

            </div>



            </div>
            <hr>
            <p class="blog-post-page fs-15">&copy; 2024 Amka Homes. All Rights Reserved.</p>
        </footer>

        <!-- footer start here -->

    </div>
    <script src="/js/master.js"></script>
  </body>

</html>
