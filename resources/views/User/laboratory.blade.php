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
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp py-0 my-0 gy-0">Laboratory Report</h1>
      <div class="row my-3 py-3">

        <div class="item col-md-4 col-lg-4 col-sm-12 h-100">
          <div class="card">
            <div class="card-header  text-center">
              <button  class="btn btn-round bg-success">Haematology</button>
            </div>
            <div class="card-body">
              <h6>- CP (Auto)</h6>
              <h6>- CP (Auto) with film report</h6>
              <h6>- Hb %</h6>
              <h6>- E.S.R</h6>
              <h6>- Platelet count</h6>
              <h6>- Retic count</h6>
              <h6>- BT & CT</h6>
              <h6>- PCV</h6>
              <h6>- A B Q Grouping</h6>
              <h6>- Prothrombin Time (PT,INR)</h6>
              <h6>- G 6 PD</h6>
              <h6>- Coomb's Test</h6>
              <h6>- Bone Marrow Aspiration</h6>
              <h6>      .</h6>
              <h6>    . </h6>


            </div>
          </div>
        </div>

        <div class="item col-md-4 col-lg-4 col-sm-12">
            <div class="card">
              <div class="card-header  text-center">
                <button  class="btn btn-round bg-success">Serology & Immunology</button>
              </div>
              <div class="card-body">
                <h6>- A.S.O</h6>
                <h6>- R.A</h6>
                <h6>- WIDAL Test</h6>
                <h6>- ANF (ANA)</h6>
                <h6>- HIV (Retro)</h6>
                <h6>- HBs Ag</h6>
                <h6>- HCV Ab</h6>
                <h6>- VDRL( STS)</h6>
                <h6>- ANTI HBS</h6>
                <h6>- HBV Profile</h6>
                <h6>- Dengue NS,Ag</h6>
                <h6>- Dengus Duo</h6>
                <h6>- Dengus lg g , lg M</h6>
                <h6>- H Pyloric</h6>
                <h6>- T.B (ICT)Mycodot</h6>

              </div>
            </div>
        </div>

        <div class="item col-md-4 col-lg-4 col-sm-12">
            <div class="card">
              <div class="card-header  text-center">
                <button  class="btn btn-round bg-success">Microbiology & Parasitology</button>
              </div>
              <div class="card-body">

                <h6>- C & S (Urine,Plus,Blood,etc.....)</h6>
                <h6>- Urine RE</h6>
                <h6>- Urine Albumin</h6>
                <h6>- U C G</h6>
                <h6>- Stool RE</h6>
                <h6>- Reducing Sugar</h6>
                <h6>- M.P (ICT)</h6>
                <h6>- M.P (Film)</h6>
                <h6>- M.F (ICT)</h6>
                <h6>- M.F (Film)</h6>
                <h6>      .</h6>
                <h6>    . </h6>
                <h6>      .</h6>
                <h6>    . </h6>
                <h6>      .</h6>


              </div>
            </div>
        </div>
        </div>

      <div class="row my-3 py-3">

        <div class="item col-md-4 col-lg-4 col-sm-12 h-100">
          <div class="card">
            <div class="card-header  text-center">
              <button  class="btn btn-round bg-success">Chemical Pathology</button>
            </div>
            <div class="card-body">

              <h6>- Glucos (RBS/FBS)</h6>
              <h6>- Urea</h6>
              <h6>- Creatinine</h6>
              <h6>- Uric Acid</h6>
              <h6>- Electrolyte (Na,K,Cl)</h6>
              <h5 class="bolder"> T & DP </h5>
              <h6>- Total Protein</h6>
              <h6>- Serum Albumin</h6>
              <h6>- Globulin</h6>
              <h5 class="bolder"> L.F.T </h5>
              <h6>- Serum Biiirubin</h6>
              <h6>- Alkaline Phospatase</h6>
              <h6>- S.G.P.T</h6>
              <h6>- S.G.O.T</h6>


            </div>
          </div>
        </div>

        <div class="item col-md-4 col-lg-4 col-sm-12 h-100">
            <div class="card">
              <div class="card-header  text-center">
                <button  class="btn btn-round bg-success">Chemical Pathology</button>
              </div>
              <div class="card-body">

                <h5 class="bolder"> Lipid Profile </h5>
                <h6>- Cholesterol</h6>
                <h6>- Triglyceride</h6>
                <h6>- H D L</h6>
                <h6>- L D L</h6>
                <h6>- Amylase</h6>
                <h6>- Hb A, C</h6>
                <h6>- T3</h6>
                <h6>- T4</h6>
                <h6>- T S H</h6>
                <h6>- Free T3</h6>
                <h6>- Free T4</h6>
                <h6>- Calcium</h6>
                <h6>.</h6>


              </div>
            </div>
        </div>
        <div class="item col-md-4 col-lg-4 col-sm-12 h-100">
            <div class="card">
              <div class="card-header  text-center">
                <button  class="btn btn-round bg-success">Histopathology</button>
              </div>
              <div class="card-body">

                <h6>- Biopsy</h6>
                <h6>- Cytology</h6>
                <h6>- Pap Smear</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>
                <h6>.</h6>


              </div>
            </div>
        </div>









      </div>

      <div class="row my-3 py-3">


      </div>

    </div>


</div>
@endsection
