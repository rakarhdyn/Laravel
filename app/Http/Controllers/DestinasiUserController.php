<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinasiUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $destinasis   = Destinasi::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

        return view('destinasiuser.index', compact('destinasis'));
    }
}
