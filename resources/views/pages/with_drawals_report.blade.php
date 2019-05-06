@extends("index")

@section("title", 'Withdrawal Report')

@section("content")


<br/><br/><br/><br/>
<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    
<div class="">
            
    <div class="clearfix"></div>

       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Withdrawal Report</h2>
            <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#" class="btn btn-danger btn-lg"><i class="fa fa-file"></i> PDF</a></li>
                </ul>
            <div class="clearfix"></div>
          </div>

        <br/><br/>
        <div>
            <div class="col-md-4 col-lg-4 col-sm-6"></div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <form action="{{ route('withdraw_report') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search with e.g Fullname, Date, Remark" required name="keyword"/>
                        <span class="input-group-btn">
                            <input type="submit" class="form-control btn btn-primary" value="Search" />
                        </span>
                    </div><!-- /input-group -->
                </form>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6"></div>
        </div>
        <br/><br/><br/><br/>

          <div class="x_content">
            <table id="example" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Fullname</th>
                  <th>Amount</th>
                  <th>Remark</th>
                  <th>Credited On</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $withdrawal->user->fullname }} </td>
                        <td>{{ $withdrawal->amount }} </td>
                        <td>{{ $withdrawal->remark }} </td>
                        <td>{{ $withdrawal->created_at }}</td>
                        <td>
                            @if(!empty($withdrawal->deleted_at))
                                <i class="btn btn-danger btn-sm">Disapproved</i>
                            @elseif(!empty($withdrawal->approved_date))
                                <i class="btn btn-success btn-sm">Approved</i>
                            @else
                                <i class="btn btn-warning btn-sm">Pending</i>
                            @endif
                        </td>
                    </tr>
                @endforeach
                
              </tbody>
            </table>
            <div class="pull-right">
                {!! $withdrawals->links() !!}
            </div>
          </div>
        </div>
      </div>

      
  </div>


  
@endsection


@section("scripts")

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


@endsection