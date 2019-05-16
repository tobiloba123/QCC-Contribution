@extends("index")

@section("title", 'Dashboard')

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
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>New Contribution Type</h2>
                <ul class="nav navbar-right panel_toolbox">
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('add_contribution_type') }}" method="POST">
                        @csrf
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="name" required class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Percentage / Amount <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="decimal" name="amount" required class="form-control col-md-7 col-xs-12" max="100" min="0">
                        </div>
                      </div>
                  
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Type / Class <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">

                          <!-- Default inline 1-->
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline1" name="class" value="1" required/>
                            <label class="custom-control-label" for="defaultInline1">&nbsp; Amount</label>
                          </div>
                          
                          <!-- Default inline 2-->
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline2" name="class" value="0" required/>
                            <label class="custom-control-label" for="defaultInline2">&nbsp; Percentage</label>
                          </div>

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
          </div>
        </div>


          </div>




  
@endsection