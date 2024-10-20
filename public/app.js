let cart = [];
let totalPrice = 0;

function addToCart(productName, productPrice) {

    cart.push({ name: productName, price: productPrice });


    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cartItems');
    const totalPriceElement = document.getElementById('totalPrice');

    cartItems.innerHTML = '';

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - ${item.price}€`;
        cartItems.appendChild(li);
    });

    totalPrice = cart.reduce((sum, item) => sum + item.price, 0);
    totalPriceElement.textContent = `Total : ${totalPrice}€`;
}
