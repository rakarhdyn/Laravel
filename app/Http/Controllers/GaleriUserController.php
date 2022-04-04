<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriUserController extends Controller
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
        $galeris = Galeri::latest()->paginate(10);
        return view('galeriuser.index', compact('galeris'));
    }

    public function detail(Galeri $galeri)
    {
        return view('galeriuser.detail', compact('galeri'));
    }
}
