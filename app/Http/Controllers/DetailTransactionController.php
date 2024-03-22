<?php

namespace App\Http\Controllers;


use App\Models\DetailTransaction;
use App\Http\Requests\StoreDetailTransactionRequest;
use App\Http\Requests\UpdateDetailTransactionRequest;

class DetailTransactionController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //query eloquen
          $customers = Customer::all(); 
          return view('customer.list', [
              'data' => $customers,
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detail.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetailTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(detail_transactions $detail_transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detail_transactions $detail_transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailTransactionRequest $request, detail_transactions $detail_transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detail_transactions $detail_transactions)
    {
        //
    }
}
