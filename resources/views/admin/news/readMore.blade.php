
@extends('layouts.master')
@section('content')
@section('style')
<style>
   #news{
    color:#96C93D;
    font-weight: bold;
   }
</style>
@endsection
{{--
 @include('partials.get') <!-- .banner-home -->
 --}}
<div class="container-fluid">

        <h1 class="text-center bolder fs-1"> {{ $newss->title  }}</h1>
        <div class="row px-2">
            <div class="col-lg-6 col-md-7 col-sm-12 ps-5">
                <div class="justify-content-center pl-5 ml-5">
                    <div class=" pe-0 my-1 py-3">{{ $newss->description }}</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 my-3 py-3">

                    <img class="img-thumbnail rounded-corner text-center  mx-auto d-block"
                    src="{{ asset('admin/news/'.$newss->photo) }}" style="width:300px;height:400px">

            </div>
        </div>


            <a href="{{ route('user.news') }}" class="d-flex float-end"> <button type="btn btn-sm" class="bg-primary">Back</button> </a>



</div>
@endsection
