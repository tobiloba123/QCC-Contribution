@extends("index")

@section("title", 'Contributions')

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
            <h2>Withdrawal Requests</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="example" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Fullname</th>
                  <th>Amount</th>
                  <th>Remark</th>
                  <th>Status</th>
                  <th>Credited On</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $withdrawal->user->fullname }} </td>
                        <td>{{ $withdrawal->amount }} </td>
                        <td>{{ $withdrawal->remark }} </td>
                        <td>{{ $withdrawal->status }} </td>
                        <td>{{ $withdrawal->created_at }}</td>
                        <td>
                            <a class="btn btn-danger btn-xs" href="{{ route('disapprove_withdrawal',$withdrawal->id) }}"><i class="fa fa-trash"></i></a>
                            <a class="btn btn-success btn-xs" href="{{ route('approve_withdrawal',$withdrawal->id) }}"><i class="fa fa-check"></i></a>
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


@section("content")

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


@endsection