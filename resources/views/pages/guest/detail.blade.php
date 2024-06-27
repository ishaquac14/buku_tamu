@extends('layouts.app')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center mb-4 mt-4">
                    <h6 class="text-primary fw-bolder">-- GUEST DETAIL --</h6>
                </div>
                <div class="card">
                    <div class="card-header">
                        {{ $guest->nama }}
                    </div>
                    <div class="card-body">
                        <p><strong>NIK:</strong> {{ $guest->nik }}</p>
                        <p><strong>Nama Lengkap:</strong> {{ $guest->nama }}</p>
                        <p><strong>Asal Perusahaan:</strong> {{ $guest->asal_perusahaan }}</p>
                        <p><strong>No Handphone:</strong> {{ $guest->no_hp_tamu }}</p>
                        <p><strong>PIC:</strong> {{ optional($guest->user)->full_name }}</p>
                        <p><strong>Departemen:</strong> {{ $guest->departemen }}</p>
                        <p><strong>Tujuan Lokasi:</strong> {{ $guest->tujuan_lokasi }}</p>
                        <p><strong>Kartu:</strong> {{ $guest->kartu }}</p>
                        <p><strong>Tujuan:</strong> {{ $guest->tujuan }}</p>
                        <p><strong>Image:</strong><br> <img src="{{ $guest->image }}" alt="Guest Image" class="img-fluid" style="max-width: 320px;"></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('guest.index') }}" class="btn btn-secondary">Back to List</a>
                        <a href="{{ route('guest.pdf', $guest->id) }}" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection