<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
          <i class="fa-solid fa-house"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/beritas*') ? 'active' : ''}}" href="/dashboard/beritas">
          <i class="fa-solid fa-newspaper"></i>
          Blog Berita
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa-solid fa-calendar-days"></i>
          Agenda
        </a>
      </li>
    </ul>

    @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
      <span>Admin</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle" class="align-text-bottom"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
          <i class="fa-solid fa-puzzle-piece"></i>
          {{-- <span data-feather="file-text" class="align-text-bottom"></span> --}}
          Category
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Last quarter
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Social engagement
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Year-end sale
        </a>
      </li>
    </ul>
    @endcan
  </div>
</nav>