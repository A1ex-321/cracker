// Function to increment and decrement quantity
function incrementQuantity(button) {
    const row = button.closest('tr');
    const quantityInput = row.querySelector('.quantity');
    const totalAmountElement = row.querySelector('.total-amount');
    const price = parseFloat(row.querySelector('td:nth-child(4)').textContent.replace('₹', '').trim());
    let quantity = parseInt(quantityInput.value);

    quantity++;
    quantityInput.value = quantity;
    totalAmountElement.textContent = `₹${(price * quantity).toFixed(2)}`;
}

function decrementQuantity(button) {
    const row = button.closest('tr');
    const quantityInput = row.querySelector('.quantity');
    const totalAmountElement = row.querySelector('.total-amount');
    const price = parseFloat(row.querySelector('td:nth-child(4)').textContent.replace('₹', '').trim());
    let quantity = parseInt(quantityInput.value);

    if (quantity > 0) {
        quantity--;
        quantityInput.value = quantity;
        totalAmountElement.textContent = `₹${(price * quantity).toFixed(2)}`;
    }
}

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




