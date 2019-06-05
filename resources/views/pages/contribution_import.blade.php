@extends("index")

@section("title", 'Dashboard')

@section("content")


@if  (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Super-Admin'))

<div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    
<div class="">
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/>
    <div class="row top_tiles">
            
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12"></div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
            <a href="{{ route('user_import') }}">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title h3">Contribution Data Import</h5>
                      <p class="card-text">Upload an Excel File Type for data importation</p>
                      
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  action="{{ route('process_contribution_import') }}" method="POST" enctype="multipart/form-data">
                        <div class="ln_solid"></div>
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">File <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="file" required class="form-control col-md-7 col-xs-12">
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
                </div>
            </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
    </div>
    
    <br/>
    
    <div class="row top_tiles">
            
        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 text-center">
            
            Please Arrange The Excel file columns in any formart but must include the listed columns below <br/><br/>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <tbody>
              <tr>
                  <td>amount</td>
                  <td>user_id</td>
                  <td>approver_id</td>
                  <td>contribution_type_id</td>
                  <td>remark</td>
              </tr>
          </tbody>
      </table>
            
      </div>
      <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12"></div>
    </div>
    
    
  </div>

@else

<div class="row"> 
    
</div>

@endif



  
@endsection