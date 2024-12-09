@extends('layouts.app')
@section('title','')
@section('main-content')

<!-- Home_1 section starts -->
<section id="Home_1" class="hero">
  <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/slider/cinnamon.jpg') }}" class="d-block w-100 custom-carousel-height rounded" alt="Cinnamon-Background">
        <div class="carousel-caption position-absolute top-50 start-50 d-md-block text-center slider">
          <div class="display-2 fw-semibold text-uppercase mb-3">Real SriLankan</div>
          <p class="display-3 fst-italic text-secondary">Cinnamon</p>
          <p><a href="{{ route('product') }}" class="btn btn-custom fw-semibold rounded-lg mt-2">VIEW PRODUCT</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/slider/cinnamon1.jpg') }}" class="d-block w-100 custom-carousel-height rounded" alt="Cinnamon_1-Background">
        <div class="carousel-caption position-absolute top-50 start-50 d-md-block text-center slider">
          <div class="display-2 fw-semibold text-uppercase mb-3">Flavor & Health<br>for Your Dishes</div>
          <p><a href="{{ route('product') }}" class="btn btn-custom fw-semibold rounded-lg mt-2">EXPLORE PRODUCT</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- Home_1 section ends -->

<!-- Home_2 section starts -->
<section id="Home_2">
<div class="container-fluid">
<div class="stock-ticker overflow-x-hidden position-relative">
    <ul class="list-inline d-flex flex-nowrap position-absoulte ticker-list">
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-1.png') }}" class="Logo-1" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-2.jpg') }}" class="Logo-2" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-3.jpg') }}" class="Logo-3" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-1.png') }}" class="Logo-1" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-2.jpg') }}" class="Logo-2" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-3.jpg') }}" class="Logo-3" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-1.png') }}" class="Logo-1" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-2.jpg') }}" class="Logo-2" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-3.jpg') }}" class="Logo-3" alt=""></span>
        </li>
        <li class="list-inline-item">
            <span> <img src="{{ asset('img/certificates/Cin-cert-1.png') }}" class="Logo-1" alt=""></span>
        </li>
    </ul>
</div>
</div>
</section>
<!-- Home_2 section ends -->

<!-- Home_3 section starts -->
<section id="Home_3">
<div class="container mt-5 mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center align-self-center">
            <img src="{{ asset('img/background/CeyloneMap.jpg') }}" alt="Sri Lanka Map" class="rounded shadows h-auto w-80 my-4 ceylone">
        </div>
        <div class="col-md-6 mb-3">
            <div class="text-center">
                <h2 class="fs-1 text-secondary">Genuine Premium Ceylon Cinnamon from Sri Lanka</h2>
                <h2 class="fs-3">Why Choose Hale Cinnamon?</h2>
                <div class="spacer-single"></div>
                <p class="leads fs-5">Hale Cinnamon is your premier source for genuine premium Ceylon cinnamon from Sri Lanka. We are committed to providing our customers with the highest quality cinnamon products, sourced directly from Sri Lanka's finest cinnamon growers. Our cinnamon is known for its smooth, delicate flavor, rich aroma, and abundance of health benefits.</p>
                <p class="leads fs-5"><strong>Hale Cinnamon: Your Trusted Cinnamon Partner</strong> At Hale Cinnamon, we are passionate about sharing the culinary and wellness wonders of Ceylon cinnamon. Our commitment to quality, sustainability, and customer satisfaction has made us a trusted partner for individuals and businesses worldwide.</p>
                <p class="leads fs-5"><strong>Partner with Hale Cinnamon:</strong> We invite you to partner with Hale Cinnamon and experience the difference of genuine Ceylon cinnamon. Contact us today to discuss your specific requirements and discover how Hale Cinnamon can enhance your business.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Home_3 section ends -->

<!-- Home_4 section starts -->
 <section id="Home_4" class="mb-5">
 <div class="container">
            <div class="row aligns-item-center">
                <div class="col-md-6 mb-3">
                    <div class="text-center">
                        <h2 class="fs-1 text-secondary">Pure Ceylon Taste</h2>
                        <h2 class="fs-2">From Finest Lankan Estates</h2>
                        <div class="spacer-single"></div>
                    </div>
                    <p class="leads fs-5"> Hale Cinnamon powders are renowned for their exceptional aroma, warm flavor, and rich antioxidants. Our meticulous processing methods ensure that every teaspoon delivers an unparalleled taste experience.</p>

                    <p class="leads fs-5"> Whether you're baking delectable pastries, simmering flavorful curries, or crafting aromatic beverages, our versatile cinnamon powders will elevate your culinary creations to new heights of deliciousness.We source our cinnamon directly from sustainable Sri Lankan farms, ensuring the highest quality and ethical practices. Our commitment to purity means you can be confident you're adding a healthy and flavorful ingredient to your meals.</p>
                </div>
                <div class="col-md-6 text-center align-self-center">
                    <img src="{{ asset('img/background/cinnamon3.jpg') }}" alt="Cinnamon Bars" class="rounded shadows img-fluid Bars">
                </div>
            </div>
        </div>
 </section>
<!-- Home_4 section ends -->

