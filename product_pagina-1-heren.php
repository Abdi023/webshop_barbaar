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
            <li class="doelgroep-li-geslacht"><a href="index.php">Heren</a></li>
            <li class="doelgroep-li-geslacht">Kinderen</li>
            <!-- logo -->
            <ul class="logo">
                <a href="index.php"><img class="img-logo" src="./images/barbaarlogo2.png" alt=""></a>
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
            <li class="doelgroep-li"><a href="./heren/heren-kleding.php">Kleding</a></li>
            <li class="doelgroep-li"><a href="./heren/heren-schoenen.php">Schoenen</a></li>
            <li class="doelgroep-li"><a href="./heren/heren-Accesoires.php">Accesoires</a></li>
            <li class="doelgroep-li"><a href="./heren/heren-sport.php">Sport</a></li>
            <li class="doelgroep-li"><a href="./heren/heren-sale.php">Sale</a></li>

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
    <!-- facete search filter -->
    <!-- h1 Herenkleding -->
            <h1 class="herenkleding">Herenkleding</h1>
    <!-- option 1 -->
            <select name="" id="" class="select">
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
            </select>

            <!-- option 2 -->
            <select name="" id="" class="select">
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
            </select>

            <!-- option 1 -->
            <select name="" id="" class="select">
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
            </select>


            <!-- option 1 -->
            <select name="" id="" class="select">
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
            </select>

            <!-- option 1 -->
            <select name="" id="" class="select">
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
                <option class="select-option" value="">Type</option>
            </select>
    <!--  -->

   
        <section class="section-2-random-kleding">
            <ul class="random-kleding-ul">
            <?php foreach($result as $producten): ?>
                <article class="article-random-kledinge-schoenen-accesoires">
                    <a href="./detail_page_product_html/detail_page_product.html">
                        <img class="img-product-random" src="./images/shirt-1.jpg" alt="product-foto">
                    </a>
                    <h4 class="random-product"><?php echo $producten['categorie']; ?></h4>
                    <p><?php echo $producten['titel']; ?></p>
                    <p class="random-product"><?php echo $producten['prijs']; ?></p>
                    <a class="button-random-product"><img class="favoriet-wagen-img" src="./images/icons8-love-24.png" alt=""></a>
                    <a class="button-random-product2"><img class="bestel-wagen-product" src="./images/icons8-shopping-bag-50.png" alt=""></a>
                </article>          
            <?php endforeach; ?>
            </ul>
        </section>
        <!--  -->
        
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