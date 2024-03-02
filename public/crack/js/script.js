// Function to increment and decrement quantity

function incrementQuantity(itemId, price) {
    var quantityInput = document.getElementById('quantity_' + itemId);
    var totalAmount = document.getElementById('total_amount_' + itemId);
    var quantity = parseInt(quantityInput.value) + 1;
    quantityInput.value = quantity;
    totalAmount.textContent = (parseFloat(totalAmount.textContent) + parseFloat(price)).toFixed(2);
    updateTotalAmount()
    // localStorage.removeItem('cartItems');

}

function decrementQuantity(itemId, price) {
    var quantityInput = document.getElementById('quantity_' + itemId);
    var totalAmount = document.getElementById('total_amount_' + itemId);
    var quantity = parseInt(quantityInput.value) - 1;

    // Ensure the total amount doesn't go below 0
    if (quantity >= 0) {
        // Update the quantity input field
        quantityInput.value = quantity;

        // Update the total amount only if the quantity is greater than 0
        totalAmount.textContent = (parseFloat(totalAmount.textContent) - parseFloat(price)).toFixed(2);
    }

    // Update the total amount display
    updateTotalAmount1();
}


// Function to update the total amount based on the quantities of all items
function updateTotalAmount() {
    var totalAmount = 0;
    var quantityInputs = document.querySelectorAll('.item-right .total'); // Select all quantity input fields

    quantityInputs.forEach(function(span) {
        totalAmount += parseInt(span.textContent); // Calculate the total amount using textContent
    });
    
    document.getElementById('total_amount').textContent = totalAmount.toFixed(2); // Update the total amount display
}
function updateTotalAmount1() {
    var totalAmount = 0;
    var quantityInputs = document.querySelectorAll('.item-right .total'); // Select all quantity input fields

    quantityInputs.forEach(function(span) {
        var amountText = span.textContent.replace('-', ''); // Remove the "-" character
        totalAmount += parseInt(amountText); // Calculate the total amount using textContent
    });
    
    document.getElementById('total_amount').textContent = totalAmount.toFixed(2); // Update the total amount display
}
function addToCart(routeUrl) {
    var itemDivs = document.querySelectorAll('#items');

    // Retrieve existing cart items from local storage
    var existingItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    itemDivs.forEach(function(itemDiv) {
        var totalAmountElement = itemDiv.querySelector('.total-amount');
        var totalAmountValue = parseFloat(totalAmountElement.innerText);

        if (totalAmountValue > 0) {
            var product1 = itemDiv.querySelector('.item-mid h6');
            var product = product1.innerText;

            var productPriceElement = itemDiv.querySelector('.item-mid #pri');
            var id1 = itemDiv.querySelector('.item-mid #itemid');
            var totalPriceElement = itemDiv.querySelector('.item-right .total-amount');

            var price = parseFloat(productPriceElement.innerText.match(/\d+/)[0]);
            var total = parseFloat(totalPriceElement.innerText);
            var quantity = total / price;

            var imageElement = itemDiv.querySelector('.item-left img');
            var imageUrl = imageElement.getAttribute('src');
            var id = id1.innerText;

            // Check if the item already exists in the cartItems array
            var existingItem = existingItems.find(function(item) {
                return item.id === id;
            });

            if (existingItem) {
                // If the item exists, update its quantity and total amount
                existingItem.quantity += quantity;
                existingItem.totalAmount += total;
            } else {
                // If the item doesn't exist, create a new item information object
                var itemInfo = {
                    id: id,
                    productName: product,
                    price: price,
                    totalAmount: total,
                    quantity: quantity,
                    image: imageUrl
                };
                // Push the new item information object to the existingItems array
                existingItems.push(itemInfo);
            }
        }
    });

    // Store the updated array containing all item information in localStorage
    localStorage.setItem('cartItems', JSON.stringify(existingItems));
    console.log("local", existingItems);

    // Redirect to the route URL
    window.location.href = routeUrl;
}




    document.addEventListener('DOMContentLoaded', function() {
        var subTotalContainer = document.querySelector('#pay');
        var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Compute sub-total amount
        var subTotalAmount = cartItems.reduce(function(acc, item) {
            return acc + parseFloat(item.totalAmount);
        }, 0);

        // Update HTML content
        subTotalContainer.innerHTML = `₹${subTotalAmount.toFixed(2)}`;
    });

   
    function removeCartItems() {
        // Remove cartItems from local storage
        console.log("fdafd");
        localStorage.removeItem('cartItems');
    }



    // Execute the script when the document is ready
    $(document).ready(function() {
        console.log("Page is ready");

        // Get the machine ID from the query parameter in the URL
        var urlParams = new URLSearchParams(window.location.search);
        var machineId = urlParams.get('id');
        console.log("Machine ID:", machineId);

        // Scroll to the element with the corresponding ID
        if (machineId) {
            var element = $('#' + machineId);
            if (element.length) {
                // Adjust the speed and offset as per your requirements
                var speed = 1; // Speed in milliseconds (e.g., 1500ms = 1.5 seconds)
                var offset = 100; // Offset from the top in pixels
        
                $('html, body').animate({
                    scrollTop: element.offset().top - offset // Adjust the offset
                }, speed);
            }
        }
        
        
    });






