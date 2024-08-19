function displayCartItems() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalContainer = document.getElementById('cart-total');

// alert(cartItems.length);

    cartItemsContainer.innerHTML = '';
    cartTotalContainer.innerHTML = '';

    if (cartItems.length === 0) {
        cartItemsContainer.innerHTML = '<p class="empty-cart">Your cart is empty.</p>';
        return;
    }

    let totalAmount = 0;


    cartItems.forEach((item, index) => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'cart-item';
        itemDiv.style.display = 'flex';
        itemDiv.style.alignItems = 'center';
        itemDiv.innerHTML = `
            <img src="img/product/1.jpg" style="width: 20%; padding: 10px; border-radius: 5%;" class="card-img-top" alt="Product Image">
            <div style="margin-left: 20px;">
                <strong>Product ${index + 1}:</strong><br>
                Model Number: ${item.modelNumber}<br>
                Weight: ${item.weight}g<br>
                Quantity: ${item.quantity}<br>
                Total Price: Rs ${item.totalPrice}
                <button class="delete-item btn btn-custom fw-semibold text-uppercase text-decoration-none mx-2" data-index="${index}">Delete</button>
                <button class="delete-icon" data-index="${index}" style="margin-left: 5px; background: none; border: none; cursor: pointer;">
                    <i class="fas fa-trash-alt" style="color: red;"></i>
                </button>
            </div>
            <hr>
        `;
        cartItemsContainer.appendChild(itemDiv);

        const itemTotalPrice = parseFloat(item.totalPrice);
        if (!isNaN(itemTotalPrice)) {
            totalAmount += itemTotalPrice;
        }
    });

    cartTotalContainer.innerHTML = `
        <div style="text-align: right;">
            <strong style="font-size: 1.2em;color:#945336">Total Amount: Rs ${totalAmount.toFixed(2)}</strong><br>
            <a href="#" id="continue-button" class="btn btn-custom fw-semibold text-uppercase text-decoration-none my-1" style="color: #210f0a;">Continue</a>
        </div>
    `;


    document.querySelectorAll('.delete-item').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            deleteCartItem(index);
        });
    });


    document.querySelectorAll('.delete-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            deleteCartItem(index);

        });
    });

    // Add event listener for the "Continue" button
    document.getElementById('continue-button').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('contact-form-container').style.display = 'block';
    });
}


function deleteCartItem(index) {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    cartItems.splice(index, 1);
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    displayCartItems();
}


document.addEventListener('DOMContentLoaded', displayCartItems);