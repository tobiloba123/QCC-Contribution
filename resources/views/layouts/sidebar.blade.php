
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <hr/>
                  <ul class="nav side-menu">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a> </li>
                    {{-- <li><a href="requests.php"><i class="fa fa-question-circle"></i> Requests </a> </li>
                    <li><a href="withdrawals.php"><i class="fa fa-edit"></i> Withdrawals </a> </li>
                    <li><a href="messages.php"><i class="fa fa-reply"></i> Messages </a> </li> --}}
                    <li><a href="{{ route('departments') }}"><i class="fa fa-home"></i> Departments </a> </li>
                    <li><a href="{{ route('users') }}"><i class="fa fa-group"></i> Users </a> </li>
                    <li><a href="{{ route('contribution_types') }}"><i class="fa fa-tags"></i> Contribution Types </a> </li>
                    <li><a href="{{ route('make_contribution') }}"><i class="fa fa-money"></i> Make Contribution </a> </li>
                    <li><a href="{{ route('contributions') }}"><i class="fa fa-history"></i> Contributions </a> </li>
                    <li><a href="{{ route('my_contributions') }}"><i class="fa fa-bar-chart"></i> My Contributions </a> </li>

                    <li><a href="{{ route('withdrawals') }}"><i class="fa fa-list"></i> Withdrawal Request </a> </li>
                    <li><a href="{{ route('my_withdrawals') }}"><i class="fa fa-bank"></i> My Withdrawals </a> </li>

                    <!-- Reports -->
                    <li><a href="{{ route('report') }}"><i class="fa fa-file"></i> Report </a> </li>
  
                    <li><a href="#"><i class="fa fa-power-off"></i> Logout </a> </li>
                    
                  </ul>
                </div>
  
              </div>