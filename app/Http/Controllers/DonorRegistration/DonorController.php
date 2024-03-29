<?php

namespace App\Http\Controllers\DonorRegistration;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        
       
    }
    
    public function donor_dashboard()
    {
        $donors = Donor::all();
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();
       return view('donor.dashboard',compact('donors','divisions','districts','upazilas'));
    }
    public function update_donor($id)
    {
       
    }
    public function donor_login()
    {
        return view('auth.donor_login');
       
    }

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

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        $divisions = Division::all();
        $upazilas = Upazila::all();
        
        return view('website.donorregistration.index',compact('districts','divisions','upazilas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'blood_group' => 'required',
            'division_id' => 'required',
            'district_id' => 'required',
            'upazila_id' => 'required',
            'area' => 'required',
            
        ]);
        $data = $request->all();
        $data ['user_name'] = $request->phone;
        $data ['password'] = Hash::make($request->phone);
        
        $donor  = Donor::create($data);

        if (Auth::guard('donor')->attempt(['email' => $request->email, 'password' => $request->phone])){
            return redirect()->route('donor-dashboard.donor_dashboard');
        }else{

            return redirect()->route('donor-dashboard.donor_dashboard');
        
        }
        

        

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
        $donor= Donor::updateOrCreate([
            'id' =>$id],
            [
            'name' => $request->name,
            'blood_group' => $request->blood_group,
            'dob' => $request->dob,
            'dob' => $request->dob,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id' => $request->upazila_id,
            'area' => $request->area,
            
        ]);

        return redirect()->route('donor-dashboard.donor_dashboard');
    }


    
    public function update_image(Request $request, $id)
    {   
        $donor= Donor::where('id',$id)->first();
        $data = $request->all();
        
        if (@$data['image']) {
           
            $imageName = 'image_'.time().'.'.$data['image']->getClientOriginalExtension();
            $destinationPath = 'uploads/donorimages/';
            $data['image']->move(public_path($destinationPath), $imageName);

            $image = $destinationPath . $imageName;

            
            $donor->update([
                'image' => $image,
            ]);

            
        }
        
            
        return redirect()->route('donor-dashboard.donor_dashboard');
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
