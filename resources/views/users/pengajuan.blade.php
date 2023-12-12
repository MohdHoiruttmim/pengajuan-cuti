@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<div class="row m-5">
  <div class="col-3 d-flex justify-content-center align-items-center bg-body-tertiary p-3 rounded border"
    style="height: fit-content;">
    <img src="{{ asset('images/male.png') }}" alt="avatar" width="50" height="50">
    <div class="faculity ms-2">
      <h5 class="card-subtitle" style="color: #334155;">{{ $user->nama }}</h5>
      <h6 class="card-subtitle text-body-secondary">{{ $user->prodi->nama }}</h6>
      <h6 class="card-subtitle text-body-secondary">{{ $user->fakultas->nama }}</h6>
    </div>
  </div>
  <div class="col-8 ms-3">
    <div class="card bg-body-tertiary border">
      <legend class="card-header text-body-secondary">Pengajuan Cuti Dokumen</legend>
      <form class="card-body" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="inputName" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ $user->nama }}" disabled>
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="NIM" class="form-label">NIM</label>
              <input type="text" class="form-control" id="NIM" value="{{ $user->nim }}" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label for="fakultas" class="form-label">Fakultas</label>
              <input type="text" class="form-control" id="fakultas" value="{{ $user->fakultas->nama }}" disabled>
            </div>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="prodi" class="form-label">Program Studi</label>
              <input type="text" class="form-control" id="prodi" value="{{ $user->prodi->nama }}" disabled>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat Rumah</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{ $user->alamat  }}
          </textarea>
        </div>
        <div class="mb-3 border rounded bg-white p-3">
          <label for="reason" class="form-label">Mengajukan permohanan Berhenti Studi Sementara (BSS) dengan alasan:
          </label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" id="flexRadioDefault1"
              value="Sakit dan perlu istirahat/perawatan" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              Sakit dan perlu istirahat/perwatan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" id="flexRadioDefault2"
              value="Kerja Praktek/Dinas">
            <label class="form-check-label" for="flexRadioDefault2">
              Kerja Praktek/Dinas
            </label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="reason" id="flexRadioDefault3"
              value="Keperluan lain yang bersifat pribadi">
            <label for="flexRadioDefault3" class="form-check-label">
              Keperluan lain yang bersifat pribadi
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label for="selectYear" class="form-label">Untuk Semsester dan tahun akademik</label>
          <div class="row">
            <div class="col-2">
              <select class="form-select" aria-label="Default select example" name="semester">
                <option value="gasal">Gasal</option>
                <option value="genap">Genap</option>
              </select>
            </div>
            <div class="col-3">
              <input type="text" class="form-control @error('from') is-invalid @enderror" name="from"
                id="datepickerFrom" value="{{ old('from') }}">
              <div class="invalid-feedback">
                Masukan tahun akademik
              </div>
            </div>
            <div class="col-3">
              <input type="text" class="form-control @error('to') is-invalid @enderror" name="to" id="datepickerTo"
                value="{{ old('to') }}">
              <div class="invalid-feedback">
                Masukan tahun akademik
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <li class="text-body-secondary">
            Ukuran file maksimal 2MB
          </li>
          <div class="col">
            <div class="form-group inputDnD">
              <label class="form-label" for="inputFile">Foto KTM</label>
              <input type="file" class="form-control-file text-primary font-weight-bold text-dark" id="inputFile"
                accept=".pdf" onchange="readUrl(this)" data-title="Drag and drop a file" name="ktm">
            </div>
            @error('ktm')
            <div class="alert alert-danger mt-2" role="alert">
              <strong>Perhatian!</strong> silahkan upload dokumen terlebih dahulu
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <div class="col">
            <div class="form-group inputDnD">
              <label class="form-label" for="inputFile">Surat bebas tanggungan fakultas</label>
              <input type="file" class="form-control-file text-primary font-weight-bold text-dark" id="inputFile"
                accept="application/pdf" onchange="readUrl(this)" data-title="Drag and drop a file" name="free_fak">
            </div>
            @error('free_fak')
            <div class="alert alert-danger mt-2" role="alert">
              <strong>Perhatian!</strong> silahkan upload dokumen terlebih dahulu
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <div class="col">
            <div class="form-group inputDnD">
              <label class="form-label" for="inputFile">Surat bebas perpustakaan</label>
              <input type="file" class="form-control-file text-primary font-weight-bold text-dark" id="inputFile"
                accept="application/pdf" onchange="readUrl(this)" data-title="Drag and drop a file" name="free_per">
            </div>
            @error('free_per')
            <div class="alert alert-danger mt-2" role="alert">
              <strong>Perhatian!</strong> silahkan upload dokumen terlebih dahulu
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <div class="col">
            <div class="form-group inputDnD">
              <label class="form-label" for="inputFile">Surat pernyataan orang tua</label>
              <input type="file" class="form-control-file text-primary font-weight-bol text-dark" id="inputFile"
                accept="application/pdf" onchange="readUrl(this)" data-title="Drag and drop a file" name="free_ortu">
            </div>
            @error('free_ortu')
            <div class="alert alert-danger mt-2" role="alert">
              <strong>Perhatian!</strong> silahkan upload dokumen terlebih dahulu
            </div>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <div class="col">
            <div class="form-group inputDnD">
              <label class="form-label" for="inputFile">Tanda tangan digital</label>
              <input type="file" class="form-control-file text-primary font-weight-bol text-dark" id="inputFile"
                accept="image/png" onchange="readUrl(this)" data-title="Drag and drop a file" name="ttd">
            </div>
            @error('ttd')
            <div class="alert alert-danger mt-2" role="alert">
              <strong>Perhatian!</strong> foto dalam format .png dan landscape
            </div>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<!-- <a href="{{ asset('/storage/fakultas/1701585286.pdf') }}" target="_blank">Tes file</a> -->
<script src="{{ asset('js/app.js') }}">
</script>
@endsection