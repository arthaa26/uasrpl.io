<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Bucket Bunga</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bucket Bunga</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
        </nav>
    </header>

    <section id="products">
        <h2>Our Products</h2>
        <div class="product-grid">
            <div class="product-item">
                <img src="flower1.jpg" alt="Beautiful Flower 1">
                <h3>Flower 1</h3>
                <p>Description of Flower 1</p>
                <button onclick="buyProduct('Flower 1')">Buy Now</button>
            </div>
            <div class="product-item">
                <img src="flower2.jpg" alt="Beautiful Flower 2">
                <h3>Flower 2</h3>
                <p>Description of Flower 2</p>
                <button onclick="buyProduct('Flower 2')">Buy Now</button>
            </div>
            <!-- Add more products as needed -->
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Bucket Bunga. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
    <script>
        function buyProduct(productName) {
            alert(`You have selected ${productName}. Please proceed to checkout for purchase and delivery.`);
            // You can add more functionality here, such as adding the selected product to a shopping cart.
        }
    </script>
</body>
</html>
