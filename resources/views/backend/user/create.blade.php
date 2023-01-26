@extends('layouts.backend.app')
@push('css')
    <!--Dropify for image upload-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .dropify-wrapper .dropify-message p{
            font-size: initial;
        }
    </style>
    <!--Dropify for image upload-->
@endpush
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Users</h4>
                        <a href="{{ route('app.user.index') }}" class="btn btn-dark float-right"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{isset($user)? route('app.user.update',$user->id): route('app.user.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 float-left">
                                    <div class="main-card mb-3 ml-2 card">
                                        <div class="card-body">
                                            <div class="card-title">Create Users</div>
                        
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name ?? old('name') }}"  autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                        </span>
                                                @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}"  autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                        </span>
                                                @enderror
                                            </div>
                                            @if(@$user == null)
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autofocus>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="confirm_password">Confirm Password</label>
                                                <input id="confirm_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autofocus>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-md-4">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <div class="card-title">Select Role & Status</div>
                                            <div class="form-group">
                                                <label for="role">Select Role</label>
                                                <select name="role_id" id="role" class="form-control @error('role') is-invalid @enderror select2" >
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}" @isset($user) {{$user->role->id == $role->id ? 'selected' : ''}} @endisset >{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('role')
                                                <span class="text-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                            </span>
                                                @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="image">Avatar</label>
                                                <input type="file"   name="image" class="dropify">
                                                @isset($user)
                                                    <h5 class="m-2">Old Image</h5>
                                                    <img width="200" class="img-thumbnail" src="{{isset($user->image)? asset($user->image):'default.png'}}" alt="User Image">
                                                @endisset
                                                @error('image')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($user) {{$user->status == true? 'checked' : '' }} @endisset>
                                                    <label class="custom-control-label" for="status">Status</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button id="submit" type="submit" class="btn btn-primary" style="margin-top: 10px">
                                                    @isset($user)
                                                        <i class="fas fa-arrow-circle-up"></i>
                                                        Update
                                                    @else
                                                        <i class="fa fa-plus-circle"></i>
                                                        Create
                                                    @endisset
                                                </button>
                                            </div>
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
</div>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        //Dropify Image Upload
        $('.dropify').dropify();
        //Select2
        $('.select2').select2();
    });
</script>
@endpush
