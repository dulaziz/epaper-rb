@extends('layouts.frontLayout.main')

@section('child')

<div>
    <div class="py-5 container">
        
        @include('front.partials.tabelKeranjang')
        @include('front.partials.timelineEpaper')   

    </div>
</div>

@endsection