@extends("index")

@section("title", 'Interest')

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
            <h2>Interest</h2>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#rollOverModal">
                    <i class="fa fa-copy"></i>  Change Interest
            </button>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
              <!-- Employee Details Table. -->
            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Amount (%) </th>
                  <th>Approved By</th>
                </tr>
              </thead>

              <tbody>

                    <tr>
                        <td>1</td>
                        <td>
                            {{ date("d M Y \\a\\t h:m a", strtotime($interest->created_at)) }}
                        </td>
                        <td>{{ $interest->amount }}</td>
                        <td>{{ $interest->approver->first_name." ".$interest->approver->last_name }} </td>
                    </tr>
                
              </tbody>
            </table>
            <div class="pull-right">
              
          </div>
          </div>
        </div>
      </div>

      
  </div>




  <!-- Modal -->
<div class="modal fade" id="rollOverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

    <form action="{{ route('process_interest') }}" method="POST">
        @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Change Interest</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body p-5">
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Amount" name="amount" required/>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Process</button>
            </div>
          </div>
    </form>

        </div>
      </div>
  
@endsection