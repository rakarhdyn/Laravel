<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketUserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $pakets   = Paket::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);
        return view('paketuser.index', compact('pakets'));
    }

    public function create()
    {
        return view('paketuser.create');
    }


    /**
     * create
     *
     * @return void
     */
    public function pesan()
    {
        return view('paketuser.pesan');
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
            'nama_pemesan'     => 'required',
            'email'     => 'required',
            'no_tlp'     => 'required',
            'nama_paket'     => 'required',
            'harga'   => 'required'
        ]);

        $pesan = Pesan::create([
            'nama_pemesan'     => $request->nama_pemesan,
            'email'     => $request->email,
            'no_tlp'     => $request->no_tlp,
            'nama_paket'     => $request->nama_paket,
            'harga'   => $request->harga,
        ]);

        if ($pesan) {
            //redirect dengan pesan sukses
            return redirect()->route('paketuser.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('paketuser.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    // /**
    //  * edit
    //  *
    //  * @param  mixed $paket
    //  * @return void
    //  */
    // public function pesan(Paket $paket)
    // {
    //     return view('paketuser.pesan', compact('paket'));
    // }


    // /**
    //  * update
    //  *
    //  * @param  mixed $request
    //  * @param  mixed $paket
    //  * @return void
    //  */
    // public function create(Request $request, Paket $paket, Pesan $pesan)
    // {
    //     $this->validate($request, [
    //         'nama'     => 'required',
    //         'deskripsi'   => 'required',
    //         'harga'   => 'required'
    //     ]);

    //     //get data Paket by ID
    //     $paket = Paket::findOrFail($paket->id);

    //     if ($request->file('gambar') == "") {

    //         $paket->update([
    //             'nama'     => $request->nama,
    //             'deskripsi'   => $request->deskripsi,
    //             'harga' => $request->harga
    //         ]);
    //     } else {

    //         //hapus old image
    //         Storage::disk('local')->delete('public/pakets/' . $paket->image);

    //         //upload new image
    //         $image = $request->file('gambar');
    //         $image->move('public/pakets');
    //         $image->getClientOriginalName();

    //         $paket->update([
    //             'gambar'     => $image->getClientOriginalName(),
    //             'nama'     => $request->nama,
    //             'deskripsi'   => $request->deskripsi,
    //             'harga' => $request->harga
    //         ]);
    //     }

    //     if ($paket) {
    //         //redirect dengan pesan sukses
    //         return redirect()->route('paketuser.index')->with(['success' => 'Data Berhasil Diupdate!']);
    //     } else {
    //         //redirect dengan pesan error
    //         return redirect()->route('paketuser.index')->with(['error' => 'Data Gagal Diupdate!']);
    //     }
    // }
}
