<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Blog\Post;
use App\Models\Coverage\Area;
use App\Models\Coverage\Map;
use App\Models\Product;
use App\Models\Regency;
use App\Models\Testimony;
use App\Models\Vidio;
use Illuminate\Cache\RateLimiting\Limit;

class LandingController extends Controller
{
    public function index()
    {
        $productQuery = Product::where('status', true)
            ->limit(16)
            ->get();

        $products = [];
        $addons = [];

        foreach ($productQuery as $key => $value) {
            if ($value->type == 1) {
                $products[] = $value;
            } else if ($value->type == 2) {
                $addons[] =  $value;
            }
        }

        $testimonieQuery = Testimony::where('status', 1)->get();
        $vidioQuery = Vidio::where('status', 1)->get();
        $areaKota = Regency::whereHas('area')->get();
        $map = Map::orderBy('created_at', 'DESC')->first();
        // return $map;
        return view('landing.index', [
            'products' => $products,
            'addons' => $addons,
            'testimoni' => $testimonieQuery,
            'vidio' => $vidioQuery,
            'areaKota' => $areaKota,
            'map' => $map
        ]);
    }

    public function product()
    {
        $productQuery = Product::where('status', true)
            ->paginate(10);

        $products = [];
        $addons = [];

        foreach ($productQuery as $key => $value) {
            if ($value->type == 1) {
                $products[] = $value;
            } else if ($value->type == 2) {
                $addons[] =  $value;
            }
        }

        return view('landing.product', [
            'products' => $products,
            'addons' => $addons
        ]);
    }
}
