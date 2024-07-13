<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

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

        .button {
            background-color: #04AA6D;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Invoices Details</h1>
    <br>
    <br>
    <a href="{{route('Invoices.create')}}" class="button">Add New Invoice</a>

    <table id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Amount</th>
                <th>Invoice Date</th>
                <th>Status</th>
                <th colspan="3" style="text-align: center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->customer_name }}</td>
                    <td>{{ $invoice->customer_email }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->invoice_date }}</td>
                    <td>{{ $invoice->status }}</td>
                    <td><a class="button" href="{{route('Invoices.edit',$invoice->id)}}">Edit</a></td>
                    <td><a class="button" href="{{route('Invoices.show', $invoice->id)}}" >View</button></td>
                    <form  action="{{route('Invoices.destroy', $invoice->id)}}" method="POST" >
                       @csrf
                       @method('DELETE') 
                    <td><button type="submit" class="button btn btn-danger">Delete</button></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
