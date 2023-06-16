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

<div class="containter">
    <div class="row">
        <div class="col-lg-7">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="post" action="{{ route('adduser') }}" style="padding: 40px;" enctype="form-data">
                
                <h2>TAMBAH USER</h2>

                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama User</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" required>
                    @error('jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                      <option value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        {{-- <div class="col-lg-1">
        </div> --}}
        <div class="col-lg-4">
            {{--     --}}
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_9wjm14ni.json"  background="transparent"  speed="1"  style="width: 450px; height: 450px; position: fixed; -webkit-transform: scaleX(-1); transform: scaleX(-1);"  loop  autoplay ></lottie-player>
        </div>
    </div>
</div>    
@endsection
