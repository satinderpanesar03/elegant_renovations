@extends('user.layouts.header2')

@section('title', 'Blogs')

@section('content')

<div class="blog-post-page main-content-wrapper" style="margin-top: 100px;">
    <div class="blog-post-page left-side-section">
        <h2>{{$record->title}}</h2>
        <hr/>
         {!! $record->description !!}

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
