<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:wght@400;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
    <title>Contact Us</title>
</head>

<body>
    <div class="contact-us main-wrapper ">
        <!-- header start here -->
        <header>
        <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <img class="brand-logo navbar-brand" src="{{asset('user/images/brand-logo.png')}}" />
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-items collapse navbar-collapse" id="collapsibleNavbar">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kitchen Renovation</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('user.kitchen.renovation.calgary')}}">Kitchen Renovation Calgary</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.kitchen.renovation.edmonton')}}">Kitchen Renovation Edmonton</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.kitchen.renovation.vancouver')}}">Kitchen Renovation Vancouver</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.kitchen.designer')}}">Kitchen Designer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">All
                                        Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Kitchen Remodeling</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.flooring.installation')}}">Flooring Installation</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.building.services')}}">Building Permits</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.basement.renovation')}}">Basement Renovations & development</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.pricing.index')}}">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.gallery.index')}}">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.aboutus.index')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.blogs.index')}}     ">Blogs</a>
                                </li>
                            </ul>
                        </div>
                        <button> <a href="contact-us.html" class="">Contact Us</a></button>
                    </div>
                </div>
            </nav>
        </header>
            <div class="contact-us header-content-wrapper">
                <div class="contact-us header-content">
                    <div class=" contact-us blog-post-detail-page header-content-detail">
                        <h2>Contact our kitchen <br>
                           <span class="text-orange">Remodelling & Renovation </span> experts</h2>                       
                    </div> 
                    <div class="contact-us d-flex ">
                        <div class="px-5 py-3 text-center">
                            <p class="mb-2 fw-500">CALGARY</p>
                            <p class="fw-300">(000) 811-1114</p>
                        </div>
                        <div class="px-5 py-3 text-center">
                            <p class="mb-2 fw-500">EDMONTON</p>
                            <p class="fw-300">(000) 811-1114</p>
                        </div>
                        <div class="px-5 py-3 text-center">
                            <p class="mb-2 fw-500">VANCOUVER</p>
                            <p class="fw-300">(000) 811-1114</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header ends here -->

        <!-- get-a-free-quote-section start here -->
        <div class="contact-us get-a-free-quote-section">
            <div class="contact-us get-a-free-quote-section-heading">
                <h2>Get A Free Quote</h2>
            </div>
            <div class="contact-us get-a-free-quote-section-content">
                <p>Contact our Kitchen renovation experts serving calgary, edmonton & vancouver</p>
                <form>
                    <div class="contact-us row">
                        <div class="contact-us col">
                            <input type="text" class="contact-us form-control" placeholder="First name" name="firstname">
                        </div>
                        <div class="contact-us col">
                            <input type="text" class="contact-us form-control" placeholder="last name" name="lastname">
                        </div>
                    </div>
                    <div class="contact-us row">
                        <div class="contact-us col">
                            <input type="text" class="contact-us form-control" placeholder="Phone no" name="phone">
                        </div>
                        <div class="contact-us col">
                            <input type="text" class="contact-us form-control" placeholder="E-mail" name="email">
                        </div>
                    </div>
                    <textarea class="contact-us form-control" placeholder="Enter your message" rows="5" id="comment"
                        name="text"></textarea>

                </form>
                <button type="submit">Submit</button>
            </div>
        </div>
        <!-- get-a-free-quote-section end here -->

        <!-- footer start here -->
        <footer class="blog-post-page">
            <div class="blog-post-page footer-content">
              <div class="blog-post-page row p-0 m-0">
                <div class="blog-post-page col-lg-5 col-md-12 col-sm-12">
                    <div class="blog-post-page desc">
                        <div class="blog-post-page brand-logo-wrapper">
                            <img class="blog-post-page brand-logo" src="{{asset('user/images/brand-logo.png')}}" height="70" />
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus itaque
                            accusamus eaque eos mollitia eius, aperiam quasi minus hic fuga maxime architecto in
                            reprehenderit delectus voluptatibus fugit? Recusandae, unde?</p>
                    </div>
  
                </div>
                <div class="blog-post-page col-lg-2 col-md-12 col-sm-12">
                    <div class="blog-post-page helpful-links">
                        <h6 class="blog-post-page ff-other">Helpful Links</h6>
                        <ul>
                            <li>About Us</li>
                            <li>Features</li>
                            <li>FAQ's</li>
                            <li>Blog</li>
                            <li>Contact</li>
                        </ul>
                    </div>
  
                </div>
                <div class="blog-post-page col-lg-2 col-md-12 col-sm-12">
  
                    <div class="blog-post-page services">
                        <h6 class="blog-post-page ff-other">Services</h6>
                        <ul>
                            <li>Worldwide</li>
                            <li>Scalable</li>
                            <li>Modular</li>
                            <li>Connectivity</li>
                            <li>Corporate</li>
                        </ul>
                    </div>
  
                </div>
                <div class="blog-post-page col-lg-3 col-md-12 col-sm-12">
                    <div class="blog-post-page contact-us">
                        <h6 class="blog-post-page ff-other">Contact Us</h6>
                        <div>455 West Orchard Street Kings Mountain, NC 28086</div>
                        <div>Phone: (272) 211-7370</div>
                        <div>E-Mail: support@yourbrand.com</div>
                    </div>
  
                </div>
  
            </div>
               
             
             
            </div>
            <hr>
            <p class="blog-post-page fs-15">&copy; 2020 KITCHEN. All Rights Reserved.</p>
        </footer>

        <!-- footer end here -->

    </div>

    <script src="./js/master.js"></script>
</body>

</html>