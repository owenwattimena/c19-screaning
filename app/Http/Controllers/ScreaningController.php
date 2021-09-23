<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Screaning;
use Illuminate\Http\Request;

class ScreaningController extends Controller
{
    public function index()
    {
        $data['pasien'] = Pasien::all();
        return view('admin.screaning.list', $data);
    }
    
    public function create()
    {
        return view('admin.screaning.form');
    }

    public function save(Request $request)
    {
        $id     = $request->id;
        if($id == 0)
        {
            $request->validate([
                "nama_lengkap" => "required",
                "alamat_domisili" => "required",
                "jenis_kelamin" => "required",
                "hasil" => "required",
            ]); 

            $pasien                 = new Pasien;
            $pasien->nama_lengkap   = $request->nama_lengkap;
            $pasien->nik            = $request->nik;
            $pasien->alamat_domisili= $request->alamat_domisili;
            $pasien->jenis_kelamin  = $request->jenis_kelamin;
            $pasien->nomor_hp       = $request->no_hp;

            if($pasien->save())
            {
                $screaning            = new Screaning; 
                $screaning->id_pasien = $pasien->id; 
                $screaning->hasil     = $request->hasil; 
                $screaning->save();

                $alert = ['type' => 'success', 'message' => 'Data berhasil disimpan!'];
                return redirect()->route('screaning')->with('alert', JSON_ENCODE($alert));
            }
            $alert = ['type' => 'error', 'message' => 'Data gagal disimpan!'];
            return redirect()->route('screaning')->with('alert', JSON_ENCODE($alert));
        }
    }
}
