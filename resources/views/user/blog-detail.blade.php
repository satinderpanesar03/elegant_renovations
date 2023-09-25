@extends('user.layouts.header2')

@section('title', 'Blog Detail')

@section('content')
    <style>
        p{
            font-size: 12px;
            font-family: Cardo;

        }
    </style>
        <div class="blog-post-detail-page main-content-wrapper">
            <div class="blog-post-detail-page left-side-section">
                <div class="blog-post-detail-page container py-2">
                    <div>
                        <div
                            class="blog-post-detail-page card border-top-0 img-rounded kitchen-renovation-and-remodelling-card-style ">
                            <img class="blog-post-detail-page card-img-top img-rounded blog-post-main-content-image"
                                src="{{asset('storage/'.$blog->image)}}" alt="image error">
                        </div>
                    </div>

                    <div class="blog-post-detail-page desc-wrapper px-0 pb-0">
                        <p class="blog-post-detail-page text-orange fs-12">{{date('d-m-Y',strtotime($blog->created_at))}}</p>
                        <h4 class="blog-post-detail-page desc-heaing ">{{$blog->title}}</h4>
                        <p class="blog-post-detail-page fs-15 desc-sub-heading line-height-2">
                            {{$blog->description}}
                        <div class="blog-post-detail-page desc-footer pt-2 border-bottom-0">
                            <p>Tags:</p>
                            <p> {{$blog->keywords}}</p>
                        </div>
                        <div>
                            {!! $blog->body  !!}
                        </div>
                    </div>

                </div>
            </div>
            <x-User.Blogside/>
        </div>
@endsection
@push('head')
    <script src="{{ asset('js/master.js') }}"></script>
@endpush
