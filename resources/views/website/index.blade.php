@extends('website.layouts.app')

<!-- ==== topbar start ==== -->
@section('content')


<!-- ==== sidenav end ==== -->

<!-- ==== hero section start ==== -->
<section class="hero-slider-area">
    <div class="hero-slider owl-carousel owl-theme">
        <div class="hero-slider-item bg-img" data-background="assets/images/hero/hero-slider-bg.png">
            <div class="container">
                <div class="hero-slider-content">
                    <div class="intro-video">
                        <div class="d-flex align-items-center">
                            <a href="https://www.youtube.com/watch?v=NtETKgSE7i0" title="YouTube video player"
                                class="video-btn video-popup-btn">
                                <span>
                                    <i class="fa-solid fa-play"></i>
                                </span>
                            </a>
                            <span>Intro Video</span>
                        </div>
                    </div>
                    <h3>Donate blood,save life !</h3>
                    <h1>Donate Blood And Inspires Others.</h1>
                    <a href="services.html" class="button button--effect">Explore Now</a>
                </div>
            </div>
        </div>

        <div class="hero-slider-item bg-img" data-background="assets/images/hero/hero-four.jpg">
            <div class="container">
                <div class="hero-slider-content animation-style-two">
                    <div class="intro-video">
                        <div class="d-flex align-items-center">
                            <a href="https://www.youtube.com/watch?v=NtETKgSE7i0" title="YouTube video player"
                                class="video-btn video-popup-btn">
                                <span>
                                    <i class="fa-solid fa-play"></i>
                                </span>
                            </a>
                            <span>Intro Video</span>
                        </div>
                    </div>
                    <h3>Donate blood,save life !</h3>
                    <h1>Donate Blood And Inspires Others.</h1>
                    <a href="services.html" class="button button--effect">Explore Now</a>
                </div>
            </div>
        </div>

        <div class="hero-slider-item bg-img" data-background="assets/images/hero/hero-five.jpg">
            <div class="container">
                <div class="hero-slider-content animation-style-three">
                    <div class="intro-video">
                        <div class="d-flex align-items-center">
                            <a href="https://www.youtube.com/watch?v=NtETKgSE7i0" title="YouTube video player"
                                class="video-btn video-popup-btn">
                                <span>
                                    <i class="fa-solid fa-play"></i>
                                </span>
                            </a>
                            <span>Intro Video</span>
                        </div>
                    </div>
                    <h3>Donate blood,save life !</h3>
                    <h1>Donate Blood And Inspires Others.</h1>
                    <a href="services.html" class="button button--effect">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #hero section end ==== -->