<!-- Home_5 section starts -->
 <section id="Home_5">
 <div class="container">
            <div class="row bb gx-5 gy-4 text-center">

                <div class="col-lg-4 pb-3 animate-me fs-5">
                    <div class="contact mx-auto my-3"><i style="color: #black; font-size: 80px" class="fa fa-check-circle fa-lg contact mt-3 p-2"></i></div>
                    <div class="spacer-single"></div>
                    <h3>High-Quality Products & Safety</h3>
                    <p>We prioritize safety and quality. Strict controls and extensive testing ensure every product meets the highest standards.</p>
                    <a href="{{ route('blog') }}" class=" btn btn-custom fs-5">Read More</a>
                </div>

                <div class="col-lg-4 pb-3 animate-me fs-5">
                    <div class="contact mx-auto my-3"><i style="color: #black; font-size: 80px" class="fa fa-certificate fa-lg contact mt-3 p-2"></i></div>
                    <div class="spacer-single"></div>
                    <h3>Certified Products</h3>
                    <p>We hold both GMP and ISO 22000 certifications, showcasing our commitment to top-tier manufacturing practices.</p>
                    <a href="{{ route('blog') }}" class="btn btn-custom fs-5">Read More</a>
                </div>

                <div class="col-lg-4 pb-3 animate-me fs-5">
                    <div class="contact mx-auto my-3"><i style="color: #black; font-size: 80px" class="fa fa-users fa-lg contact mt-3 p-2"></i></div>
                    <div class="spacer-single"></div>
                    <h3>Get Expert Help, Fast</h3>
                    <p>Expert help, always here. Get questions answered & needs met for a positive experience. We value your feedback!</p>
                    <a href="{{ route('blog') }}" class=" btn btn-custom fs-5">Read More</a>
                </div>

            </div>
        </div>
 </section>
<!-- Home_5 section ends -->

<!-- Home_6 section starts -->
<section id="Home_6" class="position-relative">
    <div class="image-container-1 position-relative">
        <img src="{{ asset('img/background/bg-2.jpg') }}" class="d-block w-100 custom-height z-0 img-dark1" alt="">
    </div>

    <div class="container position-absolute top-50 start-50 z-2 translate-middle">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2 class="display-1 fw-semibold text-secondary animate-me-1">Sweet & Savory</h2>
                    <h2 class="display-4 fw-semibold text-uppercase text-white animate-me-1 py-1 d-inline-block s3">Nature's Powerhouse</h2>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home_6 section ends -->

<!-- Home_7 section starts -->
 <section id="Home_7">
 <div class="container my-5">
            <div class="row aligns-item-center">
                <div class="col-md-6 mb-3">
                    <div class="text-center">
                        <h2 class="fs-1 text-secondary animate-me-1">Pure Taste</h2>
                        <h2 class=" fs-2 d-inline-block s4 animate-me-1">Pure Ceylon Cinnamon</h2>
                        <div class="spacer-single"></div>
                    </div>
                    <p class="leads fs-5">Close your eyes and inhale the invigorating aroma of freshly ground Sri Lankan cinnamon. The first taste is a burst of warming sweetness, followed by a subtle complexity that lingers on the palate. Our single-origin cinnamon, sourced from sustainable Sri Lankan farms, is ethically harvested to ensure the highest quality and a taste experience unlike any other. This meticulous approach delivers pure Ceylon magic, ready to elevate your culinary creations.</p>
                </div>
                <div class="col-md-6 text-center align-self-center">
                    <img src="{{ asset('img/background/cinnamon4.jpg') }}" alt="" class="rounded shadows h-auto w-80 bowl">
                </div>
            </div>
        </div>
 </section>
<!-- Home_7 section ends -->

<!-- Home_8 section starts -->
 <section id="Home_8" class="position-relative pt-0 pb-0 mb-0">
 <div class="col-lg-6 review-container position-absolute overflow-hidden float-right top-0 h-100 z-0">
            <img src="{{ asset('img/background/bg-side-1.jpg') }}" class="position-absolute top-0 start-0 overflow-hidden object-fit-cover img-dark1 review-bg" alt="">
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-lg-6 offset-lg-6 animate-me">
                    <div class="padding80">
                        <div class="text-center">
                            <h2 class="fs1 display-4 fw-semibold text-uppercase text-secondary animate-me-1">Customers</h2>
                            <h2 class="fs2 d-inline-block s3 text-white animate-me-1">Review</h2>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="carouselExampleCaptions" class="carousel slide mt-3 d-inline-block certifictes" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner lead text-white">
                                <div class="carousel-item mb-4 active">
                                    <blockquote class="leads">
                                        Hale's vanilla extract is a game-changer! A tiny bit adds incredible depth and aroma to my cookies and cakes. It's clear they use high-quality vanilla beans. Plus, the convenient dropper makes it easy to measure exactly what I need. No more messy spills! This is a staple in my baking cabinet now.
                                        <span class="d-block fs-normal fw-normal">Baking Enthusiast</span>
                                    </blockquote>

                                </div>
                                <div class="carousel-item mb-4">
                                    <blockquote class="leads">
                                        I appreciate Hale's commitment to organic ingredients, so I decided to try their turmeric powder. It has a nice earthy flavor that blends well with smoothies. However, I found it a little clumpy, which made it difficult to dissolve completely. Maybe a sifter would help? Overall, a decent option for those seeking organic turmeric, but the consistency could be improved.
                                        <span class="d-block fs-normal fw-normal">Health-Conscious Consumer</span>
                                    </blockquote>

                                </div>
                                <div class="carousel-item mb-4">
                                    <blockquote class="leads">
                                        Love these pre-chopped herbs! Saves me so much time in the kitchen after a long workday. Fresh flavor and convenient packaging. Perfect for adding a quick burst of flavor to any dish. Would recommend - especially for busy families!
                                        <span class="d-block fs-normal fw-normal">Busy Professional</span>
                                    </blockquote>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- Home_8 section ends -->

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

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
{{-- asset link end --}}
