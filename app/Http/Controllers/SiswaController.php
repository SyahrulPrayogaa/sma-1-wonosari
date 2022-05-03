<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.siswa.index', ['siswas' => $siswa]);
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'nis' => 'required|size:4',
            'nisn' => 'required|size:10|unique:siswas,nisn',
            'jurusan' => 'required',
            'nama_wali' => '',
            'tahun_masuk' => '',
            'tahun_lulus' => '',
        ]);
        Siswa::create($validateData);
        $nisn = $request->nisn;
        $siswa = Siswa::where('nisn', $nisn)->first();
        $matpel = MataPelajaran::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $siswa->matapelajarans()->attach($matpel);

        if ($request->jurusan == 'ipa') {
            $matpelIpa = MataPelajaran::find([11, 12, 13, 14]);
            $lintasIpa = MataPelajaran::find([23]);
            $siswa->matapelajarans()->attach($matpelIpa);
            $siswa->matapelajarans()->attach($lintasIpa);
        } elseif ($request->jurusan == 'ips') {
            $matpelIps = MataPelajaran::find([15, 16, 17, 18]);
            $lintasIps = MataPelajaran::find([19]);
            $siswa->matapelajarans()->attach($matpelIps);
            $siswa->matapelajarans()->attach($lintasIps);
        }

        return redirect()->route('siswa.index');
    }

    public function show(Siswa $siswa)
    {
        //
    }

    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'nis' => 'required|size:4',
            'nisn' => 'required|size:10|unique:siswas,nisn,' . $siswa->id,
            'jurusan' => 'required',
            'nama_wali' => '',
            'tahun_masuk' => '',
            'tahun_lulus' => '',
        ]);

        Siswa::where('id', $siswa->id)->update($validateData);
        return redirect()->route('siswa.index');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('pesan', "Hapus data $siswa->nama berhasil");
    }


    public function nilai(Siswa $siswa)
    {
        $siswa = Siswa::where('id', $siswa->id)->first();
        return view('admin.siswa.nilai.index', ['siswa' => $siswa]);
    }

    public function editNilai(Siswa $siswa)
    {
        $siswa = Siswa::where('id', $siswa->id)->first();
        $matpel = MataPelajaran::where('kategori', 'LM')->where('jurusan', '!=', $siswa->jurusan)->get();
        return view('admin.siswa.nilai.edit', ['siswa' => $siswa, 'matpels' => $matpel]);
    }

    public function updateNilai(Request $request, Siswa $siswa)
    {
        $peminatan = $request->peminatan;
        // $matpel = MataPelajaran::find([$peminatan]);
        // $siswa->matapelajarans()->attach($matpel);

        foreach ($siswa->matapelajarans as $mapel) {
            if ($mapel->kategori == 'LM') {
                if ($mapel->id != $peminatan) {
                    $matpelLama = MataPelajaran::find([$mapel->id]);
                    $siswa->matapelajarans()->detach($matpelLama);

                    $matpelBaru = MataPelajaran::find([$peminatan]);
                    $siswa->matapelajarans()->attach($matpelBaru);
                    // mengisi nilai form kedalam pivot table
                    $id = 'mapel_' . $mapel->id;
                    $siswa->matapelajarans()->updateExistingPivot($peminatan, ['nilai' => $request->$id]);
                }
            }
        }

        foreach ($siswa->matapelajarans as $mapel) {
            $id = 'mapel_' . $mapel->id;
            $siswa->matapelajarans()->updateExistingPivot($mapel->id, ['nilai' => $request->$id]);
        }

        return redirect()->route('siswa.nilai.index', ['siswa' => $siswa->id]);
    }
}
