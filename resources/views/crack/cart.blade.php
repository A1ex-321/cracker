@extends('crack.layout.app')

@section('content')
<style>
    .tick-button {
        background-color: green;
        color: white;
        border: none;
        /* Remove border */
    }
</style>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Cart Items</h2>
                    <ul>
                        <li>
                            <a>Home</a>
                        </li>
                        <li>
                            <span>/</span>
                        </li>
                        <li>
                            Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->


<section class="offer-are mycart offer-area-four pt-100 pb-70 mt-5">
    <div class="px-3">
        <h1 class="px-0 mt-1 mb-3">My Cart</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 list">
                <div class="cart-items col-lg-8 col-sm-12 col-md-12">
                    <div id="cartItemsContainer" class="col-lg-12">
                        <!-- Cart items will be dynamically added here -->
                    </div>


                    <div class="cart-end">
                        <div class="remove-all">
                            <a></a>
                        </div>
                        <div class="add-more">
                            <a href="{{route('/')}}">Add More Item</a>
                        </div>
                        <div class="add-more">
                            <a style="background-color:green;" href="{{route('/')}}">update cart</a>
                        </div>
                    </div>

                </div>
                <div class="checkout col-lg-4">
                    <div class="total-sec">
                        <div class="total-title">
                            <h5>Grant Total</h5>
                        </div>
                        <div class="sub-total">
                            <h6>Sub Total :</h6>
                            <h6>₹0.00</h6>
                        </div>
                        <div class="gst">
                            <h6>GST :</h6>
                            <h6>₹0.00</h6>
                        </div>
                        <div class="fee">
                            <h6>Handling Fee :</h6>
                            <h6>₹0.00</h6>
                        </div>
                        <div class="checkout-btn">
                            <a href="details1.html">
                                <h6>Checkout</h6>
                                <h6>₹0.00</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var cartItemsContainer = document.getElementById('cartItemsContainer');

        // Retrieve cart items from local storage
        var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Check if the cartItems array is empty
        if (cartItems.length === 0) {
            // If the array is empty, display a message indicating that the cart is empty
            var emptyCartMessage = document.createElement('p');
            emptyCartMessage.textContent = 'Your cart is empty.';
            cartItemsContainer.appendChild(emptyCartMessage);
        } else {
            // Render cart items
            cartItems.forEach(function(item) {
                var cartItemElement = document.createElement('div');
                cartItemElement.classList.add('cart', 'cart1', 'col-lg-12');
                cartItemElement.setAttribute('id', 'cartItem_' + item.id);

                cartItemElement.innerHTML = `
    <div class="cart-left" style="width: 100px;">
        <img src="${item.image}" alt="" height="70" width="70">
    </div>
    <div class="cart-mid1"style="width: 100px;">
        <h6>${item.productName}</h6>
        <a href="#" data-item-id="${item.id}" onclick="removeItem('${item.id}'); return false;">Remove</a>
    </div>
    <div class="cart-mid2">
        <h6 style="max-width: 100px;">Quantity: ${item.quantity}</h6>
    </div>
    <div class="cart-mid3"style="width: 100px;">
        <h6>Price: ₹${item.price}</h6>
    </div>
    <div class="cart-mid2"style="width: 150px;">
        <div class="quantity-input">
            <button class="btn btn-orange btn-sm qty-btn" onclick="decrementQty('${item.id}', ${item.price}, ${item.quantity})" style="display: flex; justify-content: center; align-items: center;">-</button>
            <input type="number" class="qty" readonly value="${item.quantity}">
            <button class="btn btn-orange btn-sm qty-btn" onclick="incrementQty('${item.id}', ${item.price}, ${item.quantity})" style="display: flex; justify-content: center; align-items: center;">+</button>
            <button class="btn btn-orange btn-sm qty-btn tick-button" onclick="" style="display: flex;display:none; justify-content: center; align-items: center;">
                &#10004; <!-- Tick symbol HTML entity -->
            </button>
        </div>
    </div>
    <div class="cart-right"style="width: 111px;">
        <h6>Total: ₹${item.totalAmount}</h6>
    </div>
`;


                // Append the cart item element to the container
                cartItemsContainer.appendChild(cartItemElement);
            });
        }
    });

    function incrementQty(itemId, price, qty) {
        var quantityInput = document.getElementById('cartItem_' + itemId);
        var qtyElement = quantityInput.querySelector('.cart-mid2 h6');
        var qtyInput = quantityInput.querySelector('.qty');
        var totalAmountElement = quantityInput.querySelector('.cart-right h6');
        var tickButton = quantityInput.querySelector('.tick-button'); // Select the tick button

        var qtyText = qtyElement.textContent.trim(); // Get the text content and remove leading/trailing whitespace
        var currentQty = parseInt(qtyText.split(':')[1].trim()); // Extract current quantity value

        // Increment the quantity value
        var newQty = currentQty + 1;

        // Update the quantity displayed in the HTML
        qtyElement.textContent = "Quantity: " + newQty;

        // Update the value of the input element
        qtyInput.value = newQty;

        // Update the total amount displayed in the HTML
        var currentTotalAmount = parseFloat(totalAmountElement.textContent.split('₹')[1].trim()); // Extract numeric value from the total amount
        var newTotalAmount = currentTotalAmount + price; // Calculate new total amount
        totalAmountElement.textContent = "Total: ₹" + newTotalAmount.toFixed(2); // Update HTML content

        // Show the tick button
        // tickButton.style.display = 'block';
    }


    function decrementQty(itemId, price, qty) {
        var quantityInput = document.getElementById('cartItem_' + itemId);
        var qtyElement = quantityInput.querySelector('.cart-mid2 h6');
        var qtyInput = quantityInput.querySelector('.qty');
        var totalAmountElement = quantityInput.querySelector('.cart-right h6');
        var tickButton = quantityInput.querySelector('.tick-button'); // Select the tick button

        var qtyText = qtyElement.textContent.trim(); // Get the text content and remove leading/trailing whitespace
        var currentQty = parseInt(qtyText.split(':')[1].trim()); // Extract current quantity value

        // Ensure the current quantity is greater than 1 before decrementing
        if (currentQty > 1) {
            var newQty = currentQty - 1; // Decrement the quantity value

            // Update the quantity displayed in the HTML
            qtyElement.textContent = "Quantity: " + newQty;

            // Update the value of the input element
            qtyInput.value = newQty;

            // Update the total amount displayed in the HTML
            var currentTotalAmount = parseFloat(totalAmountElement.textContent.split('₹')[1].trim()); // Extract numeric value from the total amount
            var newTotalAmount = currentTotalAmount - price; // Calculate new total amount
            totalAmountElement.textContent = "Total: ₹" + newTotalAmount.toFixed(2); // Update HTML content
        }

        // Show the tick button
        // tickButton.style.display = 'block';
    }




    function removeItem(itemId) {
        var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Find the index of the item in the cartItems array based on its ID
        var index = cartItems.findIndex(function(item) {
            return item.id === itemId;
        });

        // If the item is found, remove it from the cartItems array
        if (index !== -1) {
            cartItems.splice(index, 1);
            // Update the local storage with the updated cartItems array
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            // Remove the corresponding HTML element from the DOM
            var cartItemElement = document.getElementById('cartItem_' + itemId);
            cartItemElement.parentNode.removeChild(cartItemElement);

            // Update total amount in checkout button
            updateCheckoutTotal(cartItems);
            updateSubTotal(cartItems);
            // If cartItems array is empty, display a message indicating that the cart is empty
            if (cartItems.length === 0) {
                var cartItemsContainer = document.getElementById('cartItemsContainer');
                var emptyCartMessage = document.createElement('p');
                emptyCartMessage.textContent = 'Your cart is empty.';
                cartItemsContainer.appendChild(emptyCartMessage);
            }
        }
    }

    function updateCheckoutTotal(cartItems) {
        var checkoutBtn = document.querySelector('.checkout-btn');

        // Compute total amount
        var totalAmount = cartItems.reduce(function(acc, item) {
            return acc + parseFloat(item.totalAmount);
        }, 0);

        // Update HTML content
        checkoutBtn.innerHTML = `
        <a >
            <h6>Checkout</h6>
            <h6>₹${totalAmount.toFixed(2)}</h6>
        </a>
    `;
    }

    function updateSubTotal(cartItems) {
        var subTotalContainer = document.querySelector('.sub-total');

        // Compute total amount
        var totalAmount = cartItems.reduce(function(acc, item) {
            return acc + parseFloat(item.totalAmount);
        }, 0);

        // Update HTML content
        subTotalContainer.innerHTML = `
        <h6>Sub Total :</h6>
        <h6>₹${totalAmount.toFixed(2)}</h6>
    `;
    }
    document.addEventListener('DOMContentLoaded', function() {
        var subTotalContainer = document.querySelector('.sub-total');
        var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Compute sub-total amount
        var subTotalAmount = cartItems.reduce(function(acc, item) {
            return acc + parseFloat(item.totalAmount);
        }, 0);

        // Update HTML content
        subTotalContainer.innerHTML = `
        <h6>Sub Total :</h6>
        <h6>₹${subTotalAmount.toFixed(2)}</h6>
    `;
    });
    document.addEventListener('DOMContentLoaded', function() {

        var checkoutBtn = document.querySelector('.checkout-btn');
        var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Compute total amount
        var totalAmount = cartItems.reduce(function(acc, item) {
            return acc + parseFloat(item.totalAmount);
        }, 0);

        // Update HTML content
        checkoutBtn.innerHTML = `
        <a >
            <h6>Checkout</h6>
            <h6>₹${totalAmount.toFixed(2)}</h6>
        </a>
    `;
    });
</script>
@push('scripts')

@endpush