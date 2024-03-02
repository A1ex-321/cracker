@extends('admin.layouts.app')

@section('content')

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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @include('admin.layouts.message')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Enabled Items</h5>

                                    <!-- Table with stripped rows -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover datatable">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Phone number</th>
                                                    <th>Address</th>
                                                    <th>state</th>
                                                    <th>City</th>
                                                    <th>Pin code</th>
                                                    <th>Orders</th>
                                                    <th>Edit & Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $counter = 1; @endphp
                                                @foreach ($order as $value)
                                                <tr>
                                                    <td>{{ $counter++ }}</td>
                                                    <td>{{ $value->name}}</td>
                                                    <td>{{ $value->number}}</td>
                                                    <td>{{ $value->address}}</td>
                                                    <td>{{ $value->state}}</td>
                                                    <td>{{ $value->city}}</td>
                                                    <td>{{ $value->pincode}}</td>
                                                    <td>
                                                        <button onclick="captureOrder({{ json_encode($value->cartItems) }})" type="button" class="btn btn-primary">Order</button>
                                                    </td>
                                                    <td>
                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/order/delete/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Table with stripped rows -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="itemListModal" tabindex="-1" role="dialog" aria-labelledby="itemListModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="itemListModalLabel">Item List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <!-- Add more table headers as needed -->
                                </tr>
                            </thead>
                            <tbody id="itemList">
                                <!-- Item rows will be dynamically added here -->
                            </tbody>
                        </table>
                        <div style="margin-left: 577px; font-size:21px;">
                            <span>Total :</span>
                            <span id="total"></span>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
</main>

@endsection

@section('style')
<!-- Include any custom styles here -->
@endsection

<script>
    function captureOrder(cartItemsJSON) {
    // Parse the JSON string into a JavaScript object
    var cartItems = JSON.parse(cartItemsJSON);

    // Show the modal
    $('#itemListModal').modal('show');

    // Get the tbody element where we'll insert the table rows
    var itemList = document.getElementById('itemList');

    // Clear any existing content in the tbody
    itemList.innerHTML = '';

    // Initialize total variable
    var total = 0;

    // Check if cartItems is an array
    if (Array.isArray(cartItems)) {
        // Loop through each item in cartItems and generate table rows
        cartItems.forEach(function(item, index) {
            var row = `
                <tr>
                    <td>${index + 1}</td>
                    <td><img src="${item.image}" alt="Image" style="width: 50px;"></td>
                    <td>${item.productName}</td>
                    <td>₹${item.price}</td>
                    <td>${item.quantity}</td>
                    <td>₹${item.totalAmount}</td>
                </tr>
            `;
            itemList.insertAdjacentHTML('beforeend', row);

            // Add the totalAmount of the current item to the total
            total += parseFloat(item.totalAmount);
        });

        // Update the #total span with the calculated total
        document.getElementById('total').textContent = total.toFixed(2); // Adjust decimal places as needed
    } else {
        console.error('cartItems is not an array');
    }
}

</script>