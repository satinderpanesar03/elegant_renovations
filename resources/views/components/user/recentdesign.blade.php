
<div class="our-recent-kitchens-design-section-wrapper">
    <div class="our-recent-kitchens-design-section-heading">
        <h2>Our Recent Kitchen Designs</h2>
        <div class="below-heading-line"></div>
    </div>
    <div class="our-recent-kitchens-design-section-content">
            <div class="row">


                    @if($designData!=null)
                        @foreach($designData as $designItem)
                        <div class="col-md-6 mb-3">
                            <div class="our-recent-kitchens-design-section-content-card-1  shadow-lg p-4"  >
                                            <div class="img-wrapper" style="max-height: 400px; overflow: hidden;" >
                                                <img src="{{asset('storage/'.$designItem->image)}}" class="img-fluid"  >
                                            </div>
                                    <div class=" ">
                                                <div class="desc-wrapper">
                                                    <p>{{substr($designItem->title, 0, 30)}}...</p>
                                                    <label>{{substr($designItem->meta_description, 0, 30)}}...</label>
                                                </div>
                                                <div class="btn-wrapper">
                                                  <button class="btn btn-warning mt-2 mb-2">
                                                        <a href="{{route('user.recent.design.listing', $designItem->id)}}" class="text-decoration-none   text-white"> See the design <img src="{{asset('user/images/orange-arrow.png.png')}}"  style="height: 20px;" alt=""> </a></button>
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
