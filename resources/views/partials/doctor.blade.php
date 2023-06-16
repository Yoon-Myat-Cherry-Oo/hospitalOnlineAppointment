@php
    $doctors = App\Models\Doctor :: get();
@endphp
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach ($doctors as $doctor)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ asset('admin/doctor/'.$doctor->photo) }}" alt="">
              {{-- <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div> --}}
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{ $doctor->name }}</p>
              <span class="text-sm text-grey">

                @if($doctor->department == 1)General Hearth
                @elseif($doctor->department == 2)Cardiology
                @elseif($doctor->department == 3)Dental
                @elseif($doctor->department == 4)Orthopaedics
                @elseif($doctor->department == 5)Obsteetrics & Gynaecology
                @elseif($doctor->department == 6)Oncology
                @elseif($doctor->department == 7)Paediatrics
                @elseif($doctor->department == 8)Hepatobiliary
                @elseif($doctor->department == 9)Anaethesiology
                @elseif($doctor->department == 10)Surgery
                @elseif($doctor->department == 11)Mental Health
                @elseif($doctor->department == 12)Ear, Eye & Throat

                @endif
              </span>
            </div>
          </div>
        </div>
        @endforeach
        </div>


         {{-- <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Alexa Melvin</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ asset('user/assets/img/doctors/doctor_3.jpg') }}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ asset('user/assets/img/doctors/doctor_3.jpg') }}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ asset('user/assets/img/doctors/doctor_3.jpg') }}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div> --}}
      </div>
</div>

