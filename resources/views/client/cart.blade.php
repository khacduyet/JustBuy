@extends('client.layouts.layout')
@section('content')     
@section('title',"Cart") 
        <section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container">
					<div class="page-section-title">
						<h1>Shopping Cart</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<th class="pro-remove"></th>
												<th class="pro-thumbnail">Image</th>
												<th class="pro-title">Product</th>
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<th class="pro-subtotal">Total</th>
											</tr>
										</thead>
										<tbody>
											<!-- Product Row -->
											<tr>
												<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td>
												<td class="pro-thumbnail"><a href="#"><img
															src="client/image/products/product-1.jpg" alt="Product"></a></td>
												<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
												<td class="pro-price"><span>$395.00</span></td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<div class="count-input-block">
															<input type="number" class="form-control text-center"
																value="1">
														</div>
													</div>
												</td>
												<td class="pro-subtotal"><span>$395.00</span></td>
											</tr>
											<!-- Product Row -->
											<tr>
												<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td>
												<td class="pro-thumbnail"><a href="#"><img
															src="client/image/products/product-2.jpg" alt="Product"></a></td>
												<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
												<td class="pro-price"><span>$395.00</span></td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<div class="count-input-block">
															<input type="number" class="form-control text-center"
																value="1">
														</div>
													</div>
												</td>
												<td class="pro-subtotal"><span>$395.00</span></td>
											</tr>
											<!-- Discount Row  -->
											<tr>
												<td colspan="6" class="actions">
													<div class="update-block text-right">
														<a href="" class="btn btn-outlined">Update cart</a>
														<a href="" class="btn btn-outlined">Clear cart</a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb--30 mb-lg--0">
							
						</div>
						<!-- Cart Summary -->
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Cart Summary</span></h4>
									<p>Sub Total <span class="text-primary">$1250.00</span></p>
									<p>Shipping Cost <span class="text-primary">$00.00</span></p>
									<h2>Grand Total <span class="text-primary">$1250.00</span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="checkout.html" class="checkout-btn c-btn btn--primary">Checkout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Cart Page End -->
@endsection