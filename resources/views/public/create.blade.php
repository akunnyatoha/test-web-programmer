<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{$title}}</title>
  </head>
  <body style="background-image:url('/assets/guest/img/bg.jpg'); background-repeat: no-repeat; background-size:cover;">
    <div class="content vh-100 d-flex justify-content-center align-items-center">
        <div class="card" style="width:22rem;">
            <div class="text-center mb-3">
                <span class="fs-3 fw-bold">Pesan Tiket Konser</span>
            </div>
            <div class="container">
                <form action="/pemesanan/create" method="post">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" type="text" value="{{$code}}" name="kode_tiket" id="kode_tiket" hidden>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="nama" name="name_pemesan" id="name_pemesan" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" placeholder="email" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="no telepone" name="no_telepone" id="no_telepone" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="kelas_tiket">
                            <option selected>------Pilih Kelas------</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Pesan</button>
                        <a class="btn btn-primary" href="/login">Login Admin</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>