<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;

class PromoController extends Controller
{
    public function index()
    {
        $promoQuery = Post::where('is_published', true)
            ->orderBy('created_at', 'DESC')->get();

        return view('landing.promo', [
            'promo' => $promoQuery
        ]);
    }

    public function detail($id)
    {
        $promoQuery = Post::where('id',$id)->get();

        return view('landing.promodetail', [
            'promo' => $promoQuery
        ]);
    }
}
