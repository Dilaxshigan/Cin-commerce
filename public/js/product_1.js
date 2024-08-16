        // Update price and quantity
        function updatePriceAndQuantity() {
            const prices = {
                150: 150,
                250: 250,
                1000: 1000,
                2000: 2000
            };
            const productWeight = 125; // grams

            const weightSelection = document.getElementById('weight-selection');
            const quantityInput = document.getElementById('quantity');

            const selectedWeight = weightSelection.value;
            const quantity = quantityInput.value;

            const pricePerUnit = prices[selectedWeight];
            const totalPrice = pricePerUnit * quantity;

            const totalWeight = Math.ceil((selectedWeight * quantity) / productWeight);

            document.getElementById('price-per-unit').innerText = pricePerUnit.toFixed(2);
            document.getElementById('total-price').innerText = totalPrice.toFixed(2);
        }

        // Add item to cart
        let modelCount = 0;

        function addToCart() {
            modelCount++;
            const modelNumber = `CGC00080${modelCount}`;
            const weight = document.getElementById('weight-selection').value;
            const quantity = document.getElementById('quantity').value;
            const totalPrice = document.getElementById('total-price').innerText;

            const cartItem = {
                modelNumber,
                weight,
                quantity,
                totalPrice
            };

            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems.push(cartItem);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            const spanElement = document.querySelector('.card_lenth');
            spanElement.textContent = cartItems.length;
            // alert();
            alert('Item added to cart!');
        }

        // Update price and quantity initially
        document.addEventListener('DOMContentLoaded', updatePriceAndQuantity);
