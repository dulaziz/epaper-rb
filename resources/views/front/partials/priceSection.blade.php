<div class="py-5">

    <div class="">
        <div class="nav flex-row nav-pills mb-5 d-flex justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <h3 class="rb-blue-tx fw-bold fs-2 me-3">Paket Koran</h3>
            <button class="nav-link active" id="v-pills-paket1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paket1" type="button" role="tab" aria-controls="v-pills-paket1" aria-selected="true"><i class="fas fa-desktop"></i> Digital</button>
            <button class="nav-link" id="v-pills-paket2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-paket2" type="button" role="tab" aria-controls="v-pills-paket2" aria-selected="false"><i class="fas fa-newspaper"></i> Cetak</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-paket1" role="tabpanel" aria-labelledby="v-pills-paket1-tab">
            <div class="mb-5 text-center">
                <p class="card-text text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    @include('front.partials.cardPrice')
                </div>
                <div class="col-sm-4">
                    @include('front.partials.cardPrice')
                </div>
                <div class="col-sm-4">
                    @include('front.partials.cardPrice')
                </div>
            </div>  
          </div>
          <div class="tab-pane fade text-center" id="v-pills-paket2" role="tabpanel" aria-labelledby="v-pills-paket2-tab">
                <div class="mb-5">
                    {{-- <h4 class="text-secondary text-uppercase fs-6 mb-4">Paket 3 Bulan</h4> --}}
                    <p class="card-text text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        @include('front.partials.cardPriceKoran')
                    </div>
                    <div class="col-sm-4">
                        @include('front.partials.cardPriceKoran')
                    </div>
                    <div class="col-sm-4">
                        @include('front.partials.cardPriceKoran')
                    </div>
                </div> 
            </div>
        </div>
    </div>



    {{-- <div class="row d-flex align-items-center flex-column-reverse flex-md-row">
    <div class="col-lg-6">
        <img src="img/MockEpaper.png" alt="" class="float-end img-fluid">
    </div>
    <div class="col-lg-6">
        <h2 class="rb-blue-tx">Daftar Paket</h2>
        <p class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam optio voluptatum veritatis dignissimos nisi, maiores debitis porro quis quas? Fugit minima aspernatur natus sit veritatis! Provident dignissimos reiciendis quia aliquid.</p>
        <div class="row g-3">
            <div class="col-md-6">
            <div class="card myCard">
                <div class="card-body">
                <h4 class="card-title text-secondary text-uppercase fs-6 mb-4">Paket 3 Bulan</h4>
                <h3 class="rb-blue-tx fw-bold fs-2">IDR 500 k</h3>
                <p class="card-text text-secondary">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card myCard">
                <div class="card-body">
                <h5 class="card-title text-secondary text-uppercase fs-6 mb-4">PAKET 6 BULAN</h5>
                <h3 class="rb-blue-tx fw-bold fs-2">IDR 600 k</h3>
                <p class="card-text text-secondary">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card myCard">
                <div class="card-body">
                <h5 class="card-title text-secondary text-uppercase fs-6 mb-4">PAKET 12 BULAN</h5>
                <h3 class="rb-blue-tx fw-bold fs-2">IDR 700 k</h3>
                <p class="card-text text-secondary">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card myCard">
                <div class="card-body">
                <h5 class="card-title text-secondary fs-6 mb-4">PAKET CETAK</h5>
                <h3 class="rb-blue-tx fw-bold fs-2">IDR 800 k</h3>
                <p class="card-text text-secondary">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            </div>
            <a href="/langganan" class="text-decoration-none">
                <p class="text-secondary fw-bold">Paket selengkapnya<i class="fas fa-arrow-right ms-2 fs-6"></i></p>
            </a> 
        </div> --}}
          
        {{-- <h1>Highlight</h1>
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
        <a href="#" class="btn btn-secondary">Learn More</a>
        <a href="#" class="btn btn-dark">Member</a> --}}
    {{-- </div>
</div> --}}
</div>