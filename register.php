<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snikers Shop | Регистрация</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <section class="promologreg">
        <div class="container">
            <div class="promologreg__content">
                <a href="index.php" class="header__logo">Snikers Shop</a>
                <div class="block">
                    <div class="reg__title">Регистрация</div>

                    <div class="reg__from">
                        <form action="forms/check.php" method="post">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                            <button class="btn btn-success" type="submit">Зарегистрировать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>