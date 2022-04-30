@extends('layouts.master')

@section('content-header')
    Daftar Mata Pelajaran
@endsection

@section('content')
    <div class="card card-outline card-primary">
        {{-- <div class="card-header">
            <h3 class="card-title">Daftar Mata Pelajaran</h3>
        </div> --}}

        <div class="card-body">
            {{-- <button class="btn btn-primary mb-3">Tambah Mata Pelajaran</button> --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelompok</th>
                        <th>Jurusan</th>
                        {{-- <th style="width: 40px">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mataPelajaran as $mapel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mapel->mata_pelajaran }}</td>
                            <td>{{ $mapel->kategori }}</td>
                            <td class="text-uppercase">{{ $mapel->jurusan }}</td>
                            {{-- <td><a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div> --}}
    </div>
@endsection
