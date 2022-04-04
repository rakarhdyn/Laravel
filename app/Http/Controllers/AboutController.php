<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('about.index', compact('abouts'));
    }
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('about.create');
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
            'telp'     => 'required',
            'email'     => 'required',
            'kota'   => 'required',
            'deskripsi' => 'required'
        ]);

        $about = About::create([
            'telp'     => $request->telp,
            'email'     => $request->email,
            'kota'   => $request->kota,
            'deskripsi'   => $request->deskripsi
        ]);

        if ($about) {
            //redirect dengan pesan sukses
            return redirect()->route('about.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('about.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    /**
     * edit
     *
     * @param  mixed $about
     * @return void
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $about
     * @return void
     */
    public function update(Request $request, About $about)
    {
        $this->validate($request, [
            'telp'     => 'required',
            'email'   => 'required',
            'kota'   => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data Blog by ID
        $about = About::findOrFail($about->id);

        $about->update([
            'telp'     => $request->telp,
            'email'   => $request->email,
            'deskripsi'   => $request->deskripsi,
            'harga'   => $request->harga
        ]);


        if ($about) {
            //redirect dengan pesan sukses
            return redirect()->route('about$about.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('about$about.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $about = About::findOrFail($id);

        $about->delete();

        if ($about) {
            //redirect dengan pesan sukses
            return redirect()->route('about.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('about.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
