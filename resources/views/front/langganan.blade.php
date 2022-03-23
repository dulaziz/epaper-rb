@extends('layouts.frontLayout.main')

@section('child')
<div class="py-5 container">
    <div class="carousel-text mb-3">
        <h1>Daftar Paket Berlangganan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam accusamus, molestias consectetur minima id saepe voluptatum iure mollitia adipisci quam magni fuga facere, nihil rem alias quidem a! Repellat, quibusdam.</p>
        <hr>
    </div>
    <div class="row">
        <div class="col-sm-4">
            @include('front.partials.cardPrice')
        </div>
        <div class="col-sm-4">
            <div class="card mb-3" >
                <img src="img/ds-.png" class="pt-3 mx-auto d-block" alt="..." style="width: 300px">
                <div class="card-body">
                <h5 class="card-title">Paket 3 Bulan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">Download ePaper sepuasnya selama masa aktif paket</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">ePaper terbaru setiap hari</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-times me-3" style="color: red;"></i>
                        <p class="mb-0">Akses tanpa batas ke seluruh konten</p>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="d-grid">
                        <button class="btn btn-sm btn-success" type="button">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <img src="img/ds-.png" class="pt-3 mx-auto d-block" alt="..." style="width: 300px">
                <div class="card-body">
                <h5 class="card-title">Paket 6 Bulan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">Download ePaper sepuasnya selama masa aktif paket</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">ePaper terbaru setiap hari</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">Akses tanpa batas ke seluruh konten</p>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="d-grid">
                        <button class="btn btn-sm btn-success" type="button">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <img src="img/ds-.png" class="pt-3 mx-auto d-block" alt="..." style="width: 300px">
                <div class="card-body">
                <h5 class="card-title">Paket 12 Bulan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">Download ePaper sepuasnya selama masa aktif paket</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">ePaper terbaru setiap hari</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">Akses tanpa batas ke seluruh konten</p>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="d-grid">
                        <button class="btn btn-sm btn-success" type="button">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <img src="img/ds-.png" class="pt-3 mx-auto d-block" alt="..." style="width: 300px">
                <div class="card-body">
                <h5 class="card-title">Paket Karyawan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-times me-3" style="color: red;"></i>
                        <p class="mb-0">Download ePaper sepuasnya selama masa aktif paket</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">ePaper terbaru setiap hari</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-times me-3" style="color: red;"></i>
                        <p class="mb-0">Akses tanpa batas ke seluruh konten</p>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="d-grid">
                        <button class="btn btn-sm btn-success" type="button">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <img src="img/ds-.png" class="pt-3 mx-auto d-block" alt="..." style="width: 300px">
                <div class="card-body">
                <h5 class="card-title">Paket Langganan Cetak</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-times me-3" style="color: red;"></i>
                        <p class="mb-0">Download ePaper sepuasnya selama masa aktif paket</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-check me-3" style="color: #019267;"></i>
                        <p class="mb-0">ePaper terbaru setiap hari</p>
                    </li>
                    <li class="list-group-item d-flex flex-row align-items-center">
                        <i class="fa fa-times me-3" style="color: red;"></i>
                        <p class="mb-0">Akses tanpa batas ke seluruh konten</p>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="d-grid">
                        <button class="btn btn-sm btn-success" type="button">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection