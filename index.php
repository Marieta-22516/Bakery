<?php

$products = [
    [
        "name" => "Шоколадова торта",
        "description" => "Нежна шоколадова торта с вкусен крем.",
        "price" => 35.00,
        "image" => "images/cake.jpg"
    ],
    [
        "name" => "Ягодов чийзкейк",
        "description" => "Кремообразен чийзкейк с пресни ягоди.",
        "price" => 28.00,
        "image" => "images/cheesecake.jpg"
    ],
    [
        "name" => "Ванилов капкейк",
        "description" => "Пухкав ванилов капкейк с нежен крем.",
        "price" => 6.00,
        "image" => "images/cupcake.jpg"
    ],
    [
        "name" => "Френски макарони",
        "description" => "Хрупкави отвън и меки отвътре.",
        "price" => 12.00,
        "image" => "images/macarons.jpg"
    ],
    [
        "name" => "Домашни бисквити",
        "description" => "Домашни бисквити с шоколадови парченца.",
        "price" => 8.00,
        "image" => "images/cookies.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="bg">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Сладко Изкушение</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <div class="logo">
        🍰 Сладко Изкушение
    </div>

    <nav>
        <a href="#home">Начало</a>
        <a href="#products">Продукти</a>
        <a href="#about">За нас</a>
        <a href="#contact">Контакти</a>
    </nav>

</header>

<section class="hero" id="home">

    <div class="hero-content">

        <p>ОНЛАЙН СЛАДКАРНИЦА</p>

        <h1>
            Сладост за<br>
            всеки повод
        </h1>

        <span>
            Вкусни домашни десерти, приготвени
            с качествени продукти и много любов.
        </span>

        <br><br>

        <a href="#products" class="button">
            Разгледай продуктите
        </a>

    </div>

</section>

<section class="products" id="products">

    <div class="title">

        <p>Нашето меню</p>

        <h2>Нашите сладки изкушения</h2>

        <span>
            Избери своя любим десерт
        </span>

    </div>


    <div class="products-container">

        <?php foreach ($products as $product): ?>

            <div class="product-card">

                <img
                    src="<?= $product['image'] ?>"
                    alt="<?= htmlspecialchars($product['name']) ?>"
                >


                <div class="product-info">

                    <h3>
                        <?= htmlspecialchars($product['name']) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($product['description']) ?>
                    </p>


                    <div class="product-footer">

                        <strong>
                            <?= number_format($product['price'], 2) ?> лв.
                        </strong>


                        <form
                            action="order.php"
                            method="POST"
                        >

                            <input
                                type="hidden"
                                name="product"
                                value="<?= htmlspecialchars($product['name']) ?>"
                            >

                            <input
                                type="hidden"
                                name="price"
                                value="<?= $product['price'] ?>"
                            >

                            <button type="submit">
                                Поръчай
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<section class="about" id="about">

    <div>

        <p class="pink-title">
            ЗА НАС
        </p>

        <h2>
            Приготвяме всеки десерт
            с внимание към детайла.
        </h2>

        <p>
            В нашата сладкарница вярваме, че хубавият десерт
            може да направи всеки ден по-приятен.
        </p>

        <p>
            Използваме качествени продукти и приготвяме
            нашите сладкиши внимателно и с много любов.
        </p>

    </div>

    <div class="about-info">

        <div>
            <b>100%</b>
            <span>Пресни продукти</span>
        </div>

        <div>
            <b>5+</b>
            <span>Вкусни десерти</span>
        </div>

        <div>
            <b>24/7</b>
            <span>Онлайн поръчки</span>
        </div>

    </div>

</section>

<section class="contact" id="contact">

    <div class="title">

        <p>КОНТАКТИ</p>

        <h2>Свържи се с нас</h2>

    </div>


    <div class="contact-container">

        <div class="contact-box">

            <span>📍</span>

            <h3>Адрес</h3>

            <p>
                София, ул. „Сладка“ №10
            </p>

        </div>


        <div class="contact-box">

            <span>📞</span>

            <h3>Телефон</h3>

            <p>
                0888 123 456
            </p>

        </div>


        <div class="contact-box">

            <span>✉️</span>

            <h3>Имейл</h3>

            <p>
                info@sladkarnica.bg
            </p>

        </div>

    </div>

</section>

<footer>

    <h3>🍰 Сладко Изкушение</h3>

    <p>
        С любов към сладките моменти ❤️
    </p>

    <hr>

    <small>
        © 2026 Сладко Изкушение
    </small>

</footer>

</body>

</html>