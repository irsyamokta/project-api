<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function getData(){
        $data = Mahasiswa::all();
        foreach ($data as $mhs) {
            $result[] = [
                'id' => $mhs->id,
                'name' => $mhs->nama,
                'jurusan' => $mhs->jurusan,
                'alamat' => $mhs->alamat,
                'no_hp' => $mhs->no_hp,
                'email' => $mhs->email,
            ];
        }

        return response()->json([
            'message' => 'success',
            'data' => $result
        ], 200);
    }
}
