@extends("index")

@section("title", 'My Withdrawals')

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
            <h2>My Withdrawals</h2>
            <ul class="nav navbar-right panel_toolbox">
                    <li><a href="{{ route('make_withdrawal') }}" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Request Withdrawal</a>
                    </li>
                  
                  </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="example" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Amount</th>
                  <th>Remark</th>
                  <th>Status</th>
                  <th>Approved/Disapproved By</th>
                  <th>Credited On</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ env('APP_CURRENCY').' '.$withdrawal->amount }} </td>
                        <td>{{ $withdrawal->remark }} </td>
                        <td>
                            @if(empty($withdrawal->deleted_at))
                              {{ $withdrawal->status }} 
                            @else
                              <i class="btn btn-xs btn-danger">Disapproved</i>
                            @endif
                        </td>
                        <td>
                            @if(!empty($withdrawal->approver))
                                {{ $withdrawal->approver->fullname }}
                            @else
                                
                            @endif
                        </td>
                        <td>{{ $withdrawal->created_at }}</td>
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


@section("content")

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


@endsection