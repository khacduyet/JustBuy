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
                    <div class="col-lg-9 order-lg-2 mb--40 mb-lg--0">
                        <div class="blog-list-cards">
                            @foreach($blog as $blg)
                            <div class="blog-card card-style-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="{{route('blog-detail',['id'=>$blg->id])}}" class="image d-block">
                                            <img src="client/image/others/{{$blg -> image}}" alt="">
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
                                                    {{$blg -> content}}
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
                                    <input type="text" placeholder="Search">
                                    <button><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="single-block">
                                <h2 class="sidebar-title mb--30">BLOG ARCHIVES</h2>
                                <ul class="sidebar-list mb--30">
                                    <li><a href="#"> March 2015 (1)</a></li>
                                    <li><a href="#">December 2014 (3)</a></li>
                                    <li> <a href="#">November 2014 (4)</a></li>
                                    <li><a href="#">September 2014 (1)</a></li>
                                    <li><a href="#">August 2014 (1)</a></li>
                                </ul>
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
                            <div class="single-block ">
                                <h2 class="sidebar-title mb--30">Tags</h2>
                                <ul class="sidebar-tag-list">
                                    <li><a href="#"> Chilled</a></li>
                                    <li><a href="#">Dark</a></li>
                                    <li> <a href="#">Euro</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Hat</a></li>
                                    <li><a href="#">Hipster</a></li>
                                    <li><a href="#">Holidays</a></li>
                                    <li><a href="#">Light</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Place</a></li>
                                    <li><a href="#">T-Shirt</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Video-2</a></li>
                                    <li><a href="#">White</a></li>
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


@endsection