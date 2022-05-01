@extends('layouts.master')

@section('content-header')
    Tambah Siswa
@endsection

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form action="{{ route('siswa.update', ['siswa' => $siswa->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama') ?? $siswa->nama }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal Lahir</label>
                    <div class="form-inline">
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror mr-4"
                            id="tempat_lahir" name="tempat_lahir"
                            value="{{ old('tempat_lahir') ?? $siswa->tempat_lahir }}">
                        @error('tempat_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir') ?? $siswa->tanggal_lahir }}">
                        @error('tanggal_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki_laki" value="L"
                                {{ (old('jenis_kelamin') ?? $siswa->jenis_kelamin) == 'L' ? 'checked' : '' }}>
                            <label for="laki_laki" class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P"
                                {{ (old('jenis_kelamin') ?? $siswa->jenis_kelamin) == 'P' ? 'checked' : '' }}>
                            <label for="perempuan" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nis">Nomor Induk Siswa (Nis)</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis"
                        value="{{ old('nis') ?? $siswa->nis }}">
                    @error('nis')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nisn">Nomor Induk Siswa Nasional (Nisn)</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn"
                        value="{{ old('nisn') ?? $siswa->nisn }}">
                    @error('nisn')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="ipa" {{ (old('jurusan') ?? $siswa->jurusan) == 'ipa' ? 'selected' : '' }}>IPA
                        </option>
                        <option value="ips" {{ (old('jurusan') ?? $siswa->jurusan) == 'ips' ? 'selected' : '' }}>IPS
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_wali">Nama Orang Tua / Wali</label>
                    <input type="text" class="form-control @error('nama_wali') is-invalid @enderror" id="nama_wali"
                        name="nama_wali" value="{{ old('nama_wali') ?? $siswa->nama_wali }}">
                    @error('nama_wali')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <input type="text" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk"
                        name="tahun_masuk" value="{{ old('tahun_masuk') ?? $siswa->tahun_masuk }}">
                    @error('tahun_masuk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus</label>
                    <input type="text" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus"
                        name="tahun_lulus" value="{{ old('tahun_lulus') ?? $siswa->tahun_lulus }}">
                    @error('tahun_lulus')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
