@extends('layouts.backend.app')
@push('css')
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Roles</h4>
                        <a href="{{ route('app.role.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table custom-table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                    <th  class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        @if($role->permissions->count() > 0)
                                        <div class="badge badge-success">{{$role->permissions->count()}}</div>
                                        @else
                                            <div class="badge badge-danger">No Permission Found :)</div>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('app.role.edit',$role->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <a id="delete" href="{{route('app.role.delete',$role->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
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
    <!-- Page level plugins -->
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush
