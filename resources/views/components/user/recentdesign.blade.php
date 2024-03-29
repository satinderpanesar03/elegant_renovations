
<div class="our-recent-kitchens-design-section-wrapper">
    <div class="our-recent-kitchens-design-section-heading">
        <h2>New Home Construction</h2>
        <div class="below-heading-line"></div>
    </div>
    <div class="our-recent-kitchens-design-section-content">
            <div class="row d-flex justify-content-center">


                    @if($designData!=null)
                        @foreach($designData as $designItem)
                        <div class="col-md-6 mb-3">
                            <div class="our-recent-kitchens-design-section-content-card-1  shadow-lg p-4"  >
                                            <div class="img-wrapper" style="max-height: 400px; overflow: hidden;" >
                                                <img src="{{asset('storage/'.$designItem->image)}}" class="img-fluid"  >
                                            </div>
                                    <div class=" ">
                                                <div class="desc-wrapper">
                                                    <h4 class="font-weight-bold p-2 mt-3">{{$designItem->title}}</h4>
                                                    <label>{{substr($designItem->meta_description, 0, 100)}}...</label>
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
