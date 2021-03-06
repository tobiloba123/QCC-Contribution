<!DOCTYPE html>
<html lang="en">
  @include("layouts.head_deep")
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('dashboard') }}" class="site_title"><i class="fa fa-paw"></i> <span>QCC System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include("layouts.profile")
            <!-- /menu profile quick info -->

            <br />


            <!-- sidebar menu -->
            @include("layouts.sidebar")
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
              <!--  -->
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include("layouts.header")
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield("content")
        </div>
              
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            QCC - Contribution System <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Datatable -->
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    @yield("scripts")
  </body>
</html>