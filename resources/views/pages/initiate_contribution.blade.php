@extends("index")

@section("title", 'Dashboard')

@section("content")


@if  (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Super-Admin'))
<div class="">
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="row top_tiles">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center h4">
            Please Select Contribution Processig Type
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <br/><br/>
    <div class="row top_tiles">
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="{{ route('single_contribution') }}">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title h3">Single Transaction</h5>
                      <p class="card-text">Single Transaction allows you to make contribution for an employee.</p>
                    </div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="{{ route('department_contribution') }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title h3">Department Transaction</h5>
                        <p class="card-text">You can make contribution on sll employees at any stated Department.</p>
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