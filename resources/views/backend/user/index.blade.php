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
                        <h4 class="float-left">Users</h4>
                        <a href="{{ route('app.user.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table custom-table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Joined At</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td class="text-center">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <img width="48" class="rounded-circle"
                                                            src="{{ isset($user->image) ? asset($user->image) : 'default.png' }}"
                                                            alt="User Image">
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{ $user->name }}</div>
                                                        <div class="widget-subheading">
                                                            @if ($user->role)
                                                                <div class="badge badge-primary">
                                                                    {{ $user->role->name }}</div>
                                                            @else
                                                                <div class="badge badge-danger">No Role Found :)
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $user->email }}</td>
                                        <td class="text-center">
                                            @if ($user->status == true)
                                                <div class="badge badge-primary">Active</div>
                                            @else
                                                <div class="badge badge-danger">Inactive</div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <a href="{{route('app.user.edit',$user->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            <a id="delete" href="{{route('app.user.delete',$user->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
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
            console.log('ok');
            $('#dataTable').DataTable(); // ID From dataTable
        });
    </script>
@endpush