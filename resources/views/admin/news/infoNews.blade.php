@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">

           <div class="col-8 offset-2 card shadow mt-3">
            <div class="card-header text-center fs1 font-bolder">
                News Information Details
            </div>
            <div class="card-body">
                <div class="my-2 py-2">
                    <img class="img-thumbnail rounded-circle text-center  mx-auto d-block" src="{{ asset('admin/news/'.$newss->photo) }}" style="width:150px;height:150px">
                </div>
                <div class="text-center">
                    <div class="my-2 py-2">
                        News Category : {{ $newss->category }}
                    </div>
                    <div class="my-2 py-2">
                        News Title : {{ $newss->title }}
                    </div>

                    {{-- <div class="my-2 py-2">
                        News Photo : {{ $newss->photo }}
                    </div> --}}


                    <div class="my-2 py-2">
                        News Description : {{ $newss->description }}
                    </div>
                </div>
                <div class="form-group col-lg-4 col-md-6 col-sm-12 float-end">
                    <a class="btn btn-sm bg-primary my-3 fw-bolder" type="button" href="{{ route('newsList') }}">Back</a>
                </div>


            </div>

           </div>

    </div>
</div>
@endsection
