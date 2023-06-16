@extends('layouts.master')
@section('content')
@section('style')
<style>
   #service{
    color:#96C93D;
    font-weight: bold;
   }
   .page-section {
            position: relative;
            padding-top: 80px;
            padding-bottom: 0px;
            margin-bottom:0px;

            overflow: hidden;
        }

          @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Roboto:wght@300;400;500&display=swap');


       @media (min-width: 768px) {
         .overlay-oversea{
           position: absolute;
           bottom: 0;
           color: #090707;
           width: 100%;
           height:100%;
           opacity:1;
           color: rgb(17, 16, 16);
         }
         .overlay-local{
           position: absolute;
           bottom: 0;
           color: #f1f1f1;
           width: 100%;
           height:67%;
           opacity:1;
           color: white;
         }
         #chat-img{
           width: 50%;
         }
         .brend{
           padding-left: inherit;
         }
        }

        /*--------------------------fonts --------------------------*/

       /* --------------------------nav end---------------------------*/

       /* --------------------------start section1--------------------------*/

       .golf-img{
         transform: scale(1.18);
       }
       .overhide{
         overflow: hidden;
       }
       .home-btn{
         font-size:small;
         letter-spacing: 1px;
       }
       .join-club{
         color: white;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
       }
       .mouse{
         color: white;
         top: 90%;
         left: 50%;
         position: absolute;
         transform: translate(-49%, -51%);
       }
       .chat{
         color: white;
         top: 98%;
         left: 88%;
         position: absolute;
         -webkit-transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
       }
       #chat-btn{
         border-top-left-radius: 15px;
         border-top-right-radius: 15px;
         border-color: transparent;
         background-color: #96CA41;
       }

       /* -------------------------end section1-----------------------*/

       /* -------------------------start section2---------------------*/
       .golf-training-color{
         background-color: #96CA41;
       }
       .green{
       color: #96CA41;
       }
       .c0-color{
         color: #ADADAD;
       }
       .f5-color{
         background-color: #f5f5f5;
       }
       .oversea-color,.local,.event{
         color:#0a0a0a;

         font-weight: 500;
         font-size: smaller;
         letter-spacing: 2px;
       }
       .button-carou {
         background-color:#f1f1f1;
         color: black;
         border: none;
         padding: 0px 8px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         cursor: pointer;
         border-top-left-radius:8px;
         border-top-right-radius: 8px;
         border-bottom-left-radius: 8px;
         border-bottom-right-radius: 8px;
       }

       .carousel-control-prev, .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #b6f943;
        text-align: center;
        opacity: 0.5;
        transition: opacity 0.15s ease;
    }
    .col-1,
       .col-2,
       .col-3,
       .col-4,
       .col-5,
       .col-6,
       .col-7,
       .col-8,
       .col-9,
       .col-10,
       .col-11,
       .col-12,
       .col,
       .col-auto,
       .col-sm-1,
       .col-sm-2,
       .col-sm-3,
       .col-sm-4,
       .col-sm-5,
       .col-sm-6,
       .col-sm-7,
       .col-sm-8,
       .col-sm-9,
       .col-sm-10,
       .col-sm-11,
       .col-sm-12,
       .col-sm,
       .col-sm-auto,
       .col-md-1,
       .col-md-2,
       .col-md-3,
       .col-md-4,
       .col-md-5,
       .col-md-6,
       .col-md-7,
       .col-md-8,
       .col-md-9,
       .col-md-10,
       .col-md-11,
       .col-md-12,
       .col-md,
       .col-md-auto,
       .col-lg-1,
       .col-lg-2,
       .col-lg-3,
       .col-lg-4,
       .col-lg-5,
       .col-lg-6,
       .col-lg-7,
       .col-lg-8,
       .col-lg-9,
       .col-lg-10,
       .col-lg-11,
       .col-lg-12,
       .col-lg,
       .col-lg-auto,
       .col-xl-1,
       .col-xl-2,
       .col-xl-3,
       .col-xl-4,
       .col-xl-5,
       .col-xl-6,
       .col-xl-7,
       .col-xl-8,
       .col-xl-9,
       .col-xl-10,
       .col-xl-11,
       .col-xl-12,
       .col-xl,
       .col-xl-auto {
           position: relative;
           width: 100%;
           padding-right: 0rem;
           padding-left: 0rem;
       }
       /*----------------------------- end section2 ------------------------*/
       .overlay-local1{
         position: absolute;
         bottom: 0;
         left: 0;
         right: 0;
         background: rgb(0, 0, 0);
         background: rgba(0, 0, 0, 0.5);
         width: 100%;
         height: 30%;
         color: #f1f1f1;
       }
       .overlay-golf{
         position: absolute;
         top:0;
         background: rgb(0, 0, 0);
         background: rgba(0, 0, 0, 0.4); /* Black see-through */
         color: #f1f1f1;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         height: 100%;
         width: 100%;
         opacity:1;
         color: white;
         text-align: center;
       }
         .img-scale{
           position: relative;
       }
         .img-scale:hover .hover{
           transform:scale(1.15);
           transition:0.3s;
       }
         .yangon-club {
           color: white;
           position: absolute;
           top: 50%;
           left: 50%;
           -webkit-transform: translate(-50%, -50%);
           -ms-transform: translate(-50%, -50%);
           transform: translate(-50%, -50%);
       }

       .pt-3,
       .py-3 {
           padding-top: 0rem !important;
       }

         .overlay-yangon-club {
           position: absolute;
           bottom: 0;
           left: 0;
           right: 0;
           background: rgb(0, 0, 0);
           background: rgba(0, 0, 0, 0.5); /* Black see-through */
           width: 100%;
           height: 100%;
           transform: scale(0);
           transition: 0.5s;

       }
         .img-scale:hover .overlay-yangon-club {
           transform: scale(1.05);
       }
