<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Museum Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <section>
    <nav>
    <div class="logo2">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "<h5>Hi, " . $_SESSION['username'] . "</h5>";
        } else {
            echo "<h5>Hi, Guest</h5>";
        }
        ?>
    </div>
    <div class="logo1">
        <h1>Art Gallery</h1>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="showcase.php">Showcase</a></li>
        <li><a href="graph.php">Graph</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="icons">
        <i class="fa-solid fa-heart"></i>
        <i class="fa-solid fa-cart-shopping"></i>
        <i class="fa-solid fa-user"></i>
</div>
</nav>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>Prismatic<br><span>Fine Arts</span></h1>
                    <p>
                    Welcome to our Art Gallery, a sanctuary where creativity flourishes and imagination reigns supreme. Explore our curated collections, featuring an eclectic mix of paintings, sculptures, and photographs that showcase the diverse talents of artists from around the world. From vibrant abstracts to serene landscapes, each artwork invites you to embark on a journey of discovery and introspection. Step into a world where every brushstroke tells a story, and every sculpture whispers secrets of its creation. Join us in celebrating the transformative power of art to inspire, provoke, and ignite the imagination. Welcome to our gallery, where every visit promises new adventures and unforgettable encounters with the beauty of human expression.
                    </p>
                </div>
                <div class="main_image">
                    <img src="image/1.png">
                </div>
            </div>
            <div class="social_icon">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="button">
                <a href="showcase.php">Explore Now</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

    </section>

    <!--Footer-->

    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>123/Colombo/India</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+62 821-2032-202</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>contact@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="socialmedia">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Showcase
    <div class="showcase">
        <h1>Collections</h1>

        <div class="box">
            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/painting1.jpeg">
                </div>

                <div class="showcase_text">
                    <h2>Starry Night</h2>
                    <p>This mid-scale, oil-on-canvas painting dominated by a moon and star-filled night sky.It takes up three-quartersof the picture plane andappears turbulent, even agitated,with intensely swirling patterns     
                    </p>
                    <h3>Vincent Van Gogh</h3>
                    <div class="showcase_rating">
                        <h3>5/5</h3>
                    </div>
                    <a href="#" class="btn">Explore</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>

                <div class="image">
                    <img src="image/shoes1.png">
                </div>

                <div class="showcase_text">
                    <h2>NIKE</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.     
                    </p>
                    <h3>$100.99</h3>
                    <div class="showcase_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>

            </div>
        </div>
    </div> -->

    <!--About-->

    <!-- <div class="about" id="About">
        <h1>Web<span>About</span></h1>

        <div class="about_main">
            <div class="about_image">
                <div class="about_small_image">
                    <img src="image/red_shoes1.png" onclick="functio(this)">
                    <img src="image/red_shoes2.png" onclick="functio(this)">
                    <img src="image/red_shoes3.png" onclick="functio(this)">
                    <img src="image/red_shoes4.png" onclick="functio(this)">
                </div>

                <div class="image_container">
                    <img src="image/red_shoes1.png" id="imagebox">
                </div>

            </div>

            <div class="about_text">
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. 
                    It has roots in a piece of classical Latin literature from 45 BC, 
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                </p>
            </div>
        </div>

        <a href="#" class="about_btn">Shop Now</a>

        <script>
            function functio(small){
                var full = document.getElementById("imagebox")
                full.src = small.src
            }
        </script>
    </div> -->

    <!--Review-->

    <!-- <div class="review" id="Review">
        <h1><span>Visitor's Review</span></h1>

        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/girl_dp1.jpg">
                        </div>

                        <div class="name">
                            <strong>Ranidi Lochana</strong>

                            <div class="like">
                                <i class="fa-solid fa-star">5/5</i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum,
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/gir_dp2.jpg">
                        </div>

                        <div class="name">
                            <strong>Sayuru Thanga</strong>

                           
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum,
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/gir_dp3.jpg">
                        </div>

                        <div class="name">
                            <strong>Luciana Bell</strong>

                           
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum,
                    </p>
                </div>
            </div>

            

            
        </div>

        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp1.jpg">
                        </div>

                        <div class="name">
                            <strong>Riddick Moss</strong>

                           
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum,
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp2.jpg">
                        </div>

                        <div class="name">
                            <strong>Bronson Reed</strong>

                            
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum,
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp3.jpg">
                        </div>

                        <div class="name">
                            <strong>Sami Zayn</strong>

                           
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form, by injected humour, 
                        or randomised words which don't look even slightly believable. 
                        If you are going to use a passage of Lorem Ipsum,
                    </p>
                </div>
            </div>

            

            
        </div>

    </div> -->

</body>
</html>