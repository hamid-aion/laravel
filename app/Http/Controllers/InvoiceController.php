<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices=Invoice::simplePaginate(5);
       return view('Invoice.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $errors=$request->validate([
            'customer_name'=> ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'customer_email' => 'required|email|unique:invoices,customer_email',
            'amount'=> 'required',
            'invoice_date' => 'required|date',
            'status' => 'required|string'

        ],
        [
            'customer_name.required' => 'The name field is required',
            'customer_name.regex' => 'The name must contain only letters and spaces',
            'customer_email.required' => 'The email field is required',
            'customer_email.email' =>'Plese enter a valid email address',
            'customer_email.unique' => 'The email address is already taken'
        ]
    );
        Invoice::create($errors);
        return redirect()->route('Invoices.index')->with('success','Invoice has been create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $invoice=Invoice::find($id);
        return view('Invoice.show',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $invoice=Invoice::find($id);
        return view('Invoice.edit',compact('invoice'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $errors=$request->validate([
            'customer_name'=> ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'customer_email' => 'required|email',
            'amount'=> 'required',
            'invoice_date' => 'required|date',
            'status' => 'required|string'
        ]
    );
        $invoice=Invoice::find($id);
        $invoice->customer_name=$request->customer_name;
        $invoice->customer_email=$request->customer_email;
        $invoice->amount=$request->amount;
        $invoice->invoice_date=$request->invoice_date;
        $invoice->status=$request->status;
        $invoice->save();
        return redirect()->route('Invoices.index')->with('status','Invoice has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $invoice=Invoice::find($id);
        $invoice->delete();
        return redirect()->route('Invoices.index');
    }
}
