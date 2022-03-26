@extends('layouts.frontLayout.main')

@section('child')

    <div class="d-flex align-items-center" style="height: 100vh; background-color: #E9F1FD;">
        @include('front.partials.banner')
    </div>
    
    {{-- <div class="container">
      <div class="row py-5">
        <div class="col-md-4 mb-4">
          @include('front.partials.cardPrice1')
        </div>
        <div class="col-md-4 mb-4">
          @include('front.partials.cardPrice1')
        </div>
        <div class="col-md-4 mb-4">
          @include('front.partials.cardPrice1')
        </div>
      </div>
    </div> --}}

    <div class="container">
      @include('front.partials.about')
    </div>

    <div style="background-color: #E9F1FD;">
    <div class="container">
      @include('front.partials.slick')
    </div>
    </div>

@endsection