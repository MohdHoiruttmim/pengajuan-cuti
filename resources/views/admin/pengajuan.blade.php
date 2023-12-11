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
            <th scope="col">Mahasiswa</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Tangal Pengajuan</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengajuan as $p)
          <tr>
            <td scope="row">{{ $p->mahasiswa->nama }}</td>
            <td>{{ $p->mahasiswa->fakultas->nama }}</td>
            <td>{{ $p->mahasiswa->prodi->nama }}</td>
            <td>{{ $p->created_at }}</td>
            <td>{{ $p->status }}</td>
            <td class="d-flex">
              @if ($p->pembayaran != null && $p->pembayaran->status == 'Lunas')
              <form action="{{ route('surat-keterangan', $p->id) }}" method="POST" target="_blank">
                @csrf
                <button type="submit" class="btn btn-sm text-white me-2" style="background: #00cc88;" target="_blank"
                  onclick="return confirm('konfirmasi pengajuan')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                    <path
                      d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                  </svg>
                </button>
              </form>
              @endif
              <a href="{{ route('admin-pengajuan-detail', $p->id) }}" class="btn btn-sm text-white"
                style="background: #FF8C00;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                </svg>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</main>
@endsection