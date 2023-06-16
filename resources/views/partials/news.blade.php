@php
    $newss = App\Models\News :: get();
@endphp
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Health and Wellness News</h1>
      <div class="row mt-5">
        <?php $count = 0; ?>
        @foreach ($newss as $news)
        <?php if($count == 3) break; ?>



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
                <h5 href="blog-details.html">{{ $news->title }}</h5>
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
         <?php $count++; ?>
        @endforeach

     {{-- <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="{{ asset('user/assets/img/blog/blog_2.jpg') }}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{ asset('user/assets/img/person/person_1.jpg') }}" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
     </div>
     <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="{{ asset('user/assets/img/blog/blog_3.jpg') }}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{ asset('user/assets/img/person/person_2.jpg') }}" alt="">
                  </div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
     </div> --}}

      <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="{{ route('user.news') }}" class="btn btn-primary">More</a>
      </div>

      </div>
    </div>
  </div>
