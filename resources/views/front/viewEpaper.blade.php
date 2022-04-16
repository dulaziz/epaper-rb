@extends('layouts.frontLayout.main')

@section('child')
<div class="container py-5">
    <div class="card py-2 border-0 cardPaper">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h2 class="rb-blue-tx m-0">Epaper Edisi 16 April 2022</h2>
            <a class="text-light text-decoration-none btn btn-secondary" href="/epaper"><i class="fas fa-undo-alt me-1"></i>Kembali</a>
        </div>
        <div class="card-body">
            {{-- Code Embed From Issue.com --}}
            <div style="position:relative;padding-top:max(60%,326px);height:0;width:100%"><iframe sandbox="allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-scripts allow-same-origin allow-popups allow-modals allow-popups-to-escape-sandbox" allowfullscreen="true" style="position:absolute;border:none;width:100%;height:100%;left:0;right:0;top:0;bottom:0;" src="https://e.issuu.com/embed.html?d=epaper_radar_bogor_16_april-2022&u=radarbogor"></iframe></div>
            {{-- End Code --}}
        </div>
    </div>

</div>
@endsection