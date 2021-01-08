@extends('layouts.base')
@section('title', 'Data Karyawan')
@section('title-2', 'Data Karyawan')
@section('title-3', 'DataKar')
@section('content')

    <div class="container">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover
                    </h6>
                    --}}
                    <a href="{{ route('workers.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
                        Data</a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($workers as $key => $worker)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $worker->nama }}</td>
                                    <td>{{ $worker->jenkel }}</td>
                                    <td>{{ $worker->tempat_lahir }}</td>
                                    <td>{{ $worker->tanggal_lahir }}</td>
                                    <td>{{ $worker->position_id }}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="#" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scriptdata')
    <script>
        $(document).ready(function() {
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover

        });

    </script>
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
@endsection
