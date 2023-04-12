@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <form action="/master-pemesan/{{$data->id}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$data->kode_tiket}}" name="kode_tiket" id="kode_tiket" hidden>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$data->name_pemesan}}" name="name_pemesan" id="name_pemesan" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" value="{{$data->email}}" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$data->no_telepone}}" name="no_telepone" id="no_telepone" required>
            </div>
            <div class="mb-3">
                <select class="form-control" aria-label="Default select example" name="kelas_tiket" id="kelas_tiket">
                    <option selected>Open this select menu</option>
                    <option value="1" <?php if($data->kelas_tiket == '1') {echo'selected';} ?> >1</option>
                    <option value="2" <?php if($data->kelas_tiket == '2') {echo'selected';} ?>>2</option>
                    <option value="3" <?php if($data->kelas_tiket == '3') {echo'selected';} ?>>3</option>
                  </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a class="btn btn-primary" href="/master-pemesan">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection