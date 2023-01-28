<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorAuthController extends Controller
{
    public function donorLogin(Request $request)
    {
        // dd($request);

        if (Auth::guard('donor')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->route('donor-dashboard.donor_dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }
}
