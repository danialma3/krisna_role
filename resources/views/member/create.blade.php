@extends('layouts.main')
@section('container')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Tambah Daftar Member</h1>
            <p>Seusaikan isi dari form</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="col-md-12">
                    <h3 class="tile-title">Pendaftaran Member GYM</h3>
                    <div class="tile-body">
                        <form class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nama</label>
                                <input class="form-control" type="text" placeholder="Isi Nama">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nomor HP</label>
                                <input class="form-control" type="text" placeholder="Isi Nomor Hp">
                                <button class="btn btn-primary my-4" type="button"><i class="bi bi-check-circle-fill me-2"></i>Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection