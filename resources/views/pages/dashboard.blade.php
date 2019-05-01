@extends("index")

@section("title", 'Dashboard')

@section("content")


@hasanyrole('Admin|Super-Admin')
<div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-group"></i></div>
          <div class="count">{{ $users }}</div>
          <h3>Total Employees</h3>
          <p></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-home"></i></div>
          <div class="count">{{ $departments }}</div>
          <h3>Total Departments</h3>
          <p></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
          <div class="count">{{ $requests }}</div>
          <h3>Pending Request</h3>
          <p></p>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-money"></i></div>
          <div class="count">{{ $withdrawals }}</div>
          <h3>Total Withdrawals</h3>
          <p></p>
        </div>
      </div>
    </div>
  </div>

@else

<div class="row"> 
    
</div>

@endhasanyrole



  
@endsection