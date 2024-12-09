 <!-- Footer section starts -->
<footer>
    <footer class="custom-footer text-white pt-5 pb-4">

    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">

            <div class="container">

                <div class="row justify-content-evenly">
                    <div class="col-md-3 mx-auto">
                        <a href="/" class="text-decoration-none">
                            <img class="Footer-logo w-55 h-auto" src="{{ asset('img/logo.png') }}" alt="Cinnamon-logo">
                        </a>

                    </div>
                    <div class="col-md-9 mx-auto">

                    </div>
                </div>

                <div class="row justify-content-evenly fs-5">
                    <div class="col-md-3 mx-auto">
                        <p style="text-align: justify;"><strong>Hale Cinnamon</strong> is a leading Sri Lankan cinnamon
                            exporter. We are proud to provide high-quality Sri Lankan cinnamon, produced using
                            traditional methods for generations, to customers around the world.</p>
                    </div>
                    <div class="col-md-9 mx-auto">
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <h5 class="text-uppercase mb-2 font-weight-bold text-warning">Site map</h5>
                                <ul class="list-unstyled p-0">
                                    <li><a href="{{ route('blog') }}" class="text-white hover-footer text-decoration-none">Blog</a></li>
                                    <li><a href="{{ route('about') }}" class="text-white hover-footer text-decoration-none">About</a></li>
                                    <li><a href="{{ route('product') }}" class="text-white hover-footer text-decoration-none">Product</a></li>
                                    <li><a href="{{ route('contact') }}" class="text-white hover-footer text-decoration-none">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5 class="text-uppercase mb-2 font-weight-bold text-warning">Contact</h5>
                                <address class="ms-3 mb-1 mt-2 ">
                                    <ul class="list-unstyled p-0">

                                        <li><a href="tel:+94777538775" target="_blank" title="Phone number"
                                                class="text-white hover-footer text-decoration-none">+94777538775</a></li>
                                        <li><a href="mailto:info@halecinnamon.com" target="_blank"
                                                class="text-white hover-footer text-decoration-none"
                                                title="Mail">info@halecinnamon.com</a></li>
                                        <li><a href="https://www.google.com/maps/place/Your+Address+Here"
                                                target="_blank" class="text-white hover-footer text-decoration-none"
                                                title="Address"> No 032, main street, Colombo, Sri Lanka.</a></li>

                                    </ul>

                                </address>
                            </div>
                            <div class="col-md-4">
                                <h5 class="text-uppercase mb-3 font-weight-bold text-warning">Know the latest news</h5>
                                <form name="submit-to-google-sheet">

                                    <div class="input-group">
                                        <input type="email" minlength="5" maxlength="40" required
                                            class="form-control home-search-box__filter" name="Email"
                                            autocomplete="on" placeholder="Enter your email"
                                            aria-label="Enter your email" aria-describedby="button-addon2"
                                            pattern="^[^@]+@(gmail|yahoo|hotmail)\.[a-z]{2,}$">
                                        <input class="btn btn-warning btn-sm news-letter__btn response-f__size"
                                            type="submit" id="button-addon2" value="More update">

                                    </div>
                                </form>
                                <p id="success-message" class="d-none">Form submitted successfully!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4">

            <div class="row">

            </div>
        </div>
</footer>
<!-- Footer section ends -->




