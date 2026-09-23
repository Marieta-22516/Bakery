```php
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$product = htmlspecialchars($_POST["product"]);
$price = (float) $_POST["price"];

?>

<!DOCTYPE html>
<html lang="bg">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Поръчка - Сладко Изкушение</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<header>

    <div class="logo">
        🍰 Сладко Изкушение
    </div>

    <nav>

        <a href="index.php">
            Начало
        </a>

        <a href="index.php#products">
            Продукти
        </a>

    </nav>

</header>


<section class="contact">

    <div style="
        max-width:600px;
        margin:auto;
    ">

        <div class="title">

            <p>ПОРЪЧКА</p>

            <h2>
                <?= $product ?>
            </h2>

            <span>
                Цена:
                <strong>
                    <?= number_format($price, 2) ?> лв.
                </strong>
            </span>

        </div>


        <form method="POST">

            <input
                type="hidden"
                name="product"
                value="<?= $product ?>"
            >

            <input
                type="hidden"
                name="price"
                value="<?= $price ?>"
            >


            <input
                type="text"
                name="name"
                placeholder="Вашето име"
                required
                class="form-input"
            >


            <input
                type="tel"
                name="phone"
                placeholder="Телефон"
                required
                class="form-input"
            >


            <input
                type="text"
                name="address"
                placeholder="Адрес за доставка"
                required
                class="form-input"
            >


            <button
                type="submit"
                class="button order-button"
            >
                Потвърди поръчката
            </button>

        </form>

    </div>

</section>


<footer>

    <h3>
        🍰 Сладко Изкушение
    </h3>

    <p>
        С любов към сладките моменти ❤️
    </p>

</footer>

</body>

</html>
```
