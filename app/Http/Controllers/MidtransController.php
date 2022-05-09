<?php

namespace App\Http\Controllers;

use App\Models\Midtrans;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MidtransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Datatables $datatables, Request $request)
    {
        if ($request->ajax()) {
            return $datatables->of(Midtrans::query()->role('Peserta')->latest())
                ->addColumn('id_merchant', function (Midtrans $Midtrans) {
                    return $Midtrans->name;
                })
                ->addColumn('client_id', function (Midtrans $Midtrans) {
                    return $Midtrans->email;
                })
                ->addColumn('server_id', function (Midtrans $Midtrans) {
                    return $Midtrans->registed->count();
                })
                ->addColumn('action', function (Midtrans $Midtrans) {

                    return \view('back-end.peserta.button_action', compact('Midtrans'));
                })
                ->addColumn('status', function (Midtrans $Midtrans) {
                    if ($Midtrans->deleted_at) {
                        return 'Inactive';
                    } else {
                        return 'Active';
                    }
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        } else {
            return view('back-end.midtrans.index');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $midtrans = Midtrans::pluck('name','name')->all();
        return view('back-end.midtrans.create',compact('midtrans'));
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
     * @param  \App\Models\Midtrans  $midtrans
     * @return \Illuminate\Http\Response
     */
    public function show(Midtrans $midtrans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Midtrans  $midtrans
     * @return \Illuminate\Http\Response
     */
    public function edit(Midtrans $midtrans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Midtrans  $midtrans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Midtrans $midtrans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Midtrans  $midtrans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Midtrans $midtrans)
    {
        //
    }
    public function getClientId(){
        $client = Midtrans::get()->last()->client_id;
        return json_encode($client);
    }
}
