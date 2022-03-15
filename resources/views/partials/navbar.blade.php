
<link rel="stylesheet" href="navStyle.css">

{{-- Nav Header logo--}}
<div class="text-center bg-white">
  <h1 class="goudy rb-blue-tx pt-2 pb-0 mb-0">RADAR BOGOR</h1>
</div>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-0 navbar-light bg-white shadow-sm sticky-top border-bottom border-top">
  <div class="container">
    <a class="navbar-brand text-uppercase fs-3 fw-bold goudy pt-2 pb-0" style="color: #00548F;" href="/">RB</a>
    <button 
    class="navbar-toggler collapsed d-flex d-lg-none flex-column justtify-content-around" 
    type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#toggleMobileMenu" 
    aria-controls="toggleMobileMenu"
    aria-expanded="false"
    aria-label="Toggle navigation"
    >
    <span class="toggler-icon top-bar"></span>
    <span class="toggler-icon middle-bar"></span>
    <span class="toggler-icon bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="toggleMobileMenu">
      <ul class="navbar-nav text-center fw-normal me-auto">
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
      <div class="text-center">
        <a class="link-dark text-secondary" href="#"><i class="fab fa-youtube" style="margin-right: 6px;"></i></a>
        <a class="link-dark text-secondary" href="#"><i class="fab fa-facebook" style="margin-right: 6px;"></i></a>
        <a class="link-dark text-secondary" href="#"><i class="fab fa-instagram" style="margin-right: 6px;"></i></a>
        <a class="link-dark text-secondary" href="#"><i class="fab fa-twitter" style="margin-right: 6px;"></i></a>
        <a class="link-dark rb-blue-tx border-start" href="#"><i class="fas fa-search" style="margin-left: 12px;"></i></a>
       </div>
    </div>
  </div>
</nav>