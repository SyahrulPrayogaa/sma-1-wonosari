@extends('layouts.master')

@section('content-header')
    Edit Nilai Siswa
@endsection

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form action="{{ route('siswa.nilai.update', ['siswa' => $siswa->id]) }}" method="post">
                @method('PATCH')
                @csrf
                @foreach ($siswa->matapelajarans as $mapel)
                    @if ($mapel->kategori != 'LM')
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">{{ $mapel->mata_pelajaran }}</label>
                            <input type="text" class="col-sm-8 form-control @error('nama') is-invalid @enderror" id="nama"
                                name="mapel_{{ $mapel->id }}" value="{{ old('nama') ?? $mapel->pivot->nilai }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @else
                        <div class="form-group row justify-content-between">
                            <label for="nama" class="col-sm-2 col-form-label">Lintas Minat</label>
                            <select name="peminatan" id="peminatan" class="col-sm-2 form-control">
                                @foreach ($matpels as $m)
                                    <option value="{{ $m->id }}"
                                        {{ (old('peminatan') ?? $m->mata_pelajaran) == $mapel->mata_pelajaran ? 'selected' : '' }}>
                                        {{ $m->mata_pelajaran }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="text" class="col-sm-8 form-control @error('nama') is-invalid @enderror" id="nama"
                                name="mapel_{{ $mapel->id }}" value="{{ old('nama') ?? $mapel->pivot->nilai }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                @endforeach
                <button type="submit" class="btn btn-primary">Update Nilai</button>
            </form>
        </div>
    </div>
@endsection
