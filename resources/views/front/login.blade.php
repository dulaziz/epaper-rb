@extends('layouts.frontLayout.main')

@section('child')
<div style="background-color: #E9F1FD;">
<div class="container py-5 d-flex justify-content-center">
    <div class="col-md-6">
        
        <div class="card shadow p-3">
            <div class="card-body">
                <img src="/img/SideNavLgo.png" class="mb-3 mx-auto d-block" alt="..." style="width: 7rem;">
                <h5 class="card-title mb-4 text-center text-secondary text-uppercase">Login Member</h5>
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-secondary">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-secondary">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-secondary" type="button">Login</button>
                    </div>
                    <p class="card-text mt-4 text-secondary" style="transform: rotate(0);">
                        Silahkan melakukan <a href="/daftar" class="text-primary stretched-link">pendaftaran akun</a> jika belum terdaftar sebagai penguna.
                    </p>
                  </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection