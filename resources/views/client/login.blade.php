@extends('client.layouts.layout')
@section('content')  	
@section('title',"Login")	
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Login</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!--=============================================
    =            Login Register page content         =
    =============================================-->
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 offset-3 mb--30 mb-lg--0">
						<!-- Login Form s-->
						<form method="post"  enctype="multipart/form-data">
							@csrf
							<div class="login-form">
								<h4 class="login-title">Returning Customer</h4>
								<p><span class="font-weight-bold">I am a returning customer</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Enter your email address here...</label>
										<input class="mb-0 form-control" type="email" id="email1" name = "email"
											placeholder="Enter you email address here...">
									</div>
									<div class="col-12 mb--20">
										<label for="password">Password</label>
										<input class="mb-0 form-control" type="password" name = "password"id="login-password" placeholder="Enter your password">
									</div>
									<div class="col-md-12">
										<button type="submit" value="submit" id="submit" class="btn btn-black"
										name="submit">Login</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
@endsection