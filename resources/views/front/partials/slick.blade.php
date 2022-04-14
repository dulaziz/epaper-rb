<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Jquery Cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MyStyle -->
    <link rel="stylesheet" href="css/mySlick.css">

</head>
<body>

<div class="p-3 px-md-4 px-lg-5 bg-light slickBox ">
    {{-- <div class="text-center">
    <h2 class="rb-blue-tx">Harian Pagi Radar Bogor</h2>
    <p class="text-secondary">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
    </p>
</div> --}}
    <div class="row flex-column-reverse flex-md-row">
        <div class="col-md-6">
            <div class="py-5">
                <div class="row responsive mySlick">
    
                    <div class="col-md-12">
                        <div class="card mx-1">
                            <img src="img/2022012801_halanmanutama.jpg" alt="" class="card-img-top">
                            {{-- <div class="card-body">
                                <h5 class="card-title rb-blue-tx">Edisi 1 Januari 2020</h5>
                            </div> --}}
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="card mx-1">
                            <img src="img/2022012801_halanmanutama.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="card mx-1">
                            <img src="img/2022012801_halanmanutama.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="card mx-1">
                            <img src="img/2022012801_halanmanutama.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="card mx-1">
                            <img src="img/2022012801_halanmanutama.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="card mx-1">
                            <img src="img/2022012801_halanmanutama.jpg" alt="" class="card-img-top">
                        </div>
                    </div>
                    
                </div> 
            </div>
            
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div>
            <h2 class="rb-blue-tx mb-4">Epaper Terkini</h2>
            <p><i class="fas fa-newspaper fs-4 text-secondary me-3"></i>Dapatkan edisi tekini setiap pagi</p>
            <p><i class="fas fa-download fs-4 text-secondary me-3"></i>Akses Download Epaper</p>
            <hr>
                <p class="text-secondary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore excepturi ad eveniet. Delectus quasi cumque, in perferendis nulla temporibus fugit quibusdam minima voluptatibus reprehenderit, praesentium eius sequi alias neque sunt.
                </p>
                <a href="/epaper" class="text-decoration-none">
                    <p class="text-secondary fw-bold">Selengkapnya<i class="fas fa-arrow-right ms-2"></i></p>
                </a>
            </div>
        </div>
    </div>

</div>


<!-- Modal Login/daftar member-->
<div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="daftarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="daftarModalLabel">Login Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark">Login</button>
            <a href="/langganan" class="btn btn-secondary">Daftar Paket</a>
          </form>
        </div>
      </div>
    </div>
  </div>

{{-- Slick --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/script.js"></script>

</body>
</html>