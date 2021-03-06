<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="https://i.imgur.com/ylYzXqi.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE-3.0.4</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://i.imgur.com/DlWzVsT.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Cacan Blog</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">EXAMPLE 1</li>
                <li class="nav-item">
                    <a href="../page1" class="nav-link <?php echo $uriSegments[1] == 'nasional' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-flag"></i>
                        <p>Page 1</p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLE 2</li>
                <li class="nav-item">
                    <a href="../page2" class="nav-link <?php echo $uriSegments[1] == 'internasional' ? 'active' : '' ?>">
                        <i class="nav-icon fa fa-globe"></i>
                        <p>Page 2</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
