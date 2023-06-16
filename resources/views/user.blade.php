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
    /* .btn{
            background: #2a2a72;
            color: white;
        }
    .btn:hover{
            background: #22225c;
            color: rgb(228, 228, 228);
        } */
</style>

<h2>LIST USER</h2>

<a href="user/add">
  <button type="button" class="btn btn-success" style="width: 100px;">ADD USER</button>
</a>
<br>
<br>

<div class="table-responsive">
    <table class="table table-striped table-sm table-bordered">
      <thead style="text-align: center">
        <tr>
          <th scope="col" style="padding: 7px; width: 50px">No.</th>
          <th scope="col" style="padding: 7px; width: 150px">User</th>
          <th scope="col" style="padding: 7px">Email</th>
          <th scope="col" style="padding: 7px">jabatan</th>
          <th scope="col" style="padding: 7px">Status</th>
          <th scope="col" style="padding: 7px; width: 180px">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($users as $user)
            
        <tr>

          <td style="text-align: center">{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->jabatan }}</td>
          <td>
            @if ( $user->status == '1' )
            {{ "Aktif" }}
            @else
            {{ "Tidak Aktif" }}            
            @endif
          </td>
          <td>  
              <a href="{{ route('edituser'), $user->id }}">
                <button type="button" class="btn btn-success" style="width: 80px;">Edit</button>
              </a>
              
              <a href="{{ route('hapususer'), $user->id }}">
                <button type="button" class="btn btn-danger" style="width: 80px;" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
              </a>
          </td>

        </tr>

        @endforeach
      </tbody>
    </table>
  
  </div>
  
  @endsection

