@extends('website.layouts.app')
        <!-- ==== topbar start ==== -->
@section('content')
<section class="registration section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="registration-area wow fadeInUp">
                        <div class="section-header section-inner-space">
                            <h2 class="neutral-bottom">Blad Ai Organization</h2>
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
                                                <input type="text" name="name" id="regiFName" required>
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
                                                    <input type="text" name="email" id="email">
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
                                                    <input type="text" name="phone" id="regiNumber" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="registration-area__form-single ">
                                    <p class="secondary">Date Of Birth *</p>
                                    <div class="registration-area__form-single__inner">
                                        <div class="input">
                                            <input type="date" name="dob"  id="datepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="registration-area__form-single">
                                    <p class="secondary">Blood Group *</p>
                                    <div class="registration-area__form-single__inner">
                                        <div class="input-group-column">
                                            <div class="input">
                                                <label for="regiGroup">Blood Group</label>
                                                <select class="select-blood-group" id="regiGroup" name="blood_group">
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
                                                <input type="text" name="occupation" id="occupation">
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
                                                <input type="text" name="age" id="age">
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
                                                <input type="text" name="height" id="height">
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
                                                <input type="text" name="weight" id="weight">
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
                                                  <select class="select-regi-country" name="division_id" id="divission_id">
                                                    <option value="">Select One</option>
                                                    @foreach ($divisions as $dv)
                                                    <option value="{{$dv->id}}">{{$dv->name}}</option>
                                                    @endforeach
                                                  </select>
                                            </div>
                                            <div class="input">
                                                <label for="district_id">District</label>
                                                <select class="select-regi-country" name="district_id" id="district_id">
                                                    <option value="">Select One</option>
                                                    @foreach ($districts as $ds)
                                                    <option value="{{$ds->id}}">{{$ds->name}}</option>
                                                    @endforeach
                                                  </select>
                                                
                                            </div>
                                            <div class="input">
                                                <label for="upazila_id">Upazila</label>
                                                <select class="select-regi-country" name="upazila_id" id="upazila_id">
                                                    <option value="">Select One</option>
                                                    @foreach ($upazilas as $up)
                                                    <option value="{{$up->id}}">{{$up->name}}</option>
                                                    @endforeach
                                                  </select>
                                                
                                            </div>
                                            <div class="input">
                                                <label for="regiState">Area</label>
                                                <input type="text" name="area" id="regiState" required>
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
$('#datepicker').datepicker({
});
</script>

    
@endpush