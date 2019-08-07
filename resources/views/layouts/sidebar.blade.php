
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <hr/>
                <ul class="nav side-menu">
                  <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a> </li>
                  @hasanyrole('Admin|Super-Admin')
                      <li><a href="{{ route('departments') }}"><i class="fa fa-home"></i> Departments </a> </li>
                      <li><a href="{{ route('users') }}"><i class="fa fa-group"></i> Users </a> </li>
                      <li><a href="{{ route('contribution_types') }}"><i class="fa fa-tags"></i> Contribution Types </a> </li>
                      <li><a href="{{ route('make_contribution') }}"><i class="fa fa-money"></i> Make Contribution </a> </li>
                      <li><a href="{{ route('contributions') }}"><i class="fa fa-history"></i> Contributions </a> </li>
                  @endhasanyrole
                  
                  <li><a href="{{ route('my_contributions') }}"><i class="fa fa-bar-chart"></i> My Contributions </a> </li>
                  
                  @hasanyrole('Admin|Super-Admin')
                      <li><a href="{{ route('withdrawals') }}"><i class="fa fa-list"></i> Withdrawal Request </a> </li>
                  @endhasanyrole
                  
                  <li><a href="{{ route('my_withdrawals') }}"><i class="fa fa-bank"></i> My Withdrawals </a> </li>

                  @hasanyrole('Admin|Super-Admin')
                  <!-- Reports -->
                      <li><a href="{{ route('report') }}"><i class="fa fa-file"></i> Report </a> </li>
                  @endhasanyrole

                  @hasanyrole('Admin|Super-Admin')
                      <li><a href="{{ route('interest') }}"><i class="fa fa-money"></i> Interest </a> </li>
                  @endhasanyrole

                  @hasanyrole('Admin|Super-Admin')
                      <li><a href="{{ route('roll_over') }}"><i class="fa fa-clone"></i> Roll Over </a> </li>
                  @endhasanyrole
                  
                  @hasanyrole('Admin|Super-Admin')
                      <hr/>
                      <li><a href="{{ route('import') }}"><i class="fa fa-upload"></i> Import </a> </li>
                  @endhasanyrole

                </ul>
              </div>

            </div>