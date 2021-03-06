<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query(' SELECT * FROM `kleding`'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/index.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header class="doelgroep-header">
        <!-- doelgroep-ul-sex categorie -->
        <ul class="doelgroep-ul-geslacht">
            <li class="doelgroep-li-geslacht">Dames</li>
            <li class="doelgroep-li-geslacht">Heren</li>
            <li class="doelgroep-li-geslacht">Kinderen</li>
            <!-- logo -->
            <ul class="logo">
                <a href="index.html"><img class="img-logo" src="./images/barbaarlogo2.png" alt=""></a>
            </ul>
            <!-- doelgroep-ul-sex-2  -->
            <ul class="doelgroep-ul-geslacht-2">
                <li class="doelgroep-ul-inlog-cart-favoriet" class="user-logging"><img src="./images/user-solid-24.png" alt="">loggin</li>
                <li class="doelgroep-ul-inlog-cart-favoriet" class="favoriet-geslagen"><img src="./images/heart-solid-24.png" alt="">Favoriet</li>
                <li class="doelgroep-ul-inlog-cart-favoriet" class="shopping-cart"><img src="./images/cart-add-solid-24.png" alt="">Cart</li>
            </ul>
        </ul>
        <!-- random-kleding -->
        <ul class="doelgroep-ul">
            <li class="doelgroep-li">Schoenen</li>
            <li class="doelgroep-li">Accesoires</li>
            <li class="doelgroep-li">Sport</li>
            <li class="doelgroep-li">Sale</li>

        <!-- search-bar -->
            <ul class="doelgroep-ul-searchbar">
                <form action="">
                    <input class="input-doelgroep" type="text" placeholder="Search...." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </ul>
        </ul>
        
    </header>
    <!-- main site -->
    <main class="het-main-website">
        <!-- eerste section advertentie -->
        <section class="section-advertentie">
            <article class="article-advertentie">
                <img src="./images/adver1.jpg" alt="">
                    <h2 class="h2-advertentie">Heren Kleding</h2>
            </article>
            <!--  -->
            <article class="article-advertentie">
                <img src="./images/adver2.jpg" alt="">
                <h2 class="h2-advertentie">Heren Kleding</h2>
            </article>
            <!--  -->
            <article class="article-advertentie">
                <img src="./images/adver3.jpg" alt="">
                <h2 class="h2-advertentie">Heren Kleding</h2>
            </article>
        </section>
        <!-- h3-random-kleding categorie -->
        <h3 class="h3-random-kleding">Kledingen / Schoenen / accessiores</h3>
        <!-- tweede section random kledingen -->
        <section class="section-2-random-kleding">
            <ul class="random-kleding-ul">
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                </article>
            </ul>
        </section>
            <!--  -->
            <section class="informatie-inleiding-section-3">
                <section class="informatie-inleiding-section4">
                    <h3 class="informatie-inleiding-h3">Nieuwe Looks</h3>
                    <p class="informatie-inleiding-h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </section>
                <section class="informatie-inleiding-section5">
                   <video class="video-mp4" src="./images/video-5.mp4" autoplay loop muted></video>
                </section>
            </section>
        <!--  -->

        <section class="section-2-random-kleding">
            <ul class="random-kleding-ul">
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                </article>
            </ul>
        </section>

        <section class="informatie-inleiding-section-3">
                <section class="informatie-inleiding-section4">
                    <h3 class="informatie-inleiding-h3">Nieuwe Nike</h3>
                    <p class="informatie-inleiding-h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </section>
                <section class="informatie-inleiding-section5">
                   <video class="video-mp4" src="./images/video-3.mp4" autoplay loop muted></video>
                </section>
        </section>
        <!--  -->
        <!--  -->
        <section class="section-2-random-kleding">
            <ul class="random-kleding-ul">
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/kind2.webp" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/vrouwen.webp" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/kind3.webp" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <?php foreach($result as $producten ): ?>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html"><img class="img-product-random" src="./images/shirt-1.jpg" alt=""></a>
                    <h4 class="random-product">shirt</h4>
                    <p>LEON - T-shirt print - green</p>
                    <p class="random-product">25???</p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>
                <?php endforeach; ?>
                </article>
                
            </ul>
        </section>
        <article></article>
        <!-- einde tweede section -->
        
    </main>
    <footer class="footer">
        <article class="article-footer">
            <ul class="footer-ul">
                <li class="li-footer"></li>
                <li class="li-footer"></li>
                <li class="li-footer"></li>
                <li class="li-footer"></li>
            </ul>
        </article>
    </footer>
</body>
</html>