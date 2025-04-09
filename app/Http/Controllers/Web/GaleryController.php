<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\Vidio;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::where('is_published', true)
            ->orderBy('created_at', 'DESC')->get();

        $vidioQuery = Vidio::where('status', 1)->get();

        return view('landing.galery', [
            'galeries' => $galeries,
            'vidio' => $vidioQuery,
        ]);
    }
}
