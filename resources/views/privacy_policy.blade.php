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
                            <h2 class="fs2 display-4 fw-semibold d-inline-block s3 text-uppercase text-white py-1">Privacy Policy</h2>
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
                            <h3>Hale Cinnamon Privacy Policy</h3>
                            <p>Effective Date: <strong>06.12.2024</strong></p>

                            <p>Hale Cinnamon respects the privacy of our users. This Privacy Policy describes the types of information we collect from and about you when you visit our website www.halecinnamon.com and how we use that information.</p>

                            <h3>Information We Collect</h3>

                            <p>We collect several types of information from and about users of our Website:</p>

                            <ul>
                                <li><strong>Personal Information:</strong> This includes information that can be used to identify you, such as your name, email address, phone number, and billing address. We only collect this information when you voluntarily provide it to us, such as when you place an order, subscribe to our newsletter, or contact us for support.</li>
                                <li><strong>Non-Personal Information:</strong> This includes information that cannot be used to identify you, such as your browser type, operating system, IP address, browsing history, and demographic information. We collect this information automatically when you visit our Website.</li>
                            </ul>

                            <h3>How We Use Your Information</h3>

                            <p>We use the information we collect from and about you for the following purposes:</p>

                            <ul>
                                <li>To process your orders and fulfill your requests.</li>
                                <li>To send you important information about your orders, including order confirmations and shipping notifications.</li>
                                <li>To send you marketing communications, such as newsletters and promotional offers, if you have opted-in to receive them.</li>
                                <li>To personalize your experience on our Website.</li>
                                <li>To improve our Website and services.</li>
                                <li>To comply with legal and regulatory requirements.</li>
                            </ul>

                            <h3>Sharing Your Information</h3>

                            <p>We will not share your personal information with third parties except in the following cases:</p>

                            <ul>
                                <li>With service providers that help us operate our website and fulfill your orders, such as payment processors and shipping companies. These service providers are only authorized to use your information for the specific task for which they are hired.</li>
                                <li>To comply with legal and regulatory requirements.</li>
                                <li>In the event of a business transfer, such as a merger or acquisition.</li>
                            </ul>

                            <h3>Your Choices</h3>

                            <p>You have choices regarding your information:</p>

                            <ul>
                                <li>You can opt-out of receiving marketing communications from us by following the unsubscribe instructions in those communications.</li>
                                <li>You can access and update your personal information by contacting us.</li>
                            </ul>

                            <h3>Data Security</h3>

                            <p>We take reasonable steps to protect the information you provide to us from unauthorized access, disclosure, alteration, or destruction. However, no website or internet transmission is completely secure. We cannot guarantee the security of your information.</p>

                            <h3>Changes to this Privacy Policy</h3>

                            <p>We may update this Privacy Policy from time to time. We will post any changes to this Privacy Policy on our Website. We encourage you to review this Privacy Policy periodically to stay informed of any updates.</p>

                            <h3>Contact Us</h3>

                            <p>If you have any questions about this Privacy Policy, please contact us at:</p>

                            <ul>
                                <li>Email: <a href="info@halecinnamon.com" class="text-decoration-none" title="Mail">info@halecinnamon.com</a></li>
                                <li>Phone: <a href="tel:+94777538775" title="Phone number" class="text-decoration-none">+94777538775</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
<!-- content section ends -->

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/privacy_policy.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/privacy_policy.js') }}"></script>
@endsection
