<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .details {
            margin-bottom: 20px;
        }

        .details h2 {
            margin-top: 0;
        }

        .details p {
            margin-bottom: 5px;
        }

        .logo {
            max-width: 200px;
            max-height: 250px;
            display: block;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        #ddd{
float:right;        }
    </style>
</head>

<body>
    <div class="container">
        <div style="text-align: center;">
            @if($logo)
            <img id="ddd"src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/' . $logo['image']))) }}" alt="Logo" class="logo">
            @endif
            <h1 style="margin-left:-201px;">Order Details</h1>

        </div>
        <div class="details">
            <div style="float: left; width: 50%;">
                <p><strong>Name:</strong> {{ $order['name'] }}</p>
                <p><strong>Number:</strong> {{ $order['number'] }}</p>
                <p><strong>Address:</strong> {{ $order['address'] }}</p>
                <p><strong>State:</strong> {{ $order['state'] }}</p>
                <p><strong>City:</strong> {{ $order['city'] }}</p>
                <p><strong>Pincode:</strong> {{ $order['pincode'] }}</p>
            </div>
            <div style="float: right; width: 50%;margin-top:10px;">
                <h2>YANAI CRACKERS</h2>
                <p>7 F-1 Busstand Backside,</p>
                <p>Gandhi Road</p>
                <p>Deivanai Nagar, Sivakasi – 626123</p>
                <p>8144664353</p>
            </div>
            <div style="clear: both;"></div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                @php
                $totalAmount = 0;
                @endphp

                @foreach(json_decode($order['cartItems'], true) as $item)
                <tr>
                    <td>
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents($item['image'])) }}" alt="Product Image" style="max-width: 50px; max-height: 50px;">
                    </td>
                    <td>{{ $item['productName'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['totalAmount'] }}</td>
                </tr>
                @php
                $totalAmount += $item['totalAmount'];
                @endphp
                @endforeach

                <tr>
                    <td colspan="4"><strong style="margin-left:491px;">Total:</strong></td>
                    <td><strong>{{ $totalAmount }}</strong></td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>
