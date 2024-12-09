@extends('layouts.app')
@section('title','')
@section('main-content')

<!-- Sub header section starts -->
<section id="subheader" class="position-relative z-0">
            <img src="{{ asset('img/background/cin7.jpg') }}" class="position-absolute top-0 start-0 w-100 custom-height z-1 img-dark1" alt="">
            <div class="container position-relative z-2">
                <div class="row">
                    <div class="col-md-12 mb-bottom">
                        <div class="text-center animate-me-1">
                            <h2 class="fs1 display-3 fw-semibold fst-italic text-secondary">Cinnamon</h2>
                            <h2 class="fs2 display-4 fw-semibold d-inline-block s3 text-uppercase text-white py-1">Our terms</h2>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Sub header section ends -->

<!-- content section starts -->
<section class="my-5 py-5">
<div class="container">
                    <div class="row gx-5 align-items-center fs-5">
                        <div class="col-md-12">
                            <h2>Hale Cinnamon - Terms & Conditions & Return Policy</h2>

                            <h3 class="mt-5">Terms & Conditions</h3>

                            <p>Welcome to the Hale Cinnamon website (www.halecinnamon.com). By accessing or using the Website, you agree to be bound by these Terms & Conditions ("Terms"). If you disagree with any part of the Terms, you may not access or use the Website.</p>

                            <p>Hale Cinnamon reserves the right to update or modify these Terms at any time without prior notice. Your continued use of the Website following the posting of changes to the Terms constitutes acceptance of those changes.</p>

                            <h3>Use of the Website</h3>

                            <p>You may use the Website for personal, non-commercial purposes only. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information or content obtained from the Website.</p>

                            <h3>Intellectual Property</h3>

                            <p>The Website and its content, including but not limited to text, graphics, logos, images, and software, are the property of Hale Cinnamon or its licensors and are protected by copyright and other intellectual property laws.</p>

                            <h3>Return Policy</h3>

                            <p>Last Updated: <strong>22.06.2024</strong></p>

                            <p>Hale Cinnamon is committed to your satisfaction. If you are not completely satisfied with your purchase, you can return it to us for a full refund or exchange within 15 days of your purchase date.</p>

                            <h3>Conditions for Return</h3>

                            <ul>
                                <li>Items must be returned in their original, unopened, and undamaged packaging.</li>
                                <li>A copy of your original receipt or packing slip is required for all returns.</li>
                                <li>We cannot accept returns for items that have been used or tampered with.</li>
                                <li>We cannot accept returns for perishable items.</li>
                            </ul>

                            <h3>How to Return an Item</h3>

                            <ol>
                                <li>Contact our customer service team by email at <a href="mailto:youremail@example.com" class="text-decoration-none" title="Mail">mail@cinnamon.com</a> or by phone at <a href="tel:+94777538775" title="Phone number" class="text-decoration-none">+94777538775</a> to request a return authorization (RA) number.</li>
                                <li>Pack the item(s) you wish to return securely in the original packaging, if possible.</li>
                                <li>Include a copy of your original receipt or packing slip in the package.</li>
                                <li>Write the RA number clearly on the outside of the package.</li>
                                <li>Ship the package to the following address:</li>
                            </ol>

                            <p>Hale Cinnamon Returns<br>
                            <a href="https://www.google.com/maps/place/Your+Address+Here" class="text-decoration-none disabled " title="Address"> No 032, main street, Colombo, Sri Lanka.</a></p>

                            <h3>Return Shipping Costs</h3>

                            <p>You are responsible for the cost of shipping the returned item(s) to us. We recommend using a trackable shipping service.</p>

                            <h3>Refunds</h3>

                            <p>Once we receive your returned item(s) and verify that they meet the conditions for return, we will issue a full refund to the original payment method used for your purchase. Please allow 15 business days for your refund to be processed.</p>

                            <h3>Exchanges</h3>

                            <p>If you would like to exchange an item for a different size or flavor, please follow the return instructions above and indicate your desired exchange on the return form. We will ship the replacement item to you free of charge.</p>

                            <h3>Non-Returnable Items</h3>

                            <ul>
                                <li>We cannot accept returns for perishable items.</li>
                                <li>We cannot accept returns for items that have been used or tampered with.</li>
                            </ul>

                            <h3>Contact Us</h3>

                            <p>If you have any questions about our Terms & Conditions or Return Policy, please contact us at:</p>

                            <ul>
                            <li>Email: <a href="mailto:youremail@example.com" class="text-decoration-none" title="Mail">info@halecinnamon.com</a></li>
                            <li>Phone: <a href="tel:+94777538775" title="Phone number" class="text-decoration-none">+94777538775</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
<!-- content section ends -->
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/terms.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/terms.js') }}"></script>
@endsection
