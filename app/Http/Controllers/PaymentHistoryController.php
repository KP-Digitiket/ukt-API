<?php

namespace App\Http\Controllers;

use App\Models\PaymentHistory;
use Illuminate\Http\Request;

class PaymentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gopay()
    {
        \Midtrans\Config::$serverKey = 'YOUR_SERVER_KEY';
 
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'payment_type' => 'gopay',
            'gopay' => array(
                'enable_callback' => true,                // optional
                'callback_url' => 'someapps://callback'   // optional
            )
        );
        
        $response = \Midtrans\CoreApi::charge($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentHistory  $paymentHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentHistory $paymentHistory)
    {
        //
    }
}
