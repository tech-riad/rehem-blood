@extends('website.layouts.app')
<!-- ==== topbar start ==== -->
@section('content')
<section class="registration section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="registration-area wow fadeInUp">
                    <div class="section-header section-inner-space">
                        <h2 class="neutral-bottom">Blood Donation Organaization</h2>
                    </div>
                    <div class="registration-area__form">
                        <form action="{{route('donor-register.donor_store')}}" method="post" name="registration__form">
                            @csrf
                            <div class="registration-area__form-single">
                                <p class="secondary">Full Name *</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="regiFName">Name</label>
                                            <input type="text" class="form-control" name="name" id="regiFName" required>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Email (optional)</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Phone Number *</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="regiNumber">Number</label>
                                            <input type="text" class="form-control" name="phone" id="regiNumber"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single ">
                                <p class="secondary">Date Of Birth *</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input">
                                        <input type="date" class="form-control" name="dob" id="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Blood Group *</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="regiGroup">Blood Group</label>
                                            <select class="form-control" id="regiGroup" name="blood_group">
                                                <option label="none" selected></option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Status(optional)</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="occupation">Occupation</label>
                                            <input type="text" class="form-control" name="occupation" id="occupation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Age*</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="age">Age</label>
                                            <input type="text" class="form-control" name="age" id="age">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Height*</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="height">Height</label>
                                            <input type="text" class="form-control" name="height" id="height">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Weight*</p>
                                <div class="registration-area__form-single__inner">
                                    <div class="input-group-column">
                                        <div class="input">
                                            <label for="weight">Weight</label>
                                            <input type="text" class="form-control" name="weight" id="weight">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registration-area__form-single">
                                <p class="secondary">Address *</p>
                                <div class="registration-area__form-single__inner mb-0">
                                    <div class="input-group-column input-group-column--secondary">
                                        <div class="input">
                                            <label for="division_id">Divission</label>
                                            <select class="form-control" name="division_id" id="division_id">
                                                <option value="">Select One</option>
                                                @foreach ($divisions as $dv)
                                                <option value="{{$dv->id}}">{{$dv->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input">
                                            <label for="district_id">District</label>
                                            <select class="form-control" name="district_id" id="district_id">
                                                <option value="">Select One</option>
                                            </select>

                                        </div>
                                        <div class="input">
                                            <label for="upazila_id">Upazila</label>
                                            <select class="form-control" name="upazila_id" id="upazila_id">
                                                <option value="">Select One</option>

                                            </select>

                                        </div>
                                        <div class="input">
                                            <label for="regiState">Area</label>
                                            <input class="form-control" type="text" name="area" id="regiState" required>
                                        </div>

                                        <div class="input registration-input-button mb-0">
                                            <button type="submit" class="button button--effect">Submit<i
                                                    class="fa-solid fa-arrow-right-long"></i></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




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



    });

</script>
@endpush
