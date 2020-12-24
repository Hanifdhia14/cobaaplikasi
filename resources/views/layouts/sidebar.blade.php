<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/main')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-folder"></i>
                <span>Master Data:</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <ul class="treeview-menu">
                    <h6>Custom Utilities:</h6>
                    <li><a href="{{url('kuadran.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Kuadran</a></li>
                    <li><a href="{{url('kpi.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> KPI</a></li>
                    <li><a href="{{url('tipe_penilaian.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Tipe Penilaian</a></li>
                    <li><a href="{{url('satuan.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Satuan</a></li>
                    <li><a href="{{url('nilai_maksimal.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Nilai Maksimal</a></li>
                    <li><a href="{{url('document.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Dokument</a></li>
                  </ul>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa fa-laptop"></i>
                <span>Master Employee</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <ul class="treeview-menu">
                        <h6 >Custom Utilities:</h6>
                      <li><a href="{{url('employee.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Employee</a></li>
                      <li><a href="{{url('hakakses.index')}}" class="collapse-item"><i class="fa fa-circle-o"></i> Hak Akses</a></li>
                    </ul>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Report</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <ul class="treeview-menu">

                    <h6>Monitoring Screens:</h6>
                    <li><a href="" class="collapse-item"><i class="fa fa-circle-o"></i> KPI</a></li>
                    <li><a href="" class="collapse-item"><i class="fa fa-circle-o"></i> Employee</a></li>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html"></a>
                    <a class="collapse-item" href="blank.html"></a>
                  </ul>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{Route('logout')}}" onclick="return confirm('Apakah anda yakin ingin Keluar ?')">
                <i class="fas fa-fw fa-table"></i>
                <span>Log Out</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle" ></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
  </section>
  <!-- /.sidebar -->
</aside>
