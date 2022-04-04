<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
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
        $destinasis = Destinasi::latest()->paginate(5);
        return view('destinasi.index', compact('destinasis'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('destinasi.create');
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

        ]);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/destinasis', $image->hashName());

        $destinasi = Destinasi::create([
            'gambar'     => $image->hashName(),
            'nama'     => $request->nama

        ]);

        if ($destinasi) {
            //redirect dengan pesan sukses
            return redirect()->route('destinasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('destinasi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    /**
     * edit
     *
     * @param  mixed $destinasi
     * @return void
     */
    public function edit(Destinasi $destinasi)
    {
        return view('destinasi.edit', compact('destinasi'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $destinasi
     * @return void
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        $this->validate($request, [
            'nama'     => 'required'

        ]);

        //get data Destinasi by ID
        $destinasi = Destinasi::findOrFail($destinasi->id);

        if ($request->file('gambar') == "") {

            $destinasi->update([
                'nama'     => $request->nama

            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/destinasis/' . $destinasi->image);

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/destinasis', $image->hashName());

            $destinasi->update([
                'gambar'     => $image->hashName(),
                'nama'     => $request->nama

            ]);
        }

        if ($destinasi) {
            //redirect dengan pesan sukses
            return redirect()->route('destinasi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('destinasi.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $destinasi = Destinasi::findOrFail($id);
        Storage::disk('local')->delete('public/destinasis/' . $destinasi->image);
        $destinasi->delete();

        if ($destinasi) {
            //redirect dengan pesan sukses
            return redirect()->route('destinasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('destinasi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
