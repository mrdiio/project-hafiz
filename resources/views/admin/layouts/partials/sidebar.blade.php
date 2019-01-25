<section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ Request::is('home') ? 'active' : '' }}">
        <a href="/home">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="{{ Request::is('panoramaadmin') ? 'active' : '' }}">
        <a href="/panoramaadmin">
          <i class="fa fa-camera"></i> <span>Panorama</span>
        </a>
      </li>
      <li class="{{ Request::is('artikeladmin') ? 'active' : '' }}">
        <a href="/artikeladmin">
          <i class="fa fa-newspaper-o"></i> <span>Artikel</span>
        </a>
      </li>
      <li class="{{ Request::is('eventadmin') ? 'active' : '' }}">
        <a href="/eventadmin">
          <i class="fa fa-calendar"></i> <span>Event</span>
        </a>
      </li>
      <li class="{{ Request::is('tentang') ? 'active' : '' }}">
        <a href="/tentang">
          <i class="fa fa-user"></i> <span>About</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
