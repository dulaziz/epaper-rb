@extends('layouts.adminLayout.admain')

@section('child')

<div class="card card-outline card-primary">
    <div class="card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">Nama lengkap</label>
                  <input type="text" class="form-control" id="inputName">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputTelp">No. Telp</label>
                  <input type="text" class="form-control" id="inputTelp">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPaket">Paket</label>
                  <input type="text" class="form-control" id="inputPaket">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputAktif">Tgl Aktif</label>
                  <input type="date" class="form-control" id="inputAktif">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputAkhir">tgl Berakhit</label>
                  <input type="date" class="form-control" id="inputAkhir">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAkhir">Status</label>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Status...</option>
                        <option value="1" class="text-success">Aktif</option>
                        <option value="2" class="text-danger">Non Aktif</option>
                      </select>
                </div>
            </div>
          </form>
          <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <button type="submit" class="btn btn-warning text-light btn-sm"><i class="fas fa-edit"></i> Edit Paket</button>
            </div>
            <div class="p-2 bd-highlight">
              <button type="submit" class="btn btn-success text-light btn-sm"><i class="fas fa-save"></i> Simpan</button>
            </div>
            <div class="ml-auto p-2 bd-highlight">
              <a href="/admin/pelangganKoran" class="btn btn-primary btn-sm"><i class="fas fa-reply"></i> Kembali</a>
            </div>
          </div>
          
          
          
    </div>
</div>

@endsection