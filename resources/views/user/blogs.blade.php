@extends('user.layouts.header2')

@section('title', 'Blogs')

@section('content')
<div class="blog-post-page header-content-wrapper">
    <div class="blog-post-page header-content">
        <div class="blog-post-page header-content-detail">
            <h2>Blog Posts</h2>
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

                 <a href="{{route('user.blog.detail.index', $blog->id)}}" class="text-decoration-none "> <p class="blog-post-page fs-20 mt-3 text-orange ">Read more &nbsp;&nbsp;&nbsp;<i class="blog-post-page fa fa-arrow-right fs-18"></i></p></a>

                </div>
              </div>

            </div>
          </div>
        @endforeach

  </div>
  {{-- <div class="blog-post-page right-side-section">
    <aside id="popularPost" class="blog-post-page  py-3 " >
      <div class="blog-post-page card  img-rounded w-100 ">
        <h5 class="blog-post-page text-center pt-3"><b>Popular Posts</b></h5>
        <hr class="blog-post-page mx-3 mt-0">
        <img class="blog-post-page card-img-top img-rounded border-radius-20px px-3 w-100" src="./images/Kitchen-Design-1.png" alt="image error"
          height="160">
        <div class="blog-post-page card-body px-3 pb-0">
          <p class="blog-post-page text-orange fs-12 mb-2 "><b>KITCHEN RENOVATION</b></p>
          <p class="blog-post-page fs-12 fw-600">5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE BETTER THAN STOCK CABINETS</p>

          <div class="blog-post-page row mt-5">
            <div class="blog-post-page col-6 ">
              <img class="blog-post-page rounded blog-post-popular-post-images" src="./images/Kitchen-Design-1.png" alt="image error"
               >

            </div>
            <div class="blog-post-page col-6 p-0 line-height-1-5 py-1">
              <p class="blog-post-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
              <p class="blog-post-page fs-11 fw-600">5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE BETTER THAN STOCK CABINETS</p>

            </div>
          </div>
          <hr class="blog-post-page popular-post-hr mt-2">
          <div class="blog-post-page row mt-2">
            <div class="blog-post-page col-6 ">
              <img class="blog-post-page rounded blog-post-popular-post-images " src="./images/Kitchen-Design-1.png" alt="image error"
                >

            </div>
            <div class="blog-post-page col-6 p-0 line-height-1-5 py-1">
              <p class="blog-post-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
              <p class="blog-post-page fs-11 fw-600">5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE BETTER THAN STOCK CABINETS</p>

            </div>
          </div>
          <hr class="blog-post-page popular-post-hr mt-2">
          <div class="blog-post-page row mt-2">
            <div class="blog-post-page col-6 ">
              <img class="blog-post-page rounded blog-post-popular-post-images " src="./images/Kitchen-Design-1.png" alt="image error"
                >

            </div>
            <div class="blog-post-page col-6 p-0 line-height-1-5 py-1">
              <p class="blog-post-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
              <p class="blog-post-page fs-11 fw-600">5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE BETTER THAN STOCK CABINETS</p>

            </div>
          </div>
          <hr class="blog-post-page popular-post-hr mt-2">
          <div class="blog-post-page row mt-2">
            <div class="blog-post-page col-6 ">
              <img class="blog-post-page rounded blog-post-popular-post-images " src="./images/Kitchen-Design-1.png" alt="image error"
                >

            </div>
            <div class="blog-post-page col-6 p-0 line-height-1-5 py-1">
              <p class="blog-post-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
              <p class="blog-post-page fs-11 fw-600">5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE BETTER THAN STOCK CABINETS</p>

            </div>
          </div>

        </div>

      </div>

    </aside>
  </div> --}}
  </div>
@endsection
@push('head')
<script src="{{asset('js/master.js')}}"></script>
@endpush
