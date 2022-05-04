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
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col">
                        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
                    </div>
                    <div class="col">
                        <form action="{{ route('siswa.search') }}" method="GET" class="form-inline">
                            @csrf
                            <input type="text" class="form-control w-75" id="search" name="search"
                                placeholder="Nama Siswa / NISN" value="{{ $search ?? '' }}">
                            <button type="submit" class="btn btn-primary w-25"><i class="fas fa-search"></i> Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Jurusan</th>
                        <th>Nama Orang Tua/ Wali</th>
                        {{-- <th>Tahun Masuk</th>
                        <th>Tahun Lulus</th> --}}
                        <th style="width: 40px" colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</td>
                            <td>{{ $siswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nisn }}</td>
                            <td class="text-uppercase">{{ $siswa->jurusan }}</td>
                            <td>{{ $siswa->nama_wali }}</td>
                            {{-- <td>{{ $siswa->tahun_masuk }}</td>
                            <td>{{ $siswa->tahun_lulus }}</td> --}}
                            <td class="btn-group" role="group">
                                <a href="{{ route('siswa.edit', ['siswa' => $siswa->id]) }}"
                                    class="btn btn-sm btn-warning mr-2" title="Edit"><i class="fas fa-pen"></i></a>
                                <a href="{{ route('siswa.nilai.index', ['siswa' => $siswa->id]) }}"
                                    class="btn btn-sm btn-success mr-2" title="Daftar Nilai"><i
                                        class="fas fa-archive"></i></a>
                                <form action="{{ route('siswa.destroy', ['siswa' => $siswa->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger " title="Hapus"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="11" class="text-center">Tidak ada data...</td>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <div class="float-right">
                {{ $siswas->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection
