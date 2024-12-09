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

<!-- Price section starts -->
 <section id="price" class="my-5 py-5">
 <div class="container my-5 fs-5">
        <h2 class="fs2 display-4 fw-semibold text-secondary mt-5 mb-4">Organic Ceylon Alba Cinnamon Sticks</h2>
        <div class="row justify-content-md-center price-row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/product/1.jpg') }}" class="w-80 h-auto detail-img" alt="...">
            </div>
            <div class="col-md-6">
                <h4 class="fs-4 mt-3 fw-semibold">Organic Ceylon Alba Cinnamon Sticks</h4>
                <h4 class="fs-4 mt-2 text-secondary">
                    <span id="price-display">Rs <span id="total-price">150</span></span>
                </h4>
                <p class="fs-5 mt-4">
                    <strong>Model number :</strong> CGC00080
                </p>
                <p class="fs-5 mt-2">
                    <strong>Categories:</strong> Sticks, All Products
                </p>
                <p class="fs-5 mt-2">
                    <strong>Select Weight:</strong>
                    <span class="position-relative d-inline-block custom-select-wrapper">
                        <select id="weight-selection" class="form-control" onchange="updatePriceAndQuantity()">
                            <option value="150">150g</option>
                            <option value="250">250g</option>
                            <option value="1000">1kg</option>
                            <option value="2000">2kg</option>
                        </select>
                    </span>
                </p>
                <p class="fs-5 mt-2">
                    <strong>Quantity:</strong>
                    <input type="number" id="quantity" class="form-control d-inline d-inline-block" value="1" min="1"
                        max="100" onchange="updatePriceAndQuantity()">
                </p>
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                </link>

                <div class="d-flex align-items-center mb-3 mt-2"></div>
                <ul class="position-relative d-inline-block list-unstyled list-inlinel">
                    <span class="effects" onclick="toggleShareOptions()">
                        <li class="d-inline-block fw-bold text-center share-text">
                            Share to</li>
                        <li class="btn-floatingl pe-auto d-inline-block text-white share-text">
                            <i style="font-size: 26px" class="fa-solid fa-share text-secondary"></i>
                    </span>
                </ul>
                <div class="d-flex align-items-center mb-3 mt-5">
                    <a class="btn btn-custom me-3 fw-semibold text-uppercase text-decoration-none" id="addTo"onclick="addToCart()">Add to cart</a>
                    <a href="{{ route('card') }}" class="btn btn-custom fw-semibold text-uppercase text-decoration-none">View Cart</a>
                </div>
                <span id="price-per-unit" class="visually-hidden">150</span>
            </div>

            <div class="col-md-12 mt-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Product
                            description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Nutritional
                            Facts</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">How to be
                            used</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping"
                            type="button" role="tab" aria-controls="shipping" aria-selected="false">Shipping
                            methods</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>Ceylon Alba cinnamon, the finest grade in the cinnamon bark (stick) group, diameter is 6 mm – 8
                        mm, similar to that of pencils. It stands as the most coveted and expensive cinnamon grade, owing to
                        its exceptional taste and exotic aroma, surpassing all others.
                        <br><br>This rare Alba cinnamon grade offers the pinnacle of Ceylon cinnamon flavor. your reliable
                        source for premium Ceylon cinnamon sticks, straight from our lush Sri Lankan plantations. We take
                        pride in delivering freshness and purity with every product we offer. hear what our valued clients
                        have to say about their experience with us. Their feedback speaks volumes about the quality and
                        authenticity of our cinnamon sticks. Experience the true essence of Ceylon cinnamon with CGC!
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                        <ul>
                            <li>Premium Grade Ceylon Organic Alba Cinnamon</li>
                            <li>Sourced from the finest cinnamon trees in Sri Lanka</li>
                            <li>100% USDA Certified Organic</li>
                            <li>Diameter is 6 mm – 8 mm</li>
                            <li>Fresh Exotic Aroma</li>
                            <li>Ultra-low Coumarin Levels (0.01%)</li>
                            <li>Zero additives</li>
                            <li>To ensure the freshness and protection of our product, we seal it in aluminum foil packaging
                            </li>
                            <li>CEYLON GOLDEN CINNAMON ships Ceylon Cinnamon Sticks worldwide directly from Sri
                                Lanka(Ceylon).(Manufactured and Packed in Ceylon)</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>
                        Cinnamon oil's versatility extends to the realm of beauty, offering a touch of natural magic to
                        skincare and hair care routines. Its antioxidant content may help combat free radical damage,
                        promoting a youthful and radiant complexion. Cinnamon oil may also help regulate hair growth and
                        reduce dandruff, leaving tresses healthy and shiny.
                    </div>
                    <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                        <br>
                        <h5>DHL Express</h5>
                        <ul>
                            <li>Product Tracking System: Yes</li>
                            <li>Deliver within 3-5 business days</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h2 class="text-center fs-2 mt-5 mb-4 fw-semibold text-secondary">Other product</h2>
            <div class="row mt-3">
            <div class="col-xl-3 mb-3">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/product/1.jpg') }}" class="product-img" alt="Products">
                        <div class="card-body">
                            <h5 class="card-title">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs 150</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="{{ route('product_1') }}" class="btn btn-custom fw-semibold text-uppercase text-decoration-none">View product</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 mb-3">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/product/b1e44c5d-597a-4780-8eba-5f477adf3939.593f1418a5eda4f676df483b9527c058.webp')}}" class="product-img" alt="Products">
                        <div class="card-body">
                            <h5 class="card-title">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs 150</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="{{ route('product_1') }}" class="btn btn-custom fw-semibold text-uppercase text-decoration-none">View product</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 mb-3">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/product/Cinnamon-Powder.png') }}" class="product-img" alt="Products">
                        <div class="card-body">
                            <h5 class="card-title">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs 150</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="{{ route('product_1') }}" class="btn btn-custom fw-semibold text-uppercase text-decoration-none">View product</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 mb-3">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/product/1.jpg') }}" class="product-img" alt="Products">
                        <div class="card-body">
                            <h5 class="card-title">Organic Ceylon Alba Cinnamon Sticks</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rs 150</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="{{ route('product_1') }}" class="btn btn-custom fw-semibold text-uppercase text-decoration-none">View product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </section>
