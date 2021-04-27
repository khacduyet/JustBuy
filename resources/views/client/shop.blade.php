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
							@foreach($category as $cat)
							@if($cat -> parent_id == 0)
							<li><a class="filter-category" href="javascript:void(0)" at="{{$cat->id}}">{{$cat -> name}} (16)</a>
								<ul class="inner-cat-items">
									@foreach($category as $cat1)
									@if($cat -> id == ($cat1 -> parent_id))
									<li><a class="filter-category" href="javascript:void(0)" at="{{$cat1->id}}">{{$cat1 -> name}} (0)</a></li>
									@endif
									@endforeach
								</ul>
							</li>
							@endif
							@endforeach
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
							<li><a href="javascript:void(0)" class="filter-author" at="Alexander Viet">Alexander Viet Fdf<span>(5)</span></a></li>
							<li><a href="javascript:void(0)" class="filter-author" at="Donal Trump sdsd">Donal Trump<span>(8)</span></a></li>
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
<!-- Modal -->
<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
			<div id="resultViewModal"></div>

            <div class="modal-footer">
                <div class="widget-social-share">
                    <span class="widget-label">Share:</span>
                    <div class="modal-social-share">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



	<script>
		$(document).on("click", ".view-modal", function() {

			var proId = $(this).attr('at');
			$.get('/view-modal-product/' + proId, function(data) {
				console.log(data);
				$("#resultViewModal").html(data);
				$('#modal-detail').modal('show');
				
			})
		});

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
				});


		$(document).ready(function() {
			$('#showProduct').change(function() {
				var value = $("#showProduct").val();
				$.get('/show-product/' + value, function(data) {
					$("#filterResult").html(data);
				})
			});

			$('#sortProductSelection').change(function() {
				var value = $("#sortProductSelection").val();
				$.get('/sort-product/' + value, function(data) {
					$("#filterResult").html(data);
				})
			});
		});
	</script>
	@endsection