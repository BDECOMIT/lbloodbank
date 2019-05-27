@extends('layouts.app')
@section('content')

<!-- Search Fields -->

<div class="container">

    <!-- Searching Field and Search Button Start -->
    <div class="form-start">
    @
<p>{{ $name }}</p>
      <form >
        <div class="row">
          <div class="form-group col-md-3">
            <select formControlName="bloodGroupId" name="Blood" class="form-control is-invalid">
              <option value=""></option>
              
            </select>
            <div class="invalid-feedback">Please, provide your Blood Group</div>
          </div>
          <div class="form-group col-md-3">
            <select formControlName="countryCode" name="country" class="form-control is-invalid">
              <option value="">Select Country</option>
              <option >
                Select
              </option>
            </select>
            <div class="invalid-feedback">Please, select your Country</div>
          </div>
          <div class="form-group col-md-3">
            <select formControlName="cityId" name="city" class="form-control is-invalid">
              <option value="" selected>Select State/City</option>
              <option >
                Select
              </option>
            </select>
            <div class="invalid-feedback">Please, select your City</div>
          </div>
          <div class="form-group col-md-3" style="text-align: right;">
            <button class="btn btn-primary btn-block"  type="submit">
              <i class="fa fa-search"> Search</i></button>
          </div>

        </div>
      </form>
    </div>

    <!-- Searching Field and Search Button End -->

  </div>

  <!-- Result Div -->

  <br/>
  <br/>
  {{-- <div class="col-md-12">
    <div class="row">
      <!--Advertisement -->
      <div class="col-md-2">
        <div class="container">
          <div class="row">
            <div>
            <span><a href="https://www.youtube.com/watch?v=6MChevkxQgQ">
              <img src="assets/img/advertise/1.gif" alt="Ulta Palta Shoes" width="80%;">
            </a></span>
            </div>
            <br/>
            <div>
            <span>
              <a
                href="https://www.amnesty.org/en/get-involved/join-international-members/?gclid=EAIaIQobChMI0KOI1Mmp4gIVEAqOCh3uCQ1HEAEYASAAEgIFM_D_BwE">
                <img src="assets/img/advertise/2.gif" alt="Join Global" width="80%">
              </a>
            </span>
            </div>

          </div>
        </div>

      </div>

      <div class="container col-md-8" >
        <div class="row">

          <!-- Location Filtering Div Start -->
          <div id="filter-by-location" class="col-md-5">
            <h5>List</h5>
            <br/>
            <div id="filter-scroll-view">
              <div >
                <div id="left-div" >
                  <input type="radio" name="location" >
                  Name <br/>
                </div>
                <div id="right-div" >
                  <input type="radio" name="location" >
                  Location <br/>
                </div>
              </div>
            </div>

          </div>&nbsp;
          <!-- Location Filtering Div End -->

          <!-- Search Result Div Start -->
          <div class="col-md-6" id="search-div">
            <div class="row">
              <div class="col-lg-12">
                <h5 id="header">Donar Information Total</h5>
                <div id="scroll-view" *ngIf="searchResultCount">
                  <div id="search-result" *ngFor="let profile of searchModel; let i = index;">
                    <div class="row">
                      <!--<div class="col-md-2" id="profile-pic" style="padding-top: 20px;">-->
                      <!--<img width="40px" height="40px" src="assets/img/bloodbanklogo.png"-->
                      <!--class="brand_logo" alt="Logo">-->
                      <!--</div>-->
                      <div class="col-md-7" id="profile-name">
                        <p class="align" style="font-size: 11px;">
                          <b>Sometiong</b>&nbsp;&nbsp;
                          <i class="fa fa-user icon-color-picker" aria-hidden="true"></i>
                          &nbsp;&nbsp;<b>Full Name</b>&nbsp;
                          <i class="fa fa-clock-o icon-color-picker"></i> Age: 33 &nbsp;
                          <br/>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="fa fa-male icon-color-picker"></i>
                          Gender
                          <i class="fa fa-phone-square icon-color-picker"></i>
                          &nbsp;Mobile
                        </p>
                      </div>
                      <div class="col-md-5" id="address" style="font-size: 11px;">
                        <p class="align">
                          <i class="fa fa-location-arrow icon-color-picker"></i>
                         Details
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="location-empty-result" >
                  <img style="text-align: center; padding-left: 10%; width: 50%;"
                       src="../../../assets/img/notfound.png"
                       alt="Sorry Image">
                  <h5>No information found in this location. Please select another one.</h5>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <!-- Empty Result Found Error Page -->
      <div class="container col-md-8" >
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center">No information found. We are extremely sorry. </h3>
            <img style="text-align: center; padding-left: 35%; width: 70%; height: 100%;"
                 src="../../../assets/img/notfound.png"
                 alt="Sorry Image">
          </div>
        </div>
      </div>


      <!-- Advertisement -->
      <div class="col-md-2">
        <div class="container">
          <div class="row">
            <div>
            <span><a href="http://mybdjobs.bdjobs.com/mybdjobs/practicalAction/home/defaultbn.asp">
              <img src="assets/img/advertise/3.gif" alt="Jobs" width="80%;">
            </a></span>
            </div>
            <br/>
            <div>
            <span>
              <a
                href="http://www.bbscables.com.bd/">
                <img src="assets/img/advertise/4.gif" alt="BBS Cables" width="80%">
              </a>
            </span>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div> --}}




@endsection
