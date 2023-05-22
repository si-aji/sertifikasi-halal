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

        // validation rules
        $form_sertifikasi = $this->validate($request, [
            // validate data pelaku & usaha
           'name'=> ['required', 'string', 'max:180'],
           'email' => ['required', 'email:dns'],
           'nik' => ['required', 'digits:16'],
           'no_telp' => ['required', 'phone_number', 'min:10', 'max:15'],
           'nama_usaha' => ['required'],
           'alamat_usaha' => ['required'],
           'jenis_usaha' => ['required'],
           'nib' => ['required'],
           'bahan_cleaning_agent' => ['required'],

            // validate produk
           'produk.*.foto_produk' => [
                'required' => 'Foto produk wajib diisi',
                'mimes:jpg,jpeg,png' => 'Format gambar diperbolehkan .jpg .jpeg .png',
                'max:2048' => 'Foto maksimal berukuran 2 mb'
            ],
           'produk.*.nama_produk' => [
                'required' => 'Nama produk wajib diisi',
                'max:180' => 'Nama produk maksimal 180 karakter'
            ],
           'produk.*.bahan_kemasan' => [
                'required' => 'Bahan kemasan wajib diisi'
            ],
           'produk.*.bahan_produk' => [
                'required' => 'Bahan produk wajib diisi'
            ],
           'produk.*.proses_pembuatan' => [
                'required' => 'Proses pembuatan wajib diisi'
            ],
        ]);

        // return $form_sertifikasi;

        // validation check
        if ($form_sertifikasi) {

            $pelaku_halal = PelakuHalalModel::create([
                'name' => $request->name,
                'email' => $request->email,
                'nik' => $request->nik,
                'no_telp' => $request->no_telp,
            ]);

            $nama_usaha = $request->nama_usaha;
            $usaha = UsahaModel::create([
                'pelaku_halal_id' => $pelaku_halal->id,
                'name' => $nama_usaha,
                'address' => $request->alamat_usaha,
                'category' => $request->jenis_usaha,
                'nib' => $request->nib,
                'bahan_cleaning_agent' => $request->bahan_cleaning_agent
            ]);

            $produk = $request->produk;
            $produk_key = array_keys($produk);

            for ($i=0; $i < count($produk_key); $i++) {
                ProdukModel::create([
                    'usaha_id' => $usaha->id,
                    'photo' => $produk[$produk_key[$i]]['foto_produk']->hashName(),
                    'name' => $produk[$produk_key[$i]]['nama_produk'],
                    'packaging_material' => $produk[$produk_key[$i]]['bahan_kemasan'],
                    'material' => $produk[$produk_key[$i]]['bahan_produk'],
                    'process_making' => $produk[$produk_key[$i]]['proses_pembuatan']
                ]);

                Storage::disk('digitalocean')->put('sertifikasi-halal/product-img/'. $nama_usaha .'', $produk[$produk_key[$i]]['foto_produk'], 'public');
            }

            return redirect(route('response'))->with([
                'code' => 200,
                'status' => 'success',
                'message' => 'Rekap Data Anda telah kami kirimkan ke eMail Anda dan saat ini sedang diproses untuk verifikasi dan validasi oleh Konsultan Halal SWAKARTA®'
            ]);

        } else {
            return back()->withInput();
        }
    }

    public function response(){
        if (session('message')) {
            return view('landing.content.homepage.response_page');
        } else {
            return view('landing.content.homepage.index');
        }

    }
}
