@extends('layouts.admin')
@section('content')
 <div class="container-fluid g-0 class1">
    <div class="row" id="row1" >

        <div class="card mt-3 col-lg-12 col-md-12 col-sm-12 class3 px-5" id="card1">
            <div class="card-header text-center fs1 bolder">
                <div>
                    @if (Session::has('createSuccess'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('createSuccess') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif
                    @if (Session::has('updateSuccess'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('updateSuccess') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                    @endif
                    @if (Session::has('deleteSuccess'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('deleteSuccess') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                    @endif
                </div>
                <h1 class="font-bolder">News List</h1>
                <div class="py-3">
                    <h3 class="card-title float-start "><a href="{{ route('newNews') }}">
                    <button class="btn btn-sm bg-dark text-white"><i class="fas fa-plus">
                        </i></button></a></h3>
                    <div class="card-tools float-end">
                        <form action="{{ route('searchNews') }}" method="POST">
                           @csrf
                           <div class="input-group text-end">
                               <div class="form-outline">
                                 <input id="search-input" type="search" id="form1" class="form-control"
                                 placeholder="Search by category" name="table_search"/>
                               </div>
                               <button id="search-button" type="submit" class="btn btn-sm btn-primary">
                                 <i class="fas fa-search"></i>
                               </button>
                             </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="card-body" id="cardBody" style="
                    -webkit-box-flex: 1;
                    -ms-flex: 0 0 0;
                    flex: 1 1 auto;
                    padding: 0rem 0rem;
               ">
                <table class="g-0 table table-responsive table-bordered table-striped table-hover">

                    <thead>
                     <tr>
                         <th>No</th>
                         <th>Category</th>
                         <th>Title</th>
                         <th>Photo</th>
                         <th></th>
                         {{-- <th>Description</th> --}}

                     </tr>
                    </thead>
                    <tbody>
                     @if($status == 0)
                     <tr>
                       <td colspan="7">
                        <small class="text-muted">There is no data</small>

                       </td>
                     </tr>
                     @else
                     @foreach ($newss as $news )
                     <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $news->category }}</td>
                       <td>{{ $news->title }}</td>
                       <td>
                       <img src="{{ asset('admin/news/'.$news->photo) }}" class="img-thumbnail" width="150px">
                     </td>
                     {{-- <td>{{ $news->description }}</td> --}}

                     <td>
                       <a href="{{ route('seeNews',$news->news_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-eye"></i></button></a>
                       <a href="{{ route('editNews',$news->news_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-edit"></i></button></a>
                       <a href="{{ route('deleteNews',$news->news_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-trash-alt"></i></button></a>
                     </td>
                     </tr>
                     @endforeach
                     @endif
                    </tbody>

                </table>
                 <div>
                   {{ $newss->links() }}
                 </div>
            </div>

        </div>
           <!--col end -->

    </div>
    <!--row end -->
</div>


@endsection
