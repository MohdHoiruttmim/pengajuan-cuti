@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<div class="bg-image">
  <img src="{{ asset('images/building.jpg') }}" class="w-100" />
  <div class="mask">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto mt-5 pt-5">
          <div class="shadow text-white backdrop p-5 rounded">
            <div class="card-body">
              <h1 class="text-center">Selamat Datang 🙏, {{ Auth::user()->name }}</h1>
              <p>Sistem Informasi Cuti adalah platform yang memudahkan mahasiswa untuk mengelola dan mengajukan cuti
                dengan efisien. Tampilan beranda sistem ini menyediakan informasi terkini tentang status cuti yang
                sedang diajukan, termasuka detail seperti tinggal permohonan dan status persetujuan</p>
            </div>
            <a href="/users/pengajuan" class="btn btn-lg btn-primary mt-2">Ajukan Cuti</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection