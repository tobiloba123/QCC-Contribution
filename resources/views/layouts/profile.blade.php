<div class="profile clearfix">
    <div class="profile_pic">

      @if(!empty(Auth::user()->picture_url))
        <img src="{!! url('')."/".Auth::user()->picture_url !!}" alt="..." class="img-circle profile_img">
      @else
       <span class="img-circle profile_img"> <i class="fa fa-user fa-4x"></i> </span>
      @endif
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{ Auth::user()->username }}</h2>
    </div>
  </div>