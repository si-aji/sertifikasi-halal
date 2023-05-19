<?php

namespace App\Http\Controllers;

use App\PelakuHalalModel;
use App\ProdukModel;
use App\UsahaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    public function index(){
        return view('landing.content.homepage.index');
    }

    public function store(Request $request){

        $request->validate([
           'name'=> ['required'],
           'email' => ['required'],
           'nik' => ['required'],
           'no_telp' => ['required'],
           'nama_usaha' => ['required'],
           'alamat_usaha' => ['required'],
           'jenis_usaha' => ['required'],
           'nib' => ['required'],
           'bahan_cleaning_agent' => ['required']
        ]);

        $pelaku_halal = PelakuHalalModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
        ]);

        UsahaModel::create([
            'pelaku_halal_id' => $pelaku_halal->id,
            'name' => $request->nama_usaha,
            'address' => $request->alamat_usaha,
            'category' => $request->jenis_usaha,
            'nib' => $request->nib,
            'bahan_cleaning_agent' => $request->bahan_cleaning_agent
        ]);


        $produk = $request->produk;
        $produk_key = array_keys($produk);

        for ($i=0; $i < count($produk_key); $i++) {
            ProdukModel::create([
                'pelaku_halal_id' => $pelaku_halal->id,
                'photo' => $produk[$produk_key[$i]]['foto_produk']->hashName(),
                'name' => $produk[$produk_key[$i]]['nama_produk'],
                'packaging_material' => $produk[$produk_key[$i]]['bahan_kemasan'],
                'material' => $produk[$produk_key[$i]]['bahan_produk'],
                'process_making' => $produk[$produk_key[$i]]['proses_pembuatan']
            ]);

            Storage::disk('digitalocean')->put('sertifikasi-halal/product-img', $produk[$produk_key[$i]]['foto_produk'], 'public');
        }

        return redirect(route('response'))->with([
            'code' => 200,
            'status' => 'success',
            'message' => 'Rekap Data Anda telah kami kirimkan ke eMail Anda dan saat ini sedang diproses untuk verifikasi dan validasi oleh Konsultan Halal SWAKARTA®'
        ]);
    }

    public function response(){
        return view('landing.content.homepage.response_page');
    }
}