<!-- Price section ends -->

<!-- info-1 section starts -->
 <section id="info-1" class="mb-5">
 <div class="container mt-1">
        <div class="row aligns-item-center">
            <div class="col-12">
                <div class="text-center mt-3 mb-3">
                    <h2 class="fs-2 mb-4 fw-semibold text-secondary ">F.A.Q</h2>
                </div>
                <div class="accordion hover-effects" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="" id="headingOne">
                            <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Premium Quality
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-5">
                                <strong>Top-notch cinnamon from finest farms for unparalleled flavor.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                100% Natural and Organic
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-5">
                                Organically grown without chemicals for pure, unadulterated flavor.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Rich in Health Benefits
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-5">
                                Packed with antioxidants and anti-inflammatory properties.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree4">
                            <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                Sustainably Sourced
                            </button>
                        </h2>
                        <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-5">
                                Committed to sustainable farming for future generations.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree5">
                            <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                Versatile Uses
                            </button>
                        </h2>
                        <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-5">
                                Incredibly versatile for sweet and savory dishes.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree6">
                            <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                Stringent Quality Control
                            </button>
                        </h2>
                        <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-5">
                                Rigorous quality measures ensure freshness and safety.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree7">
                            <button class="accordion-button  collapsed fs-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                Community Support
                            </button>
                        </h2>
                        <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7"
                            data-bs-parent="#accordionExample">
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
<!-- info-1 section ends -->

<!-- Home_9 section starts -->
<section id="Home_9" class="position-relative z-0 py-5">
   <img src="{{ asset('img/contact.png') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-1 img-dark1" alt="">
        <div class="container position-relative z-2">

            <div class="text-center">

                <h2 class="fs1 display-4 fw-semibold d-inline-block s3 py-2 text-white animate-me-1">our Certification </h2>
                <div class="spacer-single"></div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mt-2 g-4 text-center text-white ">
                <div class="col">
                    <div class="h-100">
                        <img src="{{ asset('img/certificate-1.jpg') }}" class="card-img-top rounded w-80 h-auto shadows" alt="...">
                        <div class="card-body">

                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100">
                        <img src="{{ asset('img/certificate-1.jpg') }}" class="card-img-top rounded w-80 h-auto shadows" alt="..." >
                        <div class="card-body">

                            <p class="card-text">This is a short card.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100">
                        <img src="{{ asset('img/certificate-1.jpg') }}" class="card-img-top rounded w-80 h-auto shadows" alt="...">
                        <div class="card-body">

                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100">
                        <img src="{{ asset('img/certificate-1.jpg') }}" class="card-img-top rounded w-80 h-auto shadows" alt="...">
                        <div class="card-body">

                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100">
                        <img src="{{ asset('img/certificate-1.jpg') }}" class="card-img-top rounded w-80 h-auto shadows" alt="...">
                        <div class="card-body">

                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100">
                        <img src="{{ asset('img/certificate-1.jpg') }}" class="card-img-top rounded w-80 h-auto shadows" alt="...">
                        <div class="card-body">

                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> 
<!-- Home_9 section ends -->

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/product_1.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product_1.js') }}"></script>
@endsection
