<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Paket;
use Illuminate\Support\Facades\Storage;

class PesanUserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $pesans = Pesan::latest()->paginate(5);
        return view('pesan.index', compact('pesans'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * edit
     *
     * @param  mixed $paket
     * @return void
     */
    public function edit(Paket $paket, Pesan $pesan)
    {
        return view('paket.edit', compact('paket', 'pesan'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $paket
     * @return void
     */
    public function store(Request $request, Paket $paket, Pesan $pesan)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'deskripsi'     => 'required',
            'harga'     => 'required'

        ]);

        //get data Destinasi by ID
        $paket = Paket::findOrFail($paket->id);

        if ($request->file('gambar') == "") {

            $pesan->update([
                'nama_pemesan'   => $request->nama_pemesan,
                'email'   => $request->email,
                'no_tlp'   => $request->no_tlp,
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

            $pesan->update([
                'gambar'     => $image->hashName(),
                'nama_pemesan'   => $request->nama_pemesan,
                'email'   => $request->email,
                'no_tlp'   => $request->no_tlp,
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'harga'     => $request->harga

            ]);
        }

        if ($paket) {
            //redirect dengan pesan sukses
            return redirect()->route('paketuser.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('paketuser.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
}
