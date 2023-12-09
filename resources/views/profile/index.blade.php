@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<div class="container p-5">
  <div class="card bg-body-tertiary border">
    @if ($user->role != 'user')
    <legend class="card-header text-body-secondary">Profile -- {{ $user->staff->prodi->nama }}</legend>
    @else
    <legend class="card-header text-body-secondary">Profile -- {{ $user->mahasiswa->prodi->nama }}</legend>
    @endif
    <div class="row d-flex justify-content-center py-4">
      <div class="col-4">
        <img src="{{ asset('images/male.png') }}" alt="avatar" class="thumbnail" height="150" width="150">
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="fakultas" class="form-label">Nama Lengkap</label>
          @if ($user->role != 'user')
          <input type="text" class="form-control" id="fakultas" value="{{ $user->staff->nama }}" disabled>
          @else
          <input type="text" class="form-control" id="fakultas" value="{{ $user->mahasiswa->nama }}" disabled>
          @endif
        </div>
        <div class="mb-3">
          @if ($user->role != 'user')
          <label for="fakultas" class="form-label">NIP</label>
          <input type="text" class="form-control" id="fakultas" value="{{ $user->staff->nip }}" disabled>
          @else
          <label for="fakultas" class="form-label">NIM</label>
          <input type="text" class="form-control" id="fakultas" value="{{ $user->mahasiswa->nim }}" disabled>
          @endif
        </div>
      </div>
    </div>
    <form action="{{ route('profile.update') }}" method="POST">
      @csrf
      @method('PATCH')
      <div class="row d-flex justify-content-center mb-4">
        <div class="col-5">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" value="{{ $user->email }}" disabled>
          </div>
        </div>
        @if ($user->role == 'user')
        <div class="col-5">
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30"
              class="form-control">{{ ($user->mahasiswa)? $user->mahasiswa->alamat : '' }}</textarea>
          </div>
        </div>
        <div class="row px-5 my-4">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @endif
      </div>
    </form>
  </div>
</div>
@endsection