@extends('backend.layouts.app')
@section('content')
    <!-- Icon Cards-->
    
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{config('app.url')}}/Admin">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Admin Profile</li>
    </ol>
    {!! Form::open(['url' => '/updateprofile', 'method'=>'POST']) !!}
      <div class="box_general padding_bottom">
          <div class="header_box version_2">
              <h2><i class="fa fa-file"></i>Basic info</h2>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Registration ID</label>
                      <input type="text" name="admRegNo" value="{{$data[0]->admRegNo}}" class="form-control" readonly>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Name (Full Name)</label>
                      <input type="text" name="fullName" class="form-control" value="{{$data[0]->fullName}}" required>
                  </div>
              </div>
          </div>
          <!-- /row-->
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" name="phoneNumber" value="{{$data[0]->phoneNumber}}" class="form-control" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" value="{{$data[0]->email}}" class="form-control" readonly>
                  </div>
              </div>
          </div>
      </div>
      <!-- /box_general-->
      <div class="box_general padding_bottom">
          <div class="header_box version_2">
              <h2><i class="fa fa-map-marker"></i>Address</h2>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="{{$data[0]->address}}" class="form-control" required>
                    </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>State</label>
                      <input type="text" class="form-control" name="state" value="{{$data[0]->state}}" required>
                  </div>
              </div>
          </div>
          <!-- /row-->
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" name="country" value="{{$data[0]->country}}" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Zip code</label>
                      <input type="text" class="form-control" name="zip_code" value="{{$data[0]->zip_code}}" required>
                  </div>
              </div>
          </div>
          <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="role" required>
                            @if(count($data[1]) > 0)
                            @foreach ($data[1] as $role)
                                {{$set = ''}}
                                @if($role->roleName == $data[0]->role)
                                    {{$set = 'selected'}}
                                @endif
                                <option value="{{$role->roleName}}" {{$set}}>{{$role->roleName}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option value="1" @if($data[0]->status == '1') {{'selected'}} @endif>Active</option>
                            <option value="0" @if($data[0]->status == '0') {{'selected'}} @endif>Suspended</option>
                        </select>
                    </div>
                </div>
                
            </div>
          <!-- /row-->
      </div>
      <!-- /box_general-->
      <p><button class="btn_1 medium">Update</button></p>
      {!! Form::close() !!}
    </div>
@endsection        