// var cart = JSON.parse(localStorage.getItem('cart')) || [];
// var itemIndex = cart.findIndex(item => item.id === itemId);
// if (itemIndex !== -1) {
//     cart[itemIndex].quantity++;
// } else {
//     cart.push({ id: itemId, name: itemName, price: itemPrice, quantity: 1 });
// }
// localStorage.setItem('cart', JSON.stringify(cart));



// Call the updateTotalAmount function whenever a quantity input changes
// document.querySelectorAll('.quantity-input input').forEach(function(input) {
//     input.addEventListener('input', updateTotalAmount);
// });

// function incrementQuantity(button) {
//     const row = button.closest('tr');
//     const quantityInput = row.querySelector('.quantity');
//     const totalAmountElement = row.querySelector('.total-amount');
//     const price = parseFloat(row.querySelector('td:nth-child(4)').textContent.replace('₹', '').trim());
//     let quantity = parseInt(quantityInput.value);

//     quantity++;
//     quantityInput.value = quantity;
//     totalAmountElement.textContent = `₹${(price * quantity).toFixed(2)}`;
// }

// function decrementQuantity(button) {
//     const row = button.closest('tr');
//     const quantityInput = row.querySelector('.quantity');
//     const totalAmountElement = row.querySelector('.total-amount');
//     const price = parseFloat(row.querySelector('td:nth-child(4)').textContent.replace('₹', '').trim());
//     let quantity = parseInt(quantityInput.value);

//     if (quantity > 0) {
//         quantity--;
//         quantityInput.value = quantity;
//         totalAmountElement.textContent = `₹${(price * quantity).toFixed(2)}`;
//     }
// }

// Initial calculation for total amount
document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('tbody tr');
    rows.forEach((row) => {
        const quantityInput = row.querySelector('.quantity');
        const totalAmountElement = row.querySelector('.total-amount');
        const price = parseFloat(row.querySelector('td:nth-child(4)').textContent.replace('₹', '').trim());
        let quantity = parseInt(quantityInput.value);
        totalAmountElement.textContent = `₹${(price * quantity).toFixed(2)}`;
    });
});



const sliderContainer = document.querySelector('.slider-container');
const slides = document.querySelectorAll('.slider-slide');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
let currentSlide = 0;

function showSlide(slideIndex) {
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${100 * (index - slideIndex)}%)`;
    });
}

prevButton.addEventListener('click', () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
});

nextButton.addEventListener('click', () => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
});

showSlide(currentSlide);




