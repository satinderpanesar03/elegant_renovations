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
    @stack('header_meta_content')
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Amka Homes">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}" />

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



    <style>
        p{
            text-align: left;
        }

        .tidio-chat-iframe body{
            width: 100%;
        }
        .awesome-iframe{
            width: 100%;
        }
    </style>



    @stack('head')
    <script type="application/ld+json">
{
     "@context": "https://schema.org",
     "@type": "GeneralContractor",
     "name": "Amka Homes",
     "image": "https://amkahomes.ca/images/hall.jpg",
     "@id": "https://amkahomes.ca/",
     "url": "https://amkahomes.ca/",
     "telephone": "16047860949",
     "address": {
          "@type": "PostalAddress",
          "streetAddress": "6690 Ashworth Ave Burnaby BC V5E 3V1 Canada Burnaby British Columbia Canada V5E 3V1",
          "addressLocality": "Burnaby British Columbia",
          "postalCode": "V5E3V1",
          "addressCountry": "CA",
          "addressRegion": "Burnaby British Columbia"
     },
     "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
               "Monday",
               "Tuesday",
               "Wednesday",
               "Thursday",
               "Friday",
               "Saturday",
               "Sunday"
          ],
          "opens": "00:00",
          "closes": "23:59"
     },
     "sameAs": [
          "https://www.instagram.com/amkahomesltd/"
     ]
}
</script>
</head>

<body>

    <div class="main-wrapper ">
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
                                    <a class="nav-link" href="{{route('user.blogs.index')}}     ">Blogs & News</a>
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
        <!-- header ends here -->

        {{-- header start --}}

        {{-- header ends --}}

        <div>
            @yield('content')
        </div>
        <footer>
            <div class="footer-content">
                <div class="row p-0 m-0">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="desc">
                            <div class="brand-logo-wrapper">
                                <img class="brand-logo" src="{{asset('user/images/amka_svg_logo.svg')}}" height="70" />
                            </div>
                            <p>
                                Welcome to Amka Homes, your trusted partner for all your home renovation needs. We are a premier home renovation company dedicated to transforming your living spaces into the epitome of style, comfort, and functionality. With a focus on home, stair, kitchen, floor, and interior and exterior renovations, we have the expertise to bring your vision to life.

                            </p>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="helpful-links">
                            <h6 class="ff-other">Helpful Links</h6>
                            <ul>
                                <li><a href="{{route("user.aboutus.index")}}" > About Us</a></li>
                                <li> <a href="{{route("user.blogs.index")}}"> Blogs </a> </li>
                                <li> <a href="{{route("user.contact.us")}}"> Contact us </a> </li>
                                <li><a href="/info/term-conditions"> Terms & Conditions  </a> </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
{{--                        <div class="helpful-links">--}}
{{--                            <h6 class="ff-other">Social Links</h6>--}}
{{--                            <ul>--}}
{{--                                <li><a href="https://www.instagram.com/amkahomesltd/" > Instagram</a></li>--}}
{{--                                <li> <a href="{{route("user.blogs.index")}}"> Blogs </a> </li>--}}
{{--                                <li> <a href="{{route("user.contact.us")}}"> Contact us </a> </li>--}}
{{--                                <li><a href="/info/term-conditions"> Terms & Conditions  </a> </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="contact-us">
                            <h6 class="ff-other">Contact Us</h6>
                            <div>{{$setting->address}}</div>
                            <div>
                                Phone: ({{$setting->country_code}}) {{$setting->phone_number}}</div>
                            <div>E-Mail: {{$setting->email}}</div>
                        </div>

                    </div>

                </div>



            </div>
            <hr>
            <p class="fs-15">&copy; 2024 Amka Homes. All Rights Reserved.</p>
        </footer>
    </div>
    <script src="//code.tidio.co/5innug7ryhvi5oxdhqkdz8oujehxcczz.js" async></script>
</body>

</html>