<!-- ==== overview section start ==== -->
<section class="overview">
    <div class="container">
        <div class="explore-area wow fadeInUp">
            <div class="explore-area__single">
                <div class="explore-area__single-content">
                    <h4><a href="{{route('donor-register.donor_registration')}}">Regsiter As A Donor</a></h4>
                    <p class="neutral-bottom">Nor again is there anyone who loves or pursues or desires to obtain pain
                        of itself, because it is pain,</p>
                </div>
                <a href="{{route('donor-register.donor_registration')}}"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i></a>
            </div>
            <div class="explore-area__single explore-area__single--secondary">
                <div class="explore-area__single-content">
                    <h4><a href="donate-now.html">Donate Now</a></h4>
                    <p class="neutral-bottom">Nor again is there anyone who loves or pursues or desires to obtain pain
                        of itself, because it is pain,</p>
                </div>
                <a href="{{route('donor-register.donor_registration')}}"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i></a>
            </div>
        </div>
        <div class="overview-area section-space">
            <div class="row neutral-row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 align-center row-item">
                    <div class="overview-area__single img-effect">
                        <div class="overview-area__single-content">
                            <div class="poster">
                                <a href="service-details.html">
                                    <img src="assets/images/overview/donor.png" alt="Blood Donor">
                                </a>
                            </div>
                            <div class="icon-box-wrapper">
                                <div class="icon-box">
                                    <img src="assets/images/overview/first-aid.png" alt="First Aid">
                                </div>
                            </div>
                            <h5>Become a Donor</h5>
                            <p class="neutral-bottom">But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was born and I will give pleasure</p>
                        </div>
                        <a href="service-details.html" class="button button--secondary button--effect">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 row-item align-center">
                    <div class="overview-area__single img-effect wow fadeInUp">
                        <div class="overview-area__single-content">
                            <div class="poster">
                                <a href="service-details.html">
                                    <img src="assets/images/overview/blood.png" alt="Give Blood">
                                </a>
                            </div>
                            <div class="icon-box-wrapper">
                                <div class="icon-box">
                                    <img src="assets/images/overview/tube.png" alt="Tube">
                                </div>
                            </div>
                            <h5>Why Give Blood?</h5>
                            <p class="neutral-bottom">But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was born and I will give pleasure</p>
                        </div>
                        <a href="service-details.html" class="button button--secondary button--effect">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 row-item align-center">
                    <div class="overview-area__single img-effect wow fadeInUp" data-wow-delay="0.2s">
                        <div class="overview-area__single-content">
                            <div class="poster">
                                <a href="service-details.html">
                                    <img src="assets/images/overview/donations.png" alt="Blood Donation">
                                </a>
                            </div>
                            <div class="icon-box-wrapper">
                                <div class="icon-box">
                                    <img src="assets/images/overview/heart.png" alt="Heart">
                                </div>
                            </div>
                            <h5>How Donations Helps</h5>
                            <p class="neutral-bottom">But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain was born and I will give pleasure</p>
                        </div>
                        <a href="service-details.html" class="button button--secondary button--effect">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #overview section end ==== -->
