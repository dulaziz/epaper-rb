@extends('layouts.main')

@section('child')
      <div class="d-flex align-items-center" style="height: 600px;">
          <div class="row">
            <div class="col-md-8">
                <h1>Highlight</h1>
                <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                </p>
                <hr>
                <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
                <a href="#" class="btn btn-success">Member</a>
            </div>
            <div class="col-md-4">
            <img src="img/gallery.png" alt="" style="width: 360px; height: 290px;">
            </div>
          </div>
        </div>

    <div class="py-5">
    <div class="row">
      <div class="col-sm-4">
        <div class="card mb-4 shadow">
          <div class="card-body">
            <h5 class="card-title">Paket Mingguan</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Beli Paket</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Paket 6 Bulan</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Beli Paket</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Paket 1 Tahun</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Beli Paket</a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="bg-light">
      <div class="py-5">
        <div class="text-end">
            <h1>Highlight</h1>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
            <hr>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="btn btn-primary">Learn More</a>
            <a href="#" class="btn btn-success">Member</a>
          </div>
        </div>
    </div>

    @include('partials.slick')

@endsection

<script type="text/javascript">
    $('.slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
</script>