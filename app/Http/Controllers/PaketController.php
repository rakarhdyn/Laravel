<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketController extends Controller
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
        $pakets = Paket::latest()->paginate(5);
        return view('paket.index', compact('pakets'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('paket.create');
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
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'deskripsi'     => 'required',
            'harga'     => 'required'

        ]);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/pakets', $image->hashName());

        $paket = Paket::create([
            'gambar'     => $image->hashName(),
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'harga'     => $request->harga

        ]);

        if ($paket) {
            //redirect dengan pesan sukses
            return redirect()->route('paket.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('paket.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    /**
     * edit
     *
     * @param  mixed $paket
     * @return void
     */
    public function edit(Paket $paket)
    {
        return view('paket.edit', compact('paket'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $paket
     * @return void
     */
    public function update(Request $request, Paket $paket)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'     => 'required',
            'harga'     => 'required'

        ]);

        //get data Destinasi by ID
        $paket = Paket::findOrFail($paket->id);

        if ($request->file('gambar') == "") {

            $paket->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'harga'     => $request->harga

            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/pakets/' . $paket->image);

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/pakets', $image->hashName());

            $paket->update([
                'gambar'     => $image->hashName(),
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'harga'     => $request->harga

            ]);
        }

        if ($paket) {
            //redirect dengan pesan sukses
            return redirect()->route('paket.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('paket.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $paket = Paket::findOrFail($id);
        Storage::disk('local')->delete('public/pakets/' . $paket->image);
        $paket->delete();

        if ($paket) {
            //redirect dengan pesan sukses
            return redirect()->route('paket.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('paket.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
