@extends('client.layouts.layout')
@section('content')
@section('title',"Shop")

<section class="breadcrumb-section">
	<h2 class="sr-only">Site Breadcrumb</h2>
	<div class="container">
		<div class="breadcrumb-contents">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					<li class="breadcrumb-item active">Shop</li>
				</ol>
			</nav>
		</div>
	</div>
</section>
<main class="inner-page-sec-padding-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 order-lg-2">
				<div class="shop-toolbar with-sidebar mb--30">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 col-sm-6  mt--10 mt-sm--0">
							<span class="toolbar-status">
								Showing 1 to 9 of 14 (2 Pages)
							</span>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
							<div class="sorting-selection">
								<span>Show:</span>
								<select class="form-control nice-select sort-select" id="showProduct">
									<option value="6" selected>6</option>
									<option value="9">9</option>
									<option value="12">12</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								<span>Sort By:</span>
								<select class="form-control nice-select sort-select mr-0" id="sortProductSelection">
									<option value="" selected="selected">Default Sorting</option>
									<option value="1">Sort
										By:Name (A - Z)</option>
									<option value="2">Sort
										By:Name (Z - A)</option>
									<option value="3">Sort
										By:Price (Low &gt; High)</option>
									<option value="4">Sort
										By:Price (High &gt; Low)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-toolbar d-none">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-6">
							<!-- Product View Mode -->
							<div class="product-view-mode">
								<a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
								<a href="#" class="sorting-btn" data-target="grid-four">
									<span class="grid-four-icon">
										<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
									</span>
								</a>
								<a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
							</div>
						</div>
						<div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
							<span class="toolbar-status">
								Showing 1 to 9 of 14 (2 Pages)
							</span>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
							<div class="sorting-selection">
								<span>Show:</span>
								<select class="form-control nice-select sort-select">
									<option value="" selected="selected">3</option>
									<option value="">9</option>
									<option value="">10</option>
									<option value="">12</option>
								</select>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
							<div class="sorting-selection">
								<span>Sort By:</span>
								<select class="form-control nice-select sort-select mr-0">
									<option value="" selected="selected">Default Sorting</option>
									<option value="1">Sort
										By:Name (A - Z)</option>
									<option value="2">Sort
										By:Name (Z - A)</option>
									<option value="">Sort
										By:Price (Low &gt; High)</option>
									<option value="3">Sort
										By:Price (High &gt; Low)</option>
									<option value="4">Sort
										By:Rating (Highest)</option>
									<option value="5">Sort
										By:Rating (Lowest)</option>
									<option value="6">Sort
										By:Model (A - Z)</option>
									<option value="">Sort
										By:Model (Z - A)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border" id="filterResult">
					<div class="col-lg-4 col-sm-6">
						<div class="product-card">
							<div class="product-grid-content">
								<div class="product-header">
									<a href="#" class="author">
										Epple
									</a>
									<h3><a href="product-details.html">Here Is A Quick Cure For Book</a></h3>
								</div>
								<div class="product-card--body">
									<div class="card-image">
										<img src="client/image/products/product-2.jpg" alt="">
										<div class="hover-contents">
											<a href="product-details.html" class="hover-image">
												<img src="client/image/products/product-1.jpg" alt="">
											</a>
											<div class="hover-btns">
												<a href="cart.html" class="single-btn">
													<i class="fas fa-shopping-basket"></i>
												</a>
												<a href="wishlist.html" class="single-btn">
													<i class="fas fa-heart"></i>
												</a>
												<a href="compare.html" class="single-btn">
													<i class="fas fa-random"></i>
												</a>
												<a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
													<i class="fas fa-eye"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="price-block">
										<span class="price">£51.20</span>
										<del class="price-old">£51.20</del>
										<span class="price-discount">20%</span>
									</div>
								</div>
							</div>
							<div class="product-list-content">
								<div class="card-image">
									<img src="client/image/products/product-3.jpg" alt="">
								</div>
								<div class="product-card--body">
									<div class="product-header">
										<a href="#" class="author">
											Gpple
										</a>
										<h3><a href="product-details.html" tabindex="0">Qpple cPad with Retina
												Display MD510LL/A</a></h3>
									</div>
									<article>
										<h2 class="sr-only">Card List Article</h2>
										<p>More room to move. With 80GB or 160GB of storage and up to 40 hours
											of battery life, the new iPod classic lets you enjoy
											up to 40,000 songs or..</p>
									</article>
									<div class="price-block">
										<span class="price">£51.20</span>
										<del class="price-old">£51.20</del>
										<span class="price-discount">20%</span>
									</div>
									<div class="rating-block">
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star star_on"></span>
										<span class="fas fa-star "></span>
									</div>
									<div class="btn-block">
										<a href="#" class="btn btn-outlined">Add To Cart</a>
										<a href="#" class="card-link"><i class="fas fa-heart"></i> Add To
											Wishlist</a>
										<a href="#" class="card-link"><i class="fas fa-random"></i> Add To
											Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Pagination Block -->
				<div class="row pt--30">
					<div class="col-md-12">
						<div class="pagination-block">
							<ul class="pagination-btns flex-center">
								<li><a href="#" class="single-btn prev-btn ">|<i class="zmdi zmdi-chevron-left"></i> </a></li>
								<li><a href="#" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a></li>
								<li class="active"><a href="#" class="single-btn">1</a></li>
								<li><a href="#" class="single-btn">2</a></li>
								<li><a href="#" class="single-btn">3</a></li>
								<li><a href="#" class="single-btn">4</a></li>
								<li><a href="#" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a></li>
								<li><a href="#" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3  mt--40 mt-lg--0">
				<div class="inner-page-sidebar">
					<!-- Accordion -->
					<div class="single-block">
						<h3 class="sidebar-title">Categories</h3>
						<ul class="sidebar-menu--shop">
							<!-- Truyền cat id vào thuộc tính at -->
							<li><a class="filter-category" at="1" href="#">Truyện tranh</a></li>
							<li><a class="filter-category" at="2" href="#">Tiểu thuyết</a></li>
							<li><a class="filter-category" at="3" href="#">Sách tranh</a></li>
							<li><a href="#">Shop (16)</a>
								<ul class="inner-cat-items">
									<li><a href="#">Saws (0)</a></li>
									<li><a href="#">Concrete Tools (7)</a></li>
									<li><a href="#">Drills (2)</a></li>
									<li><a href="#">Sanders (1)</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Price -->
					<div class="single-block">
						<h3 class="sidebar-title">Fillter By Price</h3>
						<div class="range-slider pt--30">
							<div class="sb-range-slider"></div>
							<div class="slider-price">
								<p>
									<input type="text" id="amount" readonly="">
								</p>
							</div>
						</div>
					</div>
					<!-- Size -->
					<div class="single-block">
						<h3 class="sidebar-title">Author</h3>
						<ul class="sidebar-menu--shop menu-type-2">
							<li><a href="#" class="filter-author" at="Alexander Viet">Alexander Viet Fdf<span>(5)</span></a></li>
							<li><a href="#" class="filter-author" at="Donal Trump sdsd">Donal Trump<span>(8)</span></a></li>
						</ul>
					</div>
					<!-- Promotion Block -->
					<div class="single-block">
						<a href="#" class="promo-image sidebar">
							<img src="client/image/others/home-side-promo.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
	$('.filter-category')
		.on(
			'click',
			function() {

				var catId = $(this).attr('at');
				$.get('/filter-product-by-categrory/' + catId, function(data) {
					$("#filterResult").html(data);
				})
			});

	$('.filter-author')
		.on(
			'click',
			function(e) {
				var authorName = $(this).attr('at');
				var slugAuthor = authorName.toLocaleLowerCase().replaceAll(' ', '-');
				$.get('/filter-product-by-author/' + authorName, function(data) {
					$("#filterResult").html(data);
				})
				alert(slugAuthor);
			});


	$(document).ready(function() {
		$('#showProduct').change(function() {
			var value = $("#showProduct").val();
			alert(value);
			$.get('/show-product/' + value, function(data) {
				$("#filterResult").html(data);
			})
		});

		$('#sortProductSelection').change(function() {
			var value = $("#sortProductSelection").val();
			alert(value);
			$.get('/sort-product/' + value, function(data) {
				$("#filterResult").html(data);
			})
		});
	});
</script>
@endsection