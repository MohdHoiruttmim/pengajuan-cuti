<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
  <title>Surat Permohonan</title>
</head>

<body>
  <div class="container">
    <div class="kopsurat"
      style="display: flex; align-items: center; justify-content: center; border-bottom: 1px solid black;">
      <img src="{{ asset('images/utm.png') }}" alt="" width="150" height="150">
      <div class="heading" style="text-align: center;">
        <h4 style="margin-top: 20px;">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</h4>
        <h4 style="margin-top: -20px;">UNIVERSITAS TRUNOJOYO MADURA</h4>
        <h4 style="margin-top: -20px;">FAKULTAS TEKNIK</h4>
        <h4 style="margin-top: -20px;">Jl. Raya Telang, Kamal - Bangkalan, Jawa Timur 69162</h4>
        <h4 style="margin-top: -20px;">Telp. (031) 309 4000 Fax. (031) 309 4000</h4>
      </div>
    </div>
    <div class="isi">
      <div class="judul" style="text-align: center;">
        <h4 style="margin-top: 20px;">SURAT PERMOHONAN</h4>
        <h4 style="margin-top: -20px;">BERHENTI STUDI SEMENTARA (BSS)</h4>
      </div>
      <div class="isi-surat" style="margin-top: 20px;">
        <p>Kepada Yth.</p>
        <p style="margin-top: -15px;">Kepala BAAKPSI</p>
        <p style="margin-top: -15px;">Universitas Trunojoyo Madura</p>
        <p style="margin-top: -15px;">Di Bangklan</p>
        <p>Dengan ini saya :</p>
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->nama }}</td>
          </tr>
          <tr>
            <td>NIM</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->nim }}</td>
          </tr>
          <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->fakultas->nama }}</td>
          </tr>
          <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->prodi->nama}}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->alamat }}</td>
          </tr>
        </table>
        <p style="text-indent: 50px;">Dengan ini mengajukan permohonan berhenti studi sementara (BSS) pada
          semester
          <strong>{{ Str::title($pengajuan->semester) }}</strong> tahun akademik <strong>{{ $pengajuan->tahun
            }}</strong>
          dikarenakan <strong>{{ $pengajuan->keterangan }}</strong>
        </p>
        <p style="text-indent: 50px;">Demikian surat permohonan ini saya buat dengan sebenarnya. Atas perhatian
          dan
          kebijaksanaan Bapak/Ibu, saya ucapkan terima kasih.</p>
      </div>
    </div>
    <div class="ttd" style="display: flex; justify-content: flex-end; margin-top: 50px;">
      <div class="ttd1" style="text-align: center; margin-right: 100px; position: relative;">
        <img src="{{ asset($pengajuan->ttd) }}" alt="ttd-korprodi"
          style="position: absolute; left: -20px; bottom: 40px;" width="200">
        <p style="margin-bottom: 100px; visibility: hidden;">Bangkalan, 10/10/2023</p>
        <p style="margin-top: -20px;">Yang Mengajukan</p>
        <p style="margin-top: 100px;">Mohammad Javier</p>
        <p style="margin-top: -20px;">2102001172</p>
      </div>
      <div class="ttd-koprodi" style="position: relative;">
        <img src="{{ asset($pengajuan->ttd_prodi) }}" alt="ttd-korprodi"
          style="position: absolute; left: -20px; bottom: 40px;" width="200">
        <p style="margin-bottom: 100px;">Bangkalan, {{ $pengajuan->created_at }}</p>
        <p style="margin-top: -20px;">Kaprodi Teknik Informatika</p>
        <p style="margin-top: 100px;">Dr. Eng. Mohammad Javier</p>
        <p style="margin-top: -20px;">NIP. 123456789</p>
      </div>
    </div>
</body>
<script>
  // windows print and save it
  window.print();
</script>

</html>