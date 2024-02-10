@extends('user.layouts.header2')

@section('title', 'News & Updates')
@push('header_meta_content')
    <!-- Primary Meta Tags -->
    <meta name="title" content="News & Updates" />
    <meta name="description" content="Stay informed and up-to-date with the latest happenings, developments, and announcements. Our News and Updates page is your go-to destination for fresh insights, breaking news, and exciting updates" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://amkahomes.ca/blogs" />
    <meta property="og:title" content="News & Updates" />
    <meta property="og:description" content="Stay informed and up-to-date with the latest happenings, developments, and announcements. Our News and Updates page is your go-to destination for fresh insights, breaking news, and exciting updates" />
    <meta property="og:image" content="https://amkahomes.ca/storage/image/e3VuiTAZMUQFoobVBcpebHSUq2ElhWOlDmdD31gR.webp" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://amkahomes.ca/blogs" />
    <meta property="twitter:title" content="News & Updates" />
    <meta property="twitter:description" content="Stay informed and up-to-date with the latest happenings, developments, and announcements. Our News and Updates page is your go-to destination for fresh insights, breaking news, and exciting updates" />
    <meta property="twitter:image" content="https://amkahomes.ca/storage/image/e3VuiTAZMUQFoobVBcpebHSUq2ElhWOlDmdD31gR.webp" />

    <!-- Meta Tags Generated with https://metatags.io -->
@endpush
@section('content')
<div class="blog-post-page header-content-wrapper">
    <div class="blog-post-page header-content">
        <div class="blog-post-page header-content-detail">
            <h2>News & Updates</h2>
        </div>
    </div>
</div>
<div class="blog-post-page main-content-wrapper">
    <div class="blog-post-page left-side-section">
        @foreach ($blogs as $blog)
        <div class="blog-post-page container py-2">
            <div>
              <div class="blog-post-page card border-top-0 img-rounded kitchen-renovation-and-remodelling-card-style " >
                <img class="blog-post-page card-img-top img-rounded blog-post-main-content-image" src="{{asset('storage/'.$blog->image)}}" alt="image error"
                  >
                <div class="blog-post-page card-body px-0 pb-0">
                  <p class="blog-post-page text-orange text-center fs-12">{{$blog->category->slug ?? ''}}</p>
                  <h4 class="blog-post-page text-center mb-4 " >{{$blog->title}}</h4>
                  <p class="blog-post-page text-center fs-15 line-height-2 px-1">{{substr($blog->description, 0, 100)}}</p>
                </div>
                <div class="blog-post-page card-footer text-center text-orange bg-transparent pt-0 border-bottom-0">
                 <a href="{{route('user.blog.detail.index', $blog->id)}}" class="text-decoration-none "> <p class="blog-post-page fs-20 mt-3 text-orange ">Read more &nbsp;&nbsp;&nbsp;<i class="blog-post-page fa fa-arrow-right fs-18"></i></p>
                 </a>
                </div>
              </div>

            </div>
          </div>
        @endforeach

  </div>

  </div>
@endsection
@push('head')
<script src="{{asset('js/master.js')}}"></script>

<meta name="description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />

<!-- Open Graph / Facebook -->

<meta property="og:title" content="Blogs" />
<meta property="og:description" content="Expertise and craftsmanship for all your home renovation and remodeling needs, bringing lifestyle to your living spaces." />
<meta property="og:image" content="{{asset('user/images/meta_head_amka.png')}}"  />

@endpush
