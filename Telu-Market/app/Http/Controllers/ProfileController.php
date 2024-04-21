<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userProfile;

class ProfileController extends Controller
{
    public function profile() 
    {
        $profile_data=userProfile::first();
        return view('profile', compact('profile_data'));
    }

    public function update(Request $request, $id)
    {
        $profile_data=userProfile::where('id', $id)->first();
        $profile_data->Username=$request->Username;
        $profile_data->name=$request->name;
        $profile_data->nim=$request->nim;
        $profile_data->Email=$request->Email;
        $profile_data->profile_image=$request->profile_image;
        $profile_data->address=$request->address;
        $profile_data->birthday=$request->birthday;
        $profile_data->country=$request->country;
        $profile_data->phone=$request->phone;
        $profile_data->website=$request->website;
        $profile_data->save();
        return redirect('/');
    }
    public function dashboard()
    {
        return view("Catagory");
    }
}

