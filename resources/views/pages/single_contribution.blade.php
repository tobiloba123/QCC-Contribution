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

        @foreach($errors->all() as $message) {
            <p class="alert alert-warning">{{ $message }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endforeach
    </div> <!-- end .flash-message -->

<div class="">
          
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Single User Contribution</h2>
                <ul class="nav navbar-right panel_toolbox">
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('single_contribution') }}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Contibution Type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="contribution_type_id" class="form-control col-md-7 col-xs-12">
                                @foreach($contribution_types as $contribution_type)
                                    <option value="{{ $contribution_type->id }}">
                                        @if($contribution_type->class == "1")
                                        {{ $contribution_type->name.' ('.env('APP_CURRENCY') }} {{ $contribution_type->amount .')' }}
                                      @else
                                        {{ $contribution_type->name.' ('.$contribution_type->amount .'%)' }}
                                      @endif
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Remark
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea type="text" name="remark" class="form-control col-md-7 col-xs-12" style="min-height:100px;"></textarea>
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