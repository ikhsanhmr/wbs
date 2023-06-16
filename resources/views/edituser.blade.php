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

            @foreach($user as $users)
                <form method="POST" action="/user/update">
                    
                    <h2>EDIT USER</h2>

                    @csrf
                    <input type="hidden" id="color_id" name="color_id" value="">
                    <div class="modal-body">
                        <div class="mb-3">
                        <label for="userbox" class="form-label">User</label>
                        <input type="text" class="form-control @error('userbox') is-invalid @enderror" id="userbox" name="userbox" required     >
                        @error('userbox')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                        <label for="emailbox" class="form-label">Email</label>
                        <input type="email" class="form-control @error('emailbox') is-invalid @enderror" id="emailbox" name="emailbox" required value="{{ $users->email }}">
                        @error('emailbox')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                        <label for="jabatanbox" class="form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatanbox') is-invalid @enderror" id="jabatanbox" name="jabatanbox" required value="{{ $users->jabatan }}">
                        @error('jabatanbox')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                        <label for="statusbox" class="form-label">Status</label>
                        <select type="text" class="form-control @error('statusbox') is-invalid @enderror" id="statusbox" name="statusbox" required value="{{ $users->status }}">
                            <option>Aktif</option>
                            <option>Non Aktif</option>
                        </select>
                        @error('statusbox')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                        <label for="passbox" class="form-label">Password</label>
                        <input type="password" class="form-control @error('passbox') is-invalid @enderror" id="passbox" name="passbox" required value="{{ $users->password }}">
                        @error('passbox')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    <button type="submit" class="btn">Edit</button>
                </form>
            @endforeach
                
        </div>
        {{-- <div class="col-lg-1">
        </div> --}}
        <div class="col-lg-4">
            {{--     --}}
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_9wjm14ni.json"  background="transparent"  speed="1"  style="width: 650px; height: 650px; position: fixed; -webkit-transform: scaleX(-1); transform: scaleX(-1);"  loop  autoplay ></lottie-player>
        </div>
    </div>
</div>    
@endsection
