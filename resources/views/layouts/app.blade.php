<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Live Blood Bank') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet" type="text/css" >

    {{-- Datime Picker --}}
    <link href="{{ URL::asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/default.date.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {!! Html::image('img/logo.gif') !!}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            <li class="nav-item">
                                    <div  class="dropdown" dropdown>
                                      <a dropdownToggle class="dropdown-toggle" data-toggle="dropdown"
                                         aria-haspopup="true" aria-expanded="false">
                                        Blood Donor Sign In/Up
                                      </a>
                                      <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuLink" >
                                        <a class="dropdown-item"  href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; {{ __('Login') }} </a>
                                        @if (Route::has('register'))

                                        <a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-registered"></i>&nbsp; {{ __('Register') }}</a>
                                            {{-- <a class="nav-link" href="{{ route('register-donar') }}">{{ __('Register') }}</a> --}}

                                        @endif

                                    </div>
                                    </div>
                            </li>

                        @else
                        <li class="nav-item">
                                <div  class="dropdown" dropdown>
                                  <a dropdownToggle class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"
                                     aria-haspopup="true" aria-expanded="false">
                                    Welcome </b>
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                    <a class="dropdown-item" [routerLink]="['/profile']"><i class="fa fa-user"></i> Edit Profile</a>
                                    <!--<a class="dropdown-item" (click)="navigateToProfile()"><i class="fa fa-user"></i> Edit Profile</a>-->
                                    <a class="dropdown-item" ><i class="fa fa-sign-out"></i> Logout</a>
                                  </div>
                                </div>
                              </li>
                        @endguest



                      </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer" style="text-align: right; margin-top: 15%;">

            <hr/>
            <hr/>
            <div class="container">
                <span class="text-muted">Developed By <a href="http://www.bdecomit.com/">BDECOM IT LIMITED</a></span>
            </div>
        </footer>



    </div>






@yield('scripts')
@section('scripts')



<script>
        $( document ).ready(function() {
       var $input = $( '.datepicker' ).pickadate({
               formatSubmit: 'yyyy-mm-dd',
                hiddenName: true,
               // min: [2015, 7, 14],
               container: '#container',
               // editable: true,
               closeOnSelect: true,
               closeOnClear: false,
           })
           var picker = $input.pickadate('picker')
       });


     </script>




<script src="{{ URL::asset('js/jquery.1.7.0.js') }}"></script>
<script src="{{ URL::asset('js/legacy.js') }}"></script>
<script src="{{ URL::asset('js/picker.js') }}"></script>
<script src="{{ URL::asset('js/picker.date.js') }}"></script>

@endsection
</body>
</html>
