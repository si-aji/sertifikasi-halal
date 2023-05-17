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

        $amount_products = $request->row_product_length;

        for ($i=1; $i < $amount_products ; $i++) {

            ProdukModel::create([
                'pelaku_halal_id' => $pelaku_halal->id,
                'photo' => $request->file('foto_produk_' . $i)->hashName(),
                'name' => $request->input('nama_produk_' . $i),
                'packaging_material' => $request->input('bahan_kemasan_' . $i),
                'material' => $request->input('bahan_produk_' . $i),
                'process_making' => $request->input('proses_pembuatan_' . $i)
            ]);

            Storage::disk('digitalocean')->put('sertifikasi-halal/product-img', $request->file('foto_produk_' . $i), 'public');

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
