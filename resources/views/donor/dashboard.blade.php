@extends('donor.app')
@push('css')
<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

</style>
@endpush
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <h1>{{Auth::guard('donor')->user()->name }}</h1>
                                <form id="image-upload" method="POST" enctype="multipart/form-data">
                                    <div class="user-profile">
                                        <div class="img d-flex flex-column align-items-center">
                                            <div class="user-avatar">
                                                <img class="rounded-circle img-fluid" width="150px" id="image-preview"
                                                    src="https://schoolcollege.xyz/female.jpeg">

                                            </div>
                                            <input type="hidden" name="id" value="6">
                                            <span class="text-danger" id="image-input-error"></span>
                                            <button class="btn btn-primary" type="submit" id="btn-save"
                                                style="margin-bottom: 15px; margin-top:5px;display:none">Save</button>
                                        </div>
                                        <div class="img-select">
                                            <label for="inputTag">
                                                Select Image
                                                <input name="photo" id="inputTag" type="file">
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="#" method="POST">
                        @csrf
                        <input type="hidden" name="_token" value="y3LL403gbT3DEj4MoyEeZEYeeUM4gvH2QX0b6Q7B">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary">Personal Details (22060006)
                                        </h6>
                                        <hr>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" class="form-control" name="name" value="{{Auth::guard('donor')->user()->name ?? ''}}"
                                                id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input type="email" class="form-control" id="eMail"
                                                placeholder="Enter email ID" name="email" value="{{Auth::guard('donor')->user()->email ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Enter phone number" name="phone"
                                                value="{{Auth::guard('donor')->user()->phone ??  ''}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="mothername">Date Of Birth</label>
                                            <input type="date" name="dob" class="form-control" value="{{Auth::guard('donor')->user()->dob ?? '' }}" id="mothername">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Blood Group</label>
                                            <select class="form-control" name="blood_group" id="">
                                                
                                                <option value="{{Auth::guard('donor')->user()->blood_group ?? ''}} selected">
                                                    {{Auth::guard('donor')->user()->blood_group ?? ''}}</option>
                                                <option value="A+">
                                                    A+</option>
                                                <option value="A-">
                                                    A-</option>
                                                <option value=" B+">
                                                    B+</option>
                                                <option value="B-">
                                                    B-</option>
                                                <option value="O+">
                                                    O+</option>
                                                <option value="O-">
                                                    O-</option>
                                                <option value="AB+">
                                                    AB+</option>
                                                <option value="AB-">
                                                    AB-</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Division</label>
                                            <select name="division_id" id="division_id"
                                                class="form-control chosen-select">
                                                <option value="">Select One</option>
                                                @foreach ($divisions as $dv)
                                                <option value="{{$dv->id}}">{{$dv->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">District</label>
                                            <select name="district_id" id="district_id" class="form-control">
                                                <option value="">Select District</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Upazila</label>
                                            <select name="upazila_id" id="upazila_id" class="form-control">
                                                <option value="">Select Upazila</option>
                                            </select>
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-success">Update</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
});
    

</script>

@endpush
