@extends('layouts.frontLayout.main')

@section('child')

    <div class="d-flex align-items-center" style="height: 100vh; background-color: #E9F1FD;">
        @include('front.partials.bannerSection')
    </div>

    <div class="container">
      @include('front.partials.priceSection')
    </div>

    <div style="background-color: #E9F1FD;">
    <div class="container">
      @include('front.partials.slick')
    </div>
    </div>

@endsection