<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucket Bunga</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Gaya untuk pop-up */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            z-index: 1000;
            display: none;
        }
        .popup button {
            margin-top: 10px;
        }
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['order_success'])) {
        echo "<div id='popup-message' class='popup'>" . $_SESSION['order_success'] . "<br><button onclick='closePopup()'>OK</button></div>";
        echo "<div id='popup-overlay' class='popup-overlay'></div>";
        unset($_SESSION['order_success']);
    } elseif (isset($_SESSION['login_success'])) {
        echo "<div id='popup-message' class='popup'>" . $_SESSION['login_success'] . "<br><button onclick='closePopup()'>OK</button></div>";
        echo "<div id='popup-overlay' class='popup-overlay'></div>";
        unset($_SESSION['login_success']);
    }
    ?>
    <header>
        <h1>Win Bucket</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="hero">
            <img src="img/WIN.png" class="hero-image" alt="Win Bucket">
        </div>
        <div class="hero-content">
            <h2>Selamat Datang di Win Bucket</h2>
            <p>Temukan keindahan sejati dalam setiap helai kawat bulu</p>
        </div>
        <div class="view-image-button">
            <a href="#gallery" class="btn">View Image</a>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <div class="about-description">
            <p>Selamat datang di <span class="brand-name">Win Bucket</span>, rumah bagi keindahan yang terwujud dalam setiap helai kawat bulu. Kami adalah perajin bunga terbaik yang menyajikan karya-karya indah yang terinspirasi oleh keanggunan alam.</p>
            <p>Dari rangkaian bunga mawar yang mempesona hingga gugusan bunga matahari yang cerah, setiap bucket kami adalah kisah cinta yang diwujudkan dalam setiap helai kawat bulu.</p>
            <p>Kami percaya bahwa keindahan tidak hanya terlihat, tetapi juga dirasakan. Itulah sebabnya setiap detil dalam setiap bucket kami dirancang dengan teliti, dari pemilihan warna yang harmonis hingga susunan yang simetris.</p>
            <p>Kami tidak hanya menjual bucket bunga; kami menyajikan pengalaman yang memikat, menghadirkan kebahagiaan yang tak terlupakan setiap kali Anda melihatnya.</p>
            <p>Dibuat dengan cinta dan perhatian, setiap karya seni kami adalah bukti dari dedikasi kami untuk keindahan. Biarkan <span class="brand-name">Win Bucket</span> menjadi bagian dari momen-momen berharga dalam hidup Anda, karena setiap bunga yang kami tawarkan adalah pesan cinta yang tak terucapkan, menari di antara kawat bulu, menunggu untuk menceritakan cerita Anda.</p>
            <p>Bergabunglah dengan kami dalam petualangan keindahan, dan biarkan <span class="brand-name">Win Bucket</span> menjadi penghantar kebahagiaan dalam hidup Anda.</p>
        </div>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <a href="bucket1.html">
                    <img src="img/bucket1.png" alt="Beautiful Flower 1">
                    <p>Bucket 1</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket2.html">
                    <img src="img/bucket2.png" alt="Beautiful Flower 2">
                    <p>Bucket 2</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket3.html">
                    <img src="img/bucket3.png" alt="Beautiful Flower 3">
                    <p>Bucket 3</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket4.html">
                    <img src="img/bucket4.png" alt="Beautiful Flower 4">
                    <p>Bucket 4</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket5.html">
                    <img src="img/bucket5.png" alt="Beautiful Flower 5">
                    <p>Bucket 5</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket6.html">
                    <img src="img/bucket6.png" alt="Beautiful Flower 6">
                    <p>Bucket 6</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket7.html">
                    <img src="img/bucket7.png" alt="Beautiful Flower 7">
                    <p>Bucket 7</p>
                </a>
            </div>
            <div class="gallery-item">
                <a href="bucket8.html">
                    <img src="img/bucket8.png" alt="Beautiful Flower 8">
                    <p>Bucket 8</p>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Bucket Bunga. All rights reserved.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/artha.lawar" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://wa.me/6282150036778" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/artha.26/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
    <button class="whatsapp-btn" onclick="openWhatsApp()">WhatsApp</button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popupMessage = document.getElementById('popup-message');
            const popupOverlay = document.getElementById('popup-overlay');
            if (popupMessage) {
                popupMessage.style.display = 'block';
                popupOverlay.style.display = 'block';
            }
        });

        function closePopup() {
            document.getElementById('popup-message').style.display = 'none';
            document.getElementById('popup-overlay').style.display = 'none';
        }
    </script>
        <script>
        function openWhatsApp() {
            window.open('https://wa.me/6282150036778', '_blank');
        }
    </script>
</body>
</html>
