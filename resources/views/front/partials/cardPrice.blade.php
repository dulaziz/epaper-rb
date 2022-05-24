<div class="card mb-5 cardPrice border-0 bg-white">
    <div class="card-body pt-5 pb-1 px-3 text-center">
        {{-- <div class="mb-3 mx-auto d-block">
            <i class="fas fa-baby" style="font-size: 100px;"></i>
        </div> --}}
        <div class="ribbon fw-bold"><span>Koran Digital</span></div>
        <h4 class="text-secondary fs-6">Paket 3 Bulan</h4>
        <h3 class="rb-blue-tx fw-bold fs-1 my-4">IDR 500 k</h3>
        {{-- <ul class="list-group list-group-flush d-grid gap-3 my-5 text-start">
            <li class="d-flex flex-row align-items-center ">
                <i class="fa fa-times me-3" style="color: red;"></i>
                <p class="mb-0">Download ePaper sepuasnya selama masa aktif paket</p>
            </li>
            <li class="d-flex flex-row align-items-center ">
                <i class="fa fa-check me-3" style="color: #019267;"></i>
                <p class="mb-0">ePaper terbaru setiap hari</p>
            </li>
            <li class="d-flex flex-row align-items-center ">
                <i class="fa fa-times me-3" style="color: red;"></i>
                <p class="mb-0">Akses tanpa batas ke seluruh konten</p>
            </li>
        </ul> --}}
        <div class="d-grid col-7 mx-auto my-4">
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#daftarModal"><i class="fas fa-shopping-cart"></i> Pilih Paket</button>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati animi atque iure.</p>
    </div>
</div>

<!-- Modal Login/daftar member-->
<div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="daftarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-4">
          <div class="d-flex flex-row justify-content-between mb-5">
          <h6 id="loginModalLabel">Form Login</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <h2 class="fw-bold rb-blue-tx mb-3">Member Digital</h2>
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
            {{-- <a href="/register"><button class="btn btn-secondary">Register</button></a> --}}
            <p class="card-text mt-4 text-secondary" style="transform: rotate(0);">
              Silahkan melakukan <a href="/register" class="text-primary stretched-link">pendaftaran akun</a> jika belum terdaftar sebagai penguna.
          </p>
          </form>
        </div>
      </div>
    </div>
  </div>