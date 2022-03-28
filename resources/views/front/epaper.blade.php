@extends('layouts.frontLayout.main')

@section('child')

<div style="background-color: #E9F1FD;">
<div class="py-5 container">
    <div class="carousel-text mb-3">
        <h2 class="rb-blue-tx">Epaper Bulan Ini</h2>
        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam accusamus, molestias consectetur minima id saepe voluptatum iure mollitia adipisci quam magni fuga facere, nihil rem alias quidem a! Repellat, quibusdam.</p>
        <hr>
    </div>
    <div class="row g-3">
        @include('front.partials.cardEpaper')
        @include('front.partials.cardEpaper')
        @include('front.partials.cardEpaper')
        @include('front.partials.cardEpaper')
        @include('front.partials.cardEpaper')

        @include('front.partials.pagination')
    </div> 
</div>
</div>

@endsection