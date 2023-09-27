<div class="blog-post-detail-page right-side-section">
    <aside id="popularPost" class="blog-post-detail-page  py-3 ">
        <div class="blog-post-detail-page card  img-rounded w-100 ">
            <h5 class="blog-post-detail-page text-center pt-3"><b>Popular Posts</b></h5>
            <hr class="blog-post-detail-page mx-3 mt-0">
            <img class="blog-post-detail-page card-img-top img-rounded border-radius-20px px-3 w-100"
                 src="/user/images/gif/amk.gif" alt="image amka homes" height="160">
            <div class="blog-post-detail-page card-body px-3 pb-0">
                <p class="blog-post-detail-page text-orange fs-12 mb-2 "><b>AMKA HOMES</b></p>
                <p class="blog-post-detail-page fs-12"><b>Read More About the Homes Renovations</b></p>
                @foreach ($blogs as $blog)
                <div class="blog-post-detail-page row mt-5">
                    <div class="blog-post-detail-page col-6 pl-0">
                        <img class="blog-post-detail-page rounded blog-post-popular-post-images"
                             src="{{asset('storage/'.$blog->image)}}" alt="image Amka">
                    </div>
                    <div class="blog-post-detail-page col-6 p-0 line-height-1-5">
                        <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>AMKA HOMES</b></p>
                        <p class="blog-post-detail-page fs-11"><b>{{$blog->title}}</b></p>

                    </div>
                </div>
                <hr class="blog-post-detail-page popular-post-hr mt-2">
                @endforeach
{{--                <div class="blog-post-detail-page row mt-2">--}}
{{--                    <div class="blog-post-detail-page col-6 pl-0">--}}
{{--                        <img class="blog-post-detail-page rounded blog-post-popular-post-images "--}}
{{--                             src="./images/Kitchen-Design-1.png" alt="image error">--}}

{{--                    </div>--}}
{{--                    <div class="blog-post-detail-page col-6 p-0 line-height-1-5">--}}
{{--                        <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>--}}
{{--                        <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE--}}
{{--                                BETTER THAN STOCK CABINETS</b></p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr class="blog-post-detail-page popular-post-hr mt-2">--}}

{{--                <div class="blog-post-detail-page row mt-2">--}}
{{--                    <div class="blog-post-detail-page col-6 pl-0">--}}
{{--                        <img class="blog-post-detail-page rounded blog-post-popular-post-images "--}}
{{--                             src="./images/Kitchen-Design-1.png" alt="image error">--}}

{{--                    </div>--}}
{{--                    <div class="blog-post-detail-page col-6 p-0 line-height-1-5">--}}
{{--                        <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>--}}
{{--                        <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE--}}
{{--                                BETTER THAN STOCK CABINETS</b></p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr class="blog-post-detail-page popular-post-hr mt-2">--}}

{{--                <div class="blog-post-detail-page row mt-2">--}}
{{--                    <div class="blog-post-detail-page col-6 pl-0">--}}
{{--                        <img class="blog-post-detail-page rounded blog-post-popular-post-images "--}}
{{--                             src="./images/Kitchen-Design-1.png" alt="image error">--}}

{{--                    </div>--}}
{{--                    <div class="blog-post-detail-page col-6 p-0 line-height-1-5">--}}
{{--                        <p class="blog-post-detail-page text-orange fs-11 mb-2"><b>KITCHEN RENOVATION</b></p>--}}
{{--                        <p class="blog-post-detail-page fs-11"><b>5 REASONS WHY CUSTOMERS KITCHEN CABINETS ARE--}}
{{--                                BETTER THAN STOCK CABINETS</b></p>--}}

{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>

    </aside>
</div>
