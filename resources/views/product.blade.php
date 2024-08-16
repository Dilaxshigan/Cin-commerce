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
                            <h2 class="fs1 display-3 fw-semibold fst-italic text-secondary">Discover</h2>
                            <h2 class="fs2 display-4 fw-semibold d-inline-block s3 text-uppercase text-white py-1">Our product</h2>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Sub header section ends -->

<!-- image section starts -->
<div id="content" class="my-5 py-5">
    <section aria-label="section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="fs2 display-3 fw-semibold d-inline-block s4 text-uppercase text-secondary mb-5 py-2 animate-me-1">All product</h2>
                </div>
            </div>
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
        </div>
    </section>
</div>
<!-- image section ends -->

<!-- info section starts -->
<section id="info">
<div class="container text-dark p-3">
    <div class="text-center mb-4">
        <h2 class="fs1 display-1 fw-semibold fst-italic text-secondary animate-me-1">Hale Cinnamon </h2>
        <h2 class="fs2 display-3 fw-semibold d-inline-block s4 text-uppercase py-2 animate-me-1">Pure Ceylon Cinnamon</h2>
        <div class="spacer-single"></div>
    </div>

    <div class="container mb-3">
        <div class="row aligns-item-center">
            <div class="col-md-6 mb-5 d-flex align-items-center">
                <p class="leads">
                    <strong> Cinnamon Powder - A Culinary Delight with a Touch of Wellness</strong><br>
                    Cinnamon powder , a culinary treasure derived from the bark of the cinnamon tree, has captivated taste buds and enriched cuisines for centuries. Its captivating aroma, reminiscent of warm woods and sweet spices, instantly elevates any dish, adding a touch of sophistication and elegance. The flavor of cinnamon powder is a delightful dance of sweet, spicy, and slightly astringent notes, harmonizing perfectly with a wide range of culinary creations.

                    <br><br>
                    <strong> Culinary Canvas for Creativity</strong> <br>

                    In the realm of baking, cinnamon powder reigns supreme, weaving its magic into pastries, cakes, and desserts. It transforms humble pastries into masterpieces, infusing them with a warmth and depth that tantalizes the senses. A sprinkle of cinnamon powder elevates cakes to new heights, adding a touch of spice that balances the sweetness perfectly. And in the world of desserts, cinnamon powder is an indispensable ingredient, transforming simple dishes into culinary masterpieces.
                </p>
            </div>
            <div class="col-md-6 mb-5 text-center align-self-center">
                <img src="{{ asset('img/background/cinnamon3.jpg') }}" alt="" class="w-100 h-auto rounded shadows cin"> 
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row aligns-item-center">
            <div class="col-md-6 mb-4 text-center align-self-center">
                <img src="{{ asset('img/background/cin4.jpg') }}" alt="" class="w-100 h-auto rounded shadows cin"> 
            </div>
            <div class="col-md-6 mt-3 mb-3 d-flex align-items-center">

                <p class="leads">
                    <strong> Aromatic Essence with a Touch of Magic</strong><br>
                    Cinnamon oil, extracted from the bark of the cinnamon tree, is a captivating essence that has enchanted the world for centuries. Its warm, spicy aroma, reminiscent of sun-kissed meadows and exotic spices, instantly evokes a sense of warmth and invigoration. Beyond its captivating fragrance, cinnamon oil is a treasure trove of natural benefits, offering a touch of magic to both wellness and beauty routines.

                    <br><br>
                    <strong> Aromatherapy and Wellness</strong> <br>

                    In the realm of aromatherapy, cinnamon oil reigns supreme, its invigorating scent stimulating the senses and promoting a sense of well-being. Diffusing cinnamon oil in your home or workplace can uplift the atmosphere, creating a cozy and inviting ambiance. Additionally, cinnamon oil's anti-inflammatory properties may help soothe muscle aches and pains, while its warming effect may alleviate discomfort during cold or flu season.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- info section ends -->

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
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product.js') }}"></script>
@endsection
