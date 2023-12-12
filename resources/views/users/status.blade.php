@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

@if ($user->pengajuan->count() > 1)
<?php $index = $user->pengajuan->count() - 1 ?>
@else
<?php $index = 0 ?>
@endif

@if ($user->pengajuan[$index]->status == 'Proses' || $user->pengajuan[$index]->status == 'Teruskan')
<div class="row">
  <div class="say mt-4">
    <h3 class="text-center">Mohon menunggu 👌</h3>
    <h3 class="text-center text-body-secondary">
      Permintaan anda
      <small class="text-body-tertiary">sedang kami {{ $user->pengajuan[$index]->status }}</small>
    </h3>
  </div>
  <dotlottie-player class="mx-auto" src="https://lottie.host/18579bf6-e98a-4d0e-a7a3-b2f0c16e9f8e/4KeTAxCpCS.json"
    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
  @if($user->pengajuan[$index]->pembayaran != null)
  <div class="say-down">
    @if($user->pengajuan[$index]->pembayaran->bukti_pembayaran == null)
    <h3 class="text-center">{{ $user->pengajuan[$index]->pembayaran->kode_pembayaran }}</h3>
    <p class="text-center">Silahkan lakukan pembayaran pada kode di atas, <span class="btn btn-primary"
        data-bs-toggle="modal" data-bs-target="#uploadBukti">Upload Bukti
        Pembayaran</span></p>
    @else
    <p class="text-center">Silahkan tunggu hingga pembayaran anda di verifikasi dan pengecekan berkas selesai</p>
    @endif
    <p class="lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
  @else
  <div class="say-down">
    @if($user->pengajuan[$index]->surat_permohonan != null)
    <h3 class="text-center">
      <a href="{{ $user->pengajuan[$index] }}" class="text-decoration-none text-dark" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
          class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
          <path
            d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114m2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
          <path fill-rule="evenodd"
            d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
        </svg> Surat permohonan BSS
      </a>
    </h3>
    <p class="text-center">Surat permohanan dapat diunduh pada link di atas</p>
    @endif
    <p class="lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
  @endif
</div>
@elseif ($user->pengajuan[$index]->status == 'Diterima')
<div class="row">
  <div class="say mt-4">
    <h3 class="text-center">Pengajuan anda diterima🎉</h3>
    <h3 class="text-center text-body-secondary">
      Terima kasih,
      <small class="text-body-tertiary">telah menghubungi kami</small>
    </h3>
  </div>
  <dotlottie-player class="mx-auto" src="https://lottie.host/3fb623e1-8c20-444b-9528-13202ed328d1/wjLxk0GnFz.json"
    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
  <div class="say-down">
    <form class="text-center mb-2" action="{{ route('surat-keterangan', $user->pengajuan[$index]->id) }}" method="POST"
      target="_blank">
      @csrf
      <button type="submit" class="btn btn-primary">Surat Keterangan BSS</button>
    </form>
    <p class="text-center">Surat keterangan berhenti studi sementara dapat diunduh pada link di atas</p>
    <p class="lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
</div>
@else
<div class="row">
  <div class="say mt-4">
    <h3 class="text-center">Mohon maaf, pengajuan anda ditolak 😔</h3>
    <h3 class="text-center text-body-secondary">
      Terima kasih,
      <small class="text-body-tertiary">telah menghubungi kami</small>
    </h3>
  </div>
  <dotlottie-player class="mx-auto" src="https://lottie.host/a64a2a4a-74c9-4da7-8b8c-7072cbe0c2f9/UFyeG7fnCT.json"
    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
  <div class="say-down">
    <p class="text-center"> Catatan: {{ $user->pengajuan[$index]->keterangan_ditolak }}</p>
    <p class=" lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
</div>
@endif
<button style="display: none;"><a href="{{ asset('storage/pdf/1701394725.pdf') }}" target="_blank">tets</a></button>

<!-- Modal -->
@if ($user->pengajuan[$index]->pembayaran != null)
<div class="modal fade" id="uploadBukti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('confirm') }}" method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi pembayaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @csrf
          <input type="text" value="{{ $user->pengajuan[$index]->pembayaran->id }}" class="visually-hidden" name="id">
          <div class="form-group inputDnD">
            <label class="form-label" for="inputFile">Sertakan bukti pembayaran</label>
            <input type="file" class="form-control-file text-primary font-weight-bol text-dark" id="inputFile"
              accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file" name="confirm">
          </div>
          @error('confirm')
          <div class="alert alert-danger mt-2" role="alert">
            <strong>Perhatian!</strong> foto dalam format gambar
          </div>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endif
<script src="{{ asset('js/app.js') }}"></script>
@endsection