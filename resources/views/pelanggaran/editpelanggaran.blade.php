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
    <title>Data Guru</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Guru</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                      
                        <form action="/insertpelanggaran" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Bentuk Pelanggaran</label>
                              <textarea class="form-control" id="floatingTextarea" name="bentuk_pelanggaran" placeholder="Bentuk Pelanggaran"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Jenis Pelanggaran</label>
                              <select class="form-select" required="require" name="jenis_pelanggaran">
                                <option selected>Pilih jenis pelanggaran</option>
                                <option value="Keterlambatan">Keterlambatan</option>
                                <option value="Kehadiran">Kehadiran</option>
                                <option value="Pakaian Seragam">Pakaian Seragam</option>
                                <option value="Kepribadian">Kepribadian</option>
                                <option value="Merokok">Merokok</option>
                                <option value="Pornografi">Pornografi</option>
                                <option value="Senjata Tajam">Senjata Tajam</option>
                                <option value="Narkoba & Minuman Keras">Narkoba & Minuman Keras</option>
                                <option value="Berkelahi / Tawuran">Berkelahi / Tawuran</option>
                                <option value="Intimidasi / Ancaman Kekerasan">Intimidasi / Ancaman Kekerasan</option>
                            </select>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Sanksi</label>
                              <textarea class="form-control" placeholder="Sanksi" id="floatingTextarea" name="sanksi"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Poin</label>
                              <input type="number" name="poin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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