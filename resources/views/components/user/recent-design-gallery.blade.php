@extends('user.layouts.header')
@section('title',$designData->title)

@section('content')


    <div class="container recent-kitchen-margin-top mt-5" >

        <h1 class="text-center mb-4 mt-4"> {{$designData->title}} </h1>
                <div class="gg-container" >
                    <div class="gg-box">
                        @foreach ($designData->gallery as $item)
                                <img src="{{asset('/storage/'.$item->image)}}"   />
                        @endforeach
                    </div>
                </div>
    </div>




               <div style="height: 600px;">

               </div>
                  <!-- get-a-free-quote-section start here -->
                  <x-User.Getquote/>
                  <!-- get-a-free-quote-section end here -->
        <script src="{{asset('js/grid-gallery.min.js')}}"></script>
@endsection


@push('head')
    <link rel="stylesheet" href="/css/grid-gallery.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="{{asset('js/master.js')}}"></script>


    <meta name="title" content="{{$designData->meta_title}}">
    <meta name="description" content="{{$designData->meta_description}}">
    <meta name="keywords" content="{{$designData->mata_keyword}}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Amka Homes">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}" />
    <meta property="og:title" content="{{$designData->meta_title}}" />
    <meta property="og:description" content="{{$designData->meta_description}}" />
    <meta property="og:image" content="{{asset('storage/'.$designData->image)}}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{\Illuminate\Support\Facades\URL::current()}}" />
    <meta property="twitter:title" content="{{$designData->meta_title}}" />
    <meta property="twitter:description" content="{{$designData->meta_description}}" />
    <meta property="twitter:image" content="{{asset('storage/'.$designData->image)}}" />

    <!-- Meta Tags Generated with https://metatags.io -->


@endpush
