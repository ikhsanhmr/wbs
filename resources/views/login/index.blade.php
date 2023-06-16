@extends('layout.main')

@section('container')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style>
  body {
    background-image: url('images/background.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;
    font-family: "Roboto", sans-serif;
  }

  .form-control{
    border-radius: 10px;
  }

  .form-control:focus {
    border-radius: 10px;
    border-color: #160000;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(0, 0, 0, 0.103);
  }

  .btn-primary {
    border-color: #16000000;
    border-radius: 15px;
    background-size: 150% auto;
    color: white;
    background-image: linear-gradient(to right, #2a2a72 0%,#4343a7 50%, #009ffd 100%); 
  }

  .btn-primary:hover {
    border-color: #00000000;
    background-image: linear-gradient(to right, #252566 0%,#3f3f9c 50%, #037abe 100%);
  }

</style>

<div class="row">
  <div class="col-9"></div>
  <div class="col">
    <img src="{{ url('images/logoplnt.png') }}" width="120" alt="plnt" style="float: right; margin: auto;
    display: block;">
    <img src="{{ url('images/akhlak.png') }}" width="120" alt="akhlak" style=" margin: auto;
    display: block;">
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="container">
  
  <div class="row">
      <div class="col-md-6">
        <p>&nbsp;</p>
        <img src="{{ url('images/wbs.png') }}" width="500" alt="logo" style=" margin: auto;
        display: block;">
      </div>

      <div class="col-md-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger  alert-dismissable fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <div class="form-signin">
    
            <form action="{{ route('login') }}" method="post">
              @csrf
              
              <h2 class="h2 mb-3 fw-normal text-center" style="margin-top: 10px; font-weight: bold;">LOGIN</h2>
          
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
                @error('email')
                  <div class="invalid-feedback">  
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              
              <button class="w-100 btn btn-lg btn-primary" type="submit">L O G I N</button>

            </form>

          </div>
      </div>

      <div class="col-md-1">
      </div>
    </div>
</div>
    
@endsection