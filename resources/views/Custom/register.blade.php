@extends('layouts.app')

@section('content')

<div class="container register">
        <div class="row">
          <div class="col-md-3 register-left">
            <!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/> -->
            <img src="img/register-blood.png" alt="">
            <h3>Welcome</h3>
            <p>You are 30 seconds away from saving a life!</p>
            <div>

                    <a href="{{ route('login') }}">

                    <input type="submit"  name="" value="Sign in" />
                    </a>

                    <p>Already have registered?</p>
            </div>
            <br />
          </div>
          <div class="col-md-9 register-right">

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Requirements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <h3 class="register-heading">Requirements to be a blood donor</h3>
                                <div class="register-form row">
                                  <div class="col-md-6" style="border: 1px solid;">
                                    <h5>Basic Requirements</h5>
                                    <ol>
                                      <li>Age: Are between 17 – 60 years old.</li>
                                      <li>Weight: At least 48 kg (106 Ibs) for both males and females.</li>
                                      <li>Are in generally good health.</li>
                                      <li>Have no fever in the last 3 weeks.</li>
                                    </ol>
                                  </div>
                                  <div class="col-md-6" style="border: 1px solid;">
                                    <h5>Not Eligible</h5>
                                    <ol>
                                      <li>Diseases of the heart or lungs.</li>
                                      <li> (High blood pressure / Diabetes) on medication.</li>
                                      <li>AIDS or symptoms of AIDS.</li>
                                      <li>Hepatitis B or C.</li>
                                    </ol>
                                  </div>
                                </div>
                                    </div>
                                    <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <h3 class="register-heading">Register as a Blood Donor</h3>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="row register-form">
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                        <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="name" value="{{ old('fname') }}"
                                                         required autocomplete="fname" autofocus placeholder="First Name *">

                                                        @error('fname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                  </div>
                                                  <div class="form-group">
                                                        <input id="lname" type="text"
                                                        class="form-control @error('lname') is-invalid @enderror"
                                                        name="lname" value="{{ old('lname') }}"
                                                        required autocomplete="lname" autofocus placeholder="Last Name *">

                                                       @error('fname')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                  </div>
                                                  <div class="form-group">
                                                        <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password"
                                                        placeholder="Password *"
                                                        >

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                  </div>
                                                  <div class="form-group">
                                                        <input id="password-confirm" type="password"
                                                        class="form-control" name="password_confirmation"
                                                        required autocomplete="new-password"
                                                        placeholder="Confirm Password *"
                                                        >

                                                  </div>
                                                  <div class="form-group">
                                                    <div class="form-group">
                                                      <label class="control-label">Gender </label>
                                                      <label class="radio inline ml-3">
                                                        <input type="radio" id="gender" name="gender" formControlName="gender" value="male">
                                                        Male
                                                      </label>
                                                      <label class="radio inline ml-3">
                                                        <input type="radio" id="gender" name="gender" formControlName="gender" value="female">
                                                        Female
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                        <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}"
                                                        placeholder="Valid Email "
                                                        >

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6">

                                                  <div class="form-group">
                                                        <input type="date" class="form-control datepicker" id="date_order" name="date_order">


                                                  </div>
                                                  <div class="form-group">
                                                    <select name="Blood" formControlName="bloodGroupId"
                                                      class="form-control ">
                                                      <option value="">Select Blood Group</option>
                                                      <option >
                                                        Select Blood
                                                      </option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <select name="Country" id="Country"
                                                      class="form-control " >
                                                      <option value="">Select Country</option>
                                                      @foreach ($counries as $country)
                                                        <option >
                                                          {{$country->Name}}
                                                        </option>
                                                      @endforeach

                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <select name="City" id="City"
                                                      class="form-control " >
                                                      <option value="">Select District/State/City</option>
                                                      <option >
                                                        City
                                                      </option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <select name="location" id="location"
                                                      class="form-control ">
                                                      <option value="">Select Location</option>
                                                      <option >
                                                       Location
                                                      </option>
                                                    </select>
                                                  <div class="form-group" >
                                                    <ngx-intl-tel-input formControlName="mobileNumber" name="phone" id="phone"></ngx-intl-tel-input>
                                                    <div class="alert-danger">
                                                    </div>
                                                  </div>
                                                  {{-- <input  type="submit" class="btn btn-primary" value="Register" /> --}}
                                                </div>
                                                <div class="form-group">
                                                        <div >
                                                                <button
                                                                class="btn btn-lg btn-outline-primary btn-block" type="submit">Sign up
                                                              </button>

                                                        </div>
                                                    </div>
                                              </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>


          </div>
        </div>

      </div>


{{-- Old --}}

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



@endsection

