
    <div class="col-lg-3 ml-5 mt-5 right-aligned" id="terbaru">
        <h3>New Post</h3>
        @foreach ($terbaru as $ter)
        <div class="d-flex align-items-start border-bottom mb-3 pb-2" style="width:400px;">
            @if ( $ter->image)
            <img src="{{ asset('storage/' .$ter->image) }}" alt="user_comments" class="img-fluid rounded me-3" width="80" height="80">
            @else
            <img src="https://source.unsplash.com/80x80?{{ $ter->category->name }}" alt="{{ $post->category->name }}" class="img-fluid rounded me-3">
            @endif
            <div>
                <div class="text-secondary mb-2">
                    <h4>{{ $ter->title }}</h4>
                    <p>
                        By: <a href="/posts?author={{ $ter->author->username }}" class="text-decoration-none">{{ $ter->author->name }}</a> in <a href="/posts?category={{ $ter->category->slug }}" class="text-decoration-none">{{ $ter->category->name }}</a>
                    </p>
                </div>
                <div class="mb-2">
                    <a class="badge bg-primary text-decoration-none" href="/posts/{{ $ter->slug }}"><i class="bi bi-eye-fill"></i> Read</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
