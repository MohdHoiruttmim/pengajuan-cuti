@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')

<main class="m-5">
  <div class="card bg-body-tertiary border">
    <legend class="card-header text-body-secondary">Tindak Lanjuti Permohonan</legend>
    <form action="{{ route('prodi-permohonan-send') }}" method="POST" class="my-3 mx-4" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 pt-3">
        <div class="col">
          <input type="text" name="id" value="{{ $id }}" class="visually-hidden">
          <div class="form-group inputDnD">
            <label class="form-label" for="inputFile">Surat permohonan pengajuan cuti</label>
            <input type="file" class="form-control-file text-primary font-weight-bold text-dark" id="inputFile"
              accept="application/pdf" onchange="readUrl(this)" data-title="Drag and drop a file" name="permohonan">
          </div>
          @error('permohonan')
          <div class="alert alert-danger mt-2" role="alert">
            <!-- <strong>Perhatian!</strong> silahkan upload dokumen terlebih dahulu -->
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="confirm">
        <input type="submit" class="btn btn-primary mt-2" value="Kirim">
      </div>
    </form>
  </div>
</main>
<script src="{{ asset('js/app.js') }}">
</script>
@endsection