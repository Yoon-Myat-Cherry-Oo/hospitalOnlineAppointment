@extends('layouts.master')
@section('content')
@section('style')
<style>
   #contact{
    color:#96C93D;
    font-weight: bold;
   }
</style>
@endsection
<div class="page-section pb-0 mb-0 bg-light">
    {{-- <div class="container-fluid pb-0 mb-0"> --}}

        <div class="row pb-3 mb-3 pl-3">
            <div class="col-lg-6 col-md-6 col-sm-12 p-5">
                <img src="{{ asset('user/assets/img/bg_image_1.jpg') }}" alt="" class="img-fluid rounded border-success ">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 class="text-center ml-5 fw-bolder">CONTACT US</h5>

                  <div class="row my-2 py-2 ml-5">
                    <div class="col-md-1 col-lg-1 col-sm-12 py-3">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11 col-lg-11 col-sm-12">
                      <p class="text-black roboto-normal ps-3 pt-3">No.660, Marchart Street, Pyay , Myanmar
                    </div>
                  </div>

                  <div class="row my-2 py-2 ml-5">
                    <div class="col-md-1 col-lg-1 col-sm-12 py-3">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11 col-lg-11 col-sm-12">
                      <p class="text-black roboto-normal ps-3 pt-3">053 27911 , 053 25177
                    </div>
                  </div>


                  <div class="row my-2 py-2 ml-5">
                    <div class="col-md-1 col-lg-1 col-sm-12 py-3">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11 col-lg-11 col-sm-12">
                      <p class="text-black roboto-normal ps-3 pt-3">pyaymyanmar@gmail.com
                    </div>
                  </div>


                  <div class="row my-2 py-2 ml-5">
                    <div class="col-md-1 col-lg-1 col-sm-12 py-3">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11 col-lg-11 col-sm-12">
                      <p class="text-black roboto-normal ps-3 pt-3">pyaymyanmar.com.mm
                    </div>
                  </div>




            </div>
        </div>

         <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d60426.3871707186!2d95.13366249290299!3d18.8137806628538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spyay%20myanmar%20hospital%20in%20pyay!5e0!3m2!1smy!2smm!4v1677147108851!5m2!1smy!2smm"
            width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         </div>
    {{-- </div> --}}
</div>

{{--
 @include('partials.get') <!-- .banner-home -->
 --}}

  @endsection


