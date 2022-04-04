<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $galeris = Galeri::latest()->paginate(5);
        return view('galeri.index', compact('galeris'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('galeri.create');
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
            'gambar'     => 'required|image|mimes:png,jpg,jpeg'
        ]);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/galeris', $image->hashName());

        $galeri = Galeri::create([
            'gambar'     => $image->hashName()
        ]);

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    /**
     * edit
     *
     * @param  mixed $galeri
     * @return void
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $galeri
     * @return void
     */
    public function update(Request $request, Galeri $galeri)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'   => 'required',
            'harga'   => 'required'
        ]);

        //get data Galeri by ID
        $galeri = Galeri::findOrFail($galeri->id); {

            //hapus old image
            Storage::disk('local')->delete('public/galeris/' . $galeri->image);

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/galeris', $image->hashName());

            $galeri->update([
                'gambar'     => $image->hashName()
            ]);
        }

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $galeri = Galeri::findOrFail($id);
        Storage::disk('local')->delete('public/galeris/' . $galeri->image);
        $galeri->delete();

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
