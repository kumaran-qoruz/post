@include('blog_hompage.layout.head')

<style>
    .recent_post {

        min-width: 244px;

    }

    .post_image {
        max-height: 260px;
    }

    .postshow_image {
        height: 252px;
        width: 100%;

    }

    .post_contet_height {
        min-height: 47px;
    }

    .post_view {
        text-align: justify;
    }

    .comment-list {
        position: relative;
        left: 60px;
    }

    .desc {
        position: relative;
        left: 14px;
    }

    .btn-reply1 {
        position: relative;
        float: right !important;
        top: 12px;
    }

    .reply_post {
        position: relative;
        left: 60px;
    }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>




<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street,Banglore, India</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>8695166945</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>kumaramk1999@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('user./.blog_starting_home_page') }}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('user./.blog_starting_home_page') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('user./.blog_starting_home_about_page') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('user./.blog_starting_home_service_page') }}"
                        class="nav-item nav-link">Services</a>
                    <a href="{{ route('user./.blog_starting_home_allpost') }}"
                        class="nav-item nav-link active">Blog</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">

                            <a href="{{ route('user./.blog_starting_home_feature_page') }}"
                                class="dropdown-item active">Our
                                features</a>
                            <a href="{{ route('user./.blog_starting_home_team_page') }}" class="dropdown-item">Team
                                Members</a>
                            <a href="{{ route('user./.blog_starting_home_testimonial_page') }}"
                                class="dropdown-item">Testimonial</a>
                            <a href="{{ route('user./.blog_starting_home_quote_page') }}" class="dropdown-item">Free
                                Quote</a>
                        </div>
                    </div>
                    <a href="{{ route('user./.blog_starting_home_contact_page') }}"
                        class="nav-item nav-link">Contact</a>
                </div>

            </div>
        </nav>


        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Blog Detail</h1>
                    <a href="{{ route('user./.blog_starting_home_page', $post) }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">view</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">

                        <img class="img-fluid w-100 rounded mb-5" src="/storage/{{ $post->cover_image }}" alt="">
                        <h1 class="mb-4">{{ $post->meta_description }}</h1>
                        <p class="post_view"> {{ $post->body }}</p>

                    </div>

                    <!-- Blog Detail End -->

                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">{{ $post->comments()->count() }} Comments</h3>
                        </div>
                        @foreach ($post->comments as $commentpost)
                            <div class="d-flex mb-4">
                                <img src="{{ asset('design/img/user.jpg') }}" class="img-fluid rounded"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6><a href="">{{ $commentpost->name }}</a>
                                        <small><i></i>{!! date('d M ,Y', strtotime($commentpost->created_at)) !!}</i></small>
                                    </h6>
                                    <p>{{ $commentpost->comment }}</p>


                                    <button class="btn-reply btn-light" id="reply-btn"
                                        onclick="showReplyForm('{{ $commentpost->id }}','{{ Auth::user()->name }}')">Reply
                                    </button>

                                </div>
                            </div>

                            @foreach ($commentpost->replies as $reply)
                                <div class="d-flex mb-4 reply_post">
                                    <img src="{{ asset('design/img/user.jpg') }}" class="img-fluid rounded"
                                        style="width: 45px; height: 45px;">
                                    <div class="ps-3">
                                        <h6><a href="">{{ Auth::user()->name }}</a>
                                            <small><i></i>{!! date('d M ,Y', strtotime($commentpost->created_at)) !!}</i></small>
                                        </h6>
                                        <p>{{ $reply->message }}</p>


                                        <button class="btn-reply btn-light" id="reply-btn"
                                            onclick="showReplyForm('{{ $reply->id }}','{{ Auth::user()->name }}')">Reply
                                        </button>

                                    </div>
                                </div>
                            @endforeach

                            <div class="comment-list left-padding" id="reply-form-{{ $commentpost->id }}"
                                style="display: none">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('design/img/user.jpg') }}" alt="" width="43px" />
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">{{ Auth::user()->name }}</a></h5>
                                            <p class=" date">{{ date('D, d M Y H:i') }}</p>
                                            <div class="row flex-row d-flex">
                                                <form action="{{ route('user./.reply.store', $commentpost->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="col-lg-12">
                                                        <textarea id="{{ $commentpost->id }}" cols="60" rows="2" class="form-control mb-10" name="message"
                                                            placeholder="Messege" onfocus="this.placeholder = ''"
                                                            onblur="this.placeholder = 'Messege'"
                                                            required=""></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn-reply1 btn-light ml-3">Reply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>



                    <!-- Comment List End -->

                    <!-- Comment Form Start -->

                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave A Comment</h3>
                        </div>


                        <form action="{{ route('user./.comment.store', $post->id) }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" name="name"
                                        placeholder="Your Name" style="height: 55px;">

                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" name='email'
                                        placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Website"
                                        name="website" style="height: 55px;">
                                </div>
                                <div class="col-12">

                                    <textarea class="form-control bg-white border-0" rows="5" name="comment" placeholder="Comment"></textarea>

                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">submit Your
                                        Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        @foreach ($categories as $category)
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i
                                        class="bi bi-arrow-right me-2"></i>{{ $category->name }}</a>
                        @endforeach
                    </div>

                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>

                        @foreach ($recentposts as $recentpost)
                            <div class="d-flex rounded overflow-hidden mb-3 recent_post">
                                <img class="img-fluid" src="/storage/{{ $recentpost->cover_image }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{ route('user./.blog_starting_home_post_view', $post) }}"
                                    class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0 recent_post">{{ $recentpost->meta_description }}

                                </a>
                            </div>
                        @endforeach


                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('design/img/blog-1.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        @foreach ($tags as $tag)
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-light m-1">{{ $tag->name }}</a>

                            </div>
                        @endforeach
                    </div>
                    <!-- Tags End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('design/img/vendor-1.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-2.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-3.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-4.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-5.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-6.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-7.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-8.jpg') }}" alt="">
                    <img src="{{ asset('design/img/vendor-9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet
                            eos
                            sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet
                            et
                            kasd eos duo.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_about_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_service_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_team_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_allpost') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light"
                                    href="{{ route('user./.blog_starting_home_contact_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('user./.blog_starting_home_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_about_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_service_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our
                                    Services</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_team_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2"
                                    href="{{ route('user./.blog_starting_home_allpost') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light"
                                    href="{{ route('user./.blog_starting_home_contact_page') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site
                            Name</a>.
                        All Rights Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



@include('blog_hompage.layout.head')



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function showReplyForm(commentId, user) {
        var x = document.getElementById(`reply-form-${commentId}`);
        var input = document.getElementById(`reply-form-${commentId}-text`);

        if (x.style.display === "none") {
            x.style.display = "block";
            input.innerText = `@${user} `;

        } else {
            x.style.display = "none";
        }
    }
</script>
