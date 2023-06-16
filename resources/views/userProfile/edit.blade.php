@extends('layouts.admin')
@section('content')
@section('style')

@endsection
<div class="container-fluid">
    <div class="row">

           <div class="col-8 offset-2 card shadow mt-3">
            <div class="card-header text-center fs1 font-bolder">
               Edit Profile
            </div>
            <div class="card-body">
                @if (Session::has('Success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ Session::get('Success') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif


                    {{-- Launch demo modal --}}
                    <div class="my-2 py-2">

                        <div class="container" style="
                        position: relative;
                        width: 100%;
                        max-width: 400px ;
                        :hover { opacity: 1 };">
                            @if (Auth::user()->image)
                            <img class="img-thumbnail rounded-circle text-center  mx-auto d-block"
                            src="{{ asset('/admin/assets/userImg/'.Auth::user()->image) }}" style="width:150px;height:150px"
                            style="width: 100%;
                            height: auto;">

                            @endif
                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> --}}
                            <div class="overlay" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <a  class="icon" title="Edit" style="
                              color: rgb(21, 12, 12);
                              font-size: 20px;
                              position: absolute;
                              top: 50%;
                              left: 60%;
                              transform: translate(0%, 50%);
                              -ms-transform: translate(0%, 50%);
                              text-align: center;
                              :hover { opacity: 1 }">
                                <i class="fa fa-edit" style=""
                                onMouseOver="this.style.color='blue'"
                                onMouseOut="this.style.color='black'"></i>
                              </a>
                            </div>
                          </div>

                    </div>
                  {{-- </button> --}}

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Choose Photo</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="" action="{{ route('userProfileImgEdit',Auth::user()->user_id) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                          <div class="modal-body">

                            <input type="file" name="image" class="form-control">
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                <div class="text-center">
                <form action="{{ route('userProfileUpdate',Auth::user()->user_id) }}" method="POST">
                        @csrf

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Name :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" >
                        </div>
                    </div>

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Email :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" >
                        </div>
                    </div>

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Phone :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="integer" name="phone" class="form-control" value="{{ Auth::user()->phone }}" >
                        </div>
                    </div>

                    <div class="row my-2 py-2 form-group">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            Address :
                        </div>
                        <div class="col-lg-8 col-md-4 col-sm-12">
                            <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}" >
                        </div>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-12 float-end">
                        <button class="btn btn-sm bg-primary my-3 fw-bolder" type="submit">Save</button>

                        <a class="btn btn-sm bg-primary my-3 fw-bolder" type="button" href="{{ route('userProfile') }}">Cancel</a>
                    </div>

                </form>


                </div>
            </div>

           </div>

    </div>
</div>
@endsection
