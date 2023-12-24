<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Kursus;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    function index(){
        $data['list_materi']= Materi::all();
        $data['list_kursus']= Kursus::all();
        return view('Admin.Materi.index', $data);
    }
    function create()
    {
        $data['list_kursus']= Kursus::all();
        return view('Admin.Materi.create', $data);
    }
    function store()
    {
        $materi = new Materi();
        $materi->judul = request('judul');
        $materi->kursus_id = request('kursus_id');
        $materi->deskripsi = request('deskripsi');
        $materi->embed_link = request('embed_link');
        $materi->save();

        return redirect('Materi')->with('primary', 'Data Kursus Berhasil Ditambahkan');
    }
    function show(Materi $materi, Kursus $kursus){
        $data['materi'] = $materi;
        $data['kursus'] = $kursus;
        return view('Admin.Materi.show', compact('materi','kursus'));
    }
    function edit(Materi $materi, Kursus $kursus){
        $data['materi'] = $materi;
        $data['list_kursus']= Kursus::all();
        return view('Admin.Materi.edit', $data);
    }
    function update(Materi $materi)
    {
        $materi->judul = request('judul');
        $materi->embed_link = request('embed_link');
        $materi->deskripsi = request('deskripsi');
        $materi->kursus_id = request('kursus_id');

        $materi->save();
        return redirect('Materi')->with('primary', 'Data Berhasil Diedit');
    }
    function destroy(Materi $materi)
    {
        $materi->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }

}
