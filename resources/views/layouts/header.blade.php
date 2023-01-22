<header>

  <nav class="navbar navbar-expand-lg bg-secondary navbar-dark shadow">


    <div class="container ">

      <a class="navbar-brand" href="#">Portfolio | Rafli Haikal.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/*') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('profil*') ? 'active' : ''}}" href="/profil ">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog*') ? 'active' : ''}}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pesan*') ? 'active' : ''}}" href="/pesan">Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('karya*') ? 'active' : ''}}" href="/karya">Hasil Karya</a>
          </li>

          @auth
            <li class="nav-item">
              <form  action="/logout" method="post">
                @csrf
                <button class="btn btn-secondary"name="button">Logout</button>
            </form>
              @else
              <li class="nav-item">
                <a class="nav-link {{ Request::is('login*') ? 'active' : ''}}" aria-current="page" href="/login">Login</a>

            @endauth

        </ul>
      </div>
    </div>

  </nav>

</header>
