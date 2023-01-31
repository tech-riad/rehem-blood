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
                                <h1>{{Auth::guard('donor')->user()->id }}</h1>
                                <form id="image-upload" action="{{route('donor-dashboard.update_image',Auth::guard('donor')->user()->id )}}" method="put" enctype="multipart/form-data">
                                    @csrf
                                    <div class="user-profile">
                                        <div class="img d-flex flex-column align-items-center">
                                            <div class="user-avatar">
                                                <img class="rounded-circle img-fluid" width="150px" id="image-preview"
                                                    src="https://schoolcollege.xyz/female.jpeg">

                                            </div>
                                        </div>
                                        <div class="img-select">
                                            <label for="inputTag">
                                                Select Image
                                                <input name="image"  id="inputTag" type="file">
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="{{route('donor-dashboard.update_donor',Auth::guard('donor')->user()->id )}}" method="put">
                        @csrf
                        
                        
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
                                            <label for="fullName">Height</label>
                                            <input type="text" class="form-control" name="height" value="{{Auth::guard('donor')->user()->height ?? ''}}"
                                                id="fullName" placeholder="Enter height">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Weight</label>
                                            <input type="text" class="form-control" name="weight" value="{{Auth::guard('donor')->user()->weight ?? ''}}"
                                                id="fullName" placeholder="Enter height">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Age</label>
                                            <input type="text" class="form-control" name="age" value="{{Auth::guard('donor')->user()->age ?? ''}}"
                                                id="fullName" placeholder="Enter height">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Area</label>
                                            <input type="text" class="form-control" name="area" value="{{Auth::guard('donor')->user()->area ?? ''}}"
                                                id="fullName" placeholder="Enter height">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input  class="form-control" id="eMail"
                                                placeholder="Enter email ID"  value="{{Auth::guard('donor')->user()->email ?? '' }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input class="form-control" id="phone"
                                                placeholder="Enter phone number"
                                                value="{{Auth::guard('donor')->user()->phone ??  ''}}" readonly>
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
                                                <option value="{{Auth::guard('donor')->user()->division_id ?? ''}}">{{Auth::guard('donor')->user()->division->name ?? ''}}</option>
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
                                                <option value="{{Auth::guard('donor')->user()->district_id ?? ''}}">{{Auth::guard('donor')->user()->district->name ?? ''}}</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Upazila</label>
                                            <select name="upazila_id" id="upazila_id" class="form-control">
                                                <option value="{{Auth::guard('donor')->user()->upazila_id?? ''}}">{{Auth::guard('donor')->user()->upazila->name ?? ''}}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <Button type="submit" class="btn btn-success">Update</Button>
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
