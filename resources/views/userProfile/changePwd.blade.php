@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2 card shadow mt-3">
            <div class="card-header text-center fs1 font-bolder">
               Change Password
            </div>
            <div class="card-body">
                @if (Session::has('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ Session::get('status') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                @endif
                @if (Session::has('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ Session::get('error') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                @endif

                <form class="" method="POST" action="{{ route('updatePwd',Auth::user()->user_id) }}">

                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label>Old Password</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" type="text" name="oldPwd" value="{{ old('oldPwd') }}">
                                @if($errors->has('oldPwd'))
                                  <p class='text-danger'>{{ $errors->first('oldPwd') }}</p>
                                  @endif

                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label>New Password</label>
                            </div>
                            <div class="form-group  col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="newPwd" class="form-control" value="{{ old('newPwd') }}">

                            @if($errors->has('newPwd'))
                              <p class='text-danger'>{{ $errors->first('newPwd') }}</p>
                              @endif



                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label>Confirm Password</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="confirmPwd" value="{{ old('confirmPwd') }}">
                                @if($errors->has('confirmPwd'))
                                <p class='text-danger'>{{ $errors->first('confirmPwd') }}</p>
                                @endif



                            </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 offset-8 ">
                           <button type="submit" class="px-1 py-1 float-end bg-primary text-white bolder">Change</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection






