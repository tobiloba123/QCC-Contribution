@extends("index")

@section("title", 'Profile')

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
                <h2>User Profile <small>Activity report</small></h2>
                
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                    <div id="crop-avatar">
                        <!-- Current avatar -->
                        @if(!empty($user->picture_url))
                            <img src="{{ $user->picture_url }}" alt="..." class="img-circle profile_img">
                        @else
                            <i class="fa fa-user fa-4x"></i>
                        @endif
                    </div>
                </div>
                <h3>{{ $user->fullname }}</h3>
    
                <ul class="list-unstyled user_data">
                    <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $user->address }}
                    </li>
    
                    <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> {{ $user->user_department->department->name }}
                    </li>
    
                    <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> {{ $user->job_description }}
                    </li>
    
                    <li>
                    <i class="fa fa-clock-o user-profile-icon"></i> {{ $user->created_at->toFormattedDateString() }}
                    </li>
    
                    
                </ul>
    
                <a href="{{ route("edit_profile") }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                <br />
    
                <!-- start skills -->
                
                <!-- end of skills -->
    
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
    
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Request</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Withdrawal Status</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Current Balance</a>
                    </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
    
                        <!-- start recent activity -->
                        <ul class="messages">

                            @foreach ($withdrawals as $withdrawal)
                                <li>
                                    <img src="{{ $user->picture_url }}" class="avatar" alt="Avatar">
                                    <div class="message_date">
                                    <h3 class="date text-info">{{ Carbon\Carbon::parse($withdrawal->created_at)->format('d') }}</h3>
                                    <p class="month">{{ Carbon\Carbon::parse($withdrawal->created_at)->format('M') }}</p>
                                    </div>
                                    <div class="message_wrapper">
                                    <h4 class="heading">{{ $user->fullname }}</h4>
                                    <blockquote class="message">{{ env("APP_CURRENCY").' '.$withdrawal->amount }}</blockquote>
                                    <blockquote class="message">{{ $withdrawal->remark }}</blockquote>
                                    <br />
                                    
                                    </div>
                                </li>
                            @endforeach
                        
                        </ul>
                        <!-- end recent activity -->
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
    
                        <!-- start user projects -->
                        <table class="data table table-striped no-margin">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Withdrawal Date</th>
                            <th>Department Name</th>
                            <th class="hidden-phone">Amount</th>
                            <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                            @foreach ($allWithdrawals as $withdrawal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Carbon\Carbon::parse($withdrawal->created_at)->format('d/m/Y') }}</td>
                                    <td>{{ $user->user_department->department->name }}</td>
                                    <td class="hidden-phone">{{ env('APP_CURRENCY').' '.$withdrawal->amount}}</td>
                                    <td class="vertical-align-mid">
                                        @if(!empty($withdrawal->approved_date))
                                            <i class="btn btn-xs btn-success">Approved</i>
                                        @elseif(!empty($widthdrawal->deleted_at))
                                            <i class="btn btn-xs btn-danger">Disapproved</i>
                                        @else
                                            <i class="btn btn-xs btn-warning">Pending</i>
                                        @endif
                                        
                                           
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <!-- end user projects -->
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <h3>{{ env('APP_CURRENCY')." ".$balance }}</h3>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        
    </div>
  
@endsection


@section("scripts")

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


@endsection