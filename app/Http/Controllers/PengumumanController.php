<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

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

            $siswa = Siswa::where('id', $id)->first();
            return view('pengumuman.index', ['nisn' => $nisn, 'siswa' => $siswa]);
            // return "data tidak ditemukan";
        } else {
            return view('landing-page');
        }
    }
}
