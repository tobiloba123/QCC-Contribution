@extends("index")

@section("title", 'Contributions Report')

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
            <h2>Contributions Report</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a href="#" class="btn btn-danger btn-lg"><i class="fa fa-file"></i> PDF</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>


          <br/><br/>
        <div>
            <div class="col-md-4 col-lg-4 col-sm-6"></div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <form action="{{ route('contribution_report') }}" method="POST">
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
                  <th>Contribution Type</th>
                  <th>Remark</th>
                  <th>Credited By</th>
                  <th>Credited On</th>
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