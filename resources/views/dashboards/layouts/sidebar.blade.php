<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}} " aria-current="page"
        href="{{ url('dashboard')}}">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('karya-dashboard*') ? 'active' : ''}} " aria-current="page"
         href="{{ url('karya-dashboard')}}">
          <span data-feather="home" class="align-text-bottom"></span>
          Hasil Karya
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('kategori-dashboard*') ? 'active' : ''}}" href="{{ url('kategori-dashboard')}}">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Kategori Karya
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('blog-dashboard*') ? 'active' : ''}} " aria-current="page"
         href="{{ url('blog-dashboard')}}">
          <span data-feather="home" class="align-text-bottom"></span>
          Blog
        </a>
      </li>
      <li class="nav-item">
            <a class="nav-link {{ Request::is('jenis-dashboard*') ? 'active' : ''}} " aria-current="page"
            href="{{ url('jenis-dashboard')}}">
          <span data-feather="users" class="align-text-bottom"></span>
          jenis Blog
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('pesan-dashboard*') ? 'active' : ''}}" href="{{ url('pesan-dashboard')}}">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Pesan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('profil-dashboard*') ? 'active' : ''}}" href="{{ url('profil-dashboard')}}">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Profil
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('deskripsi-dashboard*') ? 'active' : ''}}" href="{{ url('deskripsi-dashboard')}}">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Deskripsi Profil
        </a>
      </li>
    </ul>
  </div>
</nav>
