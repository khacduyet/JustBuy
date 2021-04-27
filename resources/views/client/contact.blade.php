@extends('client.layouts.layout')
@section('content')
@section('title',"Contact")
		
		<section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Cart Page Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">                        	
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.654999838909!2d105.78124751419128!3d21.046485992550505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1619326193351!5m2!1svi!2s" width="100%" height="500px" 
                    	 style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
                <div class="row mt--60 ">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Location & Details</h3>
                                <p>It is a long established fact that readewill be distracted by the readable content of
                                    a page when looking
                                    at ilayout.</p>
                            </div>
                            <div class="address_wrapper">
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Address:</span> 
                                        @foreach($config as $con)
                                            @if($con->name == 'Address')
                                            {{$con->content}}
                                            @endif
                                        @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> 
                                        @foreach($config as $con)
                                            @if($con->name == 'Email')
                                            {{$con->content}}
                                            @endif
                                        @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone:</span> 
                                        @foreach($config as $con)
                                            @if($con->name == 'Phone')
                                            {{$con->content}}
                                            @endif
                                        @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>{{ $errors->has('message') }}</li>
                                       
                                    </ul>
                                </div>
                            @endif
                            <form  method="post" class="contact-form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" id="con_name" name="con_name" class="form-control"
                                                required>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <li>{{ $errors->has('name') }}</li>
                                                       
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <label>Your Email <span class="required">*</span></label>
                                            <input type="email" id="con_email" name="con_email" class="form-control"
                                                required>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <li>{{ $errors->has('email') }}</li>
                                                       
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Phone*</label>
                                            <input type="text" id="con_phone" name="con_phone" class="form-control">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <li>{{ $errors->has('phone') }}</li>
                                                       
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea id="con_message" name="con_message"
                                                class="form-control"></textarea>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <li>{{ $errors->has('message') }}</li>
                                                       
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black"
                                                name="submit">send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Cart Page End -->

@endsection