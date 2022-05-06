@extends('layouts.master')

@section('content-header')
    Daftar Nilai Siswa
@endsection

@section('content')
    <div class="card card-outline card-primary">
        {{-- <div class="card-header">
            <h3 class="card-title">Daftar Mata Pelajaran</h3>
        </div> --}}

        <div class="card-body">
            <table class="mb-4">
                <tbody>
                    <tr>
                        <th style="width: 250px">Nama</th>
                        <td style="width: 10px">:</td>
                        <td>{{ $siswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td style="width: 10px">:</td>
                        <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Induk Siswa (NIS)</th>
                        <td style="width: 10px">:</td>
                        <td>{{ $siswa->nis }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Induk Siswa Nasional (NISN)</th>
                        <td style="width: 10px">:</td>
                        <td>{{ $siswa->nisn }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-group">
                <a href="{{ route('siswa.nilai.edit', ['siswa' => $siswa->id]) }}" class="btn btn-primary mb-3">Edit
                    Nilai</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>Mata Pelajaran (Kurikulum 2013)</th>
                        <th>Nilai Ujian Sekolah</th>
                        {{-- <th style="width: 40px" colspan="2" class="text-center">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                        $j = 1;
                        $k = 1;
                    @endphp
                    <tr>
                        <td colspan="3" class="text-bold">kelompok A</td>
                    </tr>
                    @foreach ($siswa->matapelajarans as $mapel)
                        @if ($mapel->kategori == 'A')
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $mapel->mata_pelajaran }}</td>
                                <td class="text-center text-bold">{{ $mapel->pivot->nilai }}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-bold">kelompok B</td>
                    </tr>
                    @foreach ($siswa->matapelajarans as $mapel)
                        @if ($mapel->kategori == 'B')
                            @if ($j == 4)
                                <tr>
                                    <td></td>
                                    <td colspan="2">Muatan Lokal</td>
                                </tr>
                            @endif
                            <tr>
                                <td>{{ $j++ }}</td>
                                <td>{{ $mapel->mata_pelajaran }}</td>
                                <td class="text-center text-bold">{{ $mapel->pivot->nilai }}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-bold">kelompok C</td>
                    </tr>
                    @foreach ($siswa->matapelajarans as $mapel)
                        @if ($mapel->jurusan == $siswa->jurusan && $mapel->kategori == 'C')
                            <tr>
                                <td>{{ $k++ }}</td>
                                <td>{{ $mapel->mata_pelajaran }}</td>
                                <td class="text-center text-bold">{{ $mapel->pivot->nilai }}</td>
                            </tr>
                        @endif
                    @endforeach
                    @foreach ($siswa->matapelajarans as $mapel)
                        @if ($mapel->jurusan != $siswa->jurusan && $mapel->kategori == 'LM')
                            <tr>
                                <td>{{ $k++ }}</td>
                                <td colspan="2">Pilihan Lintas Minat / Pendalaman Materi</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{{ $mapel->mata_pelajaran }}</td>
                                <td class="text-center text-bold">{{ $mapel->pivot->nilai }}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td colspan="2" class="text-center text-bold">Nilai Rata-Rata</td>
                        <td class="text-bold text-center">{{ $average }} </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
@endsection
