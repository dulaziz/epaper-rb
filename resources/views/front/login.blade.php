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
      <div class="d-flex align-items-center"> 
      <div class="container py-4 d-flex justify-content-center">
          <div class="col-md-6">
              <div class="card cardRegist py-4 px-2 border-0">
                  <div class="card-body">
                    <h5 class="card-title mb-5 text-muted">Form Login</h5>
                    <h2 class="fw-bold rb-blue-tx mb-3">Login Member</h2>
                    <form class="row g-3 text-secondary">
                      <div class="form-floating mb-3">
                          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput">Email/Username</label>
                      </div>
                      <div class="form-floating">
                          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                          <label for="floatingPassword">Password</label>
                      </div>
                      <p class="card-text mt-4 text-secondary" style="transform: rotate(0);">
                          Silahkan melakukan <a href="/register" class="text-primary stretched-link">pendaftaran akun</a> jika belum terdaftar sebagai penguna.
                      </p>
                      <button class="w-100 btn btn-lg btn-secondary" type="submit">Login</button>
                      <p class="text-muted text-center">&copy; Radar Bogor 2017–2021</p>
                    </form>
                  </div>
                </div>    
          </div>
      </div>
      </div>
  </body>
</html>

