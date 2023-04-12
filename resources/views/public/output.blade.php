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
        <div class="card" style="width:50rem; height:20rem; border-radius:20px">
            <div class=" mt-4 mb-2 text-center">
                <span class="fs-4 fw-bold">Tiket Konser Infant Annihilator</span>
            </div>
            <div class="row mt-5 mb-2">
                <div class="col text-center">
                    <span class="fs-5">{{$data['kode_tiket']}}</span> <br>
                </div>
                <div class="col text-center">
                    <span class="fs-5">{{$data['name_pemesan']}}</span> <br>
                </div>
                <div class="col text-center">
                    <span class="fs-5">{{$data['email']}}</span> <br>
                </div>
                <div class="col text-center">
                    <span class="fs-5">{{$data['no_telepone']}}</span> <br>
                </div>
            </div>
            <div class="col mt-5 text-center">
                <span class="fs-2 fw-bold">Kelas Tiket :{{$data['kelas_tiket']}}</span>
            </div>
        </div>
        <div>
            <a href="/pemesanan/create" class="btn btn-primary">pesan lagi</a>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>