<section class="appointment section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-area">
                    <div class="row neutral-row">
                        <div class="col-lg-12 row-item">
                            <div class="appointment-area__single appointment-area__form">
                                <h4>Search Donor</h4>
                                <form action="#" method="get" name="appointmentForm">
                                    @csrf
                                    <input type="hidden" name="class_id" id="class_id">
                                    <input type="hidden" name="shift_id" id="shift_id">
                                    <div class="row py-2" id="all-row-py-2">
                                        <div class="col-sm-3"> <label for="blood_group"> Blood Group</label>
                                            <select class="form-control" id="blood_group" name="blood_group">
                                                <option label="Select One" selected></option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3"> <label for="division_id">Division</label>
                                            <select name="division_id" id="division_id"
                                                class="form-control chosen-select">
                                                <option value="">Select One</option>
                                                @foreach ($divisions as $dv)
                                                <option value="{{$dv->id}}">{{$dv->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-3"> <label for="district_id">District</label>
                                            <select name="district_id" id="district_id" class="form-control">
                                                <option value="">Select District</option>

                                            </select>
                                        </div>


                                        <div class="col-sm-3"> <label for="upazila_id">Select Upazila</label>
                                            <select name="upazila_id" id="upazila_id" class="form-control">
                                                <option value="">Select Upazila</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary fas fa-arrow-down"
                                        id="searchBtn">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-area">
                    <div class="row neutral-row">
                        <div class="col-lg-12 row-item">
                            <div class="appointment-area__single appointment-area__form">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Blood Group</th>
                                            <th>Name</th>
                                            <th>Division</th>
                                            <th>District</th>
                                            <th>Upazila</th>
                                            <th>Contact </th>
                                        </tr>
                                        
                                        
                                    </thead>
                                    <tbody id="donor-tbody">
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
   


</section>

{{-- MOdal --}}


{{-- Search Donner  --}}


<!-- ==== organization section start ==== -->
<section class="organization organization-alt section-space">
    <div class="container">
        <div class="row neutral-row">
            <div class="col-lg-12 row-item">
                <div class="organization-area">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-5">
                            <div class="organization-area__thumb dir-ltr mb-30 text-center">
                                <img src="assets/images/organization-illustration.png" alt="Organization">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="organization-area__content wow fadeInUp">
                                <p class="neutral-ascender primary descender">Help The People in Need</p>
                                <h2>Welcome to Blood Donors Organization</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. suspendisse the gravida. Risus commodo
                                    viverra maecenas</p>

                                <div class="organization-area__content-points">
                                    <ul>
                                        <li><i class="fa-solid fa-angles-right"></i>Good Service</li>
                                        <li><i class="fa-solid fa-angles-right"></i>Help People</li>
                                        <li><i class="fa-solid fa-angles-right"></i>Hygine Tools</li>
                                    </ul>
                                    <ul>
                                        <li><i class="fa-solid fa-angles-right"></i>24h Service</li>
                                        <li><i class="fa-solid fa-angles-right"></i>Health Check</li>
                                        <li><i class="fa-solid fa-angles-right"></i>Blood Bank</li>
                                    </ul>
                                </div>
                                <a href="services.html" class="button button--effect">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #organization section end ==== -->

<!-- ==== counter start ==== -->
<div class="counter dark-overlay bg-img" data-background="assets/images/counter/counter-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="counter-area">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="odometer-item mb-30">
                                <img src="assets/images/counter/experience.png" alt="Experience">
                                <div class="counter-thumb">
                                    <h2 class="odometer" data-odometer-final="25">0</h2>
                                </div>
                                <p class="secondary neutral-descender">Year's Experience</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="odometer-item mb-30">
                                <img src="assets/images/counter/donors.png" alt="Donor">
                                <div class="counter-thumb">
                                    <h2 class="odometer" data-odometer-final="3225">0</h2>
                                </div>
                                <p class="secondary neutral-descender">Happy Donor's</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="odometer-item mb-30">
                                <img src="assets/images/counter/awards.png" alt="Awards">
                                <div class="counter-thumb">
                                    <h2 class="odometer" data-odometer-final="90">0</h2>
                                </div>
                                <p class="secondary neutral-descender">Total Awards</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="odometer-item">
                                <img src="assets/images/counter/recipient.png" alt="Recipient">
                                <div class="counter-thumb">
                                    <h2 class="odometer" data-odometer-final="3168">0</h2>
                                </div>
                                <p class="secondary neutral-descender">Happy Recipient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== #counter end ==== -->


<!-- ==== call now section start ==== -->
<section class="call dark-overlay bg-img" data-background="assets/images/call-now-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-area">
                    <div class="icon-box__wrapper">
                        <a href="tel:+01(977)259912" class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <p class="primary neutral-ascender descender">Start Donating</p>
                    <h2 class="descender">Call Now : 333 555 9090</h2>
                    <div class="group">
                        <a href="contact-us.html">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>New York – 1075 Firs Avenue</span>
                        </a>
                        <a href="mailto:company@domin.com">
                            <i class="fa-solid fa-envelope"></i><span>donate@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #call now section end ==== -->

<!-- ==== campaign section start ==== -->
<section class="campaign section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="campaign-area">
                    <div class="section-header section-inner-space">
                        <p class="primary neutral-ascender descender">Donate Now</p>
                        <h2 class="neutral-bottom">Popular Campaigns</h2>
                    </div>
                    <div class="campaign-area__slider">
                        <div class="campaign-area__single img-effect">
                            <div class="campaign-area__single-inner">
                                <div class="poster campaign-area__single-inner__item">
                                    <a href="campaign-details.html">
                                        <img src="assets/images/campaigns/free-group.png" alt="Free Blood Donation">
                                    </a>
                                    <a href="campaign-details.html" class="read-more">Read More</a>
                                </div>
                                <div class="campaign-area__single-inner__item campaign-area__single-inner__content">
                                    <p class="date text-icon-group">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        13 February, 2022
                                    </p>
                                    <h6><a href="blog-details.html">Free Group Checking</a></h6>
                                    <p class="regular">Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                                        incididunt et dolore magna sit consectetur.</p>
                                    <div class="group">
                                        <p class="text-icon-group">
                                            <i class="fa-solid fa-clock"></i>
                                            10.00 - 4.00
                                        </p>
                                        <p class="text-icon-group">
                                            <i class="fa-solid fa-location-dot"></i>
                                            Broklyn 40, USA
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="campaign-area__single img-effect">
                            <div class="campaign-area__single-inner">
                                <div class="poster campaign-area__single-inner__item">
                                    <a href="campaign-details.html">
                                        <img src="assets/images/campaigns/blood-donation-group.png"
                                            alt="Blood Donation">
                                    </a>
                                    <a href="campaign-details.html" class="read-more">Read More</a>
                                </div>
                                <div class="campaign-area__single-inner__item campaign-area__single-inner__content">
                                    <p class="date text-icon-group">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        14 February, 2022
                                    </p>
                                    <h6><a href="blog-details.html">Blood Donation Camp</a></h6>
                                    <p class="regular">Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                                        incididunt et dolore magna sit consectetur.</p>
                                    <div class="group">
                                        <p class="text-icon-group">
                                            <i class="fa-solid fa-clock"></i>
                                            11.00 - 4.00
                                        </p>
                                        <p class="text-icon-group">
                                            <i class="fa-solid fa-location-dot"></i>
                                            Broklyn 40, USA
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="campaign-area__single img-effect">
                            <div class="campaign-area__single-inner">
                                <div class="poster campaign-area__single-inner__item">
                                    <a href="campaign-details.html">
                                        <img src="assets/images/campaigns/free-group.png" alt="Free Blood Donation">
                                    </a>
                                    <a href="campaign-details.html" class="read-more">Read More</a>
                                </div>
                                <div class="campaign-area__single-inner__item campaign-area__single-inner__content">
                                    <p class="date text-icon-group">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        15 February, 2022
                                    </p>
                                    <h6><a href="blog-details.html">Free Group Checking</a></h6>
                                    <p class="regular">Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                                        incididunt et dolore magna sit consectetur.</p>
                                    <div class="group">
                                        <p class="text-icon-group">
                                            <i class="fa-solid fa-clock"></i>
                                            12.00 - 4.00
                                        </p>
                                        <p class="text-icon-group">
                                            <i class="fa-solid fa-location-dot"></i>
                                            Broklyn 40, USA
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #camapign section end ==== -->

<!-- ==== donor section end ==== -->
<section class="donor dark-overlay section-space bg-img" data-background="assets/images/blood-donor-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="donor-area">
                    <p class="primary neutral-ascender descender">Blood Owner</p>
                    <h2>We Are Blood Donor Group</h2>
                    <a href="https://www.youtube.com/watch?v=NtETKgSE7i0" target="_blank" title="YouTube video player"
                        class="video-btn-two video-popup-btn">
                        <span>
                            <i class="fa-solid fa-play"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #donor section end ==== -->

<!-- ==== appointment section start ==== -->
<section class="appointment section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-area">
                    <div class="row neutral-row">
                        <div class="col-lg-6 row-item">
                            <div class="appointment-area__single appointment-area__content">
                                <h4>Current Blood Request</h4>
                                <ul>
                                    <li><i class="fa-solid fa-heart"></i>B+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>O- Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>B- Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>AB- Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>O+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>B+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>AB+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>B+ Washington, USA (13.02.2022)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 row-item">
                            <div class="appointment-area__single appointment-area__form">
                                <h4>Request Appointment Here</h4>
                                <form action="#" method="post" name="appointmentForm">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <input type="text" name="appointment__name" id="appointmentName"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="input">
                                            <input type="number" name="appointment__number" id="appointmentNumber"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="input">
                                        <input type="email" name="appointment__email" id="appointmentEmail"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="input">
                                        <select class="select-donation-type">
                                            <option data-display="Donation Type">Donation Type</option>
                                            <option value="free">Free Donation</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="paid">Paid Donation</option>
                                        </select>
                                    </div>

                                    <div class="input">
                                        <textarea name="appointment__message" id="appointmentMessage" cols="30"
                                            rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="button button--tertiary button--effect">Submit
                                        Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #appointment section end ==== -->

<!-- ==== team section start ==== -->
<section class="team section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-area">
                    <div class="section-header section-inner-space">
                        <p class="primary neutral-ascender descender">Team Members</p>
                        <h2 class="neutral-descender">Meet Volunteers</h2>
                    </div>
                    <div class="row neutral-row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4 row-item align-center">
                            <div class="team-area__single img-effect">
                                <div class="poster">
                                    <img src="assets/images/volunteers/nora.png" alt="Nora">
                                    <div class="social social--secondary">
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </div>
                                <h5>Nora Khaypeia</h5>
                                <p class="secondary neutral-descender">Co-Founder</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row-item align-center">
                            <div class="team-area__single img-effect wow fadeInUp">
                                <div class="poster">
                                    <img src="assets/images/volunteers/joshi.png" alt="Alex Joshan Deo">
                                    <div class="social social--secondary">
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </div>
                                <h5>Nora Khaypeia</h5>
                                <p class="secondary neutral-descender">Co-Founder</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 row-item align-center">
                            <div class="team-area__single img-effect wow fadeInUp" data-wow-delay="0.2s">
                                <div class="poster">
                                    <img src="assets/images/volunteers/alex.png" alt="Alex Joshi Deon">
                                    <div class="social social--secondary">
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </div>
                                <h5>Alex Joshi Deon</h5>
                                <p class="secondary neutral-descender">Co-Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #team section end ==== -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body" id="modal-tbody">
            
            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
    </div>
    </div>
</div>
@endsection
@push('js')

<script>
    $(document).ready(function () {
        $('#division_id').change(function (e) {
            e.preventDefault();
            let division_id = $(this).val();

            $.ajax({
                url: '/getDistrict',
                type: 'GET',
                data: {division_id},
                success: function (data) {
                   let html = '<option>Select District</option>';

                   data.map(function(item){
                        html += `<option value="${item.id}">${item.name}</option>`;
                   });

                   $('#district_id').html(html);
                }
            });
           
        });

        $('#district_id').change(function (e) {
            e.preventDefault();
            let district_id = $(this).val();

            $.ajax({
                url: '/getUpazila',
                type: 'get',
                data: {district_id},
                success: function (data) {
                    let html = '<option>Select Upazila</option>';
                    
                    data.map(function(item){
                        html += `<option value="${item.id}">${item.name}</option>`;
                    });

                    $('#upazila_id').html(html);
                }
            });
        });
        $('#upazila_id').change(function (e) {
            e.preventDefault();
            let upazila_id = $(this).val();

        });

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           

            
        $('#searchBtn').click(function (e) {
            e.preventDefault();
            let blood_group = $('#blood_group').val();
            let division_id = $('#division_id').val();
            let district_id = $('#district_id').val();
            let upazila_id = $('#upazila_id').val();
      
            $.ajax({
                url: '/getByBloodGroup',
                type: 'post',
                data: {
                    blood_group,
                    division_id,
                    district_id,
                    upazila_id,

                },

                success: function (data) {
                    let html = '';
                    $.each(data,function(index,val){
                        html += `<tr>
                                    <td>${val.blood_group}</td>
                                    <td>${val.name}</td>
                                    <td>${val.division.name}</td>
                                    <td>${val.district.name}</td>
                                    <td>${val.upazila.name}</td>
                                    <td>
                                        <a type="button" id="modal-show" data-id="${val.id}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>`;

                    });

                    $('#donor-tbody').html(html);


                }

            });
        })

       

        // $('#searchBtn').click(function(e){
        //     e.preventDefault();
        //     let division_id = $('#division_id').val();
        //     alert (division_id);
        // })
        // $('#searchBtn').click(function(e){
        //     e.preventDefault();
        //     let district_id = $('#district_id').val();
        //     alert (district_id);
        // })
        // $('#searchBtn').click(function(e){
        //     e.preventDefault();
        //     let upazila_id = $('#upazila_id').val();
        //     alert (upazila_id);
        // })

    });

                $(document).on('click','#modal-show', function(e){
                        e.preventDefault();
                        let id = $(this).data('id');
                        $.ajax({
                                url: '/getPhone',
                                type: 'get',
                                data: {
                                    id,
                                },
                                success: function (data) {
                                   let html = `<h4>Phone :${data.phone} </h4>`;
                                        
                                    $('#modal-tbody').html(html);
                                }
                        });
                        
                        

                    });


</script>
@endpush
