<?php
require "service/dbContext.php";

if (isset($_POST['fb-name'])
    && isset($_POST['fb-email'])
    && isset($_POST['fb-message'])) {
    dbContext()->feedback($_POST['fb-name'], $_POST['fb-email'], $_POST['fb-message']);
    header("Location: /success.html");
}

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

    <div class="social-links">
        <a target="_blank" href="https://vk.com/prosmart68">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 width="24" height="24"
                 viewBox="0 0 48 48"
                 style="fill:#000000;"><path d="M45.763,35.202c-1.797-3.234-6.426-7.12-8.337-8.811c-0.523-0.463-0.579-1.264-0.103-1.776 c3.647-3.919,6.564-8.422,7.568-11.143C45.334,12.27,44.417,11,43.125,11l-3.753,0c-1.237,0-1.961,0.444-2.306,1.151 c-3.031,6.211-5.631,8.899-7.451,10.47c-1.019,0.88-2.608,0.151-2.608-1.188c0-2.58,0-5.915,0-8.28 c0-1.147-0.938-2.075-2.095-2.075L18.056,11c-0.863,0-1.356,0.977-0.838,1.662l1.132,1.625c0.426,0.563,0.656,1.248,0.656,1.951 L19,23.556c0,1.273-1.543,1.895-2.459,1.003c-3.099-3.018-5.788-9.181-6.756-12.128C9.505,11.578,8.706,11.002,7.8,11l-3.697-0.009 c-1.387,0-2.401,1.315-2.024,2.639c3.378,11.857,10.309,23.137,22.661,24.36c1.217,0.12,2.267-0.86,2.267-2.073l0-3.846 c0-1.103,0.865-2.051,1.977-2.079c0.039-0.001,0.078-0.001,0.117-0.001c3.267,0,6.926,4.755,8.206,6.979 c0.368,0.64,1.056,1.03,1.8,1.03l4.973,0C45.531,38,46.462,36.461,45.763,35.202z"></path></svg>
        </a>

        <a target="_blank" href="https://instagram.com/prosmart_tmb">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 width="24" height="24"
                 viewBox="0 0 48 48"
                 style="fill:#000000;"><path d="M 16.5 5 C 10.159 5 5 10.159 5 16.5 L 5 31.5 C 5 37.841 10.159 43 16.5 43 L 31.5 43 C 37.841 43 43 37.841 43 31.5 L 43 16.5 C 43 10.159 37.841 5 31.5 5 L 16.5 5 z M 34 12 C 35.105 12 36 12.895 36 14 C 36 15.104 35.105 16 34 16 C 32.895 16 32 15.104 32 14 C 32 12.895 32.895 12 34 12 z M 24 14 C 29.514 14 34 18.486 34 24 C 34 29.514 29.514 34 24 34 C 18.486 34 14 29.514 14 24 C 14 18.486 18.486 14 24 14 z M 24 17 A 7 7 0 1 0 24 31 A 7 7 0 1 0 24 17 z"></path></svg>
        </a>
    </div>

    <header>
        <div class="title">
            <img height="60" alt="logo" src="static/images/logo.png">
            <div class="title-name">PRO Smart</div>
            <div class="title-description">Сервисный центр</div>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="status.php">Статус заказа</a></li>
                <li><a href="#description">О нас</a></li>
                <li><a href="#feedback">Обратная связь</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="intro">
            <div>
                <img src="static/images/tests/table1.jpg" alt="widget1">
                <h3>Аксессуары</h3>
                <p>У нас есть большой выбор аксессуаров: чехлы и защитные стекла для смартфонов и планшетов, сетевые зарядные устройства , автомобильные зарядные устройства, портативные аккумуляторы, наушники и многое другое.</p>
            </div>
            <div>
                <img src="static/images/tests/table2.jpg" alt="widget2">
                <h3>Ремонт</h3>
                <p>Наш сервисный центр предлагает качественный и быстрый ремонт любой сложости: ремонт компьютеров и ноутбуков (программной и аппаратной частей); замена дисплеев, разъёмов; перепрошивка телефонов/планшетов и т.д.</p>
            </div>
            <div>
                <img src="static/images/tests/table3.jpg" alt="widget3">
                <h3>Создание сайтов</h3>
                <p>Наша компания также предлагает создание сайтов разной сложности - от визитки до корпоративного сайта или портала. Мы изготовим для Вас интернет-проект любой сложности быстро, качественно и за адекватную стоимость.</p>
            </div>
        </section>

        <section id="description">
            <h2>О нас:</h2>
            <div class="container">
                <div>
                    <a class="ya-map" href="https://yandex.ru/maps/?um=constructor%3Afa84b5f131c52c8a678569722f32fcc0c25a0d98dd4771861c1c6c31de301647&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Afa84b5f131c52c8a678569722f32fcc0c25a0d98dd4771861c1c6c31de301647&amp;width=600&amp;height=450&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                </div>
                <div>
                    <p><strong>Мы находимся здесь:</strong> Россия, г. Тамбов, улица Советская, дом 121, офисный центр «Тамбовский волк» (магазин «Л'Этуаль», левое крыло), офис №13.</p>
                    <p>Телефон для связи: <strong>+7 (962) 233-88-22</strong></p>
                </div>
            </div>
        </section>

        <section id="feedback">
            <h2>Обратная связь:</h2>
            <div class="feedback-form">
                <form method="post">
                    <input type="text" placeholder="Имя" Name="fb-name" required>
                    <input type="text" placeholder="Email (или телефон)" Name="fb-email" required>
                    <textarea placeholder="Сообщение" Name="fb-message" required></textarea>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <div class="block1">
                <p style="font-size: 15pt; font-weight: bold">Сервисный центр PRO SMART</p>
                <p>Советская улица, 121, Тамбов</p>
                <p style="font-weight: bold; font-size: 15pt">ЧАСЫ РАБОТЫ:</p>
                <p>ПН - ПТ: 10:00 - 19:00</p>
                <p>СБ - ВС: 10:00 - 18:00</p>
            </div>

            <div class="block2">
                <p style="font-size: 15pt; font-weight: bold">КОНТАКТЫ:</p>
                <p>Почта: <a target="_blank" href="mailto:prosmart.shop@yandex.ru">prosmart.shop@yandex.ru</a></p>
                <p>Телефон: <a href="tel:+79622338822">+7 (962) 233-88-22</a></p>
                <p>ВКонтакте: <a target="_blank" href="https://vk.com/prosmart68">vk.com/prosmart68</a></p>
            </div>
        </div>

        <p class="footer-copyright">© 2018 - 2022 Pro Smart</p>
    </footer>
    </body>
</html>