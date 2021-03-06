@extends('layouts.adminLayout.admain')

@section('child')

<div class="card card-outline card-primary">
    <div class="card-body">
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Paket</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Harga Paket</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            {{-- <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Download ePaper sepuasnya selama masa aktif paket</label>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">ePaper terbaru setiap hari</label>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Akses tanpa batas ke seluruh konten</label>
              </div> --}}
          </form>
          <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <button type="submit" class="btn btn-warning text-light btn-sm"><i class="fas fa-edit"></i> Edit Paket</button>
            </div>
            <div class="p-2 bd-highlight">
              <button type="submit" class="btn btn-success text-light btn-sm"><i class="fas fa-save"></i> Simpan</button>
            </div>
            <div class="ml-auto p-2 bd-highlight">
              <a href="/admin/paket" class="btn btn-primary btn-sm"><i class="fas fa-reply"></i> Kembali</a>
            </div>
          </div>
          
          
          
    </div>
</div>

@endsection