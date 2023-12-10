<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
  <title>Surat Keterangan BSS</title>
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
        <h3>SURAT KETERANGAN</h3>
        <h3 style="border-bottom: 1px solid black; width: fit-content; margin: auto;">BERHENTI STUDI SEMENTARA</h3>
        <p style="margin-top: 5px;">Nomor: 234/Un.03/B.II/KM.02.4/08/2022</p>
      </div>
      <div class="isi-surat">
        <p>Rektor Universitas Trunojoyo Madura menerangkan bahwa mahasiswa tersebut di bawah ini :</p>
        <table>
          <tr>
            <td width="200px">Nama</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->nama }}</td>
          </tr>
          <tr>
            <td>Nomor Induk Mahasiswa</td>
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
            <td>{{ $pengajuan->mahasiswa->prodi->nama }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $pengajuan->mahasiswa->alamat }}</td>
          </tr>
        </table>
        <p>Adalah benar sebagai mahasiswa Universitas Trunojoyo Madura pada semester <strong>{{
            Str::title($pengajuan->semester) }}</strong> Tahun Akademik <strong>{{ $pengajuan->tahun }}</strong>.
          Sehubungan dengan pengajuan cuti mahasiswa tersebut, maka diberikan ijin cuti/menunda
          perkuliahan pada:</p>
        <table>
          <tr>
            <td width="200px">Semester Cuti</td>
            <td>:</td>
            <td>{{ Str::title($pengajuan->semester) }}</td>
          </tr>
          <tr>
            <td>Tahun Akademik Cuti</td>
            <td>:</td>
            <td>{{ $pengajuan->tahun }}</td>
          </tr>
          <tr>
            <td>Lama Cuti</td>
            <td>:</td>
            <td>1 (satu) semseter</td>
          </tr>
          <tr>
            <td>Alasan Cuti</td>
            <td>:</td>
            <td>{{ $pengajuan->keterangan }}</td>
          </tr>
        </table>
        <p>Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya, atas perhatian dan kerjasama
          yang baik disampaikan terimakasih.</p>
      </div>
    </div>
    <div class="ttd" style="display: flex; justify-content: flex-end;">
      <div class="ttd-koprodi" style="position: relative;">
        <img src="{{ asset('/storage/ttd/1701705514.png') }}" alt="ttd-korprodi"
          style="position: absolute; left: -20px; bottom: 40px;" width="200">
        <p style="margin-bottom: 20px;">Bangkalan, {{ $pengajuan->updated_at }}</p>
        <p style="margin-top: -20px;">a.n. Rektor<br>Kepala Biro Administrasi Akademik, <br>Kemahasiswaan, dan Kerjasama
        </p>
        <p style="margin-top: 100px;">Dr. Eng. Mohammad Javier</p>
        <p style="margin-top: -20px;">NIP. 123456789</p>
      </div>
    </div>
    <div class="tembusan">
      <ul style="list-style: decimal;">
        <li>Dekan Fakultas</li>
        <li>Ketua Jurusan/Program Studi</li>
        <li>Kabag. Keungan</li>
        <li>Kabag. Akademik</li>
        <li>Arsip</li>
      </ul>
    </div>
  </div>
</body>
<script>
  window.print();
</script>

</html>