{{-- Navbar Layout --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand text-uppercase fs-4 fw-bold" href="/">Radar Bogor</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Epaper") ? 'active' : '' }}" href="/epaper">Epaper</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="login">Login</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>