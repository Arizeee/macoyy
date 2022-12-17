<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     {{-- link boxicon --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Data Siswa</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Siswa</h1>

    <div class="container">
        <div class="row justify-content-center">
          {{-- @if ($errors->any)
              <div class="pt-3">
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
          @endif --}}
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                      
                        <form action="/insertsiswa" method="POST">
                          @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">NISN</label>
                              <input type="number" name="NISN" class="form-control" value="{{ Session::get('NISN') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                              <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" value="{{ Session::get('Nama') }}" aria-describedby="emailHelp">
                            </div>
                            {{-- <p>Kelas</p>
                            <select class="form-select mb-4" name="Kelas" aria-label="Default select example">
                              <option selected>Pilih Kelas</option>
                              <option value="X">X</option>
                              <option value="XI">XI</option>
                              <option value="XII">XII</option>
                            </select> --}}
                            <p>Jurusan</p>
                            <select class="form-select mb-4" name="Jurusan" aria-label="Default select example">
                              <option selected>Pilih Kelas dan Jurusan</option>
                              <option value="X Multimedia">X Multimedia</option>
                              <option value="XI Multimedia">XI Multimedia</option>
                              <option value="XII Multimedia">XII Multimedia</option>
                              <option value="X PPLG">X PPLG</option>
                              <option value="XI PPLG">XI PPLG</option>
                              <option value="XII PPLG">XII PPLG</option>
                              <option value="X TKJ">X TKJ</option>
                              <option value="XI TKJ">XI TKJ</option>
                              <option value="XII TKJ">XII TKJ</option>
                              <option value="X TEI">X TEI</option>
                              <option value="XI TEI">XI TEI</option>
                              <option value="XII TEI">XII TEI</option>
                              <option value="X Broadcasting">X Broadcasting</option>
                              <option value="XI Broadcasting">XI Broadcasting</option>
                              <option value="XII Broadcasting">XII Broadcasting</option>
                            </select>
                            {{-- <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
                              <input type="text" class="form-control" value="{{ Session::get('Walikelas') }}" name="Walikelas" id="exampleInputPassword1">
                            </div> --}}
                            <p>Jenis Kelamin</p>
                            <select class="form-select mb-4" name="Jeniskelamin" aria-label="Default select example">
                              <option selected>Pilih Jenis Kelamin</option>
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="Alamat" value="{{ Session::get('Alamat') }}" id="exampleInputPassword1">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>