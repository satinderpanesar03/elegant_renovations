<div class="latest-blog-posts-section-wrapper">
    <div class="latest-blog-posts-section-heading">
        <h2>Latest Updates </h2>
        <div class="below-heading-line"></div>
    </div>

    <div class="latest-blog-posts-section-content">
        <div class="latest-blog-posts-section-content-cards">
            @foreach ($blogs as $blog)
            <div class="card-1 card">
                <a href="{{route('user.blog.detail.index', $blog->id)}}" class="text-decoration-none ">
                <div class="img" style="background: url({{asset('storage/'.$blog->image)}})"></div>
                </a>
                <span>{{$blog->title}}</span>
                <a href="{{route('user.blog.detail.index', $blog->id)}}" class="text-decoration-none "> <p>{{$blog->title}}</p></a>
            </div>
            @endforeach


        </div>
        <div class="latest-blog-posts-section-content-btn">
            <button><a href="{{route('user.blogs.index')}}" class="text-decoration-none text-dark">View more</a></button>
        </div>
    </div>
</div>
