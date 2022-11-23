<?php
$var = session_start();
error_reporting(0);
include 'database.php';
$name = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/siteLogo.png">
    <link rel="stylesheet" href="account.css">
    <script src="https://kit.fontawesome.com/d4b9f98a5c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Erso Shopping Акаунт</title>
</head>

<body>

    <button onclick="topFunction()" id="myBtn" title="Скрол нагоре"><img src="image/up-arrow.png" alt="" width="29" height="26"></button>
    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 561 || document.documentElement.scrollTop > 561) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <header id="navbar">
        <div class="headerBody">
            <div class="header">
                <div class="siteLogo">
                    <a href="home.php"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
                </div>
                <div class="search__container">
                    <input class="search__input" type="text" placeholder="Какво търсите ?">
                </div>
                <a href="#" type="submit">
                    <div class="searchImgCon" onclick="c()"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
                </a>
                <div class="buttons" style="margin-right: -16px;">
                    <div class="container">
                        <a href="account.php" class="btn effect04" data-sm-link-text="Профил"><span><i class="fa-solid fa-user"></i> <?php echo $name ?></span></a>
                    </div>
                </div>
                <div class="buttonsS">
                    <div class="container">
                        <a href="#" id="plus" class="btn effect04" data-sm-link-text="Попитай"><span>Помощ</span></a>
                    </div>
                </div>
            </div>
            <div class="headText">
                <div class="compare">Лесно сравнение на цени и над</div>
                <div id="offers">20 000</div>
                <div class="compare"> продукта от</div>
                <div id="offers">300</div>
                <div class="compare">магазина</div>
            </div>
        </div>
        <nav>
            <ul id="main">
                <li><a href="home.php">Начало</a></li>
                <li><a href="">Магазини </a></li>
                <li>
                    <a href="category.php">Категории</a>
                </li>
                <li><a href="">Сравни продукти</a></li>
            </ul>
        </nav>
    </header>
    <div class="bor"></div>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <?php
    $sql = "SELECT * FROM users WHERE name='$name'";
    $result = mysqli_query($link, $sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userId = $row["id"];
            $email = $row['email'];
            $username = $row['name'];
    ?>
            <section>
                <div class="row">
                    <div class="l-col">
                        <div class="img-con">
                            <?php echo '<img src="data:image/jpeg;base64,' . $row['image'] . '"/>'; ?>
                        </div>
                        <div class="acc-body">
                            <div class="email"><i class="fa-solid fa-envelope"></i>
                                <?php echo $row['email']; ?>
                            </div>
                            <div class="acc-name"><a onclick="second()" href="#" style="padding: 13px 91px 13px 16.5px;"><i class="fa-solid fa-user"></i> Моите данни</a></div>
                            <div class="acc-name"><a onclick="third()" href="#" style="padding-right: 80px;"><i class="fa-solid fa-circle-question"></i> Задай въпрос</a></div>
                            <?php $sql = "SELECT count(*) FROM answear WHERE user_idd ='$userId'";
                            $result = $link->query($sql);
                            ?>
                            <div class="acc-name"><a onclick="f()" style="padding-right: 68px;" href="#"><i class="fa-solid fa-headphones"></i> Виж отговори <span class="noti"> <?php if ($result->num_rows > 0) {
                                                                                                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                                                                                                            echo  $row['count(*)'] . '';
                                                                                                                                                                                        }
                                                                                                                                                                                    } ?></span></a></div>
                            <div class="acc-name"><a onclick="five()" style="padding-right: 87px;" href="#"><i class="fa-solid fa-star"></i> Виж любими</a></div>
                            <div class="acc-name"><a href="index.php" style="padding: 13px 142px 13px 17.5px;"><i class="fa-solid fa-arrow-right-from-bracket"></i> Изход</a></div>
                        </div>
                    </div>
                    <div class="r-col">
                        <div class="first" id="first">
                            <div class="right">
                                <div class="rightName">
                                    Добре Дошли:
                                    <?php echo $name ?>
                                </div>
                                <img src="image/smile.png" alt="">
                                <div class="texxt">
                                    Вече може да изплзвате функционалности, като да добавяте коментари за отделните продукти или магазини и да сравнявате избрани от Вас продукти.
                                </div>
                                <button disabled="disabled">Обратно към сайта</button>
                            </div>
                        </div>
                        <div class="second" id="second" style="display: none;">
                            <div class="secHead">Моите данни</div>
                            <div class="row">
                                <form action="userUpdate.php" method="post" enctype="multipart/form-data">
                                    <div>
                                        <div class="name"><label for="">Имейл:</label></div>
                                        <input type="email" value="<?php echo $email ?>">
                                    </div>
                                    <div>
                                        <div class="name"><label for="">Потребителско име:</label></div>
                                        <input type="text" value="<?php echo $username ?>">
                                    </div>
                                    <div>
                                        <div class="name"><label for="">Телефонен номер:</label></div>
                                        <input type="text" require name="phone" placeholder="Формат: +359...">
                                    </div>
                                    <div>
                                        <div class="name"><label for="">Изберете местоживеене:</label></div>
                                        <select name="city" class="city">
                                            <option hidden value="">Изберете град</option>
                                            <option value="Бургас">Бургас</option>
                                            <option value="Варна">Варна</option>
                                            <option value="Пловдив">Пловдив</option>
                                            <option value="Русе">Русе</option>
                                            <option value="София">София</option>
                                            <option value="Стара Загора">Стара Загора</option>
                                        </select>
                                    </div>
                                    <div>
                                        <div class="name"><label for="">Дата на раждане:</label></div>
                                        <input type="date" require id="date" name="date">
                                    </div>
                                    <script>
                                        updateList = function() {
                                            var input = document.getElementById('upload');
                                            var output = document.getElementById('spann');
                                            var text = "Снимката е избрана";

                                            output.innerHTML = '<span>';
                                            for (var i = 0; i < input.files.length; ++i) {
                                                output.innerHTML += '<span>' + text + '</span>';
                                            }
                                            output.innerHTML += '</span>';
                                        }
                                    </script>
                                    <div>
                                        <div class="name"><label for="">Качи профилна снимка:</label></div>
                                        <input type="file" require value="Качи снимка" multiple onchange="javascript:updateList()" id="upload" name="image" class="custom-file-input"><span id="spann"></span>
                                    </div>
                                    <div>
                                        <div class="name"><label for="">Пол:</label></div>
                                        <input type="radio" name="sex" id="male" value="Мъж"><label for="male">Мъж</label><span class="radio"><input type="radio" name="sex" id="famale" value="Жена"><label for="famale">Жена</label></span>
                                    </div>
                                    <button type="submit" name="insert">Запази</button>

                                </form>
                                <script>
                                    $(document).ready(function() {

                                        $('#insert').click(function() {
                                            var image_name = $('#image').val();
                                            if (image_name == '') {
                                                alert("Изберете файл");
                                                return false;
                                            } else {
                                                var extension = $('#image').val().split('.').pop().toLowerCase();
                                                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                                                    alert('Невалиден тип снимка');
                                                    $('#image').val('');
                                                    return false;
                                                }
                                            }
                                        });
                                    });
                                </script>
                                <img src="image/Wavy_Tech-28_Single-10.jpg" height="350px" style="margin-top: 15px;" alt="">
                            </div>

                        </div>
                        <div class="third" id="third" style="display: none;">
                            <div class="secHead">Задай въпрос</div>
                            <div class="row">
                                <form action="insertQ.php" method="POST">
                                    <div>
                                        <div class="name"><label for="">Имейл:</label></div>
                                        <input type="email" name="email" value="<?php echo $email ?>">
                                        <select class="options" name="topic">
                                            <option value="Избери тематика" hidden>Избери тематика</option>
                                            <option value="Наличности">Наличности</option>
                                            <option value="Продукти">Продукти</option>
                                            <option value="Акаунти">Акаунти</option>
                                            <option value="Проблеми с платформата">Проблеми с платформата</option>
                                        </select>
                                        <input type="hidden" name="id" value="<?php echo $userId ?>">
                                    </div>
                                    <textarea id="" cols="38" rows="12" name="question" placeholder="Задайте Вашия въпрос тук !"></textarea>
                                    <button type="submit" name="submit">Изпрати</button>
                                </form>
                                <div class="r">
                                    <img src="image/450px-question.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="f" id="f" style="display: none;">
                            <div class="secHead">Поучени отговори</div>
                            <?php
                            $sql = "SELECT * FROM answear WHERE user_idd='$userId'";
                            $result = $link->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $time = $row['time'];
                                    $timee = substr($time, 0, 5);
                            ?>
                                    <div class="squere">
                                        <div class="qTitle">Въпрос: <span>Дата: <?php echo $row['date'];
                                                                                echo ' ' . $timee ?></span></div>
                                        <div class="border">
                                            <div class="question">
                                                <?php echo $row['question']; ?>
                                            </div>
                                        </div>
                                        <div class="qTitle">Отговор:</div>
                                        <div class="border">
                                            <div class="answear">
                                                <?php echo $row['answear']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="del.php" method="POST">
                                        <input type="hidden" name="ansId" value="<?php echo $row['id']; ?>">
                                        <button name="submit" type="submit">Премахни отговора</button>
                                    </form>
                            <?php
                                }
                            }
                            ?>
                            <img src="image/20943401.jpg" height="350px" alt="">
                        </div>
                        <div class="five" id="five" style="display: none;">
                            <div class="secHead">Любими продукти</div>
                            <?php
                            $sqlll = "SELECT * FROM favorite WHERE username='$name'";
                            $resulttt = mysqli_query($link, $sqlll);
                            while ($row = $resulttt->fetch_assoc()) {
                                $pro = $row['productName'];
                                $sql = "SELECT * FROM products WHERE name='$pro'";
                                $result = mysqli_query($link, $sql);
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <a href="<?php echo $row['link']; ?>">
                                        <div class="bax">
                                            <div class="-left">
                                                <div class="imgBax">
                                                    <img src="<?php echo $row['image']; ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="-right">
                                                <div class="proName"><?php echo $row['name']; ?></div>
                                                <div class="pri"><span class="spa">Цена:</span> <?php echo $row['price'] . 'лв.'; ?></div>
                                                <div class="pri"><span class="spa">ОП система:</span> <?php echo $row['system']; ?></div>
                                                <div class="pri"><span class="spa">Дизайн:</span> <?php echo $row['design']; ?></div>
                                                <div class="pri"><span class="spa">Производител:</span> <?php echo $row['brand']; ?></div>
                                                <div class="pri"><span class="spa">Оперативна памет:</span> <?php echo $row['space']; ?></div>
                                            </div>
                                            <div class="middlle">
                                                <div class="proName">Описание</div>
                                                <div class="desc"><?php echo $row['opinion']; ?></div>
                                            </div>
                                        </div>
                                    </a>
                                    <form action="deleteFavorite.php" method="post"><input type="hidden" name="product" value="<?php echo $pro; ?>"><input type="hidden" name="user" value="<?php echo $username; ?>"><button type="submit" name="submit" class="subm">Махни от любими</button></form>
                            <?php
                                }
                            }
                            ?>

                            <img src="image/sfavorites.png" height="350px" alt="">
                        </div>
                        <script>
                            var x = document.getElementById("first");
                            var w = document.getElementById("third");
                            var h = document.getElementById("second");
                            var a = document.getElementById("f");
                            var b = document.getElementById("five");

                            function second() {
                                x.style.display = "none";
                                w.style.display = "none";
                                a.style.display = "none";
                                b.style.display = "none";
                                h.style.display = "block";
                            }

                            function third() {
                                x.style.display = "none";
                                w.style.display = "block";
                                h.style.display = "none";
                                b.style.display = "none";
                                a.style.display = "none";
                            }

                            function f() {
                                x.style.display = "none";
                                a.style.display = "block";
                                h.style.display = "none";
                                b.style.display = "none";
                                w.style.display = "none";
                            }

                            function five() {
                                x.style.display = "none";
                                a.style.display = "none";
                                h.style.display = "none";
                                b.style.display = "block";
                                w.style.display = "none";
                            }
                        </script>
                    </div>
            </section>
    <?php
        }
    }
    ?>
    <footer>
        <div class="flexRow">
            <div class="footText"><a href="">Помощ</a></div>
            <div class="footText"><a href="">Поверителност</a></div>
            <div class="footText"><a href="">За нас</a></div>
            <div class="footText"><a href="">Контакти</a></div>
            <div class="footText"><a href="">Реклама</a></div>
            <div class="footText"><a href="">Станете партньор</a></div>
        </div>
    </footer>
</body>

</html>