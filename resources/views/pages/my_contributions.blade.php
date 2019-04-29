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
            <h2>Contributions</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="example" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Fullname</th>
                  <th>Amount</th>
                  <th>Contribution Type</th>
                  <th>Remark</th>
                  <th>Credited By</th>
                  <th>Credited On</th>
                  {{-- <th>Action</th> --}}
                </tr>
              </thead>

              <tbody>

                @foreach ($contributions as $contribution)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contribution->user->fullname }} </td>
                        <td>{{ $contribution->amount }} </td>
                        <td>{{ $contribution->contribution_type->name }} </td>
                        <td>{{ $contribution->remark }} </td>
                        <td>{{ $contribution->creditor->fullname }} </td>
                        <td>{{ $contribution->created_at }}</td>
                        {{-- <td>
                            @if(Auth::user()->id != $user->id)
                                <a class="btn btn-primary btn-xs" href="{{ route('edit_user',$user->id) }}"><i class="fa fa-edit"></i></a>

                                @if( empty($user->deleted_at) )
                                    <a class="btn btn-danger btn-xs" href="{{ route('delete_user',$user->id) }}"><i class="fa fa-trash"></i></a>
                                @else
                                    <a class="btn btn-success btn-xs" href="{{ route('restore_user',$user->id) }}"><i class="fa fa-check"></i></a>
                                @endif
                            @else

                                <button class="btn btn-primary btn-xs">Current User</button>

                            @endif
                            
                            
                        </td> --}}
                    </tr>
                @endforeach
                
              </tbody>
            </table>
            <div class="pull-right">
                {!! $contributions->links() !!}
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