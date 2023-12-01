@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

<div class="row">
  <div class="say mt-4">
    <h3 class="text-center">Mohon menunggu 👌</h3>
    <h3 class="text-center text-body-secondary">
      Permintaan anda
      <small class="text-body-tertiary">sedang kami proses</small>
    </h3>
  </div>
  <dotlottie-player class="mx-auto" src="https://lottie.host/18579bf6-e98a-4d0e-a7a3-b2f0c16e9f8e/4KeTAxCpCS.json"
    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
  <div class="say-down">
    <p class="lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
</div>
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
    <p class="lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
</div>
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
    <p class="lead text-center">Jika ada pertanyaan silahkan hubungi: </p>
  </div>
</div>

<button style="display: none;"><a href="{{ asset('storage/pdf/1701394725.pdf') }}" target="_blank">tets</a></button>
@endsection