<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA 1 Wonosari</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-bold" href="#">
                <img src="{{ asset('img/Logo_Kemendikbud.svg') }}" width="30" height="30"
                    class="d-inline-block align-top mr-3" alt="">
                SMAN 1 WONOSARI
            </a>
        </div>
    </nav>
    {{-- end of navbar --}}
    <div class="container">
        {{-- <div class="row mt-3 justify-content-center">
            <div class="col-10 p-0">

                <form action="{{ route('pengumuman.index') }}" method="GET">
                    @csrf
                    <input type="text" class="form-control" id="nisn" name="nisn"
                        placeholder="Masukkan 10 digit NISN anda" value="{{ $nisn ?? '' }}">
            </div>
            <div class="col-1 p-0">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div> --}}
        <div class="card mt-4">
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
                <div class="text-center">
                    <h6>Selamat Anda dinyatakan</h6>
                    <h1 class="font-weight-bolder">LULUS</h1>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Daftar Nilai</h3>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
