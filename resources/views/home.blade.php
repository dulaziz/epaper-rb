@extends('layouts.main')

@section('child')

    <div class="bg-white">
        @include('partials.banner2')
    </div>
    
    <div class="container">
      @include('partials.price')
    </div>

    {{-- <div class="container">
      @include('partials.about')
    </div> --}}

    <div class="bg-white">
    <div class="container">
      @include('partials.slick')
    </div>
    </div>

@endsection