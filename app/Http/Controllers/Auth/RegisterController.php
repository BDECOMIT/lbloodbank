<?php

namespace App\Http\Controllers\Auth;

use App\Blooddonarusers;
use App\Countries;
use App\Bloodgroups;
use App\Cities;
use App\Locations;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest');
    }

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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        $password = bcrypt($data['password']);
        $key = bcrypt('bdecomit');
        return Blooddonarusers::create([
            'FirstName'=>$data['fname'],
        'LastName'=>'',
        'Username'=>$data['lname'],
        'Email'=>$data['email'],
        'PasswordHash'=>$password,
        'PasswordSalt'=>$key,
        'MobileNumber'=>$data['mobile'],
        'Gender'=>$data['gender'],
        'DateOfBirth'=>$data['date_order'],
        'BloodGroupId'=>$data['Blood'],
        'CountryId'=>$data['Country'],
        'CityId'=>$data['City'],
        'LocationId'=>$data['Location'],
        'CreationDate'=>Datetime.Now(),
        'IsActive'=>1,
        ]);
    }
    protected function register_donor(array $data)
    {
        $this->validator($data);

        $password = bcrypt($data['password']);
        $key = bcrypt('bdecomit');
        $toDate = Carbon::now();

        return Blooddonarusers::create([
        'FirstName'=>$data['fname'],
        'LastName'=>'',
        'Username'=>$data['lname'],
        'Email'=>$data['email'],
        'PasswordHash'=>$password,
        'PasswordSalt'=>$key,
        'MobileNumber'=>$data['mobile'],
        'Gender'=>$data['gender'],
        'DateOfBirth'=>$data['date_order'],
        'BloodGroupId'=>$data['Blood'],
        'CountryId'=>$data['Country'],
        'CityId'=>$data['City'],
        'LocationId'=>$data['Location'],
        'CreationDate'=>$toDate,
        'IsActive'=>1,
        ]);

    }

    public function show(){


        return view('Auth.register',['countries'=>$counries]);
    }
}

