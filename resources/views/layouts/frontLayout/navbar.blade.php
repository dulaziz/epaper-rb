
<link rel="stylesheet" href="css/navStyle.css">

{{-- Navbar --}}
<nav id="navBar" class="navbar navbar-expand-lg py-2 navbar-light sticky-top bg-white">
  <div class="container"> 

    {{-- Logo --}}
    <a class="navbar-brand navlogo" href="/"><img src="img/RB Nav.png" alt="logo radar bogor"></a>
    
    {{-- Burger Menu --}}
    <button 
    class="navbar-toggler collapsed d-flex d-lg-none flex-column justtify-content-around" 
    type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#toggleMobileMenu" 
    aria-controls="toggleMobileMenu"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="toggler-icon top-bar"></span>
    <span class="toggler-icon middle-bar"></span>
    <span class="toggler-icon bottom-bar"></span>
    </button>
    {{-- Menu --}}
    <div class="collapse navbar-collapse" id="toggleMobileMenu">
      <ul class="navbar-nav text-center fw-bold ms-auto d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Epaper") ? 'active' : '' }}" href="/epaper">Epaper</a>
        </li>
      </ul>
        <button type="button" class="btn btn-outline-secondary btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-placement="bottom" title="Login Member"><i class="fas fa-user"></i> Nama Member</button>        
    </div>

  </div>
</nav>


{{-- Login Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body py-5 px-4">
        <div class="d-flex flex-row justify-content-between mb-5">
          <h6 id="loginModalLabel">Form</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <h2 class="fw-bold rb-blue-tx mb-3">Login Member</h2>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username/Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <a href="#"><button class="btn btn-dark">Login</button></a>
          <a href="/register"><button class="btn btn-secondary">Register</button></a>
          <p class="card-text mt-4 text-secondary" style="transform: rotate(0);">
            Silahkan melakukan <a href="/register" class="text-primary stretched-link">pendaftaran akun</a> jika belum terdaftar sebagai penguna.
        </p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="searchModalLabel">Search Epaper</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="d-flex mb-3">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="row g-0">
          <div class="col-md-4 col-sm-12 modal-img rounded-3 shadow-sm" style="background-image:url(./img/epaper-radar-bogor-4-Februari-2022.jpg);">
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="card-body">
              <h5 class="card-title">Edisi 1 Januari 2020</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row g-0">
          <div class="col-md-4 col-sm-12 modal-img rounded-3 shadow-sm" style="background-image:url(./img/epaper-radar-bogor-4-Februari-2022.jpg);">
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="card-body">
              <h5 class="card-title">Edisi 1 Januari 2020</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row g-0">
          <div class="col-md-4 col-sm-12 modal-img rounded-3 shadow-sm" style="background-image:url(./img/epaper-radar-bogor-4-Februari-2022.jpg);">
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="card-body">
              <h5 class="card-title">Edisi 1 Januari 2020</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Load More</button>
      </div>
    </div>
  </div>
</div>

<script src="js/script.js"></script>
