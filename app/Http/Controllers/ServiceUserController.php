<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceUserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('serviceuser.index', compact('services'));
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


    /**
     * store
    //  *
    //  * @param  mixed $request
    //  * @return void
    //  */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'judul'     => 'required',
    //         'deskripsi'   => 'required'
    //     ]);


    //     $service = Service::create([
    //         'judul'     => $request->judul,
    //         'deskripsi'   => $request->deskripsi,
    //     ]);

    //     if ($service) {
    //         //redirect dengan pesan sukses
    //         return redirect()->route('service.index')->with(['success' => 'Data Berhasil Disimpan!']);
    //     } else {
    //         //redirect dengan pesan error
    //         return redirect()->route('service.index')->with(['error' => 'Data Gagal Disimpan!']);
    //     }
    // }
    /**
     * edit
     *
     * @param  mixed $service
     * @return void
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $service
     * @return void
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data Service by ID
        $service = Service::findOrFail($service->id);


        $service->update([
            'judul'     => $request->judul,
            'deskripsi'   => $request->deskripsi
        ]);


        if ($service) {
            //redirect dengan pesan sukses
            return redirect()->route('service.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('service.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $service = Service::findOrFail($id);
        $service->delete();

        if ($service) {
            //redirect dengan pesan sukses
            return redirect()->route('service.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('service.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
