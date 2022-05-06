<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
        // get nisn from input request
        $nisn = $request->nisn;

        // get data siswa from database
        $result = Siswa::where('nisn', $nisn)->get();

        // dd($result->count() == 1);
        if ($result->count() != 0) {
            // get id from nisn to access pivot table
            foreach ($result as $res) {
                $id = $res->id;
            }

            $status = DB::select('SELECT * FROM pengumuman');
            $siswa = Siswa::where('id', $id)->first();
            $average = round(DB::table('mata_pelajaran_siswa')->where('siswa_id', $id)->avg('nilai'), 2);
            return view('pengumuman.index', ['nisn' => $nisn, 'siswa' => $siswa, 'status' => $status, 'average' => $average]);
            // return "data tidak ditemukan";
        } else {
            Alert::error('Data Tidak Ditemukan');
            return view('landing-page');
        }
    }
}
