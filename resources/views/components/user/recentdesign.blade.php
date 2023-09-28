
<div class="our-recent-kitchens-design-section-wrapper">
    <div class="our-recent-kitchens-design-section-heading">
        <h2>Our Recent Kitchen Designs</h2>
        <div class="below-heading-line"></div>
    </div>
    <div class="our-recent-kitchens-design-section-content">
            <div class="row">


                    @if($designData!=null)
                        @foreach($designData as $designItem)
                        <div class="col-md-6">
                            <div class="our-recent-kitchens-design-section-content-card-1">
                                            <div class="img-wrapper" >
                                                <img src="{{asset('storage/'.$designItem->image)}}" class="img-fluid" style="max-height: 400px;">
                                            </div>
                                    <div class="detail-wrapper">
                                                <div class="desc-wrapper">
                                                    <p>{{substr($designItem->title, 0, 30)}}</p>
                                                    <label>{{substr($designItem->meta_description, 0, 30)}}</label>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <p><a href="{{route('user.recent.design.listing', $designItem->id)}}" class="btn btn-default   text-dark"> See the design</a></p>
                                                    <img src="{{asset('user/images/orange-arrow.png.png')}}" alt="">
                                                </div>
                                    </div>
                            </div>
                        </div>
                            @endforeach
                            @endif

            </div>



{{--        DONT DELETE THIS , NEED TO REVIEW IN FUTURE--}}
{{--        <div class="our-recent-kitchens-design-section-content-btn-wrapper">--}}
{{--            <button>View more</button>--}}
{{--        </div>--}}
    </div>
</div>
