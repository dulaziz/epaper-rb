@extends('layouts.adminLayout.admain')

@section('child')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<div class="card card-outline card-primary">
    {{-- <div class="card-header border-0">
        <button type="button" class="btn btn-success float-right"><i class="fas fa-save"></i> Simpan Produk</button>      
    </div> --}}
        <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputJudul">Judul</label>
                            <input type="text" class="form-control" placeholder="Edisi epaper" id="exampleInputJudul" aria-describedby="judulHelp">
                            <small id="judulHelp" class="form-text text-danger">Harap masukan judul epaper sesuai dengan tanggal terbit</small>
                        </div>
                    </div>
                    <div class="col">
                        <label for="formFile" class="form-label">Thumbnail</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="form-floating mb-3">
                <label for="floatingTextarea2">Sematkan Kode</label>
                <textarea class="form-control summernote" id="floatingTextarea2"></textarea>
            </div>
            <div class="d-flex bd-highlight mb-3">
                <div class="ml-auto p-2 bd-highlight">
                    <button type="submit" class="btn btn-success text-light"><i class="fas fa-save"></i> Simpan</button>
                  <a href="/admin/produk" class="btn btn-primary"><i class="fas fa-reply"></i> Kembali</a>
                </div>
            </div>                
        </div>
</div>

<script>
    $('.summernote').summernote({
    placeholder: 'Kode Epaper',
    tabsize: 2,
    height: 650,
    toolbar: [
        ['view', ['codeview', 'fullscreen']]
    ]
    });
</script>

@endsection