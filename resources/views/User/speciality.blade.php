@extends('layouts.master')
@section('content')
@section('style')
<style>
   #home{
    color:#d2f547;
    font-weight: bold;
   }
</style>
@endsection
<div class="page-section">
    <div class="container">
      <h2 class="text-center mb-5 wow fadeInUp fw-bolder py-0">Speciality of Pyay Myanmar Hospital</h2>


        <div class="row my-5">
        <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
           <div class="card">
            <div class="card-header">
                <img src="{{ asset('user/assets/img/blog/og.jpeg') }}" alt="" class="img-fluid">
            </div>
            <div class="card-body">


            <!-- Button trigger modal -->
            <h6  data-toggle="modal" data-target="#exampleModalCenter" class="text-center text-success" >
                 Obsteetrics & Gynaecology
              </h6>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Obsteetrics & Gynaecology</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     This is the health of the process of child-bearing and child-birth as well as its possible complications.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

        <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('user/assets/img/blog/images (52).jpeg') }}" alt="" class="img-fluid">
              </div>
              <div class="card-body">
                <h6  data-toggle="modal" data-target="#exampleModalCenter1" class="text-center text-success" >
                   General Health
                 </h6>

                 <!-- Modal -->
                 <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLongTitle1">General Health</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                       General Health is a state of complete physical,mental,
                       and social well-being and not merely the absence of disease or infirmity.
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                       </div>
                     </div>
                   </div>
                 </div>
              </div>
            </div>
          </div>

          <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('user/assets/img/blog/cardiology.jpeg') }}" alt="" class="img-fluid">
              </div>
              <div class="card-body">

                <h6  data-toggle="modal" data-target="#exampleModalCenter2" class="text-center text-success" >
                     Cardiology
                 </h6>

                 <!-- Modal -->
                 <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLongTitle2"> Cardiology</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                        Cardiology is a branch of medical science that describes the study of the human heart.
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                       </div>
                     </div>
                   </div>
                 </div>
              </div>
            </div>
          </div>



        </div>

        <div class="row my-5">
            <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
               <div class="card">
                <div class="card-header">
                  <img src="{{ asset('user/assets/img/blog/download.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="card-body">

                  <h6  data-toggle="modal" data-target="#exampleModalCenter3" class="text-center text-success" >
                    Oncology
                 </h6>

                 <!-- Modal -->
                 <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLongTitle3"> Oncology</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                        Cancer is one of the deadliest diseases in the world.There are many types of cancer.Some common include lung Cancer,blood cancer,breast cancer and throat cancer.
                         </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                       </div>
                     </div>
                   </div>
                 </div>
                </div>
              </div>
              </div>

            <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                <div class="card">
                  <div class="card-header">
                    <img src="{{ asset('user/assets/img/blog/images (53).jpeg') }}" alt="" class="img-fluid">
                  </div>
                  <div class="card-body">

                    <h6  data-toggle="modal" data-target="#exampleModalCenter4" class="text-center text-success" >
                        Paediatrics
                     </h6>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle4" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle4">Paediatrics</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                            Paediatrics is the care of infants,children,adolescents and young adults.
                        </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                           </div>
                         </div>
                       </div>
                     </div>
                  </div>
                </div>
              </div>

              <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                <div class="card">
                  <div class="card-header">
                    <img src="{{ asset('user/assets/img/blog/images (50).jpeg') }}" alt="" class="img-fluid">
                  </div>
                  <div class="card-body">
                    <h6  data-toggle="modal" data-target="#exampleModalCenter5" class="text-center text-success" >
                        Hepatobiliary
                     </h6>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle5">Hepatobiliary</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                            The hepatobiliary system consists of the liver, the intrahepatic bile ducts (IHBDs) and extrahepatic bile ducts (EHBDs) including the gallbladder.
                        </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                           </div>
                         </div>
                       </div>
                     </div>
                  </div>
                </div>
              </div>



            </div>

            <div class="row my-5">
                <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                   <div class="card">
                    <div class="card-header">
                      <img src="{{ asset('user/assets/img/blog/images (57).jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body">
                     <h6  data-toggle="modal" data-target="#exampleModalCenter6" class="text-center text-success" >
                        Anaethesiology
                     </h6>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle6" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle6">Anaethesiology</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                            Monitor and control the patient's vital life functions, including heart rate and rhythm, breathing, blood pressure, body temperature and body fluid balance. Control the patient's pain and level of consciousness to make conditions ideal for a safe and successful surgery.
                        </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                           </div>
                         </div>
                       </div>
                     </div>
                    </div>
                  </div>
                  </div>

                <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                    <div class="card">
                      <div class="card-header">
                        <img src="{{ asset('user/assets/img/blog/download (3).jpeg') }}" alt="" class="img-fluid">
                      </div>
                      <div class="card-body">

                        <h6  data-toggle="modal" data-target="#exampleModalCenter7" class="text-center text-success" >
                            Radiology
                         </h6>

                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle7" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle7">Radiology</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                Radiology is a branch of medicine that uses imaging technology to diagnose and treat disease. Radiology may be divided into two different areas, diagnostic radiology and interventional radiology.
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                               </div>
                             </div>
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>

                  <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                    <div class="card">
                      <div class="card-header">
                        <img src="{{ asset('user/assets/img/blog/download (4).jpeg') }}" alt="" class="img-fluid">
                      </div>
                      <div class="card-body">

                        <h6  data-toggle="modal" data-target="#exampleModalCenter8" class="text-center text-success" >
                            Neurology
                         </h6>

                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle8" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle8"> Neurology</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                Neurologists treat nervous system conditions. This includes conditions that impact your brain, like concussions or seizures. </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                               </div>
                             </div>
                           </div>
                         </div>
                      </div>
                    </div>
                  </div>



                </div>

                <div class="row my-5">
                    <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                       <div class="card">
                        <div class="card-header">
                          <img src="{{ asset('user/assets/img/blog/ortho1.jpeg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">

                          <h6  data-toggle="modal" data-target="#exampleModalCenter9" class="text-center text-success" >
                            Orthopaedic
                         </h6>

                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle9" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle9">Orthopaedic</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                Orthopaedics (also called orthopaedic surgery) is the medical specialty that focuses on injuries and diseases of your body's musculoskeletal system. This complex system, which includes your bones, joints, ligaments, tendons, muscles, and nerves, allows you to move, work, and be active. </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                               </div>
                             </div>
                           </div>
                         </div>
                        </div>
                      </div>
                      </div>

                    <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                        <div class="card">
                          <div class="card-header">
                            <img src="{{ asset('user/assets/img/blog/download (6).jpeg') }}" alt="" class="img-fluid">
                          </div>
                          <div class="card-body">

                            <h6  data-toggle="modal" data-target="#exampleModalCenter10" class="text-center text-success" >
                                Mental Health
                             </h6>

                             <!-- Modal -->
                             <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle10" aria-hidden="true">
                               <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLongTitle10">Mental Health</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                                   </div>
                                   <div class="modal-body">
                                    Mental health is a fundamental part to our overall health and well-being. As a parent, you play a huge role in supporting your child's mental well-being. Nurturing and loving care build a strong foundation, helping your
                                     child to develop the social and emotional skills they need to lead a happy, healthy and fulfilled life.    </div>
                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                   </div>
                                 </div>
                               </div>
                             </div>
                          </div>
                        </div>
                      </div>

                      <div class="item col-md-4 col-lg-4 col-sm-12 px-5">
                        <div class="card">
                          <div class="card-header">
                            <img src="{{ asset('user/assets/img/blog/images (51).jpeg') }}" alt="" class="img-fluid">
                          </div>
                          <div class="card-body">
                           <h6  data-toggle="modal" data-target="#exampleModalCenter11" class="text-center text-success" >
                                Ear,Nose & Throat
                             </h6>

                             <!-- Modal -->
                             <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle11" aria-hidden="true">
                               <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLongTitle11">Ear,Nose & Throat</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                                   </div>
                                   <div class="modal-body">
                                    ENTs deal with anything that has to do with the head, neck, and ears in adults and children, including:
                                    <br>
                                    -Hearing <br>
                                    -The adenoids and tonsils<br>
                                    -The thyroid<br>
                                    -The sinuses<br>
                                    -The larynx<br>
                                    -The mouth<br>
                                    -The throat<br>
                                    -Ear tubes<br>
                                    -Ear surgeries<br>
                                    -Cancers of the head, neck, and throat<br>
                                    -Reconstructive and cosmetic surgery on the head and neck  </div>
                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                   </div>
                                 </div>
                               </div>
                             </div>
                          </div>
                        </div>
                      </div>



                    </div>



    </div>
</div>
@endsection


