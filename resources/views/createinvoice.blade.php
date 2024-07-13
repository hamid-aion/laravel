<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
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
            width: 100%;
        }

/* Full-width input fields */
input[type=text], input[type=number],input[type=double] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=number], input[type=double]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 4px 2px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

  <div class="container">
    <h1>Add Invoice</h1>
    <p>Please fill in this form to create an Invoice.</p>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
<form action="{{ route('Invoices.store') }}" method="POST">
    @csrf
    
    <label for="customer_name"><b>Name</b></label>
    <input type="text" placeholder="Enter Customer Name" name="customer_name" id="customer_name">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Customer Email" name="customer_email" id="customer_email">

    <label for="amount"><b>Amount</b></label>
    <input type="number" placeholder="Enter Amount" name="amount" id="amount">
    <label for="invoice_date"><b>Invoice Date</b></label>
    <input type="date" placeholder="Enter Invoice Date" name="invoice_date" id="invoice_date">
    <br>
    <br>

    <label for="status"><b>Status</b></label>
    <input type="text" placeholder="Enter status" name="status" id="status">
    <hr>
   <div>
    <button type="submit" class="registerbtn">Add Invoice</button>
  </div>
</form>
<a class="button" href="{{route('Invoices.index')}}" >Cancel</a>
  </div>
</body>
</html>
