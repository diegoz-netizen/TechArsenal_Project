<?php
session_start();
$usuario_logueado = isset($_SESSION['usuario']);
$nombre_usuario = $usuario_logueado ? $_SESSION['usuario'] : "";
$items_carrito = 3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Arsenal | Next-Level Gaming</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <a href="index.php">
                    <i class="fa-solid fa-microchip"></i>
                    <span>TECH ARSENAL</span>
                </a>
            </div>

            <div class="nav-search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="searchInput" placeholder="Search for processors, GPUs, monitors...">
            </div>

            <div class="nav-actions">
                <?php if ($usuario_logueado): ?>
                    <div class="user-pill">
                        <span><?php echo htmlspecialchars($nombre_usuario); ?></span>
                        <a href="auth/logout.php" class="logout-btn">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="auth/login.php" class="btn-login-nav">
                        <i class="fa-regular fa-user"></i>
                    </a>
                <?php endif; ?>

                <a href="cart.php" class="cart-link">
                    <div class="cart-icon-wrapper">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <?php if ($items_carrito > 0): ?>
                            <span class="badge"><?php echo $items_carrito; ?></span>
                        <?php endif; ?>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <header class="hero">
        <span class="promo-badge">
            <i class="fa-solid fa-bolt"></i> New Arrivals - RTX 4090 & Intel 14th Gen
        </span>
        <h1>
            <span class="text-gradient">Next-Level Gaming</span><br>
            Hardware Arsenal
        </h1>
        <p>Premium gaming components and peripherals for enthusiasts who demand the absolute best performance.</p>

        <div class="hero-badges">
            <div class="hero-badge-item">
                <i class="fa-solid fa-arrow-trend-up cyan"></i>
                <span>Free Shipping Over $100</span>
            </div>
            <div class="hero-badge-item">
                <i class="fa-solid fa-trophy purple"></i>
                <span>2-Year Warranty</span>
            </div>
        </div>
    </header>

    <main class="container">

        <div class="categories">
            <button class="cat-btn active" data-cat="All Products">All Products</button>
            <button class="cat-btn" data-cat="Laptops">Laptops</button>
            <button class="cat-btn" data-cat="Processors">Processors</button>
            <button class="cat-btn" data-cat="Graphics Cards">Graphics Cards</button>
            <button class="cat-btn" data-cat="Memory">Memory</button>
            <button class="cat-btn" data-cat="Storage">Storage</button>
            <button class="cat-btn" data-cat="Monitors">Monitors</button>
            <button class="cat-btn" data-cat="Motherboards">Motherboards</button>
            <button class="cat-btn" data-cat="Peripherals">Peripherals</button>
        </div>

        <p class="results-count">Showing <span id="resultCount">10</span> products</p>

        <div class="product-grid" id="productGrid">

            <div class="product-card" data-categoria="Laptops">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1632603093711-0d93a0bcc6cc?q=80&w=400" alt="Laptop">
                    <span class="tag">Laptops</span>
                </div>
                <div class="product-info">
                    <h3>Apex Gaming Laptop Pro X9</h3>
                    <div class="price-row">
                        <span class="price">$2,499.99</span>
                        <button class="add-cart"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-categoria="Processors">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?q=80&w=400" alt="CPU">
                    <span class="tag">Processors</span>
                </div>
                <div class="product-info">
                    <h3>Intel Core i9-14900K</h3>
                    <div class="price-row">
                        <span class="price">$589.99</span>
                        <button class="add-cart"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-categoria="Memory">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7?q=80&w=400" alt="RAM">
                    <span class="tag">Memory</span>
                </div>
                <div class="product-info">
                    <h3>Corsair Vengeance DDR5 32GB</h3>
                    <div class="price-row">
                        <span class="price">$249.99</span>
                        <button class="add-cart"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-categoria="Storage">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1544652478-6653e09f18a2?q=80&w=400" alt="SSD">
                    <span class="tag">Storage</span>
                </div>
                <div class="product-info">
                    <h3>Samsung 990 Pro NVMe 2TB</h3>
                    <div class="price-row">
                        <span class="price">$179.99</span>
                        <button class="add-cart"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-categoria="Monitors">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?q=80&w=400" alt="Monitor">
                    <span class="tag">Monitors</span>
                </div>
                <div class="product-info">
                    <h3>LG UltraGear 27" OLED 240Hz</h3>
                    <div class="price-row">
                        <span class="price">$899.99</span>
                        <button class="add-cart"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="product-card" data-categoria="Peripherals">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?q=80&w=400" alt="Keyboard">
                    <span class="tag">Peripherals</span>
                </div>
                <div class="product-info">
                    <h3>Razer BlackWidow V4 Pro</h3>
                    <div class="price-row">
                        <span class="price">$229.99</span>
                        <button class="add-cart"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer>
        <p>© 2026 Tech Arsenal. Built for gamers, by gamers.</p>
    </footer>

    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            filterProducts();
        });

        document.querySelectorAll('.cat-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.cat-btn.active').classList.remove('active');
                btn.classList.add('active');
                filterProducts();
            });
        });

        function filterProducts() {
            const search = document.getElementById('searchInput').value.toLowerCase().trim();
            const cat = document.querySelector('.cat-btn.active').dataset.cat;
            const cards = document.querySelectorAll('.product-card');
            let visible = 0;

            cards.forEach(card => {
                const name = card.querySelector('h3').innerText.toLowerCase();
                const cardCat = card.dataset.categoria;
                const matchesCat = cat === 'All Products' || cardCat === cat;
                const matchesSearch = search === '' || name.includes(search);
                const show = matchesCat && matchesSearch;
                card.style.display = show ? 'block' : 'none';
                if (show) visible++;
            });

            document.getElementById('resultCount').textContent = visible;
        }
    </script>
</body>
</html>