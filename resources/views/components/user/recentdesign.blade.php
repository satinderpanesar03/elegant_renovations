
<div class="our-recent-kitchens-design-section-wrapper">
    <div class="our-recent-kitchens-design-section-heading">
        <h2>Our Recent Kitchen Designs</h2>
        <div class="below-heading-line"></div>
    </div>
    <div class="our-recent-kitchens-design-section-content">
        @foreach($designData as $design)
        <div class="our-recent-kitchens-design-section-content-card-1">
            <div class="img-wrapper" >
            <img src="{{asset('storage/'.$design->image)}}" class="img-fluid">
            </div>
            <div class="detail-wrapper">
                <div class="desc-wrapper">
                    <p>{{$design->title}}</p>
                    <label>{{$design->meta_description}}</label>
                </div>
                <div class="btn-wrapper">
                    <p><a href="{{route('user.recent.design.listing', $design->id)}}" class="text-decoration-none text-dark"> See the design</a></p>
                    <img src="{{asset('user/images/orange-arrow.png.png')}}" alt="">
                </div>
            </div>
        </div>{{asset('user/images/orange-arrow.png.png')}}
        @endforeach

        <div class="our-recent-kitchens-design-section-content-btn-wrapper">
            <button>View more</button>
        </div>
    </div>
</div>
