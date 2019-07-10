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
            <h2>Users</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="{{ route('add_user') }}" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Add User</a>
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
                  <th>Picture</th>
                  <th>Department</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Address</th>
                  <th>Job Description</th>
                  <th>Status</th>
                  <th>Created On</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if (empty($user->picture_url))
                                
                            @else
                                <img src="{{ $user->picture_url }}" class="img-thumbnail" style="width:50px;height:50px;"/>
                            @endif
                            
                        </td>
                        <td>{{ $user->user_department->department->name }} </td>
                        <td>{{ $user->fullname }} </td>
                        <td>{{ $user->email }} </td>
                        <td>{{ $user->username }} </td>
                        <td>{{ $user->address }} </td>
                        <td>{{ $user->job_description }} </td>
                        <td>

                            @if( empty($user->deleted_at) )
                                <span class="btn btn-success btn-xs">Active</span>
                            @else
                                <span class="btn btn-danger btn-xs">Disabled</span>
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>
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
                            
                            
                        </td>
                    </tr>
                @endforeach
                
              </tbody>
            </table>
            <div class="pull-right">
              {!! $users->links() !!}
          </div>
          </div>
        </div>
      </div>

      
  </div>


  
@endsection