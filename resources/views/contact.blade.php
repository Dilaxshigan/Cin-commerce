@extends('layouts.app')
@section('title','')
@section('main-content')

<!-- Sub header section starts -->
<section id="subheader" class="position-relative z-0">
            <img src="{{ asset('img/background/cin1.jpg') }}" class="position-absolute top-0 start-0 w-100 custom-height z-1 img-dark1" alt="">
            <div class="container position-relative z-2">
                <div class="row">
                    <div class="col-md-12 mb-bottom">
                        <div class="text-center animate-me-1">
                            <h2 class="fs1 display-3 fw-semibold fst-italic text-secondary">Grow up your business with</h2>
                            <h2 class="fs2 display-4 fw-semibold d-inline-block s3 text-uppercase text-white py-1">Hale Cinnamon</h2>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Sub header section ends -->

<!-- Content Section Starts -->
<div class="container-md my-5 py-5">
    <div class="row text-center">
        <div class="col">
            <h1 class="text-secondary d-inline-block s4 text-center mt-5 mb-5">Connect with Us</h1>
        </div>
    </div>

    <div class="row">
        <!-- Contact Information Section -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3 mb-4 bg-body hover-effects">
                        <div class="text-center">
                            <h1 class="text-underline-custom fs-3 mt-3 mb-4">Contact Information</h1>
                        </div>
                        <address class="ms-3 mb-1 mt-2">
                            <div class="d-flex bd-highlight mt-2">
                                <div class="flex-shrink-1 pe-3 bd-highlight">
                                    <a href="tel:+94777538775">
                                        <i class="fa fa-phone fa-lg contact" style="color: #945336; font-size: 26px;"></i>
                                    </a>
                                </div>
                                <div class="w-100 bd-highlight">
                                    <a href="tel:+94777538775" class="text-decoration-none fs-5">+94777538775</a>
                                </div>
                            </div>
                            <div class="d-flex bd-highlight mt-2">
                                <div class="flex-shrink-1 pe-3 bd-highlight">
                                    <a href="https://web.whatsapp.com/send?phone=+94777538775" target="_blank">
                                        <i class="fa fa-whatsapp fa-lg contact" style="color: #945336; font-size: 26px;"></i>
                                    </a>
                                </div>
                                <div class="w-100 bd-highlight">
                                    <a href="https://web.whatsapp.com/send?phone=+94777538775" class="text-decoration-none fs-5" target="_blank">+94777538775</a>
                                </div>
                            </div>
                            <div class="d-flex bd-highlight mt-2">
                                <div class="flex-shrink-1 pe-3 bd-highlight">
                                    <a href="mailto:info@halecinnamon.com" target="_blank">
                                        <i class="fa fa-envelope fa-lg contact" style="color: #945336; font-size: 23px;"></i>
                                    </a>
                                </div>
                                <div class="w-100 bd-highlight">
                                    <a href="mailto:info@halecinnamon.com" class="text-decoration-none fs-5" target="_blank">info@halecinnamon.com</a>
                                </div>
                            </div>
                            <div class="d-flex bd-highlight mt-2 mb-3">
                                <div class="flex-shrink-1 ms-1 pe-3 bd-highlight">
                                    <a href="https://www.google.com/maps/place/Your+Address+Here" target="_blank">
                                        <i class="fa fa-map-marker fa-lg contact" style="color: #945336; font-size: 26px;"></i>
                                    </a>
                                </div>
                                <div class="w-100 bd-highlight">
                                    <a href="https://www.google.com/maps/place/Your+Address+Here" class="text-decoration-none disabled fs-5" target="_blank">
                                        No 032, Main Street, Colombo, Sri Lanka
                                    </a>
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-3 mb-5 bg-body hover-effects rounded">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31684.85182541906!2d79.86884887235055!3d6.937546014950635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1718445403106!5m2!1sen!2slk"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="col-md-6">
            <div class="card pt-3 pb-3 mb-5 bg-body rounded hover-effects">
                <div class="text-center">
                    <h2 class="text-underline-custom fs-3 mt-3 mb-4">How to Reach Us</h2>
                </div>
                <div class="container">
                    <form id="contactForm" action="{{ route('store_info') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fs-5">Name</label>
                            <input type="text" class="form-control fs-5" id="name" placeholder="Your name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger fw-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label fs-5">Phone</label>
                            <input type="tel" class="form-control fs-5" id="phone" placeholder="+xx xxxxxxx" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger fw-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fs-5">Email</label>
                            <input type="email" class="form-control fs-5" id="email" placeholder="cinamon@example.com" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger fw-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fs-5">Message</label>
                            <textarea class="form-control fs-5" id="message" placeholder="Enter your message" rows="3" name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger fw-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div style="width: 50% !important;">
                            <div class="g-recaptcha" data-sitekey="6LecBFAqAAAAAD9ZbAHBXlO2lIUdc547ryvaGkUQ" data-size="normal" data-theme="light"></div>
                        </div>
                        <div class="clearfix pt-2">
                            <input type="submit" value="Send" class="btn btn-primary float-end fs-5">
                        </div>
                    </form>
                    @if (session('message'))
                        <div class="alert alert-success mt-3 fs-5">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Section Ends -->

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="{{ asset('js/contact.js') }}"></script>
@endsection
