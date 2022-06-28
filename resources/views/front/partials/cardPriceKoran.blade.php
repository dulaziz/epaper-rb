<div class="card mb-5 cardPrice border-0 bg-white">
    <div class="card-body pt-5 pb-1 px-3 text-center">
        {{-- <div class="mb-3 mx-auto d-block">
            <i class="fas fa-baby" style="font-size: 100px;"></i>
        </div> --}}
        <div class="ribbon fw-bold"><span>Koran Cetak</span></div>
        <h4 class="text-secondary fs-6 text-center">Paket 3 Bulan</h4>
        <h3 class="rb-blue-tx fw-bold fs-1 text-center my-4">IDR 500 k</h3>
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
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#daftarKoranModal"><i class="fas fa-shopping-cart"></i> Pilih Paket</button>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati animi atque iure.</p>
    </div>
</div>

<!-- Modal Login/daftar member-->
<div class="modal fade" id="daftarKoranModal" tabindex="-1" aria-labelledby="daftarKoranModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-4 text-start">
          <div class="d-flex flex-row justify-content-between mb-5">
          <h6 id="loginKoranModalLabel">Form Pengajuan Berlangganan</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <p>Untuk berlangganan koran diperlukan alamat lengkap pelanggan untuk penyesuaian dalam proses pengiriman</p>
          {{-- <h2 class="fw-bold rb-blue-tx mb-3">Member Cetak</h2> --}}

          <form class="row g-3 text-secondary">
          <div class="col-md-12">
            <label for="inputState" class="form-label">Kota/Kabupaten Bogor</label>
            <select id="inputState" class="form-select">
              <option selected>...</option>
              <option>Kota Bogor</option>
              <option>Kabupaten Bogor</option>
            </select>
          </div>
          <div class="col-md-8">
            <label for="inputState" class="form-label">Kecamatan</label>
            <select id="inputState" class="form-select">
              <option class="text-muted">Kabupaten Bogor</option>
              {{-- Kabupaten --}}
              <option id='Kecamatan Jonggol '>Kecamatan Jonggol </option>
              <option id='Kecamatan Cariu '>Kecamatan Cariu </option>
              <option id='Kecamatan Tanjung Sari '>Kecamatan Tanjung Sari </option>
              <option id='Kecamatan Cileungsi '>Kecamatan Cileungsi </option>
              <option id='Kecamatan Sukamakmur'>Kecamatan Sukamakmur</option>
              <option id='Kecamatan Cibinong '>Kecamatan Cibinong </option>
              <option id='Kecamatan Citeureup '>Kecamatan Citeureup </option>
              <option id='Kecamatan Sukaraja '>Kecamatan Sukaraja </option>
              <option id='Kecamatan Gunung Putri '>Kecamatan Gunung Putri </option>
              <option id='Kecamatan Babakan Madang '>Kecamatan Babakan Madang </option>
              <option id='Kecamatan Ciseeng '>Kecamatan Ciseeng </option>
              <option id='Kecamatan Kemang '>Kecamatan Kemang </option>
              <option id='Kecamatan Rancabungur'>Kecamatan Rancabungur</option>
              <option id='Kecamatan Gunung Sindur'>Kecamatan Gunung Sindur</option>
              <option id='Kecamatan Bojonggede '>Kecamatan Bojonggede </option>
              <option id='Kecamatan Tajur Halang'>Kecamatan Tajur Halang</option>
              <option id='Kecamatan Jasinga'>Kecamatan Jasinga</option>
              <option id='Kecamatan Nanggung'>Kecamatan Nanggung</option>
              <option id='Kecamatan Ciawi '>Kecamatan Ciawi </option>
              <option id='Kecamatan Tenjo'>Kecamatan Tenjo</option>
              <option id='Kecamatan Cigudeg'>Kecamatan Cigudeg</option>
              <option id='Kecamatan Sukajaya'>Kecamatan Sukajaya</option>
              <option id='Kecamatan Leuwiliang'>Kecamatan Leuwiliang</option>
              <option id='Kecamatan Leuwisadeng'>Kecamatan Leuwisadeng</option>
              <option id='Kecamatan Ciampea'>Kecamatan Ciampea</option>
              <option id='Kecamatan Tenjolaya'>Kecamatan Tenjolaya</option>
              <option id='Kecamatan Cibungbulang'>Kecamatan Cibungbulang</option>
              <option id='Kecamatan Pamijahan'>Kecamatan Pamijahan</option>
              <option id='Kecamatan Rumpin'>Kecamatan Rumpin</option>
              <option id='Kecamatan Cisarua'>Kecamatan Cisarua</option>
              <option id='Kecamatan Ciomas'>Kecamatan Ciomas</option>
              <option id='Kecamatan Tamansari'>Kecamatan Tamansari</option>
              <option id='Kecamatan Cijeruk'>Kecamatan Cijeruk</option>
              <option id='Kecamatan Cigombong'>Kecamatan Cigombong</option>
              <option id='Kecamatan Caringin'>Kecamatan Caringin</option>
              <option id='Kecamatan Dramaga'>Kecamatan Dramaga</option>
              <option id='Kecamatan Megamendung'>Kecamatan Megamendung</option>
              <option id='Kecamatan Kelapanunggal'>Kecamatan Kelapanunggal</option>
              <option id='Kecamatan Parung Panjang'>Kecamatan Parung Panjang</option>
              <option id='Kecamatan Parung'>Kecamatan Parung</option>
              <option id='KECAMATAN BOGOR UTARA : 1.772 ha'>KECAMATAN BOGOR UTARA : 1.772 ha</option>
              {{-- Kota --}}
              <option id='Kelurahan Tegal Gundil 198 ha'>Kelurahan Tegal Gundil 198 ha</option>
              <option id='Kelurahan Bantarjati 170 ha'>Kelurahan Bantarjati 170 ha</option>
              <option id='Kelurahan Kedung Halang 192 ha'>Kelurahan Kedung Halang 192 ha</option>
              <option id='Kelurahan Ciparigi 161 ha'>Kelurahan Ciparigi 161 ha</option>
              <option id='Kelurahan Cibuluh 154 ha'>Kelurahan Cibuluh 154 ha</option>
              <option id='Kelurahan Ciluar 220 ha'>Kelurahan Ciluar 220 ha</option>
              <option id='Kelurahan Tanah Baru 233 ha'>Kelurahan Tanah Baru 233 ha</option>
              <option id='Kelurahan Cimahpar 444 ha'>Kelurahan Cimahpar 444 ha</option>
              <option id=''></option>
              <option id='KECAMATAN BOGOR SELATAN : 3.081 ha'>KECAMATAN BOGOR SELATAN : 3.081 ha</option>
              <option id='Kelurahan Lawang Gintung village 61 ha'>Kelurahan Lawang Gintung village 61 ha</option>
              <option id='Kelurahan Batu tulis 66 ha'>Kelurahan Batu tulis 66 ha</option>
              <option id='Kelurahan Bondongan 68 ha'>Kelurahan Bondongan 68 ha</option>
              <option id='Kelurahan Empang 79 ha'>Kelurahan Empang 79 ha</option>
              <option id='Kelurahan Pamoyanan 245 ha'>Kelurahan Pamoyanan 245 ha</option>
              <option id='Kelurahan Rangga mekar 148 ha'>Kelurahan Rangga mekar 148 ha</option>
              <option id='Kelurahan Mulyaharja 470 ha'>Kelurahan Mulyaharja 470 ha</option>
              <option id='Kelurahan Cikaret 345 ha'>Kelurahan Cikaret 345 ha</option>
              <option id='Kelurahan Bojong kerta 276 ha'>Kelurahan Bojong kerta 276 ha</option>
              <option id='Kelurahan Rancamaya 200 ha'>Kelurahan Rancamaya 200 ha</option>
              <option id='Kelurahan Kertamaya 360 ha'>Kelurahan Kertamaya 360 ha</option>
              <option id='Kelurahan Harjasari 149 ha'>Kelurahan Harjasari 149 ha</option>
              <option id='Kelurahan Muarasari 154 ha'>Kelurahan Muarasari 154 ha</option>
              <option id='Kelurahan Genteng 173 ha'>Kelurahan Genteng 173 ha</option>
              <option id='Kelurahan Pakuan 104 ha'>Kelurahan Pakuan 104 ha</option>
              <option id='Kelurahan Cipaku 174 ha'>Kelurahan Cipaku 174 ha</option>
              <option id=''></option>
              <option id='KECAMATAN BOGOR TENGAH : 813 ha'>KECAMATAN BOGOR TENGAH : 813 ha</option>
              <option id='Kelurahan Babakan 122 ha'>Kelurahan Babakan 122 ha</option>
              <option id='Kelurahan Sempur 63 ha'>Kelurahan Sempur 63 ha</option>
              <option id='Kelurahan Tegallega 123 ha'>Kelurahan Tegallega 123 ha</option>
              <option id='Kelurahan Babakan pasar 41 ha'>Kelurahan Babakan pasar 41 ha</option>
              <option id='Kelurahan Gudang 32 ha'>Kelurahan Gudang 32 ha</option>
              <option id='Kelurahan Paledang 0 178 ha'>Kelurahan Paledang 0 178 ha</option>
              <option id='Kelurahan Panaragan 27 ha'>Kelurahan Panaragan 27 ha</option>
              <option id='Kelurahan Pabaton 63 ha'>Kelurahan Pabaton 63 ha</option>
              <option id='Kelurahan Kebon Kelapa 45,7 ha'>Kelurahan Kebon Kelapa 45,7 ha</option>
              <option id='Kelurahan Cibogor 44 ha'>Kelurahan Cibogor 44 ha</option>
              <option id='Kelurahan Ciwaringin 74,3 ha'>Kelurahan Ciwaringin 74,3 ha</option>
              <option id=''></option>
              <option id='KECAMATAN BOGOR BARAT : 3.285 ha'>KECAMATAN BOGOR BARAT : 3.285 ha</option>
              <option id='Kelurahan Menteng 209 ha'>Kelurahan Menteng 209 ha</option>
              <option id='Kelurahan Sindangbarang 370 ha'>Kelurahan Sindangbarang 370 ha</option>
              <option id='Kelurahan Bubulak 314 ha'>Kelurahan Bubulak 314 ha</option>
              <option id='Kelurahan Margajaya 355 ha'>Kelurahan Margajaya 355 ha</option>
              <option id='Kelurahan Balumbangjaya 154 ha'>Kelurahan Balumbangjaya 154 ha</option>
              <option id='Kelurahan Situgede 273 ha'>Kelurahan Situgede 273 ha</option>
              <option id='Kelurahan Semplak 44 ha'>Kelurahan Semplak 44 ha</option>
              <option id='Kelurahan Cilendek Barat 174 ha'>Kelurahan Cilendek Barat 174 ha</option>
              <option id='Kelurahan Cilendek Timur 105 ha'>Kelurahan Cilendek Timur 105 ha</option>
              <option id='Kelurahan Curugmekar 104 ha'>Kelurahan Curugmekar 104 ha</option>
              <option id='Kelurahan Curug 195 ha'>Kelurahan Curug 195 ha</option>
              <option id='Kelurahan Pasirjaya 290 ha'>Kelurahan Pasirjaya 290 ha</option>
              <option id='Kelurahan Pasirkuda 225 ha'>Kelurahan Pasirkuda 225 ha</option>
              <option id='Kelurahan Pasirmulya 100 ha'>Kelurahan Pasirmulya 100 ha</option>
              <option id='Kelurahan Gunungbatu 220 ha'>Kelurahan Gunungbatu 220 ha</option>
              <option id='Kelurahan Loji 253 ha'>Kelurahan Loji 253 ha</option>
              <option id=''></option>
              <option id='KECAMATAN BOGOR TIMUR : 1.015 ha'>KECAMATAN BOGOR TIMUR : 1.015 ha</option>
              <option id='Kelurahan Baranangsiang 235 ha'>Kelurahan Baranangsiang 235 ha</option>
              <option id='Kelurahan Sukasari 48 ha'>Kelurahan Sukasari 48 ha</option>
              <option id='Kelurahan Katulampa 491 ha'>Kelurahan Katulampa 491 ha</option>
              <option id='Kelurahan Sindangsari 90 ha'>Kelurahan Sindangsari 90 ha</option>
              <option id='Kelurahan Sindangrasa 106 ha'>Kelurahan Sindangrasa 106 ha</option>
              <option id='Kelurahan Tajur village 45 ha'>Kelurahan Tajur village 45 ha</option>
              <option id=''></option>
              <option id='KECAMATAN TANAH SAREAL : 1.884 ha'>KECAMATAN TANAH SAREAL : 1.884 ha</option>
              <option id='Kelurahan Kebon Pedes 104 ha'>Kelurahan Kebon Pedes 104 ha</option>
              <option id='Kelurahan Tanah Sareal 105 ha'>Kelurahan Tanah Sareal 105 ha</option>
              <option id='Kelurahan Kedungbadak 195 ha'>Kelurahan Kedungbadak 195 ha</option>
              <option id='Kelurahan Sukaresmi 98 ha'>Kelurahan Sukaresmi 98 ha</option>
              <option id='Kelurahan Kedungwaringin 142 ha'>Kelurahan Kedungwaringin 142 ha</option>
              <option id='Kelurahan Kedungjaya 72 ha'>Kelurahan Kedungjaya 72 ha</option>
              <option id='Kelurahan Sukadamai 112 ha'>Kelurahan Sukadamai 112 ha</option>
              <option id='Kelurahan Mekarwangi 135 ha'>Kelurahan Mekarwangi 135 ha</option>
              <option id='Kelurahan Kencana 214 ha'>Kelurahan Kencana 214 ha</option>
              <option id='Kelurahan Kayumanis 243 ha'>Kelurahan Kayumanis 243 ha</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputZip" class="form-label">Kode Pos</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">
            <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Alamat lengkap</label>
            </div>
        </div>
            <div class="col-6">
                <div class="mt-3 d-grid gap-2">
                    <a href="/keranjangKoran" class="btn btn-success" type="button">Ajukan</a>
                </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>