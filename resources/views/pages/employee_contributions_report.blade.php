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

    @if(!empty($users))

    <div class="x_content">
            <br />

            <div class="col-md-3 col-lg-3 col-sm-6"></div>
        <div class="col-md-6 col-lg-6 col-sm-6">
            <p class="text-center h4">Please Select Employee For Contribution Reports</p><br/>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('employee_contribution_report') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">User<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="user_id" class="form-control col-md-7 col-xs-12">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>

        </div>
        <div class="col-md-3 col-lg-3 col-sm-6"></div>
    </div>
    
    @endif

    @if(!empty($contributions))    
        <div class="">

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Employee Contributions Report</h2>
                        <ul class="nav navbar-right panel_toolbox">
                                <li><a href="#" class="btn btn-danger btn-lg"><i class="fa fa-file"></i> PDF</a></li>
                                <li><a target="_blank" href="{{ route('export_excel_employee_contributions',$keyword) }}" class="btn btn-success btn-lg"><i class="fa fa-file"></i> EXCEL</a></li>
                            </ul>
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
    @endif



  @endsection


@section("content")

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


@endsection