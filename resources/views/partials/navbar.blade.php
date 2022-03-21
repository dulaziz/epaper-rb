
<link rel="stylesheet" href="css/navStyle.css">

{{-- Nav Header logo--}}
{{-- <div class="text-center bg-white">
  <h1 class="goudy rb-blue-tx pt-2 pb-0 mb-0">RADAR BOGOR</h1>
</div> --}}

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg justify-content-between py-0 navbar-light bg-white shadow-sm sticky-top border-bottom border-top">
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
      <ul class="navbar-nav text-center fw-normal ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Epaper") ? 'active' : '' }}" href="/epaper">Epaper</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "langganan") ? 'active' : '' }}" href="/langganan">Berlangganan</a>
        </li>
      </ul>

      {{-- Soccial Icon --}}
      <div class="text-center my-3 ms-3">
        <a class="link-dark text-secondary" href="#"><i class="fab fa-youtube" style="margin-right: 6px;"></i></a>
        <a class="link-dark text-secondary" href="#"><i class="fab fa-facebook" style="margin-right: 6px;"></i></a>
        <a class="link-dark text-secondary" href="#"><i class="fab fa-instagram" style="margin-right: 6px;"></i></a>
        <a class="link-dark text-secondary" href="#"><i class="fab fa-twitter" style="margin-right: 6px;"></i></a>
        
        <a type="button" class="link-dark rb-blue-tx border-start" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt" style="margin-left: 12px;"></i></a>

        <a type="button" class="link-dark rb-blue-tx" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search" style="margin-left: 12px;"></i></a>
      </div>
    </div>

  </div>
</nav>


{{-- Login Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-success">Login</button>
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