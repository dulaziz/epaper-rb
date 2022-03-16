@extends('layouts.main')

@section('child')

<div class="py-5 container">
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