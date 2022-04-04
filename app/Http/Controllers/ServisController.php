<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServisController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $serviss = Servis::latest()->paginate(10);
        return view('servis.index', compact('serviss'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('servis.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);


        $servis = Servis::create([
            'judul'     => $request->judul,
            'deskripsi'   => $request->deskripsi,
        ]);

        if ($servis) {
            //redirect dengan pesan sukses
            return redirect()->route('servis.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('servis.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    /**
     * edit
     *
     * @param  mixed $servis
     * @return void
     */
    public function edit(Servis $servis)
    {
        return view('servis.edit', compact('servis'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $servis
     * @return void
     */
    public function update(Request $request, Servis $servis)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data Servis by ID
        $servis = Servis::findOrFail($servis->id);


        $servis->update([
            'judul'     => $request->judul,
            'deskripsi'   => $request->deskripsi
        ]);


        if ($servis) {
            //redirect dengan pesan sukses
            return redirect()->route('servis.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('servis.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();

        if ($servis) {
            //redirect dengan pesan sukses
            return redirect()->route('servis.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('servis.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
