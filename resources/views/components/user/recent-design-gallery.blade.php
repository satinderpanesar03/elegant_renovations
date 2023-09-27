<div>
    @extends('user.layouts.header')

@section('title', 'Welcome')

@section('content')


    <div class="container recent-kitchen-margin-top mt-5" >
        <br/> <br/>
        @foreach ($designData->gallery as $item)
        <h1 class="text-center mb-4 mt-4"> {{$designData->title}} </h1>

<div class="gg-container mt-4" >
    <div class="gg-box">
                <img src="{{asset($item->image)}}"  />
    </div>
    </div>
@endforeach


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


</div>
