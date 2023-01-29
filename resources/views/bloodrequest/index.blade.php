@extends('layouts.backend.app')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="card new-table mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Requested For Blood</h4>
                        </div>
                        
                    </div>

                    <div class="">
                        <table id="customTable" class="table table-striped table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th >Sl</th>
                                    <th >Name</th>
                                    <th >Phone</th>
                                    <th >Email</th>
                                    <th >Division</th>
                                    <th >Upazila</th>
                                    <th >District</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach ($bloodrequests as $br)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{@$br->name}}</td>
                                    <td>{{@$br->phone}}</td>
                                    <td>{{@$br->email}}</td>
                                    <td>{{@$br->division->name}}</td>
                                    <td>{{@$br->district->name}}</td>
                                    <td>{{@$br->upazila->name}}</td>
                                    <td>
                                        <a href="" class="btn btn-success p-2"><i style="margin-left: 0.3125rem;" class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" class="btn btn-danger deleteBtn p-2"><i style="margin-left: 0.3125rem;" class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#customTable').DataTable();
    });
    
</script>
@endpush