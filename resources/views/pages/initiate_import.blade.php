@extends("index")

@section("title", 'Dashboard')

@section("content")


@if  (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Super-Admin'))

<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    
<div class="">
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="row top_tiles">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center h4">
            Please Select Data Import Type
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <br/><br/>
    <div class="row top_tiles">
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="{{ route('user_import') }}">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title h3">User Data</h5>
                      <p class="card-text">Upload an Excel File Type for data importation</p>
                    </div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="{{ route('contribution_import') }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title h3">Contribution Data</h5>
                        <p class="card-text">Upload an Excel File Type for data importation</p>
                    </div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
    </div>
  </div>

@else

<div class="row"> 
    
</div>

@endif



  
@endsection