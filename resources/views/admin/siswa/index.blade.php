@extends('layouts.master')

@section('content-header')
    Daftar Siswa
@endsection

@section('content')
    <div class="card card-outline card-primary">
        {{-- <div class="card-header">
            <h3 class="card-title">Daftar Mata Pelajaran</h3>
        </div> --}}

        <div class="card-body">
            <button class="btn btn-primary mb-3">Tambah Siswa</button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Jurusan</th>
                        <th>Nama Orang Tua/ Wali</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Lulus</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</td>
                            <td>{{ $siswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nisn }}</td>
                            <td class="text-uppercase">{{ $siswa->jurusan }}</td>
                            <td>{{ $siswa->nama_wali }}</td>
                            <td>{{ $siswa->tahun_masuk }}</td>
                            <td>{{ $siswa->tahun_lulus }}</td>
                            <td><a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash"></i></a>
                            </td>
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
