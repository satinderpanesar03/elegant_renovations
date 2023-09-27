@extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')


    <div class="container recent-kitchen-margin-top mt-5" >
        <br/> <br/>
        <h1 class="text-center mb-4 mt-4"> 6690 Ashworth Ave </h1>

                  <div class="gg-container mt-4" >
                  <div class="gg-box">
                      @for($i=1;$i<=40  ;$i++)

                              <img src="{{asset('user/images/gallery/g1/g'.$i.'.jpg')}}"  />

                      @endfor
                  </div>
                  </div>

    </div>


    <div class="container recent-kitchen-margin-top mt-5" >
        <br/> <br/>
        <h1 class="text-center mb-4 mt-4">5938 Leibly Ave </h1>

        <div class="gg-container mt-4" >
            <div class="gg-box">
                @for($i=1;$i<=31  ;$i++)

                    <img src="{{asset('user/images/gallery/g2/g2_'.$i.'.jpg')}}"  />

                @endfor
            </div>
        </div>

    </div>
                  <!-- latest-blog-posts-section start here -->
                  <x-User.Homeblog/>
                  <!-- latest-blog-posts-section end here -->

                  <!-- get-a-free-quote-section start here -->
                  <x-User.Getquote/>
                  <!-- get-a-free-quote-section end here -->
        <script src="{{asset('js/grid-gallery.min.js')}}"></script>
@endsection


@push('head')
    <link rel="stylesheet" href="css/grid-gallery.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="{{asset('js/master.js')}}"></script>

@endpush

