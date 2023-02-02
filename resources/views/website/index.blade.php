@extends('website.layouts.app')



<!-- ==== topbar start ==== -->
@section('content')


<!-- ==== sidenav end ==== -->

<!-- ==== hero section start ==== -->
{{-- <section class="hero-slider-area">
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
</section> --}}
<!-- ==== #hero section end ==== -->

<!-- ==== overview section start ==== -->
<style>
    #x-session .form-control {
        width: 336px;
        padding: 10px 29px;
        font-size: 19px;
        font-weight: 200;
        border-radius: 10px;
        border: 1px solid transparent;
        box-shadow: 4px 4px 10px 0 rgb(0 0 0 / 10%);
        transition: .4s;

    }

    th {
        color: #000;
        font-size: 23px;
        font-weight: 600;
    }

    button#searchBtn {
        background: #ea062b;
        padding: 13px 26px;
        font-size: 19px;
        font-weight: 600;
        border-radius: 10px;
        box-shadow: 4px 4px 10px 0 rgb(41 44 214 / 40%);
        transition: .4s;
    }

    button#searchBtn:hover {
        box-shadow: 4px 4px 20px 0 rgb(18 98 218 / 60%);
        background: #fff;
        color: #ea062b;
        border: 1px solid #ea062b;
    }

</style>
<!-- ==== #overview section end ==== -->
<section class="appointment section-space-bottom" id="x-session">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-area">
                    <div class="row neutral-row">
                        <div class="col-lg-12 row-item">
                            <div class="appointment-area__single appointment-area__form">
                                <h4 style="background-color: #ea062b;
                                
                                padding: 9px;
                                border-radius: 10px;
                                color: #fff;">Search Donor</h4>
                                <form action="#" method="get" name="appointmentForm">
                                    @csrf

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
                                        <div class="col-sm-3">
                                            <label for="division_id">Division</label>
                                            <select name="division_id" id="division_id"
                                                class="form-control chosen-select">
                                                <option value="">Select One</option>
                                                @foreach ($divisions as $dv)
                                                <option value="{{$dv->id}}">{{$dv->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="district_id">District</label>
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

                                    <button type="submit" class=" fas fa-arrow-down" id="searchBtn">Search</button>
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

<section class="appointment section-space-bottom" id="appointment">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-area">
                    <div class="row neutral-row">
                        <div class="col-lg-12 row-item">
                            <div class="appointment-area__single appointment-area__content">
                                <h4 style="background-color: #ea062b;
                                
                                padding: 9px;
                                border-radius: 10px;
                                color: #fff;">Current Blood Request</h4>
                                
                                <ul style="padding: 14px 0px 14px 0px;">
                                    <div class="row">
                                        @foreach ($bloodrequests as $br)
                                        <div class="col-lg-4 mt-2 text-bold">
                                        <li>
                                            <i class="fa-solid fa-droplet"></i>
                                            <span style=" 
                                            font-size: 22px;
                                            font-weight: 600;
                                            color: red;
                                            background-color: #000;
                                            padding: 8px;
                                            margin-top: 11px;">{{$br->blood_group}},{{@$br->division->name}},{{@$br->district->name}},{{@$br->upazila->name}},({{@$br->phone}}),({{@$br->created_at}})</span>
                                        </li>
                                    </div>
                                    @endforeach
                                    </div>

                                </ul>

                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-lg-12 row-item">
                <div class="appointment-area__single">
                    <h4 style="background-color: #ea062b;
                                padding: 9px;
                                border-radius: 10px;
                                color: #fff;">Request For Blood</h4>
                    <form action="{{route('app.blood-request.store')}}" method="post" name="appointmentForm">
                        @csrf
                        <div class="row">
                            <div class="com-lg-4"></div>
                        </div>
                        <div class="">
                            <div class="">
                                <input type="text" class="form-control" name="name" id="appointmentName"
                                    placeholder="Your Name">
                            </div>
                            <div class="">
                                <input type="number" class="form-control" name="phone" id="appointmentNumber"
                                    placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="">
                            <input type="email" class="form-control" name="email" id="appointmentEmail"
                                placeholder="Your Email">
                        </div>
                        <div class="">
                            <select class="form-control" name="blood_group">
                                <option data-display="Blood Group" selected>Select Blood Group</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                            </select>
                        </div>
                        <div class="">
                            <select class="form-control" name="division_id" id="division_id_1">
                                <option data-display="Division" selected>Select Division</option>
                                @foreach ($divisions as $dv)
                                <option value="{{$dv->id}}">{{$dv->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">
                            <select class="form-control" name="district_id" id="district_id_1">
                                <option data-display="District" selected>Select District</option>

                            </select>
                        </div>
                        <div class="">
                            <select class="form-control" name="upazila_id" id="upazila_id_1">
                                <option data-display="Upazila" selected>Select Upazila</option>

                            </select>
                        </div>

                        <div class="">
                            <textarea name="message" class="form-control" id="appointmentMessage" cols="30" rows="5"
                                placeholder="Enter Your Message with full information"></textarea>
                        </div>
                        <button type="submit" class="button button--tertiary button--effect">Submit
                            Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overview">
    <div class="container">

        @if (isset(Auth::guard('donor')->user()->email ))

        @else
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
        @endif

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


{{-- MOdal --}}


{{-- Search Donner  --}}


<!-- ==== organization section start ==== -->

<!-- ==== #organization section end ==== -->

<!-- ==== counter start ==== -->
{{-- <div class="counter dark-overlay bg-img" data-background="assets/images/counter/counter-bg.png">
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
</div> --}}
<!-- ==== #counter end ==== -->


<!-- ==== call now section start ==== -->
{{-- <section class="call dark-overlay bg-img" data-background="assets/images/call-now-bg.png">
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
</section> --}}
<!-- ==== #call now section end ==== -->



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

<!-- ==== #appointment section end ==== -->




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" id="modal-close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-tbody">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="modal-close" data-dismiss="modal">Close</button>

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
                data: {
                    division_id
                },
                success: function (data) {
                    let html = '<option>Select District</option>';

                    data.map(function (item) {
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
                data: {
                    district_id
                },
                success: function (data) {
                    let html = '<option>Select Upazila</option>';

                    data.map(function (item) {
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
                    $.each(data, function (index, val) {
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

    });


    $(document).on('click', '#modal-show', function (e) {
        e.preventDefault();
        $('#myModal').modal('show');

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
    $(document).on('click', '#modal-close', function (e) {
        e.preventDefault();
        $('#myModal').modal('hide');

    });


    // Request

    $(document).ready(function () {

        $('#division_id_1').change(function (e) {
            e.preventDefault();
            let division_id = $(this).val();

            $.ajax({
                url: '/getDistrict',
                type: 'GET',
                data: {
                    division_id
                },
                success: function (data) {
                    let html = '<option>Select District</option>';

                    data.map(function (item) {
                        html += `<option value="${item.id}">${item.name}</option>`;
                    });

                    $('#district_id_1').html(html);
                }
            });

        });

        $('#district_id_1').change(function (e) {
            e.preventDefault();
            let district_id = $(this).val();

            $.ajax({
                url: '/getUpazila',
                type: 'get',
                data: {
                    district_id
                },
                success: function (data) {
                    let html = '<option>Select Upazila</option>';

                    data.map(function (item) {
                        html += `<option value="${item.id}">${item.name}</option>`;
                    });

                    $('#upazila_id_1').html(html);
                }
            });
        });
        $('#upazila_id_1').change(function (e) {
            e.preventDefault();
            let upazila_id = $(this).val();

        });
    });

</script>
@endpush
