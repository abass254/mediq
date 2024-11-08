<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Doctor;
use App\Models\DoctorSpeciality;
use App\Models\Facility;
use App\Models\FacilityDoctor;
use App\Models\FacilityLocation;
use Auth;
use Hash;
class DoctorController extends Controller
{
    //

    public function registerDoctor(){
        return view('doctor.create');
    }

    public function doctorProfile(){

        $facility = Facility::where('id', Auth::user()->facility)->first();
       // $fac_id = FacilityDoctor::where('fd_doc', Auth::user()->id)->first();
       // $fac = Facility::where('id', $fac_id->fd_fac)->first();
     //   $fac_desc = $fac->fc_desc;
        $staff = User::where('facility', $facility->id)->get();
       // return $staff;


        $doctor = DoctorSpeciality::where('dc_id', Auth::user()->id)->get();

       // return $doctor;

        return view('doctor.profile', compact('staff', 'facility','doctor'));
    }

    public function saveFacility(Request $request){

        $request->validate([
            'fc_name' => 'required',
            'fc_location' => 'required',
            'fc_email' => 'required',
            'fc_phone' => 'required',
            'fc_desc' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dc_speciality' => 'required',
        ]);



        $user = User::create([ 
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('phone')),
            'role'=> 'doctor',
        ]);


        $us_id = $user->id;

    
        $doctor = Doctor::create([
            'dc_us' => $us_id,
            'is_manager' => 1,
            'dc_status' => 1,
        ]);

        $dc_speciality = DoctorSpeciality::create([
            'dc_id' => $doctor->id,
            'dc_speciality' =>  $request->input('dc_speciality'),
            'is_main' => 1,
            'spec_status' => 1
        ]);


        $facility = Facility::create([
            'fc_name' => $request->input('fc_name'),
            'fc_desc' => $request->input('fc_desc'),
            'fc_phone' => $request->input('fc_phone'),
            'fc_email' => $request->input('fc_email'),
            'fc_status' => 1
        ]);


        $facility = FacilityDoctor::create([
            'fd_doc' => $doctor->id,
            'fd_fac' => $facility->id,
            'fd_status' => 1,
        ]);


        $fc_location = FacilityLocation::create([
            'fc_id' => $facility->id,
            'fc_location' =>  $request->input('fc_location'),
            'is_main' => 1,
            'location_status' => 1,
        ]);

        return redirect('/login')->with('success', 'Staff Successfully Added.');
    }

    public function viewFacilities(){
        $fac = Facility::all();
        $data = [];
    
     //   return FacilityLocation::all();

        foreach ($fac as $f){
            $loc = FacilityLocation::where('fc_id', $f->id)->where('is_main', '1')->first();
            $data[] = [
                'fac_name' => $f->fc_name,
                'fac_email' => $f->fc_email,
                'fac_phone' => $f->fc_phone,
                'fac_location' => $loc->fc_location ?? "NAIROBI",
                'fac_status' => $f->fc_status == 1 ? 'active' : 'suspended',
                'fac_theme' => $f->fc_status == 1 ? 'success' : 'danger'
            ];
        }

       // return $data;
        
        return view('facility.list', compact('data'));
    }
}
