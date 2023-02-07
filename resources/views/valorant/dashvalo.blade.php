<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Pemain tytyd </h1>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <div class="container">
        <button type="button" class="btn btn-info"><a href="/dashboard/tdvalo">tambah data</a></button>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <table class="table table-sm">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Username</th>
                      <th scope="col">Profile</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Rank</th>
                      <th scope="col">Deksripsi</th>
                      <th scope="col">Dibuat</th>
                      <th scope="col">Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($valo as $row)
                    <tr>
                        <th scope="row">{{ $no++}}</th>
                        <td>{{ $row->username }}</td>
                        <td>
                          <img src="{{ asset('profilevalorant/'.$row->foto) }}" alt="" style="width: 40px">
                        </td>
                        <td>{{ $row->jeniskelamin}}</td>
                        <td>{{ $row->rank}}</td>
                        <td>{{ $row->deskripsi}}</td>
                        <td>{{ $row->created_at-> diffForHumans()}}</td>
                        {{-- format('D N Y') --}}
                        <td>
                          <a href="/dashboard/editvalo/{{ $row->id }}" class="btn btn-success">edit</a>
                          <a href="/dashboard/deletevalo/{{ $row->id }}" type="button" class="btn btn-danger">delete</a>
                        </td>
                      </tr>    
                    @endforeach
                    
                  </tbody>
            </table>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>