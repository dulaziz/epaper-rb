{{-- <div class="card card-outline card-primary">
    <div class="card-body">

        <table id="dtTbl" class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Nama lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Kota/Kabupaten</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Zip</th>
                <th scope="col">Alamat Lengkap</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Abdul</td>
                <td>*****</td>
                <td>Abdul Aziz</td>
                <td>Abdulaziz@gmail.com</td>
                <td>Kota Bogor</td>
                <td>Bogor Barat</td>
                <td>16113</td>
                <td>Jl. Curug Mekar RT. 03/06 Kel. Curug Mekar, Kec. Kota Bogor Barat</td>
                <a href="/admin/tambahProduk" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Abdul</td>
                <td>*****</td>
                <td>Abdul Aziz</td>
                <td>Abdulaziz@gmail.com</td>
                <td>Kota Bogor</td>
                <td>Bogor Barat</td>
                <td>16113</td>
                <td>Jl. Curug Mekar RT. 03/06 Kel. Curug Mekar, Kec. Kota Bogor Barat</td>
                <a href="/admin/tambahProduk" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Abdul</td>
                <td>*****</td>
                <td>Abdul Aziz</td>
                <td>Abdulaziz@gmail.com</td>
                <td>Kota Bogor</td>
                <td>Bogor Barat</td>
                <td>16113</td>
                <td>Jl. Curug Mekar RT. 03/06 Kel. Curug Mekar, Kec. Kota Bogor Barat</td>
                <a href="/admin/tambahProduk" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
            </tr>
            </tbody>
        </table>
    
    </div>
</div> --}}





<div class="card card-outline card-primary">
    <div class="card-body">
        <a href="/admin/tambahProduk" class="btn btn-sm btn-success mb-3"><i class="fas fa-plus mr-3"></i>Tambah Produk</a>
        <table id="dtTbl" class="table table-striped table-hover">   
            <thead>
                <tr>
                    <th scope="col">No</th>
                    {{-- <th scope="col">Username</th>
                    <th scope="col">Password</th> --}}
                    <th scope="col">Nama lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kota/Kabupaten</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Zip</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Tgl Aktif</th>
                    <th scope="col">Tgl Non-aktif</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    {{-- <td>Abdul</td>
                    <td>*****</td> --}}
                    <td>Abdul Aziz</td>
                    <td>Abdulaziz@gmail.com</td>
                    <td>Kota Bogor</td>
                    <td>Bogor Barat</td>
                    <td>16113</td>
                    <td>Jl. Curug Mekar RT. 03/06 Kel. Curug Mekar, Kec. Kota Bogor Barat</td>
                    <td>Paket 3 Bulan</td>
                    <td>1 Januari 2022</td>
                    <td>30 Maret 2022</td>
                    <td>
                        <span class="badge badge-success">Aktif</span>
                    </td>
                    <td>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal">
                        <i class="fas fa-eye"></i> Detail
                    </button>
                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fas fa-check"></i> Terima
                    </button>
                    <button type="button" class="btn btn-sm btn-danger">
                        <i class="fas fa-times"></i> Tolak
                    </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    {{-- <td>Abdul</td>
                    <td>*****</td> --}}
                    <td>Andika Kurniawan</td>
                    <td>Kurniawan@gmail.com</td>
                    <td>Kab Bogor</td>
                    <td>Bogor selatan</td>
                    <td>16113</td>
                    <td>Jl. Curug Mekar RT. 03/06 Kel. Curug Mekar, Kec. Kota Bogor Barat</td>
                    <td>Paket 12 Bulan</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <span class="badge badge-info">Menunggu Pembayaran</span>
                    </td>
                    <td>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal">
                        <i class="fas fa-eye"></i> Detail
                    </button>
                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fas fa-check"></i> Terima
                    </button>
                    <button type="button" class="btn btn-sm btn-danger">
                        <i class="fas fa-times"></i> Tolak
                    </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    {{-- <td>Abdul</td>
                    <td>*****</td> --}}
                    <td>Muhamad Reza</td>
                    <td>Reza@gmail.com</td>
                    <td>Kab Bogor</td>
                    <td>Bogor Timur</td>
                    <td>16113</td>
                    <td>Jl. Curug Mekar RT. 03/06 Kel. Curug Mekar, Kec. Kota Bogor Barat</td>
                    <td>Paket 6 Bulan</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <span class="badge badge-warning">Menunggu konfirmasi</span>
                    </td>
                    <td>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal">
                        <i class="fas fa-eye"></i> Detail
                    </button>
                    <button type="button" class="btn btn-sm btn-success">
                        <i class="fas fa-check"></i> Terima
                    </button>
                    <button type="button" class="btn btn-sm btn-danger">
                        <i class="fas fa-times"></i> Tolak
                    </button>
                    </td>
                </tr>                 
            </tbody>
        </table>
    </div>
</div>


<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModallLabel">Detail Pendaftar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="row">
            <div class="col-md-6 mb-3">
                <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputFirstName">
              </div>
            <div class="col-md-6 mb-3">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12 mb-3">
                <label for="inputAddress" class="form-label">No. Telp</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="+62">
            </div>
            <div class="col-md-6 mb-3">
              <label for="inputUsername" class="form-label">Username</label>
              <input type="email" class="form-control" id="inputUsername">
            </div>
            <div class="col-md-6 mb-3">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
          <div class="col-md-12 mb-3">
            <label for="inputState" class="form-label">Kota/Kabupaten Bogor</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-10 mb-3">
            <label for="inputState" class="form-label">Kecamatan</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-2 mb-3">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12 mb-3">
            <label for="inputState" class="form-label">Alamat lengkap</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-success">
            <i class="fas fa-check"></i> Terima
        </button>
        <button type="button" class="btn btn-sm btn-danger">
            <i class="fas fa-times"></i> Tolak
        </button>
        </div>
      </div>
    </div>
  </div>
