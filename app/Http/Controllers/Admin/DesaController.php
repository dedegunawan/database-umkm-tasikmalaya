<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa;
use Yajra\Datatables\Datatables;
use App\Transformers\DesaTransformer;

class DesaController extends Controller
{
    //menampilkan daftar desa menggunakan list
    public function index(Request $request)
    {
        return view('admin.desa.index');
    }
    public function anyData()
    {
        $desas = Desa::select([
            'id', 'kode_login', 'nama_desa',
            'nama_kepala_desa', 'logo_desa',
            'latitude', 'longitude',

        ]);
        return Datatables::of($desas)
            ->setTransformer(new DesaTransformer)
            ->make(true);
    }

    public function tambah()
    {
        return view('admin.desa.create');
    }
    public function doTambah(Request $request)
    {
        try {
            $this->validasiTambah($request);
            //var_dump($request);
            $path = $request->file('logo_desa')->store('images');

        } catch (Exception $e) {
            return redirect(route('admin.desa.tambah'))
                ->withErrors([$e->getMessage()])
                ->withInput();
        }



    }
    public function validasiTambah(Request $request)
    {
        if ($request->hasFile('logo_desa')) {
            $validation_image = ['logo_desa' => 'image|mimes:jpeg,bmp,png,jpg,gif|size:1024'];
        } else {
            $validation_image = [];
        }
        var_dump($validation_image);
        die();
        $this->validate($request, [
            'kode_login' => 'required|unique:desa,kode_login|max:40',
            'password' => 'required|same:konfirmasi_password',
            'nama_desa' => 'required|max:255',
            'nama_kepala_desa' => 'required|max:255',
        ]+$validation_image, [
            'required'  => ":attribute harus diisi",
            'unique'    => ":attribute sudah ada di basis data",
            'max'       => ":attribute melebihi :max batas karakter",
            'image'      => ":attribute harus berupa gambar",
            'same'       => ":attribute harus sama dengan :other",
            'mimes'      => ":attribute mempunyai ekstensi yang dilarang ",
            'size'       => ":attribute tidak boleh melebihi :size",
        ], [
            'kode_login' => 'Kode Login',
            'password' => 'Password',
            'nama_desa' => 'Nama Desa',
            'nama_kepala_desa' => 'Nama Kepala Desa',
            'logo_desa' => 'Logo Desa',
            'konfirmasi_password' => 'Konfirmasi Password',
        ]);
    }
}
