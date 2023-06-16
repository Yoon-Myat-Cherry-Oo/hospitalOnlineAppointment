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

  <!-- .page-section -->
  @php
  $newss = App\Models\News :: paginate(9);
@endphp
<div class="page-section bg-light">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Health and Wellness News</h1>
    <div class="row mt-5">
        @foreach ($newss as $news)
        <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
          <div class="header">
            <div class="post-category">
              <a href="#">{{ $news->category }}</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
              <img src="{{ asset('admin/news/'.$news->photo) }}" alt="">
            </a>
          </div>
          <div class="body">
            <h5 class="post-title">
              <h5 href="blog-details.html" class="text-black">{{ $news->title }}</h5>
            </h5>
             <div class="site-info">
              <div class="avatar mr-2">
                <div class="avatar-img">

                  <img src="{{ asset('/admin/assets/userImg/'. \App\Models\User::find($news->user_id)->get()[0]->image) }}"  alt="">

                </div>
                 <span>{{ \App\Models\User::find($news->user_id)->get()[0]->name }}</span>
              </div>
              <span class="mai-time"></span> {{ $news->created_at->diffForHumans() }}


            </div>
            <a href="{{ route('readMore',$news->news_id) }}" class="text-center">
                <div class="btn btn-sm bg-primary px-1 py-1 my-1 text-sm ">Read</div>
            </a>
           </div>
        </div>
       </div>

      @endforeach
      {{-- <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="{{ route('user.news') }}" class="btn btn-primary">Read More</a>
      </div> --}}
      {{-- <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="{{ route('user.news') }}" class="btn btn-primary">Read More</a>
      </div> --}}


      </div>
      <div class="float-end">
        {{ $newss->links() }}
    </div>

    </div>
  </div>
  @if(Route::has('login'))
  @auth
  <!-- .page-section -->
  @endauth
  @endif

 {{-- @include('partials.get') <!-- .banner-home --> --}}


  @endsection


