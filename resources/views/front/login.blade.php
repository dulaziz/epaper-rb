@extends('layouts.frontLayout.main')

@section('child')
<div style="background-color: #E9F1FD;">
    
<div class="container py-5 d-flex justify-content-center">
    <div class="col-md-4">
        <form>
            <img src="/img/Favicon RB.png" class="mb-3 mx-auto d-block" alt="..." style="width: 9rem;">
            <h2 class="mb-3 fw-normal text-center text-secondary">Please sign in</h2>
        
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        
            <p class="card-text mt-4 text-secondary" style="transform: rotate(0);">
                Silahkan melakukan <a href="/register" class="text-primary stretched-link">pendaftaran akun</a> jika belum terdaftar sebagai penguna.
            </p>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Radar Bogor 2017–2021</p>
        </form>      
    </div>
</div>
</div>
@endsection