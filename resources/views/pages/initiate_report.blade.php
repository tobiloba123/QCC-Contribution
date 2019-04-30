@extends("index")

@section("title", 'Dashboard')

@section("content")


@if  (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Super-Admin'))
<div class="">
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="row top_tiles">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center h3">
            Report
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <br/><br/>
    


    <div class="row top_tiles">
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="#">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title h3">Withdrawals Report</h5>
                    </div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
            <a href="#">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title h3">Contributions Report</h5>
                    </div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
    </div>
    <br/><br/>
    <div class="row top_tiles">
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                <a href="#">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title h3">Employee Contribution</h5>
                        </div>
                    </div>
                </a>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                <a href="#">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title h3">Department Transaction</h5>
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