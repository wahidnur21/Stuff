<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        return view('customer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->all());

        return redirect('/customers')->with([
            'mess' => 'Data berhasil di simpan',
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customer.add', [
            'data' => $customer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->fill($request->all());
        $customer->save();

         return redirect('/customers')->with([
            'mess' => 'Data berhasil disimpan',
         ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return redirect('/customers')->with([
            'mess' => 'Data berhasil dihapus',
        ]);
    }
}
