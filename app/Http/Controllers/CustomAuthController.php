<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countries;

class CustomAuthController extends Controller
{
    protected function showRegisterForm() {
        // $bloodGroups = Bloodgroups::all();
        $counries = Countries::all();
        dump($counries);
        $user = null;
        return view('custom.register',['counries'=> $counries]);
     }

     protected function index() {
        $bloodGroups = Bloodgroups::all();
        $counries = Countries::all();
        $user = null;
        return view('custom.register');
     }
}
