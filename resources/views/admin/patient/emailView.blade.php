@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row px-5">

        <div class="card shadow mt-3 col-lg-12 col-md-12 col-sm-12">
            <div class="card-header text-center fs1 bolder">
                Add Doctor
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="doctorName">Name</label>
                            <input type="text" name="doctorName" value="{{ old('doctorName') }}" class="form-control" id="doctorName">
                            @if($errors->has('doctorName'))
                              <p class='text-danger'>{{ $errors->first('doctorName') }}</p>
                              @endif
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="doctorPhone">Phone</label>
                            <input type="text" name="doctorPhone" value="{{ old('doctorPhone')}}" class="form-control" id="doctorPhone">
                            @if($errors->has('doctorPhone'))
                              <p class='text-danger'>{{ $errors->first('doctorPhone') }}</p>
                              @endif
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="department">Department</label>
                            <select name="department" class="form-control" id="department">
                                <option value="empty">Please Select</option>
                                <option value="1" selected>General Health</option>
                                <option value="2">Cardiology</option>
                                <option value="3">Dental</option>
                                <option value="4">Orthopaedics</option>
                            </select>

                            @if($errors->has('department'))
                              <p class='text-danger'>{{ $errors->first('department') }}</p>
                              @endif
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label fro="doctorAge">Age</label>
                            <input type="text" name="doctorAge" value="{{ old('doctorAge') }}"
                            class="form-control" id="doctorAge">
                            @if($errors->has('doctorAge'))
                              <p class='text-danger'>{{ $errors->first('doctorAge') }}</p>
                              @endif
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="doctorPhoto">Photo</label>
                            <input type="file" name="doctorPhoto" value="{{ old('doctorPhoto') }}" class="form-control" id="doctorPhoto">
                            @if($errors->has('doctorPhoto'))
                              <p class='text-danger'>{{ $errors->first('doctorPhoto') }}</p>
                              @endif
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" id="gender">
                                <option value="empty">Please Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>

                            </select>

                            @if($errors->has('gender'))
                              <p class='text-danger'>{{ $errors->first('gender') }}</p>
                              @endif
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <button type="submit" class="btn btn-sm bg-success my-3 fw-bolder">Add</button>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <a class="btn btn-sm bg-primary my-3 fw-bolder" type="button" href="{{ route('doctorList') }}">Cancel</a>
                        </div>

                    </div>
                </form>
            </div>

        </div>
           <!--col end -->

    </div>
    <!--row end -->
</div>
<!--container-fluid end-->
@endsection
