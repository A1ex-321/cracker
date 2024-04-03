@extends('admin.layouts.app')

@section('content')
<style>
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

    #ddd {
        margin-left: -187px;
    }
</style>
<style>
    /* Optional: Style your button */
    .print-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<main id="main" class="main">
    <section class="section dashboard" style="margin-left: -260px;">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-0">
                        <div class="col-sm-6">
                            <h1 class="m-0">Order list</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"> <button style="padding:4px;height:29px;"class="print-button" onclick="window.print()"><i class="fas fa-print print-icon"></i>Print</button>
                                </li>  -->
                                <li class="breadcrumb-item">
                                    <a href="{{ route('generate-pdf', ['orderId' => $order['id']]) }}" class="btn btn-primary" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;color:white;">
                                        <i class="fas fa-file-pdf"></i> Download
                                    </a>
                                </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @include('admin.layouts.message')
                <div style="align-items:center;margin-left:350px;">
                    <p><strong>Name :</strong> {{ $order['name'] }}</p>
                    <p><strong>Number :</strong> {{ $order['number'] }}</p>
                    <p><strong>Address :</strong> {{ $order['address'] }}</p>
                    <p><strong>State :</strong> {{ $order['state'] }}</p>
                    <p><strong>City :</strong> {{ $order['city'] }}</p>
                    <p><strong>Pincode :</strong> {{ $order['pincode'] }}</p>
                </div>
                <!-- <div style="float: right; width: 50%;margin-top:10px;">
                <h2>YANAI CRACKERS</h2>
                <p>7 F-1 Busstand Backside,</p>
                <p>Gandhi Road</p>
                <p>Deivanai Nagar, Sivakasi – 626123</p>
                <p>8144664353</p>
            </div> -->
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
                        <td colspan="4"><strong style="margin-left:711px;">Total:</strong></td>
                        <td><strong>{{ $totalAmount }}</strong></td>
                    </tr>
                </tbody>

            </table>
        </div>

        <!-- Modal -->


    </section>
</main>

@endsection

@section('style')
<!-- Include any custom styles here -->
@endsection