<div class="latest-blog-posts-section-wrapper">
    <div class="latest-blog-posts-section-heading">
        <h2>Latest Blog Posts</h2>
        <div class="below-heading-line"></div>
    </div>

    <div class="latest-blog-posts-section-content">
        <div class="latest-blog-posts-section-content-cards">
            @foreach ($blogs as $blog)
            <div class="card-1 card">
                <div class="img" style="background: url({{asset('storage/'.$blog->image)}})"></div>
                <span>{{$blog->title}}</span>
                <p>{{$blog->title}}</p>
            </div>
            @endforeach


        </div>
        <div class="latest-blog-posts-section-content-btn">
            <button><a href="{{route('user.blogs.index')}}" class="text-decoration-none text-dark">View more</a></button>
        </div>
    </div>
</div>
