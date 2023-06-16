@extends('layout.main')

@section('container')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<style>
    body{
        background-image: url('images/background1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:cover;
        font-family: "Roboto", sans-serif;
    }
    .btn{
            background: #2a2a72;
            color: white;
        }
    .btn:hover{
            background: #22225c;
            color: rgb(228, 228, 228);
        }
</style>

<h2>DATA PENGADUAN</h2>

<div class="table-responsive">
    <table class="table table-striped table-sm table-bordered">
      <thead style="text-align: center">
        <tr>
          <th scope="col" style="padding: 7px">No.</th>
          <th scope="col" style="padding: 7px">Penjelasan</th>
          <th scope="col" style="padding: 7px">Kejadian yang ingin dilaporkan</th>
          <th scope="col" style="padding: 7px">Waktu kejadian</th>
          <th scope="col" style="padding: 7px">Nama terlapor</th>
          <th scope="col" style="padding: 7px">Nama pihak lain yang terlibat</th>
          <th scope="col" style="padding: 7px">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($datas as $data)
            
        <tr>

          <td style="text-align: center">{{ $loop->iteration }}</td>
          <td>{{ $data->penjelasan }}</td>
          <td>{{ $data->laporan_kejadian }}</td>
          <td>{{ $data->waktu_kejadian }}</td>
          <td>{{ $data->nama_terlapor }}</td>
          <td>{{ $data->nama_pihak_lain }}</td>
          <td>
            <a href="{{ route('dashid', $data->id) }}" class="btn btn-info"><i class="bi bi-file-earmark"></i> Detail</span></a>
          </td>

        </tr>

        @endforeach

      </tbody>
    </table>
  
</div>
  
  @endsection