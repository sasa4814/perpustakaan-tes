{{-- Penghubung --}}
@extends('home')

{{-- Awal Content --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-4">
            <form class="form-inline form-tengah my-2 my-lg-0" action="{{ url('\layntar') }}">
                <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="{{ url('\layntar') }}" value="Gambar"><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href=""><img src="../image/logo-social.png" class="card-img-top" alt="..."></a>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Akhir Content --}}