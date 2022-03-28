@extends('layouts.frontLayout.main')

@section('child')
<div style="background-color: #E9F1FD;">
<div class="container py-5 d-flex justify-content-center">
    <div class="col-md-6">
    <img src="/img/Favicon RB.png" class="mb-3 mx-auto d-block" alt="..." style="width: 9rem;">
    <h2 class="mb-5 fw-normal text-center text-secondary">Register Form</h2>
      <form class="row g-3 text-secondary">
          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">First Name</label>
              <input type="text" class="form-control" id="inputFirstName">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="inputLastName">
            </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
              <label for="inputAddress" class="form-label">Phone</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="+62">
            </div>
          <div class="col-12">
              <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Address</label>
              </div>
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">
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
@endsection