@extends('layouts.frontLayout.main')

@section('child')
<div class="bg-white">
    <div class="py-5 container">
        <div class="carousel-text mb-5">
            <h2 class="rb-blue-tx">Paket Koran Digital</h2>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam accusamus, molestias consectetur minima id saepe voluptatum iure mollitia adipisci quam magni fuga facere, nihil rem alias quidem a! Repellat, quibusdam.</p>
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

    <div class="py-5 container">
        <div class="carousel-text mb-5">
            <h2 class="rb-blue-tx">Paket Koran Cetak</h2>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam accusamus, molestias consectetur minima id saepe voluptatum iure mollitia adipisci quam magni fuga facere, nihil rem alias quidem a! Repellat, quibusdam.</p>
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
</div>
@endsection