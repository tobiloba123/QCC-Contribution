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

       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Departments</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="{{ route('add_department') }}" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Add Department</a>
              </li>
            
            </ul>
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
                  <th>Department Name</th>
                  <th>Status</th>
                  <th>Created By</th>
                  <th>Created On</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $department->name }} </td>
                        <td>

                            @if( empty($department->deleted_at) )
                                <span class="btn btn-success btn-xs">Active</span>
                            @else
                                <span class="btn btn-danger btn-xs">Disabled</span>
                            @endif
                        </td>
                        <td>{{ $department->creator->fullname }}</td>
                        <td>{{ $department->created_at }}</td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="{{ route('edit_department',$department->id) }}"><i class="fa fa-edit"></i></a>

                            @if( empty($department->deleted_at) )
                                <a class="btn btn-danger btn-xs" href="{{ route('delete_department',$department->id) }}"><i class="fa fa-trash"></i></a>
                            @else
                                <a class="btn btn-success btn-xs" href="{{ route('restore_department',$department->id) }}"><i class="fa fa-check"></i></a>
                            @endif
                            
                            
                        </td>
                    </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>

      
  </div>


  
@endsection