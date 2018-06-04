@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Post A Car</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Post Job</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Ad Information -->
            <h5>Car Information</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Car Name" required>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="indus" required>
                    <option>Car type</option>
                    <option>New</option>
                    <option>Used</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="msalary" required>
                    <option>Select Main Catgory</option>
                    <option>Cars</option>
                    <option>Motocycle</option>
                    <option>Truck</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Select Mdel</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                  </select>
                </div>
              </div>
             
              
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="KM Running" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Transmission</option>
                    <option>Automatic</option>
                    <option>Manual</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Color</option>
                    <option>White</option>
                    <option>Black</option>
                    <option>Red</option>
                    <option>Blue</option>
                    <option>Sliver</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Engine Capacity" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Millage" class="form-control">
                </div>
              </div>
             
              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Contact no" class="form-control" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Ad Price">
                </div>
              </div>

              <div class="col-md-4">
                <div class="formrow">
                  <input type="text" placeholder="Location" class="form-control" required>
                </div>
              </div>
              
<!--               
              <div class="col-md-12">
                <div class="formrow">
                	<ul class="row featchoose">
                    	<li class="col-md-4"><input type="checkbox" name=""> ABS</li>
                        <li class="col-md-4"><input type="checkbox" name=""> AM/FM Radio</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Air Bags</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Air Conditioning</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Alloy Rims</li>
                        <li class="col-md-4"><input type="checkbox" name=""> CD Player</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Cassette Player</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Cruise Control</li>
                        <li class="col-md-4"><input type="checkbox" name=""> DVD Player</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Immobilizer Key</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Keyless Entry</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Power Locks</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Power Mirrors</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Power Steering</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Power Windows</li>
                    </ul>
                </div>
              </div>
               -->
              
              
              <div class="col-md-12">
                <div class="formrow">
                  <div class="uploadphotobx"> <i class="fa fa-upload" aria-hidden="true"></i>
                    <h4>Upload your photo</h4>
                    <p>It must be a head-shot photo</p>
                    <label class="uploadBox">Click here to Upload
                      <input type="file" name="upload">
                    </label>
                  </div>
                  <div class="fileattached"> <img src="images/ads/01.html" alt=""> <span>file-name-here.jpg</span> <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                  </div>
                 
                </div>
              </div>
              
             
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="jobdetail" placeholder="Seller Comments"></textarea>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="Post An Ad">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
@endsection
