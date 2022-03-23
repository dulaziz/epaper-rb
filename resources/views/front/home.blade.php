@extends('layouts.frontLayout.main')

@section('child')

    <div class="bg-white d-flex align-items-center" style="height: 33rem;">
        @include('front.partials.banner')
    </div>
    
    <div class="container">
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
    </div>

    {{-- <div class="container">
      @include('front.partials.about')
    </div> --}}

    <div class="bg-white">
    <div class="container">
      @include('front.partials.slick')
    </div>
    </div>

@endsection