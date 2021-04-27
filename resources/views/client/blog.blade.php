@extends('client.layouts.layout')
@section('content')
@section('title',"Blog")
		
		<section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-2 mb--40 mb-lg--0" >
                        <div class="blog-list-cards" id="filterResult">
                            @foreach($blog as $blg)
                            <div class="blog-card card-style-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="{{route('blog-detail',['id'=>$blg->id])}}" class="image d-block">
                                            <img src="{{$blg -> image }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-content">
                                            <h3 class="title">
                                                <a href="{{route('blog-detail',['id'=>$blg->id])}}"> {{$blg -> title}} </a>
                                            </h3>
                                            <p class="post-meta"><span>{{$blg -> created_at}} </span> | <a href="#">{{$blg -> user_id }}</a></p>
                                            <article>
                                                <h2 class="sr-only">
                                                    Blog Article
                                                </h2>
                                                <p class="row-2">
                                                    {!!$blg -> content!!}
                                                </p>
                                                <a href="{{route('blog-detail',['id'=>$blg->id])}}" class="blog-link">Read More</a>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="inner-page-sidebar">
                            <div class="single-block">
                                <h2 class="sidebar-title mb--30">Search</h2>
                                <div class="site-mini-search">
                                    <input type="text" placeholder="Search" id="keySearchBlog">
                                    <button><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="single-block ">
                                <h2 class="sidebar-title mb--30">RECENT POSTS</h2>
                                <ul class="sidebar-list">
                                    <li><a href="#"> Blog image post</a></li>
                                    <li><a href="#">Post with Gallery</a></li>
                                    <li> <a href="#">Post with Audio</a></li>
                                    <li><a href="#">Post with Video</a></li>
                                    <li><a href="#">Maecenas ultricies</a></li>
                                </ul>
                            </div>
                            <!-- Promo Block -->
                            <div class="single-block">
                                <a href="#" class="promo-image sidebar">
                                    <img src="client/image/others/home-side-promo.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<script>
    $(document).ready(function() {
        $("#keySearchBlog").on("keyup", function() {
            var nameBlog = $(this).val();
            $.get('/search-blog/' + nameBlog, function(data) {
                $("#filterResult").html(data);
            })
            alert("dsds")
        });
    });
</script>
@endsection