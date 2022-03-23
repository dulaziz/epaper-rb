@extends('layouts.adminLayout.admain')

@section('child')

<div class="row">
    <div class="col-md-4">
      @include('admin.partials.formPaket')
    </div>
    <div class="col-md-4">
      @include('admin.partials.formPaket')
    </div>
    <div class="col-md-4">
      @include('admin.partials.formPaket')
    </div>
</div>

<h3 class="mt-3">Tambah Paket</h3>
  @include('admin.partials.formPaket')

@endsection