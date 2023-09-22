@extends('user.layouts.header2')

@section('title', 'Blog Detail')

@section('content')
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
                            <p>Lorem ispum - Lorem ispum - Lorem ispum - Lorem ispum - Lorem ispum</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="blog-post-detail-page right-side-section">
                <aside id="popularPost" class="blog-post-detail-page  py-3 ">
                    <div class="blog-post-detail-page card  img-rounded w-100 ">
                        <h5 class="blog-post-detail-page text-center pt-3"><b>Popular Posts</b></h5>
                        <hr class="blog-post-detail-page mx-3 mt-0">
                        <img class="blog-post-detail-page card-img-top img-rounded border-radius-20px px-3 w-100"
                            src="./images/Kitchen-Design-1.png" alt="image error" height="160">
                        <div class="blog-post-detail-page card-body px-3 pb-0">
                            <p class="blog-post-detail-page text-orange fs-12 mb-2 "><b>KITCHEN RENOVATION</b></p>
                            <p class="blog-post-detail-page fs-12"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE BETTER
                                    THAN STOCK CABINETS</b></p>

                            <div class="blog-post-detail-page row mt-5">
                                <div class="blog-post-detail-page col-6 pl-0">
                                    <img class="blog-post-detail-page rounded blog-post-popular-post-images"
                                        src="./images/Kitchen-Design-1.png" alt="image error">

                                </div>
                                <div class="blog-post-detail-page col-6 p-0 line-height-1-5">
                                    <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
                                    <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE
                                            BETTER THAN STOCK CABINETS</b></p>

                                </div>
                            </div>
                            <hr class="blog-post-detail-page popular-post-hr mt-2">
                            <div class="blog-post-detail-page row mt-2">
                                <div class="blog-post-detail-page col-6 pl-0">
                                    <img class="blog-post-detail-page rounded blog-post-popular-post-images "
                                        src="./images/Kitchen-Design-1.png" alt="image error">

                                </div>
                                <div class="blog-post-detail-page col-6 p-0 line-height-1-5">
                                    <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
                                    <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE
                                            BETTER THAN STOCK CABINETS</b></p>

                                </div>
                            </div>
                            <hr class="blog-post-detail-page popular-post-hr mt-2">
                            <div class="blog-post-detail-page row mt-2">
                                <div class="blog-post-detail-page col-6 pl-0">
                                    <img class="blog-post-detail-page rounded blog-post-popular-post-images "
                                        src="./images/Kitchen-Design-1.png" alt="image error">

                                </div>
                                <div class="blog-post-detail-page col-6 p-0 line-height-1-5">
                                    <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
                                    <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE
                                            BETTER THAN STOCK CABINETS</b></p>

                                </div>
                            </div>
                            <hr class="blog-post-detail-page popular-post-hr mt-2">
                            <div class="blog-post-detail-page row mt-2">
                                <div class="blog-post-detail-page col-6 pl-0">
                                    <img class="blog-post-detail-page rounded blog-post-popular-post-images "
                                        src="./images/Kitchen-Design-1.png" alt="image error">

                                </div>
                                <div class="blog-post-detail-page col-6 p-0 line-height-1-5">
                                    <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>
                                    <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE
                                            BETTER THAN STOCK CABINETS</b></p>

                                </div>
                            </div>

                        </div>

                    </div>

                </aside>
            </div>
        </div>
@endsection
@push('head')
    <script src="{{ asset('js/master.js') }}"></script>
@endpush
