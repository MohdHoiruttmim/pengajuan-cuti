@extends('layouts.app')
@section('title', $title)

@section('navbar')
@include('partials.nav')
@endsection

@section('container')

<main class="bg-surface-secondary m-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-3">
        <div class="card shadow-sm bg-body-tertiary border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                <span class="h4 mb-0 text-muted">$750.90</span>
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
      <div class="col-3">
        <div class="card shadow-sm bg-body-tertiary border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                <span class="h4 mb-0 text-muted">$750.90</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape text-white text-lg rounded-circle p-3" style="background: #5C60F5;
                ;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-database-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223Z" />
                    <path
                      d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972" />
                    <path
                      d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972" />
                    <path
                      d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card shadow-sm bg-body-tertiary border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                <span class="h4 mb-0 text-muted">$750.90</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape text-white text-lg rounded-circle p-3" style="background: #33adff;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                    <path
                      d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card shadow-sm bg-body-tertiary border-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                <span class="h4 mb-0 text-muted">$750.90</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape text-white text-lg rounded-circle p-3" style="background: #FF8C00;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <table class="table table-hover table-nowrap mx-2 my-3 bg-body-tertiary">
        <thead class="thead-light">
          <tr>
            <th scope="col" class="text-secondary">No</th>
            <th scope="col" class="text-secondary">Mahasiswa</th>
            <th scope="col" class="text-secondary">Fakultas</th>
            <th scope="col" class="text-secondary">Program Studi</th>
            <th scope="col" class="text-secondary">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengajuan as $p)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $p->mahasiswa->nama }}</td>
            <td>{{ $p->mahasiswa->fakultas->nama }}</td>
            <td>{{ $p->mahasiswa->prodi->nama }}</td>
            <td>
              @if ($p->status != 'Selesai')
              <span class="badge badge-lg" style="width: 70%; background: #FF8C00;">{{ $p->status }}</span>
              @else
              <span class="badge badge-lg" style="width: 70%; background: #00cc88;">Selesai</span>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</main>

@endsection