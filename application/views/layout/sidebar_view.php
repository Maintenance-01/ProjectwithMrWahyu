<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="Dashboard" class="brand-link logo-switch">
      <!--begin::Brand Image Small-->
      <img src="assets/img/logophm.png" class="brand-image-xl logo-xs" />
      <!--end::Brand Image Small-->

      <!--begin::Brand Image Large-->
      <img src="assets/img/logophmfull.png" class="brand-image-xl logo-xl" />
      <!--end::Brand Image Large-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->

  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false">
        <li class="nav-item">
          <a href="dashboard" class="nav-link <?= ($this->uri->uri_string() === 'dashboard') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="asset" class="nav-link <?= ($this->uri->uri_string() === 'asset') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-archive"></i>
            <p>
              Asset
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="location" class="nav-link <?= ($this->uri->uri_string() === 'location') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-person"></i>
            <p>
              Location
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="personel" class="nav-link <?= ($this->uri->uri_string() === 'personel') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-person"></i>
            <p>
              Personel
            </p>
          </a>
        </li>
      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->