</style>
@endsection



   <div class="page-section pb-0 mb-0 bg-light">
       <div class="container-fluid pb-0 mb-0">
          <div class="d-flex flex-row flex-wrap pb-0 mb-0">

           {{-- <div class="col-12 col-lg-12 col-md-12 col-sm-12">
             <img src="{{ asset('user/assets/img/blog/imagess1.jpg') }}" alt="" class="w-100 h-50 mx-0 px-0 g-0">
           </div> --}}
         </div>
       <div class=" position-relative mb-0 pb-0">
         {{-- <div class="container px-lg-4"> --}}
           <div class="container px-lg-5 px-1">
             {{-- <div class="row d-none d-lg-block pe-lg-5">
               <div class="col-lg-6">
                 <div class="oversea-color text-end fw-bold">
                 Our Services
                 </div>
               </div>
             </div> --}}


             <div class="row d-none d-lg-block pe-lg-5 pb-lg-3 pt-lg-1">
                <div class="col-lg-12">
                  <div class="text-black text-center">
                   <h3 class="py-3 my-3">Our Services</h3>
                  </div>
                </div>
              </div>
              <div class="row d-none pb-5 d-lg-block pe-lg-5 text-center">
                <div class="col-12 col-lg-12">
                  <div class="text-black text-center roboto-400">
                   <p>We are providing multidisciplinary medical care service with modern medical equipments.
                    We're here to help you lead an active, healthy life.
                    All of this is delivered in some of the newest health care facilities in the region designed for the comfort and convenience of our patients and their families.

                   </p>
                  </div>
                </div>
              </div>



           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               {{-- <ol class="carousel-indicators">
                 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol> --}}
               <div class="carousel-inner">
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                         <div class="row">
                           <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/albumance.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                        Emergency Service
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    24hours Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                           </div>

                           <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                            <div class="position-relative">
                              <img class="img-fluid" alt=""
                                style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/ccu.jpg') }}">
                              <div class="overlay-local1">
                                <div class="container pt-3 ps-4">
                                   <div class="roboto-500 text-uppercase text-center pt-2">
                                      CCU, ICU
                                    </div>
                                <div class="roboto-300 text-center my-2 text-success">
                                   24hours Service
                                </div>

                                </div>
                              </div>
                            </div>
                           </div>

                           <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                            <div class="position-relative">
                              <img class="img-fluid" alt=""
                                style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/inpatient.jpg') }}">
                              <div class="overlay-local1">
                                <div class="container pt-3 ps-4">
                                   <div class="roboto-500 text-uppercase text-center pt-2">
                                      Inpatient Care
                                    </div>
                                <div class="roboto-300 text-center my-2 text-success">
                                   24hours Service
                                </div>

                                </div>
                              </div>
                            </div>
                           </div>

                           <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                            <div class="position-relative">
                              <img class="img-fluid" alt=""
                                style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/dental1.jpg') }}">
                              <div class="overlay-local1">
                                <div class="container pt-3 ps-4">
                                   <div class="roboto-500 text-uppercase text-center pt-2">
                                      Dental Clinic
                                    </div>
                                <div class="roboto-300 text-center my-2 text-success">
                                   8AM to 8PM Service
                                </div>

                                </div>
                              </div>
                            </div>
                           </div>

                         </div>
                       </div>


                       <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                              <div class="position-relative">
                                <img class="img-fluid" alt=""
                                  style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/ultra.jpg') }}">
                                <div class="overlay-local1">
                                  <div class="container pt-3 ps-4">
                                     <div class="roboto-500 text-uppercase text-center pt-2">
                                         4D Ultrasound
                                      </div>
                                  <div class="roboto-300 text-center my-2 text-success">
                                     8AM to 8PM Service
                                  </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/pharmancy.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                       Pharmancy Service
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    24hours Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/ecg.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                       ECG-Holter
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    24hours Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/haemo.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                      Haemodialysis Center
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    24hours Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                            </div>

                        </div>
                       </div>

                       <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                              <div class="position-relative">
                                <img class="img-fluid" alt=""
                                  style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/ctscan.jpg') }}">
                                <div class="overlay-local1">
                                  <div class="container pt-3 ps-4">
                                     <div class="roboto-500 text-uppercase text-center pt-2">
                                         CT Scan,C Arm & XRay
                                      </div>
                                  <div class="roboto-300 text-center my-2 text-success">
                                     24hours Service
                                  </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/opd.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                       OPD Service
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    8AM to 8PM Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/checkup.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                       Medical Check up
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    8AM to 8PM Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-3 mt-2 p-lg-2">
                             <div class="position-relative">
                               <img class="img-fluid" alt=""
                                 style="aspect-ratio:1/1" src="{{ asset('user/assets/img/blog/medical.jpg') }}">
                               <div class="overlay-local1">
                                 <div class="container pt-3 ps-4">
                                    <div class="roboto-500 text-uppercase text-center pt-2">
                                     Medical Laboratory
                                     </div>
                                 <div class="roboto-300 text-center my-2 text-success">
                                    24hours Service
                                 </div>

                                 </div>
                               </div>
                             </div>
                            </div>

                        </div>
                       </div>
               </div>

             </div>
             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true" style="{
                 color:#96C93D;
               }"></span>
               <span class="sr-only" style="{
                 color:#96C93D;
               }">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true" style="{
                 color:#96C93D;
               }"></span>
               <span class="sr-only" style="{
                 color:#96C93D;
               }">Next</span>
             </a>




         </div>

       {{-- </div> --}}
       </div>
   </div>
   </div>


   {{--
    @include('partials.get') <!-- .banner-home -->
    --}}

 {{-- @include('partials.get') <!-- .banner-home --> --}}


  @endsection


