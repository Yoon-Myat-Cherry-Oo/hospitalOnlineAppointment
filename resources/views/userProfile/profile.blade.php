@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">

           <div class="col-8 offset-2 card shadow mt-3">
            <div class="card-header text-center fs1 font-bolder">
                Profile
            </div>
            <div class="card-body">
                <div class="my-2 py-2">
                    @if (Auth::user()->image)
                    <img class="img-thumbnail rounded-circle text-center  mx-auto d-block"
                    src="{{ asset('/admin/assets/userImg/'.Auth::user()->image) }}" style="width:150px;height:150px">
                    {{-- @else
                    <img class="img-thumbnail rounded-circle text-center  mx-auto d-block" src="{{ asset('admin/news/profileicon.jpg') }}" style="width:150px;height:150px"> --}}

                    @endif
                </div>

                <form action="" method="">
                        @csrf

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Name :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
                        </div>
                    </div>

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Email :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                        </div>
                    </div>

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Phone :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="integer" name="phone" class="form-control" value="{{ Auth::user()->phone }}" disabled>
                        </div>
                    </div>

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Address :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}" disabled>
                        </div>
                    </div>

                </form>
                <div class="row my-2 py-2 form-group">

                    <div class="form-group col-lg-6  col-md-6 col-sm-12 text-start">
                        <a href="{{ route('userChangePwd',Auth::user()->user_id) }}"  style="text-decoration:underline; ">Change Password ?</a>
                   </div>

                    <div class="form-group col-lg-6  col-md-6 col-sm-12 text-end">

                    <a class="btn btn-sm bg-primary my-3 fw-bolder" type="button" href="{{ route('userProfileEdit') }}">Edit</a>
                    </div>
                </div>

                </div>
            </div>

           </div>

    </div>
</div>
@endsection
