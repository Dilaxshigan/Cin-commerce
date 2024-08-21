@extends('layouts.app')
@section('title','')
@section('main-content')

<!-- Sub header section starts -->
<section id="subheader" class="position-relative z-0">
            <img src="{{ asset('img/background/bg-9.png') }}" class="position-absolute top-0 start-0 w-100 custom-height z-1 img-dark1" alt="">
            <div class="container position-relative z-2">
                <div class="row">
                    <div class="col-md-12 mb-bottom">
                        <div class="text-center animate-me-1">
                            <h2 class="fs2 display-4 fw-semibold d-inline-block s3 text-uppercase text-white py-1">Product</h2>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none img-dark1">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('product') }}" class="text-white text-decoration-none img-dark1">Product</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Organic Ceylon Alba Cinnamon Sticks</li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Sub header section ends -->

<!-- Product display section starts -->
 <section id="display" class="my-5 py-5">
 <div class="container mt-3">
    <h2 class="fs-2 mt-5 mb-4 display-4 fw-semibold text-secondary">ADD TO CART</h2>
    <div class="row justify-content-md-center card-row">
        <div class="cart-container">
            <div id="cart-items" class="cart-items"></div>
            <div id="cart-total" class="cart-total"></div>
        </div>
    </div>
</div>
</section>
<!-- Product display section ends -->

<!-- Hidden form section section starts -->
<div class="container mt-3 d-none" id="contact-form-container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <form id="contactForm" method="post" action="#">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control-dark" id="formGroupExampleInput" placeholder="Your name" name="name" required pattern="[A-Za-z\s]{3,25}" title="Please enter only letters and spaces (min 3 characters, max 25 characters)">
                    <div id="error_name" class="d-none text-danger">*Please enter your name.</div>
                    <input type="hidden" id="honeypot" name="honeypot">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Phone</label>
                    <input type="tel" required class="form-control-dark" id="formGroupExampleInput2" placeholder="+xx xxxxxxx" name="phone" pattern="^\+\d{2}\d{7,14}$" title="Please enter a phone number in the format +XXXXXXXXX (country code must)">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label">Email</label>
                    <input type="text" class="form-control-dark" id="formGroupExampleInput3" placeholder="cinamon@example.com" name="email" pattern=".+@.+\..+" title="Please enter a valid email address" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control-dark" id="exampleFormControlTextarea1" placeholder="Enter your message" rows="3" name="message" required></textarea>
                    <div id="error_text" class="d-none text-danger">*Your message must be at least 3 characters long.</div>
                </div>
                <div class="clearfix pt-2">
                    <input type="submit" value="Send" class="btn btn-custom fw-semibold text-uppercase text-decoration-none float-end">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Hidden form section ends -->
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/card.js') }}"></script>
@endsection
