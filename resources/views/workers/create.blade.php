@extends('layouts.base')
@section('title', 'Data Karyawan')
@section('title-2', 'Data Karyawan')
@section('title-3', 'DataKar')
@section('content')

    <div class="container">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="{{ route('workers.index') }}" class="btn btn-warning"><i class="fas fa-undo-alt"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('workers.create') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenkel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="jenkel">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tempat_lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanngal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tanggal_lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position_id" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="custom-select">
                                    <option selected>Pilih Jabatan</option>
                                    @foreach ($datas as $item)
                                        <option value="{{ $item->id }}" name="position_id" id="position_id">
                                            {{ $item->jabatan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type=" submit" class="btn btn-primary">Submit</button>
                    </form>
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
