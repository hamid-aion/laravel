<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        /* a:link,
        a:visited {
            background-color: #04AA6D;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover,
        a:active {
            background-color: rgb(0, 255, 42);
        } */

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Details of Invoice - {{ $invoice->name }}</h1>
    <br>
    <br>
    <a href="{{route('Invoices.index')}}">back</a>
    <br>
    <br>
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Amount</th>
            <th>Invoice Date</th>
            <th>Status</th>
            <tbody>
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->customer_name }}</td>
                    <td>{{ $invoice->customer_email }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->invoice_date }}</td>
                    <td>{{ $invoice->status }}</td>
                    <div>
                    </div>
                </tr>
        </tr>
        </tbody>
    </table>

</body>

</html>
