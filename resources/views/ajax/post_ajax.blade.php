@foreach ($posts as $post)
    <div class="col-md-6 wow slideInUp" id="post-filter" data-wow-delay="0.1s">
        <div class="blog-item bg-light rounded overflow-hidden">
            <div class="blog-img position-relative overflow-hidden post_image">
                <img class="img-fluid postshow_image" src="/storage/{{ $post->cover_image }}" alt="">
                <a class="position-absolute  post_category top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                    href="">{{ $post->category_name }}</a>
            </div>
            <div class="p-4 post_contet_width">
                <div class="d-flex mb-3">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $post->author_name }}
                    </small>
                    <small><i class="far fa-calendar-alt text-primary me-2"></i>{!! date('d M ,Y', strtotime($post->created_at)) !!}</small>
                </div>
                <h4 class="mb-3">{{ $post->title }}</h4>
                <p class="post_contet_height">{{ $post->meta_description }}</p>
                <a class="text-uppercase" href="{{ route('user./.blog_starting_home_post_view', $post) }}">Read
                    More
                    <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endforeach
