<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Midtrans;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\PaymentHistory;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private function createHistory($method,$emount,){

    }
    public function getAllPaymentMethod()
    {
        return json_encode(PaymentMethod::get()->all());
    }

    public function getExpired($id){
        return json_encode(PaymentHistory::where('id',$id)->get()->first()->expired);
    }

    public function getUserPaymentHistories(){
        return json_encode(PaymentHistory::get()->all());
    }

    public function gopay(){
        // dd(Midtrans::latest()->first()->server_key);
        \Midtrans\Config::$serverKey = Midtrans::latest()->first()->server_key;
        
        if(PaymentHistory::get()->count() == 0){
            $orderNumber = 0;
        }
        else{
            $orderNumber = PaymentHistory::get()->last()->id;
        }

        $date = Carbon::now()->format('Y');
        
        $orderId = "UKT".$date.sprintf("%09s",$orderNumber);
 
        // $ukt = Auth::user()->nominal;

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => 200000,
            ),
            'payment_type' => 'gopay',
            'gopay' => array(
                'enable_callback' => false,                
                'callback_url' => 'someapps://callback'   
            )
        );
        
        $response = \Midtrans\CoreApi::charge($params);
        // dd($response);
        return json_encode($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handle(){
        
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
