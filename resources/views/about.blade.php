@extends('layouts.app')
@section('title','')
@section('main-content')

<!-- Sub header section starts -->
<section id="subheader" class="position-relative z-0">
            <img src="{{ asset('img/background/bg-7.1.jpg') }}" class="position-absolute top-0 start-0 w-100 custom-height z-1 img-dark1" alt="">
            <div class="container position-relative z-2">
                <div class="row">
                    <div class="col-md-12 mb-bottom">
                        <div class="text-center animate-me-1">
                            <h2 class="fs1 display-3 fw-semibold fst-italic text-secondary">Discover</h2>
                            <h2 class="fs2 display-4 fw-semibold d-inline-block s3 text-uppercase text-white py-1">Our Story</h2>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Sub header section ends -->

<!-- content-1 section starts -->
<section class="my-5 py-5">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 mb-5">

                    <div class="text-center mb-4">
                        <h1 class="d-inline-block s4 text-center">About Us</h2>
                    </div>



                    <div class="spacer-half"></div>
                    <p class="leads fs-5">Welcome to Cinnamon Infucene, where our passion for quality and flavor comes alive in every cup. We specialize in crafting the finest cinnamon tea, carefully blending premium cinnamon to create a beverage that is both soothing and invigorating. Each of our tea bags is designed for convenience and ease, allowing you to enjoy the rich, aromatic flavors of cinnamon by simply dipping it into hot water.</p>
                    <p class="leads fs-5">At Cinnamon Infucene, we believe in the power of natural ingredients. Our cinnamon is sourced from the best growers, ensuring that every sip is packed with natural goodness and a touch of warmth. We are dedicated to maintaining the highest standards of quality, from the selection of raw materials to the packaging of our tea bags. Our commitment to excellence is reflected in the delightful taste and health benefits of our cinnamon tea.</p>
                    <p class="leads fs-5">Join us on a journey to discover the timeless allure of cinnamon. Whether you are starting your day with a refreshing cup or winding down in the evening with a soothing brew, Cinnamon Infucene is here to provide a comforting and invigorating experience. Celebrate the perfect blend of tradition and innovation with us, one delightful sip at a time.</p>
                </div>

                <div class="col-lg-6">
                    <div class="row ms-2 animate-me about-img">
                        <div class="col-6">
                            <img src="{{ asset('img/background/1cin.webp') }}" class="img-fluid rounded hover-effects" alt="">
                            <div class="de_count wow fadeInUp m-5">
                                <h1><span class="timer" data-to="750" data-speed="3000"></span>+</h1>
                                <h2>Positive feedbacks</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="de_count wow fadeInUp m-5">
                                <h1><span class="timer" data-to="50" data-speed="3000"></span>%</h1>
                                <h2>Turnover increased</h4>
                            </div>
                            <div class="spacer-10"></div>
                            <img src="{{ asset('img/background/2cin.webp') }}" class="img-fluid rounded hover-effects" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- content-1 section ends -->

<!-- content-2 section starts -->
<section>
        <div class="container">

            <div class="row">
                <div class="col-md-6 text-center mb-5">
                    <img src="{{ asset('img/background/3cin.webp') }}" class=" rounded hover-effects w-80" alt="">
                </div>
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <h2 class="s2 text-center">F.A.Q</h2>
                    </div>
                    <div class="accordion hover-effects" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="" id="headingOne">
                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Premium Quality
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    <strong>Top-notch cinnamon from finest farms for unparalleled flavor.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    100% Natural and Organic
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    Organically grown without chemicals for pure, unadulterated flavor.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Rich in Health Benefits
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    Packed with antioxidants and anti-inflammatory properties.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree4">
                                <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                    Sustainably Sourced
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    Committed to sustainable farming for future generations.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree5">
                                <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                    Versatile Uses
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    Incredibly versatile for sweet and savory dishes.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree6">
                                <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                    Stringent Quality Control
                                </button>
                            </h2>
                            <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    Rigorous quality measures ensure freshness and safety.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree7">
                                <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                    Community Support
                                </button>
                            </h2>
                            <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample">
                                <div class="accordion-body fs-5">
                                    Supporting local farmers through fair trade practices.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- content-2 section ends -->

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endsection
