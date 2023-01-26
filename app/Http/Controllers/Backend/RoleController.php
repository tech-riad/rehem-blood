<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.role.index');
        $roles = Role::all();
        return view('backend.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.role.create');

        $modules = Module::all();
        return view('backend.role.create',compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
        Gate::authorize('app.role.create');
        $request->validate([
            'name' => 'required|unique:roles|max:50',
            'permissions' => 'required',
        ]);

        Role::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ])->permissions()->sync($request->input('permissions'),[]);

        //notification
        $notification = array(
            'message' =>'Role Created',
            'alert-type' =>'success'
        );
        return redirect()->route('app.role.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.role.edit');
        $role = Role::find($id);
        $modules = Module::all();
        return view('backend.role.create',compact('modules','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('app.role.edit');

        $role = Role::find($id);
        $role->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $role->permissions()->sync($request->input('permissions'));
        //notification
        $notification = array(
            'message' =>'Role Updated',
            'alert-type' =>'success'
        );
        return redirect()->route('app.role.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Gate::authorize('app.role.delete');

        $role = Role::find($id);
        if ($role->deleteable == 1){
            $role->delete();
        }
        else{
            $notification = array(
                'message' =>'Cannot delete this role',
                'alert-type' =>'error'
            );
            return back()->with($notification);
        }
        //notification
        $notification = array(
            'message' =>'Role Delete Successfully ',
            'alert-type' =>'success'
        );
        return redirect()->route('app.role.index')->with($notification);
    }
}
