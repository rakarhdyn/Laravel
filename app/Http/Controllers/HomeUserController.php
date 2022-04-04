<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Paket;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeUserController extends Controller
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
        $services = Service::latest()->paginate(10);
        $pakets = Paket::latest()->paginate(10);
        $destinasis = Destinasi::latest()->paginate(10);
        return view('homeuser.index', compact('destinasis', 'pakets', 'services'));
    }
}
