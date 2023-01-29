@extends('website.layouts.app')
<!-- ==== topbar start ==== -->
@section('content')
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





</section>

<section>
    <main class="container-fluid bordered">

        <div class="card">
            <div class="card-boby">
                <div class="row">
                    
                        <div class="table">
                            <div class="card">
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>

    </main>
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


                        html +=`<div class="col-lg-4">
                        <div class="table">
                            <div class="card">
                                <div class="card-body">
                                    <h2>${val.name}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                        `;
                        // html += `<tr>
                        //             <td>${val.blood_group}</td>
                        //             <td>${val.name}</td>
                        //             <td>${val.division.name}</td>
                        //             <td>${val.district.name}</td>
                        //             <td>${val.upazila.name}</td>
                        //             <td>
                        //                 <a type="button" id="modal-show" data-id="${val.id}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        //                     <i class="fa fa-eye"></i>
                        //                 </a>
                        //             </td>
                        //         </tr>`;

                    });

                    $('.card-body').html(html);


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

</script>
@endpush
