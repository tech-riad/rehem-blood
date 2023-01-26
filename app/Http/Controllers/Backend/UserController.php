<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Traits\FileSaver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use FileSaver;
    public function index(){
        Gate::authorize('app.user.index');
        $users = User::latest()->get();
        return view('backend.user.index',compact('users'));
    }

    public function create(){
        Gate::authorize('app.user.create');
        $roles = Role::all();
        return view('backend.user.create',compact('roles'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role_id' => 'required',
            'password' => 'required|confirmed|string|min:8',
            'image' => 'required|image|mimes:jpg,png',
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['status']   = $request->filled('status');
        $data['image']    = 'default.png';

        //dd($request->all());
        $user = User::create($data);

        // <!-- update user image -->
        if($request->file('image')){
            $this->uploadFileWithResize($request->image, $user, 'image', 'users',250,250);
        }

        //notification
        $notification = array(
            'message' =>'User Create Successfully ',
            'alert-type' =>'success'
        );
        return redirect()->route('app.user.index')->with($notification);
    }


    public function edit($id){
        Gate::authorize('app.user.edit');

        $user = User::find($id);
        $roles = Role::all();
        return view('backend.user.create',compact('user','roles'));
    }


    public function update(REQUEST $request,$id){
        Gate::authorize('app.user.edit');

        $user = User::find($id);
        //return $request;
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'role_id' => 'required',
            'password' => 'nullable|confirmed|string|min:8',
            'image' => 'nullable|image|mimes:jpg,png',
        ]);

        $user->role_id  = $request->role_id;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = isset($request->password)? Hash::make($request->password) : $user->password;
        $user->status   = $request->filled('status');
        $user->image    = $user->image;

        // <!-- update user image -->
        if($request->file('image')){
            $this->upload_file($request->image, $user, 'image', 'users',250,250);
        }


        //notification
        $notification = array(
            'message' =>'User Update Successfully ',
            'alert-type' =>'success'
        );
        return redirect()->route('app.user.index')->with($notification);
    }


    public function delete($id){
        Gate::authorize('app.user.delete');

        $user = User::find($id);

        if($user->deleteable == 1){
            if(file_exists($user->image) AND !empty($user->image))
            {
                unlink($user->image);
            }
            $user->delete();
        }else{
            $notification = array(
                'message' =>'Cannot delete super-admin',
                'alert-type' =>'error'
            );
            return back()->with($notification);
        }


        //notification
        $notification = array(
            'message' =>'User Delete Successfully ',
            'alert-type' =>'success'
        );
        return redirect()->route('app.user.index')->with($notification);
    }

}
