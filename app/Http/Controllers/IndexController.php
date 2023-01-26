<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Donor;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        $divisions = Division::all();
        $upazilas = Upazila::all();
        return view('website.index',compact('districts','divisions','upazilas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDistrict(Request $request)
    {
       $division_id = $request->division_id;
       $data = DB::table('districts')->where('division_id',$division_id)->get();
       return response()->json($data);
    }
    public function getUpazila(Request $request)
    {
        
       $district_id = $request->district_id;
       $data = DB::table('upazilas')->where('district_id',$district_id)->get();
       
       
       return response()->json($data);

       
    }
    public function getByBloodGroup(Request $request)
    {

        // dd($request->all());

       $query = Donor::with('district','division','upazila');

       if($request->blood_group){
            $query->where('blood_group',$request->blood_group);
       }

       if($request->division_id){
            $query->where('division_id',$request->division_id);
       }
       if($request->district_id){
            $query->where('district_id',$request->district_id);
       }
       if($request->upazila_id){
            $query->where('upazila_id',$request->upazila_id);
       }

       $data = $query->get();
       return response()->json($data);
    }
    public function getPhone(Request $request)
    {
        
        $data = Donor::where('id',$request->id)->first();
        

       return $data;

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
