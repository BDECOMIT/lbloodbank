<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloodgroups;
use App\Countries;
use App\Cities;
use App\Locations;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodGroups = Bloodgroups::all();
        // $counries = Countries::all();
        $name = 'San Juan Vacation';
        return view('welcome.index')->withName($name);
    }

    protected function getBloodGroups() {
        $data = Bloodgroups::select('BloodGroupId','BloodGroupName')->take(20)->get();
        return response()->json($data);
     }

     public function getCountry(){

        $data = Countries::select('CountryId','Name')->take(10)->get();
        return response()->json($data);
     }

     public function getCity(Request $request){

        $data = Cities::select('CityId','Name')->where('CountryId',$request->CountryId)->take(100)->get();
        return response()->json($data);
     }
     public function getLocation(Request $request){

        $data = Cities::select('CityId','Name')->where('CountryId',$request->CountryId)->take(100)->get();
        return response()->json($data);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
