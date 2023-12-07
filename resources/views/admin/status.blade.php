@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')
<main class="m-5">
  <div class="row">
    <div class="col">
      <table class="table table-striped shadow-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Mahasiswa</th>
            <th scope="col">Tanggal dibuat</th>
            <th scope="col">Kode Pembayaran</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pembayaran as $p)
          <tr>
            <th scope="row"> 1 </th>
            <td scope="row"> {{ $p->pengajuan->mahasiswa->nama }} </td>
            <td> {{ $p->created_at }} </td>
            <td> {{ $p->kode_pembayaran }} </td>
            <td> {{ $p->status }} </td>
            <td>
              <a href="#" class="btn btn-sm text-white" style="background: #00cc88;" data-bs-toggle="modal"
                data-bs-target="#modal{{ $p->id }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
              </a>
              <!-- Modal -->
              <div class="modal fade" id="modal{{ $p->id }}" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      @if($p->bukti_pembayaran == null)
                      <strong>Belum ada pembayaran</strong>
                      @else
                      <img src="{{ $p->bukti_pembayaran }}" alt="" class="img-thumbnail">
                      @endif
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</main>
@endsection