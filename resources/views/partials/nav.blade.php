<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid mx-4">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/utm.png') }}" alt="" width="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if (Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Pengajuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Status</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() == 'users')? 'active' : '' }}" aria-current="page"
            href="/users">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() == 'pengajuan')? 'active' : '' }}"
            href="/users/pengajuan">Pengajuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Route::currentRouteName() == 'status')? 'active' : ''  }}"
            href="/users/status">Status</a>
        </li>
        @endif
      </ul>
    </div>
    <div class="profil">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle bg-primary border border-0 shadow" href="#" role="button"
          id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('images/male.png') }}" alt="user" width="30">
          <span>{{ Auth::user()->name }}</span>
        </a>
        <!-- name user -->

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Profil</a></li>
          <form action="/logout" method="POST">
            @csrf
            <li>
              <button class="dropdown-item" href="#" type="submit">Logout</button>
            </li>
          </form>
        </ul>
      </div>
    </div>
  </div>
</nav>