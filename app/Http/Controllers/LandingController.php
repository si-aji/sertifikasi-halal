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
           'email' => ['required', 'email'],
           'nik' => ['required', 'digits:16'],
           'no_telp' => ['required', 'phone_number', 'min:10', 'max:15'],
           'nama_usaha' => ['required'],
           'alamat_usaha' => ['required'],
           'jenis_usaha' => ['required'],
           'nib' => ['nullable','digits:13'],
           'bahan_cleaning_agent' => ['required'],

            // validate produk
           'produk.*.foto_produk' => ['required', 'mimes:jpg,jpeg,png', 'max:2048'],
           'produk.*.nama_produk' => ['required', 'max:180'],
           'produk.*.bahan_kemasan' => ['required'],
           'produk.*.bahan_produk' => ['required'],
           'produk.*.proses_pembuatan' => ['required'],
        ],[
            'name.required' => 'Field nama wajib diisi!',
            'name.string' => 'Field nama wajib format teks!',
            'name.max' => 'Field nama maksimal 180 karakter!',
            'email.required' => 'Field email wajib diisi!',
            'email.email' => 'Field email wajib menggunakan format email!',
            'nik.required' => 'Field nik wajib diisi!',
            'nik.digits' => 'Field nik harus 16 karakter!',
            'no_telp.required' => 'Field no telepon wajib diisi!',
            'no_telp.min' => 'Field no telepon minimal 10 karakter!',
            'no_telp.max' => 'Field no telepon maksimal 15 karakter!',
            'nama_usaha.required' => 'Field nama usaha wajib diisi!',
            'alamat_usaha.required' => 'Field alamat usaha wajib diisi!',
            'jenis_usaha.required' => 'Field jenis usaha wajib diisi!',
            'nib.digits' => 'Field nib jika diisi wajib 13 karakter!',
            'bahan_cleaing_agent.required' => 'Field bahan cleaning agent wajib diisi!',

            'produk.*.foto_produk.required' => 'Foto produk wajib diisi!',
            'produk.*.foto_produk.mimes' => 'Foto produk harus berformat .jpg / .jpeg / .png!',
            'produk.*.foto_produk.max' => 'Maksimal ukuran foto produk adalah 2 mb!',
            'produk.*.nama_produk.required' => 'Field nama produk wajib diisi!',
            'produk.*.nama_produk.max' => 'Field nama produk maksimal 180 karakter!',
            'produk.*.bahan_kemasan.required' => 'Field bahan kemasan wajib diisi!',
            'produk.*.bahan_produk.required' => 'Field bahan produk wajib diisi!',
            'produk.*.proses_pembuatan.required' => 'Field proses pembuatan wajib diisi!'
        ]);

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
