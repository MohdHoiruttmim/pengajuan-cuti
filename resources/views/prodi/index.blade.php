@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<div class="container my-5">
  <!-- menampilkan pengajuan permohonan cuti -->
  <div class="row">
    <div class="col">
      <div class="card shadow-sm bg-body-tertiary border-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="h6 font-semibold text-muted text-sm d-block mb-2">Pengajuan Permohonan Cuti</span>
              <span class="h4 mb-0 text-muted">{{ $pengajuan }}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape text-white text-lg rounded-circle p-3" style="background: #FF579A;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path
                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm bg-body-tertiary border-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <span class="h6 font-semibold text-muted text-sm d-block mb-2">Pengajuan diproses</span>
              <span class="h4 mb-0 text-muted">{{ $diproses }}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape text-white text-lg rounded-circle p-3" style="background: #FF579A;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path
                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection