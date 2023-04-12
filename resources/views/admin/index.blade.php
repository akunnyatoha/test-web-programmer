@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Tiket</th>
                        <th>Nama Pemesan</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Kelas Tiket</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item['kode_tiket'] }}</td>
                            <td>{{ $item['name_pemesan'] }}</td>
                            <td>{{ $item['no_telepone'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ $item['kelas_tiket'] }}</td>
                            <td>
                                <a href="/master-pemesan/{{$item['id']}}" class="btn btn-primary">Edit</a>
                                <a href="/master-pemesan/delete/{{$item['id']}}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection