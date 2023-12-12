@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')

<main class="m-5">
  <div class="card bg-body-tertiary border">
    <legend class="card-header text-body-secondary">Data Pemohon</legend>
    <form action="{{ route('prodi-pengajuan-upload') }}" class="my-3 mx-4" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <input type="text" name="id" id="" value="{{ $pengajuan->id }}" class="visually-hidden">
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder=""
              value="{{ $pengajuan->mahasiswa->nama }}">
            <label for="floatingEmptyPlaintextInput">Nama Mahasiswa</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder=""
              value="{{ $pengajuan->mahasiswa->nim }}">
            <label for="floatingPlaintextInput">Nomor Induk Mahasiswa</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder=""
              value="{{ $pengajuan->mahasiswa->fakultas->nama }}">
            <label for="floatingEmptyPlaintextInput">Fakultas</label>
          </div>
        </div>
        <div class="col">
          <div class="form-floating mb-3">
            <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder=""
              value="{{ $pengajuan->mahasiswa->prodi->nama }}">
            <label for="floatingPlaintextInput">Program Studi</label>
          </div>
        </div>
      </div>
      <div class="form-floating mb-3">
        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder=""
          value="{{ $pengajuan->mahasiswa->alamat }}">
        <label for="floatingPlaintextInput">Alamat Rumah</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder=""
          value="{{ $pengajuan->keterangan }}">
        <label for="floatingPlaintextInput">Mengajukan permohanan Berhenti Studi Sementara (BSS) dengan alasan</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder=""
          value="{{ Str::title($pengajuan->semester).' '.$pengajuan->tahun }}">
        <label for="floatingPlaintextInput">Untuk semester dan tahun akademik</label>
      </div>
      <div class="form-floating mb-5">
        <ul class="form-control-plaintext ms-3" id="floatingPlaintextInput">
          <li><a href="{{ asset($pengajuan->ktm) }}" class="text-decoration-none" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                <path
                  d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                <path fill-rule="evenodd"
                  d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
              </svg> Kartu Tanda Mahasiswa</a></li>
          <li><a href="{{ asset($pengajuan->free_fak) }}" class="text-decoration-none" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                <path
                  d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                <path fill-rule="evenodd"
                  d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
              </svg> Surat bebas tanggungan fakultas</a></li>
          <li><a href="{{ asset($pengajuan->free_per) }}" class="text-decoration-none" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                <path
                  d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                <path fill-rule="evenodd"
                  d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
              </svg> Surat bebas perpustakaan</a></li>
          <li><a href="{{ $pengajuan->free_ortu }}" class="text-decoration-none" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                <path
                  d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                <path fill-rule="evenodd"
                  d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
              </svg> Surat pernyataan orang tua</a></li>
        </ul>
        <label for="floatingPlaintextInput">Berikut dokumen yang terlampir</label>
      </div>
      @if ($pengajuan->status == 'Ditolak')
      <div class="mb-3 pt-3">
        <div class="col">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
              style="height: 100px" disabled>{{ $pengajuan->keterangan_ditolak }}</textarea>
            <label for="floatingTextarea2">Keterangan</label>
          </div>
        </div>
      </div>
      @elseif ($pengajuan->status == 'Diterima')
      <div class="mb-3 pt-3">
        <div class="col">
          <a class="text-center mb-2 btn btn-primary" href="/keterangan/{{ $pengajuan->id }}" method="POST"
            target="_blank">
            Surat Keterangan BSS
          </a>
        </div>
      </div>
      @else
      <div class="mb-3 pt-3">
        <div class="col">
          <div class="form-group inputDnD">
            <label class="form-label" for="inputFile">Tanda tangan kepala Program Studi</label>
            <input type="file" class="form-control-file text-primary font-weight-bold text-dark" id="inputFile"
              accept="image/png" onchange="readUrl(this)" data-title="Drag and drop a file" name="ttd">
          </div>
          @error('ttd')
          <div class="alert alert-danger mt-2" role="alert">
            <strong>Perhatian!</strong> silahkan upload dokumen terlebih dahulu
          </div>
          @enderror
        </div>
      </div>
      <div class="confirm d-flex justify-content-center">
        <input type="submit" class="btn btn-primary m-2" value="Proses Pengajuan">
        <a class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Tolak Pengajuan</a>
      </div>
      @endif
    </form>
  </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Keterangan Penolakan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('tolak', $pengajuan->id) }}" method="POST">
        @csrf
        <div class="modal-body">
          <textarea name="keterangan" id="keterangan" class="form-control" rows="3"></textarea>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-danger" value="Confirm">
        </div>
      </form>
    </div>
  </div>
</div>

<script src="{{ asset('js/app.js') }}">
</script>
@endsection