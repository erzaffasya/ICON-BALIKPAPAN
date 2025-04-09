<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $paymentQuery = Payment::where('is_published', true)
            ->with('detail')
            ->orderBy('created_at', 'ASC')
            ->get();

        return view('landing.pembayaran', [
            'payment' => $paymentQuery
        ]);
    }
}
