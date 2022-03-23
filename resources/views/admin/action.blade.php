@extends('layouts.adminLayout.admain')

@section('child')

<div class="row">
    <div class="col-5">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Epaper</label>
                            <img src="/img/2022012801_halanmanutama.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="" class="form-label">Thumbnail</label>
                            <img src="/img/epaper-radar-bogor-4-Februari-2022.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <form>
                    <div class="row">
                    <div class="mb-3 col-6">
                    <label for="" class="form-label">Edisi</label>
                    <input type="text" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="" class="form-label">Tag</label>
                        <input type="text" class="form-control" id="" aria-describedby="">
                    </div>
                    </div>  
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="floatingTextarea"></textarea>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <form>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Input Epaper</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form>
                        </div>
                        <div class="mb-3 col-6">
                            <form>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Input Thumbnail</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection