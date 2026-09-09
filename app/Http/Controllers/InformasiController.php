<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\informasi;

class InformasiController extends Controller
{
    public function tampil()
    {
        $informasis = Informasi::all();
        return view('informasi.daftar', 
        ['informasis' => $informasis]); 
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function simpan()
    {
        $informasi = new Informasi();
        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');
        $informasi->save();

        return redirect('daftar-informasi')->with('success', 'Informasi berhasil disimpan!');
    }

    public function hapus()
    {
        try { 
            $informasi->delete(); return redirect('daftar-informasi') ->with('success', 'Informasi berhasil dihapus!'); 
            } 
        catch (\Exception $e) { return redirect('daftar-informasi') ->with('error', 'Informasi gagal dihapus!'); 
        }
    }
    
    public function ubah()
    {
        return view('informasi.ubah', ['informasi'=>$informasi]);
    }

    public function update()
    {
        $informasi = Informasi::find($request->get('id'));
        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');

        $informasi->save();

        return redirect('daftar-informasi')->with('success', 'Informasi berhasil disimpan!');
    }
}
