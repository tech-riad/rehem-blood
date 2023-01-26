@extends('layouts.backend.app')
@section('content')
    <!-- Start Content-->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="float-left">Users</h4>
                            <a href="{{ route('app.role.index') }}" class="btn btn-dark float-right"><i
                                    class="fa fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form method="POST"
                                action="{{ isset($role) ? route('app.role.update', $role->id) : route('app.role.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Role Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $role->name ?? old('name') }}" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <h4 class="pb-2"><b>Manage Permission for Role</b></h4>
                                    @error('permissions')
                                        <p class="p-2">
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        </p>
                                    @enderror
                                </div>

                                @forelse($modules->chunk(2) as $key => $chunks)
                                    <div class="form-row">
                                        @foreach ($chunks as $key => $module)
                                            <div class="col" style="border: 1px solid #efefef;padding: 10px">
                                                <h5>Module: <span style="color: #3F6AD8">{{ $module->name }}</span></h5>

                                                @foreach ($module->permissions as $key => $permission)
                                                    <div class="mb-3 ml-4">
                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="permission-{{ $permission->id }}" name="permissions[]"
                                                                value="{{ $permission->id }}"
                                                                @isset($role) @foreach ($role->permissions as $rPermission)
                                                                        {{ $permission->id == $rPermission->id ? 'checked' : '' }}
                                                                        @endforeach @endisset>
                                                            <label class="custom-control-label"
                                                                for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                @empty
                                    <div class="row">
                                        <div class="col text-center">
                                            <strong>No Module Found</strong>
                                        </div>
                                    </div>
                                @endforelse
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary text-center" style="margin-top: 10px">
                                            @isset($role)
                                                <i class="fa fa-arrow-circle-up"></i>
                                                Update
                                            @else
                                                <i class="fa fa-save"></i>
                                                Create
                                            @endisset
                                        </button>
                                    </div>
                                </div>
                            

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
