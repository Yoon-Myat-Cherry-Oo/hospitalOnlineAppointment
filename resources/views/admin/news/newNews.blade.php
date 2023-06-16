@extends('layouts.admin')
@section('style')
<style>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.0/"
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row px-5">
        <div class="card shadow mt-3 col-lg-12 col-md-12 col-sm-12">
            <div class="card-header text-center fs1 bolder">
                Add News
            </div>
            <div class="card-body">
                <form action="{{ route('createNews') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="row">
                        <label for="inputName" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                              <select name="userName" class="form-control">
                                <option value="">Choose Name</option>
                                @foreach ($users as $user )
                                <option value="{{ $user ->user_id }}">{{ $user->name }}</option>

                                @endforeach
                              </select>
                              @if($errors->has('userName'))
                              <p class='text-danger'>{{ $errors->first('userName') }}</p>
                              @endif
                          </div>
                    </div> --}}
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="title">News Category</label>
                            <input type="text" name="category" value="{{ old('category') }}" class="form-control" id="title">
                            @if($errors->has('category'))
                              <p class='text-danger'>{{ $errors->first('category') }}</p>
                              @endif
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="title">News Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title">
                            @if($errors->has('title'))
                              <p class='text-danger'>{{ $errors->first('title') }}</p>
                              @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" value="{{ old('photo')}}" class="form-control" id="photo">

                            @if($errors->has('photo'))
                              <p class='text-danger'>{{ $errors->first('photo') }}</p>
                              @endif
                        </div>



                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description')}}
                        </textarea>
                        @if($errors->has('description'))
                          <p class='text-danger'>{{ $errors->first('description') }}</p>
                          @endif
                    </div>
                </div>
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <button type="submit" class="btn btn-sm bg-success my-3 fw-bolder">Add</button>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <a class="btn btn-sm bg-primary my-3 fw-bolder" type="button" href="{{ route('newsList') }}">Cancel</a>
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
