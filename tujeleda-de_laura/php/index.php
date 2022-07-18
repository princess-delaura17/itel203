<?php

include_once 'header.php';


?>


			<header class="header">

    <a href="index.html" class="logo"> BHIESS DRESS</a>

    <nav class="navbar">
        <ul>
            <li><a href="home.html">home</a></li>
            <li><a href="products.html">products</a></li>
            <li><a href="#">page</a>
                <ul>
                    <li><a href="about.html">about</a></li>
                   
                </ul>
            </li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="#">account +</a>
                <ul>
                    <li><a href="login.html">login</a></li>
                    <li><a href="register.html">register</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts      -->

<section class="home">

    <div class="slide active" style="background: url(assets/home-bg-1.png) no-repeat;">
        <div class="content">
            <span>Get your outfit</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="slide" style="background: url(assets/home-bg-2.png) no-repeat;">
        <div class="content">
            <span>Get your outfit</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="slide" style="background: url(assets/home-bg-3.png) no-repeat;">
        <div class="content">
            <span>Get your outfit</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<!-- home section ends     -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box">
        <img src="assets/banner-1.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="assets/banner-2.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="assets/banner-3.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<?php

include_once 'footer.php';


?>
