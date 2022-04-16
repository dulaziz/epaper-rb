<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body style="background-color: #E9F1FD;">
    <div class="container py-5 d-flex justify-content-center">
      <div class="col-md-6">
        <div class="card cardRegist py-4 px-2 border-0">
          <div class="card-body">
            <h5 class="card-title mb-5 text-muted">Form Pendaftaran</h5>
            <h6 class="card-subtitle mb-2">Syarat dan Ketentuan</h6>
            <p class="card-text">Dalam Berlangganan  <strong>Epaper Cetak</strong> Radar Bogor, Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <form class="row g-3 text-secondary">
              <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputFirstName">
                </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="col-12">
                  <label for="inputAddress" class="form-label">No. Telp</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="+62">
              </div>
              <div class="col-md-6">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="email" class="form-control" id="inputUsername">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            <div class="col-md-12">
              <label for="inputState" class="form-label">Kota/Kabupaten Bogor</label>
              <select id="inputState" class="form-select">
                <option selected>...</option>
                <option>Kota Bogor</option>
                <option>Kabupaten Bogor</option>
              </select>
            </div>
            <div class="col-md-10">
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
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
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
                      <button class="btn btn-secondary" type="button">Save</button>
                  </div>
              </div>
              <p class="card-text text-secondary" style="transform: rotate(0);">
                  Jika telah selesai melakukan pendaftaran pengguna, silahkan Kembali <a href="/login" class="text-primary stretched-link">Login.</a>
              </p>
            </form>
          </div>
        </div>
      </div>
  </div>
  </body>
</html>