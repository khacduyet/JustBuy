@extends('client.layouts.layout')
@section('content')
@section('title',"Blog Detail")
	
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Blog Details</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<section class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 order-lg-2 mb--40 mb-lg--0">
						<div class="blog-post post-details mb--50">
							<div class="blog-image">
								<img src="{{$blog -> image }}" alt="">
							</div>
							<div class="blog-content mt--30">
								<header>
									<h3 class="blog-title"> {{$blog -> title}}</h3>
									<div class="post-meta">
										<span class="post-author">
											<i class="fas fa-user"></i>
											<span class="text-gray">Posted by : </span>
											{{$blog -> user_id }}
										</span>
										<span class="post-separator">|</span>
										<span class="post-date">
											<i class="far fa-calendar-alt"></i>
											<span class="text-gray">On : </span>
											{{$blog -> created_at }}
										</span>
									</div>
								</header>
								<article>
									{!! $blog -> content !!}
								</article>
								<footer class="blog-meta">
									<div> <a href="#">3 comments </a> / TAGS: <a href="#">fashion</a>, <a
											href="#">t-shirt</a>, <a href="#">white</a></div>
								</footer>
							</div>
						</div>
						<div class="share-block mb--50">
							<h3>Share Now</h3>
							<div class="social-links  justify-content-center  mt--10">
								<a href="#" class="single-social social-rounded"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-twitter"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-pinterest-p"></i></a>
								<a href="#" class="single-social social-rounded"><i
										class="fab fa-google-plus-g"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
						<div class="comment-block-wrapper mb--50">
							<div class="fb-comments" data-href="http://127.0.0.1:8000/blog/{{$blog -> title}}" data-width="100%" data-numposts="5"></div>
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