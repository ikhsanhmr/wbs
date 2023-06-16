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
            background: rgb(236, 236, 236); 
        }
    .btn:hover{
            background: rgb(219, 220, 231);
        }
</style>

<div class="row">
    <div class="col-9"></div>
    <div class="col">
      <img src="{{ asset('public/images/logoplnt.png') }}" width="120" alt="plnt" style="float: right; margin: auto;
      display: block;">
      <img src="{{ asset('public/images/akhlak.png') }}" width="120" alt="akhlak" style=" margin: auto;
      display: block;">
    </div>
</div>
{{-- <p>&nbsp;</p>
<p>&nbsp;</p> --}}

<div class="containter">
    <div class="row">
        <div class="col-lg-7">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="post" action="{{ route('post') }}" style="padding: 40px;" enctype="multipart/form-data">
                
                <h2>DATA PENGADUAN</h2>

                @csrf
                <div class="mb-3">
                    <label for="penjelasan" class="form-label">Penjelasan</label>
                    <input type="text" class="form-control @error('penjelasan') is-invalid @enderror" id="penjelasan" name="penjelasan" required>
                    @error('penjelasan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="laporan_kejadian" class="form-label">Kejadian yang ingin dilaporkan</label>
                    <input type="text" class="form-control @error('laporan_kejadian') is-invalid @enderror" id="laporan_kejadian" name="laporan_kejadian" required>
                    @error('laporan_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="waktu_kejadian" class="form-label">Waktu Kejadian</label>
                    <input type="date" class="form-control @error('waktu_kejadian') is-invalid @enderror" id="waktu_kejadian" name="waktu_kejadian" required>
                    @error('waktu_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                    <input type="text" class="form-control @error('lokasi_kejadian') is-invalid @enderror" id="lokasi_kejadian" name="lokasi_kejadian" required>
                    @error('lokasi_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_terlapor" class="form-label">Nama Terlapor</label>
                    <input type="text" class="form-control @error('nama_terlapor') is-invalid @enderror" id="nama_terlapor" name="nama_terlapor" required>
                    @error('nama_terlapor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_terlapor" class="form-label">Status terlapor dalam perusahaan</label>
                    <input type="text" class="form-control @error('status_terlapor') is-invalid @enderror" id="status_terlapor" name="status_terlapor" required>
                    @error('status_terlapor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_pihak_lain" class="form-label">Nama pihak lain yang terlibat</label>
                    <input type="text" class="form-control @error('nama_pihak_lain') is-invalid @enderror" id="nama_pihak_lain" name="nama_pihak_lain" required>
                    @error('nama_pihak_lain')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_pihak_lain" class="form-label">Status pihak lain dalam perusahaan</label>
                    <input type="text" class="form-control @error('status_pihak_lain') is-invalid @enderror" id="status_pihak_lain" name="status_pihak_lain" required>
                    @error('status_pihak_lain')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="saksi" class="form-label">Saksi (Jika ada)</label>
                    <input type="text" class="form-control" id="saksi" name="saksi">
                    @error('saksi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_saksi" class="form-label">Status saksi dalam perusahaan (Jika ada saksi)</label>
                    <input type="text" class="form-control" id="status_saksi" name="status_saksi">
                    @error('status_saksi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kronologi" class="form-label">Kronologi</label>
                    <br>
                    <textarea class="form-control @error('kronologi') is-invalid @enderror" name="kronologi" id="kronologi" name="kronologi" required rows="3"></textarea>
                    @error('kronologi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kerugian" class="form-label">Perkiraan kerugian materiil</label>
                    <input type="number" class="form-control @error('kerugian') is-invalid @enderror" id="kerugian" name="kerugian" required>
                    @error('kerugian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="informasi" class="form-label">Informasi</label>
                    <input type="text" class="form-control @error('informasi') is-invalid @enderror" id="informasi" name="informasi" required>
                    @error('informasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- input gambar --}}
                <div class="mb-3">
                    <label for="dokumentasi" class="form-label">Dokumentasi</label>
                    <input type="file" class="form-control @error('dokumentasi') is-invalid @enderror" id="dokumentasi" name="dokumentasi">
                    @error('dokumentasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="captcha" class="form-label">Captcha</label>
                    <br>
                    <span>{!! captcha_img() !!}</span>
                </div>

                <div class="mb-3">
                    <input id="captcha" type="text" class="form-control" placeholder="Masukan Captcha" name="captcha">
                </div>

                <button type="submit" class="btn">Submit</button>
                @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
            </form>
        </div>
        {{-- <div class="col-lg-1">
        </div> --}}
        <div class="col-lg-4">
            {{--     --}}
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_mnxrv5wa.json"  background="transparent"  speed="1"  style="width: 450px; height: 450px; position: fixed; -webkit-transform: scaleX(-1); transform: scaleX(-1);"  loop  autoplay ></lottie-player>
        </div>
    </div>
</div>    
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endpush
