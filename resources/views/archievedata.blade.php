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

    
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-sm-8">
                        <h2>Data Archieve</h2>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="table1">
                        
                        <tr>
                            <th>Status</th>
                            <th>
                                @if ( $data->status == '1' )
                                {{ "Aktif" }}
                                @else
                                {{ "Tidak Aktif" }}            
                                @endif
                            </th>
                        </tr>    
                        <tr>
                            <th>Penjelasan singkat</th>
                            <th>{{ $data->penjelasan }}</th>
                        </tr>
                        <tr>
                            <th>Kejadian yang ingin dilaporkan</th>
                            <th>{{ $data->laporan_kejadian }}</th>
                        </tr>
                        <tr>
                            <th>Waktu kejadian</th>
                            <th>{{ $data->waktu_kejadian }}</th>
                        </tr>
                        <tr>
                            <th>Lokasi kejadian</th>
                            <th>{{ $data->lokasi_kejadian }}</th>
                        </tr>
                        <tr>
                            <th>nama terlapor</th>
                            <th>{{ $data->nama_terlapor }}</th>
                        </tr>
                        <tr>
                            <th>Status terlapor dalam perusahaan</th>
                            <th>{{ $data->status_terlapor }}</th>
                        </tr>
                        <tr>
                            <th>Nama pihak lain yang terlibat</th>
                            <th>{{ $data->nama_pihak_lain }}</th>
                        </tr>
                        <tr>
                            <th>Status pihak lain dalam perusahaan</th>
                            <th>{{ $data->status_pihak_lain }}</th>
                        </tr>
                        <tr>
                            <th>Saksi (jika ada)</th>
                            <th>{{ $data->saksi }}</th>
                        </tr>
                        <tr>
                            <th>Status saksi dalam perusahaan</th>
                            <th>{{ $data->status_saksi }}</th>
                        </tr>
                        <tr>
                            <th>Kronologi Perusahaan</th>
                            <th>{{ $data->kronologi }}</th>
                        </tr>
                        <tr>
                            <th>Perkiraan kerugian materiil</th>
                            <th>{{ $data->kerugian }}</th>
                        </tr>
                        <tr>
                            <th>Informasi tambahan</th>
                            <th>{{ $data->informasi }}</th>
                        </tr>                
                    </table>
                </div>

                <br>
                <a href="{{ route('archieve') }}" style="text-decoration: none"><i class="bi bi-arrow-left"></i> Go Back</a>

            </div>

            <div class="col-md-4">
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="table2">
                        <tr>
                            <th>Dokumentasi</th>
                        </tr>
                        <tr>
                            <th>
                                <img src="{{ asset('storage/app/public/' . $data->dokumentasi) }}" alt="{{ $data->dokumentasi }}" class="img-fluid mt-3">
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection