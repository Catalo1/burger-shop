<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borgeran - Menu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header/Navigation -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Borgeran Logo">
                    <span>Borgeran</span>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="/" class="nav-link">Home</a></li>
                        <li><a href="/menu" class="nav-link active">Menu</a></li>
                        <li><a href="#" class="nav-link">Restaurants</a></li>
                        <li><a href="#" class="nav-link">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="auth-buttons">
                    <a href="#" class="btn-auth">Login/Sign up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu Content -->
    <section class="menu-page">
        <div class="container">
            <div class="menu-wrapper">
                <!-- Main Menu Content -->
                <div class="menu-content">
                    <h1 class="menu-title">Menu</h1>
                    
                    <!-- Clear All Items Button -->
                    <div class="menu-actions">
                    </div>

                    <!-- Burgers Section -->
                    <section class="menu-category-section">
                        <div class="category-header">
                            <h2>Burgers</h2>
                        </div>
                        <div class="menu-items-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/classic-cheese-burger.png') }}" alt="Classic Cheese Burger">
                                </div>
                                <div class="item-details">
                                    <h3>Classic Cheese Burger</h3>
                                    <p>A classic burger with melted cheese, fresh lettuce, tomato, and our special sauce on a toasted bun.</p>
                                    <div class="item-price">₱ 249</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('classic-cheese-burger')">-</button>
                                        <span class="quantity" id="classic-cheese-burger-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('classic-cheese-burger', 'Classic Cheese Burger', 249)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/double-cheese-burger.png') }}" alt="Double Cheese Burger">
                                </div>
                                <div class="item-details">
                                    <h3>Double Cheese Burger</h3>
                                    <p>Double the cheese, double the flavor! Two beef patties with melted cheese and fresh toppings.</p>
                                    <div class="item-price">₱ 349</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('double-cheese-burger')">-</button>
                                        <span class="quantity" id="double-cheese-burger-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('double-cheese-burger', 'Double Cheese Burger', 349)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/bacon-burger.png') }}" alt="Bacon Burger">
                                </div>
                                <div class="item-details">
                                    <h3>Bacon Burger</h3>
                                    <p>Crispy bacon with beef patty, cheese, and fresh vegetables on a sesame seed bun.</p>
                                    <div class="item-price">₱ 299</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('bacon-burger')">-</button>
                                        <span class="quantity" id="bacon-burger-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('bacon-burger', 'Bacon Burger', 299)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/classic-cheese-burger-meal.png') }}" alt="Classic Cheese Burger Meal">
                                </div>
                                <div class="item-details">
                                    <h3>Classic Cheese Burger Meal</h3>
                                    <p>Classic cheese burger with fries and a drink. Perfect combo for a complete meal.</p>
                                    <div class="item-price">₱ 399</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('classic-cheese-burger-meal')">-</button>
                                        <span class="quantity" id="classic-cheese-burger-meal-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('classic-cheese-burger-meal', 'Classic Cheese Burger Meal', 399)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/double-cheese-burger-meal.png') }}" alt="Double Cheese Burger Meal">
                                </div>
                                <div class="item-details">
                                    <h3>Double Cheese Burger Meal</h3>
                                    <p>Double cheese burger with fries and a drink. Ultimate satisfaction guaranteed.</p>
                                    <div class="item-price">₱ 499</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('double-cheese-burger-meal')">-</button>
                                        <span class="quantity" id="double-cheese-burger-meal-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('double-cheese-burger-meal', 'Double Cheese Burger Meal', 499)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/bacon-burger-meal.png') }}" alt="Bacon Burger Meal">
                                </div>
                                <div class="item-details">
                                    <h3>Bacon Burger Meal</h3>
                                    <p>Bacon burger with fries and a drink. A hearty meal for bacon lovers.</p>
                                    <div class="item-price">₱ 449</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('bacon-burger-meal')">-</button>
                                        <span class="quantity" id="bacon-burger-meal-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('bacon-burger-meal', 'Bacon Burger Meal', 449)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Nuggets Section -->
                    <section class="menu-category-section">
                        <div class="category-header">
                            <h2>Nuggets</h2>
                        </div>
                        <div class="menu-items-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/6pc-nuggets.png') }}" alt="6 pc Nuggets">
                                </div>
                                <div class="item-details">
                                    <h3>6 pc Nuggets</h3>
                                    <p>Six pieces of crispy chicken nuggets served with your choice of dipping sauce.</p>
                                    <div class="item-price">₱ 149</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('6pc-nuggets')">-</button>
                                        <span class="quantity" id="6pc-nuggets-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('6pc-nuggets', '6 pc Nuggets', 149)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/8pc-nuggets.png') }}" alt="8 pc Nuggets">
                                </div>
                                <div class="item-details">
                                    <h3>8 pc Nuggets</h3>
                                    <p>Eight pieces of golden crispy chicken nuggets with dipping sauce.</p>
                                    <div class="item-price">₱ 199</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('8pc-nuggets')">-</button>
                                        <span class="quantity" id="8pc-nuggets-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('8pc-nuggets', '8 pc Nuggets', 199)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Fries Section -->
                    <section class="menu-category-section">
                        <div class="category-header">
                            <h2>Fries</h2>
                        </div>
                        <div class="menu-items-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/fries.png') }}" alt="Fries">
                                </div>
                                <div class="item-details">
                                    <h3>Fries</h3>
                                    <p>Golden crispy french fries seasoned to perfection.</p>
                                    <div class="item-price">₱ 89</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('fries')">-</button>
                                        <span class="quantity" id="fries-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('fries', 'Fries', 89)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/loaded-bacon-fries.png') }}" alt="Loaded Bacon Fries">
                                </div>
                                <div class="item-details">
                                    <h3>Loaded Bacon Fries</h3>
                                    <p>Crispy fries topped with melted cheese, bacon bits, and green onions.</p>
                                    <div class="item-price">₱ 159</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('loaded-bacon-fries')">-</button>
                                        <span class="quantity" id="loaded-bacon-fries-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('loaded-bacon-fries', 'Loaded Bacon Fries', 159)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Drinks Section -->
                    <section class="menu-category-section">
                        <div class="category-header">
                            <h2>Drinks</h2>
                        </div>
                        <div class="menu-items-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/coke.png') }}" alt="Coke">
                                </div>
                                <div class="item-details">
                                    <h3>Coke</h3>
                                    <p>Refreshing Coca-Cola served ice cold.</p>
                                    <div class="item-price">₱ 59</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('coke')">-</button>
                                        <span class="quantity" id="coke-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('coke', 'Coke', 59)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/iced-tea.png') }}" alt="Iced Tea">
                                </div>
                                <div class="item-details">
                                    <h3>Iced Tea</h3>
                                    <p>Fresh brewed iced tea with a hint of lemon.</p>
                                    <div class="item-price">₱ 49</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('iced-tea')">-</button>
                                        <span class="quantity" id="iced-tea-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('iced-tea', 'Iced Tea', 49)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/coke-float.png') }}" alt="Coke Float">
                                </div>
                                <div class="item-details">
                                    <h3>Coke Float</h3>
                                    <p>Classic Coke with a scoop of vanilla ice cream.</p>
                                    <div class="item-price">₱ 79</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('coke-float')">-</button>
                                        <span class="quantity" id="coke-float-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('coke-float', 'Coke Float', 79)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Dessert Section -->
                    <section class="menu-category-section">
                        <div class="category-header">
                            <h2>Dessert</h2>
                        </div>
                        <div class="menu-items-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/chocolate-sundae.png') }}" alt="Chocolate Sundae">
                                </div>
                                <div class="item-details">
                                    <h3>Chocolate Sundae</h3>
                                    <p>Creamy vanilla ice cream topped with rich chocolate sauce and nuts.</p>
                                    <div class="item-price">₱ 99</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('chocolate-sundae')">-</button>
                                        <span class="quantity" id="chocolate-sundae-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('chocolate-sundae', 'Chocolate Sundae', 99)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/cookies-cream-sundae.png') }}" alt="Cookies & Cream Sundae">
                                </div>
                                <div class="item-details">
                                    <h3>Cookies & Cream Sundae</h3>
                                    <p>Vanilla ice cream with crushed cookies and cream sauce.</p>
                                    <div class="item-price">₱ 109</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('cookies-cream-sundae')">-</button>
                                        <span class="quantity" id="cookies-cream-sundae-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('cookies-cream-sundae', 'Cookies & Cream Sundae', 109)">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <img src="{{ asset('images/mango-sundae.png') }}" alt="Mango Sundae">
                                </div>
                                <div class="item-details">
                                    <h3>Mango Sundae</h3>
                                    <p>Creamy vanilla ice cream with fresh mango chunks and mango sauce.</p>
                                    <div class="item-price">₱ 119</div>
                                    <div class="item-actions">
                                        <button class="btn-decrease" onclick="decreaseQuantity('mango-sundae')">-</button>
                                        <span class="quantity" id="mango-sundae-qty">0</span>
                                        <button class="btn-increase" onclick="increaseQuantity('mango-sundae', 'Mango Sundae', 119)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                <!-- Shopping Cart Sidebar -->
                <div class="cart-sidebar" id="cartSidebar">
                    <div class="cart-header">
                        <button class="btn-clear-cart" onclick="clearAllItems()">🗑️ Clear All Items</button>
                    </div>
                    <div class="cart-content">
                        <div class="cart-items" id="cartItems">
                            <!-- Cart items will be populated here -->
                        </div>
                        <div class="cart-empty" id="cartEmpty" style="display:none;">
                            <div class="cart-empty-icon">
                                <svg width="100" height="100" fill="none" viewBox="0 0 100 100"><rect width="100" height="100" rx="20" fill="#f5f5f5"/><path d="M30 60c0 8.284 6.716 15 15 15s15-6.716 15-15" stroke="#ccc" stroke-width="3"/><rect x="35" y="40" width="30" height="20" rx="5" fill="#eee" stroke="#ccc" stroke-width="2"/><rect x="45" y="30" width="10" height="10" rx="2" fill="#eee" stroke="#ccc" stroke-width="2"/></svg>
                            </div>
                            <div class="cart-empty-title">YOUR BASKET IS EMPTY</div>
                            <div class="cart-empty-desc">Start ordering, we have what you need!</div>
                        </div>
                    </div>
                    <div class="cart-footer">
                        <div class="cart-note">Price may vary at time of checkout</div>
                        <div class="cart-total-row">
                            <span class="cart-total-label">Total</span>
                            <span class="cart-total-value" id="cartTotal">₱ 0</span>
                        </div>
                        <button class="btn-checkout" id="checkoutBtn" onclick="checkout()">
                            <span class="checkout-icon">🛒</span> <span id="checkoutText">Checkout ₱ 0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let cart = {};
        let total = 0;

        function increaseQuantity(itemId, itemName, price) {
            if (!cart[itemId]) {
                cart[itemId] = {
                    name: itemName,
                    price: price,
                    quantity: 0
                };
            }
            
            cart[itemId].quantity++;
            updateDisplay();
            updateCartSidebar();
        }

        function decreaseQuantity(itemId) {
            if (cart[itemId] && cart[itemId].quantity > 0) {
                cart[itemId].quantity--;
                if (cart[itemId].quantity === 0) {
                    delete cart[itemId];
                }
                updateDisplay();
                updateCartSidebar();
            }
        }

        function updateDisplay() {
            for (let itemId in cart) {
                const qtyElement = document.getElementById(itemId + '-qty');
                if (qtyElement) {
                    qtyElement.textContent = cart[itemId].quantity;
                }
            }
            
            // Update quantities for items not in cart
            const allQtyElements = document.querySelectorAll('.quantity');
            allQtyElements.forEach(element => {
                const itemId = element.id.replace('-qty', '');
                if (!cart[itemId]) {
                    element.textContent = '0';
                }
            });
        }

        function updateCartSidebar() {
            const cartItems = document.getElementById('cartItems');
            const cartSidebar = document.getElementById('cartSidebar');
            const cartTotal = document.getElementById('cartTotal');
            const checkoutBtn = document.getElementById('checkoutBtn');
            const checkoutText = document.getElementById('checkoutText');
            const cartEmpty = document.getElementById('cartEmpty');
            
            cartItems.innerHTML = '';
            total = 0;
            
            const hasItems = Object.keys(cart).length > 0;
            cartSidebar.style.display = 'block';
            cartEmpty.style.display = hasItems ? 'none' : 'flex';
            cartItems.style.display = hasItems ? 'block' : 'none';
            
            if (!hasItems) {
                cartTotal.textContent = '₱ 0';
                checkoutText.textContent = 'Checkout ₱ 0';
                checkoutBtn.disabled = true;
                checkoutBtn.classList.add('disabled');
                return;
            }
            
            for (let itemId in cart) {
                const item = cart[itemId];
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item-row';
                cartItem.innerHTML = `
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-qty">
                        <button class="cart-btn-qty" onclick="decreaseQuantity('${itemId}')">-</button>
                        <span>${item.quantity}</span>
                        <button class="cart-btn-qty" onclick="increaseQuantity('${itemId}', '${item.name}', ${item.price})">+</button>
                    </div>
                    <div class="cart-item-price">₱ ${item.price}</div>
                `;
                cartItems.appendChild(cartItem);
            }
            
            cartTotal.textContent = `₱ ${total}`;
            checkoutText.textContent = `Checkout ₱ ${total}`;
            checkoutBtn.disabled = false;
            checkoutBtn.classList.remove('disabled');
        }

        function clearAllItems() {
            cart = {};
            total = 0;
            updateDisplay();
            updateCartSidebar();
        }

        function checkout() {
            if (total > 0) {
                alert(`Checkout successful! Total: ₱${total}`);
                clearAllItems();
            }
        }
    </script>
</body>
</html>