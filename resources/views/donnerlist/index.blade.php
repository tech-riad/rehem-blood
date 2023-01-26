@extends('layouts.backend.app')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="card new-table mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Donner List</h4>
                            
                        </div>
                        
                    </div>

                    <div class="">
                        <table id="customTable" class="table table-striped table-bordered table-responsive " style="width:100%">
                            <thead>
                                <tr>
                                    <th >SL</th>
                                    <th >User Name</th>
                                    <th >Name</th>
                                    <th >Email</th>
                                    <th >Phone</th>
                                    <th >Blood Group</th>
                                    <th >Date Of Birth</th>
                                    <th >Age</th>
                                    <th >Status</th>
                                    <th >Height</th>
                                    <th >Weight</th>
                                    <th >District</th>
                                    <th >Division</th>
                                    <th >Upazila</th>
                                    <th >Area</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                
                                @foreach ($donors as $d)
                                <tr>
                                   
                                    <td>{{$i++}}</td>
                                    <td>{{@$d->user_name}}</td>
                                    <td>{{@$d->name}}</td>
                                    <td>{{@$d->email}}</td>
                                    <td>{{@$d->phone }}</td>
                                    <td>{{@$d->blood_group }}</td>
                                    <td>{{@$d->dob }}</td>
                                    <td>{{@$d->age }}</td>
                                    <td>{{@$d->occupation }}</td>
                                    <td>{{@$d->height }}</td>
                                    <td>{{@$d->weight }}</td>
                                    <td>{{@$d->district->name }}</td>
                                    <td>{{@$d->division->name }}</td>
                                    <td>{{@$d->upazila->name }}</td>
                                    <td>{{@$d->area }}</td>
                                    <td>
                                        <a href="" class="btn btn-success p-2"><i style="margin-left: 0.3125rem;" class="fa-solid fa-pen-to-square"></i></a>
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