<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blooddonarusers;
use App\Countries;
use App\Bloodgroups;
use App\Cities;
use App\Locations;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;

class DonarsController extends Controller
{
     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($request)
    {
        return Validator::make($request, [
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodGroups = Bloodgroups::all();
        $counries = Countries::all();
        return view('donars.index', compact('counries','bloodGroups'));
    }

       /**
 * Show the application registration form.
 *
 * @return \Illuminate\Http\Response
 */
    // public function showRegistrationForm()
    // {
    //     $counries = null;
    //     $counries = Countries::all();
    //     return view('auth.register', compact('counries'));
    // }
    protected function getRegister() {
        $bloodGroups = Bloodgroups::all();
        $counries = Countries::all();
        $user = null;
        return view('auth.register', compact('counries','bloodGroups'));
     }

     public function getCity(Request $request){

        $data = Cities::select('CityId','Name')->where('CountryId',$request->CountryId)->take(100)->get();
        return response()->json($data);
     }

    public function getLocation(Request $request){

        $data = Locations::select('LocationId','LocationName')->where('CityId',$request->CityId)->take(1000)->get();
        return response()->json($data);
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
