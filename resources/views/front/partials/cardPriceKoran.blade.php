<div class="card mb-5 cardPrice border-0 bg-white">
    <div class="card-body py-5 px-4 text-center">
        {{-- <div class="mb-3 mx-auto d-block">
            <i class="fas fa-baby" style="font-size: 100px;"></i>
        </div> --}}
        <div class="ribbon fw-bold"><span>Koran Cetak</span></div>
        <h4 class="text-secondary fs-6 mb-4">Paket 4 Bulan</h4>
        <h3 class="rb-blue-tx fw-bold fs-1">IDR 600 k</h3>
        <ul class="list-group list-group-flush d-grid gap-3 my-5 text-start">
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
        </ul>
        <div class="d-grid">
            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#daftarKoranModal">Pilih Paket</button>
        </div>
    </div>
</div>

<!-- Modal Login/daftar member-->
<div class="modal fade" id="daftarKoranModal" tabindex="-1" aria-labelledby="daftarKoranModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-4 text-start">
          <div class="d-flex flex-row justify-content-between mb-5">
          <h6 id="loginKoranModalLabel">Form Login</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <h2 class="fw-bold rb-blue-tx mb-3">Member Cetak</h2>
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