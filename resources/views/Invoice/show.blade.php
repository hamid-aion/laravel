
@extends('layouts.app')

@section('title', 'Invoice List')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            font-size: 1rem;
            margin: 10px 0;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #04AA6D;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Invoice Details</h1>
        <div>
            <p><strong>ID:</strong> {{ $invoice->id }}</p>
            <p><strong>Name:</strong> {{ $invoice->customer_name }}</p>
            <p><strong>Email:</strong> {{ $invoice->customer_email }}</p>
            <p><strong>Amount:</strong>{{ $invoice->amount }}</p>
            <p><strong>Invoice Date:</strong>{{ $invoice->invoice_date }}</p>
            <p><strong>Status:</strong>{{ $invoice->status }}</p>
        </div>
        <a href="{{route('Invoices.index')}}" class="back-link">Back to List</a>
    </div>
</body>
</html>
@endsection
