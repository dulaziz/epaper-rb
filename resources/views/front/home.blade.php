@extends('layouts.frontLayout.main')

@section('child')

    <div class="d-flex align-items-center bg-white" style="height: 100vh;">
        @include('front.partials.bannerSection')
    </div>

    <div class="container">
      @include('front.partials.priceSection')
    </div>

    <div class="py-5 bg-white">
    <div class="container">
      @include('front.partials.slick')
    </div>
    </div>

@endsection