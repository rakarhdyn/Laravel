<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesanController extends Controller
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
        $pesans = Pesan::latest()->paginate(10);
        return view('pesan.index', compact('pesans'));
    }
    /**
     * create
     *
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();

        if ($pesan) {
            //redirect dengan pesan sukses
            return redirect()->route('pesan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('pesan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
