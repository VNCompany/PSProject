<?php
require "service/dbContext.php";

$phone = $_GET['phone'];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Сервисный центр</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./static/styles/styles.css">
    <link type="text/css" rel="stylesheet" href="./static/fonts/HelveticaNeue/helvetica.css">
    <link type="text/css" rel="stylesheet" href="./static/fonts/OpenSans/opensans.css">
</head>
<body>
<?php require "renderHeader.php" ?>
<main>
    <section id="status" style="background-color: white">
        <h2>Проверить статус заказа:</h2>
        <div class="container">
            <?php if (!isset($phone) || strlen($phone) < 3 || count($statusObj = dbContext()->getStatus($phone)) == 0): ?>
                <form method="get">
                    <label>Номер телефона: <input type="text" name="phone" value="+7"></label>
                    <button>Проверить</button>
                </form>
            <?php else: ?>
                <p>Статус: <strong><?=$statusObj[0]['status']?></strong></p>
                <p>Последнее изменение: <?=(new DateTime($statusObj[0]['date']))->format("d.m.Y H:i")?></p>
                <p>Описание: <?=$statusObj[0]['description']?></p>
                <p><a href="/status.php">Проверить другой заказ</a></p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php require "renderFooter.php" ?>
</body>
</html>