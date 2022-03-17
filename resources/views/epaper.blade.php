@extends('layouts.main')

@section('child')

<div class="py-5 container">
    <div class="carousel-text mb-3">
        <h1>ePaper bulan ini</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam accusamus, molestias consectetur minima id saepe voluptatum iure mollitia adipisci quam magni fuga facere, nihil rem alias quidem a! Repellat, quibusdam.</p>
        <hr>
    </div>
    <div class="row g-3">
        @include('partials.card')
        @include('partials.card')
        @include('partials.card')
        @include('partials.card')
        @include('partials.card')

        @include('partials.pagination')
    </div> 
</div>

@endsection