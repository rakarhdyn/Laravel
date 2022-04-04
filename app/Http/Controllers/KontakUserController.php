<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KontakUserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);
        return view('kontakuser.index', compact('kontaks'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('kontakuser.create');
    }
    public function __construct()
    {
        $this->middleware('auth');
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
            'nama'     => 'required',
            'email'     => 'required',
            'telp'   => 'required',
            'pesan' => 'required'
        ]);

        $kontak = Kontak::create([
            'nama'     => $request->nama,
            'email'     => $request->email,
            'telp'   => $request->telp,
            'pesan'   => $request->pesan
        ]);

        if ($kontak) {
            //redirect dengan pesan sukses
            return redirect()->route('kontakuser.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('kontakuser.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    // /**
    //  * edit
    //  *
    //  * @param  mixed $kontak
    //  * @return void
    //  */
    // public function edit(Kontak $kontak)
    // {
    //     return view('kontak.edit', compact('kontak'));
    // }


    // /**
    //  * update
    //  *
    //  * @param  mixed $request
    //  * @param  mixed $kontak
    //  * @return void
    //  */
    // public function update(Request $request, Kontak $kontak)
    // {
    //     $this->validate($request, [
    //         'nama'     => 'required',
    //         'email'     => 'required',
    //         'telp'   => 'required',
    //         'pesan' => 'required'
    //     ]);

    //     //get data Kontak by ID
    //     $kontak = Kontak::findOrFail($kontak->id);

    //     $kontak->update([
    //         'telp'     => $request->telp,
    //         'email'   => $request->email,
    //         'deskripsi'   => $request->deskripsi,
    //         'harga'   => $request->harga
    //     ]);


    //     if ($kontak) {
    //         //redirect dengan pesan sukses
    //         return redirect()->route('konta.index')->with(['success' => 'Data Berhasil Diupdate!']);
    //     } else {
    //         //redirect dengan pesan error
    //         return redirect()->route('konta.index')->with(['error' => 'Data Gagal Diupdate!']);
    //     }
    // }
    // /**
    //  * destroy
    //  *
    //  * @param  mixed $id
    //  * @return void
    //  */
    // public function destroy($id)
    // {
    //     $kontak = Kontak::findOrFail($id);

    //     $kontak->delete();

    //     if ($kontak) {
    //         //redirect dengan pesan sukses
    //         return redirect()->route('kontak.index')->with(['success' => 'Data Berhasil Dihapus!']);
    //     } else {
    //         //redirect dengan pesan error
    //         return redirect()->route('kontak.index')->with(['error' => 'Data Gagal Dihapus!']);
    //     }
    // }
}
