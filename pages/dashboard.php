<?php
include('server.php');
include 'database.php';
error_reporting(0);
$sql = "SELECT count(name) as user FROM users";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $sumUsers = $row['user'];
}
$sql = "SELECT count(sex) as male FROM users WHERE sex='Мъж'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $male = $row['male'];
}
$sql = "SELECT count(sex) as famale FROM users WHERE sex='Жена'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $famale = $row['famale'];
}
$sql = "SELECT count(city) as burgas FROM users WHERE city='Бургас'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $burgas = $row['burgas'];
}
$sql = "SELECT count(city) as varna FROM users WHERE city='Варна'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $varna = $row['varna'];
}
$sql = "SELECT count(city) as plovdiv FROM users WHERE city='Пловдив'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $plovdiv = $row['plovdiv'];
}
$sql = "SELECT count(city) as ruse FROM users WHERE city='Русе'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $ruse = $row['ruse'];
}
$sql = "SELECT count(city) as sofia FROM users WHERE city='София'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $sofia = $row['sofia'];
}
$sql = "SELECT count(city) as stara FROM users WHERE city='Стара Загора'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $stara = $row['stara'];
}
$sql = "SELECT count(id) as summ FROM products";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $productSum = $row['summ'];
}
$sql = "SELECT COUNT(date) as datee FROM `users` WHERE date BETWEEN '2004-01-01' AND '2030-01-01'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $q = $row['datee'];
}
$sql = "SELECT COUNT(date) as datee FROM `users` WHERE date BETWEEN '1997-01-01' AND '2003-01-01'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $w = $row['datee'];
}
$sql = "SELECT COUNT(date) as datee FROM `users` WHERE date BETWEEN '1987-01-01' AND '1996-01-01'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $e = $row['datee'];
}
$sql = "SELECT COUNT(date) as datee FROM `users` WHERE date BETWEEN '1977-01-01' AND '1986-01-01'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $r = $row['datee'];
}
$sql = "SELECT COUNT(date) as datee FROM `users` WHERE date BETWEEN '1950-01-01' AND '1976-01-01'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $t = $row['datee'];
}
$sql = "SELECT COUNT(date) as datee FROM `users` WHERE date BETWEEN '1950-01-01' AND '1966-01-01'";
$result = mysqli_query($link, $sql);
while ($row = $result->fetch_assoc()) {
    $y = $row['datee'];
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $record = mysqli_query($link, "SELECT * FROM products WHERE id=$id");

    $row = mysqli_fetch_array($record);
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $brand = $row['brand'];
    $system = $row['system'];
    $image = $row['image'];
    $number = $row['number'];
}
$sumSite = 0;
$sumLog = 0;
$login = 'Регистрирани';
$site = 'Без регистрация';
if (isset($_POST["submit"])) {
    $date = date('Y.m.d', strtotime($_POST['date']));
    $datee = date('Y.m.d', strtotime($_POST['datee']));
    $sqll = "SELECT * FROM state WHERE date BETWEEN '$date' AND '$datee'";
    $sql = "SELECT * FROM stat WHERE date BETWEEN '$date' AND '$datee'";
    $resultt = mysqli_query($link, $sqll);
    $result = mysqli_query($link, $sql);
    while ($row = $result->fetch_assoc()) {
        $visit = $row['visitors'];
        $sumSite += $visit;
        while ($row = $resultt->fetch_assoc()) {
            $visitt = $row['visitor'];
            $sumLog += $visitt;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/siteLogo.png">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/d4b9f98a5c.js" crossorigin="anonymous"></script>
    <title>Erso Shopping Администраторски Панел</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Поситители', 'Брой'],
                <?php
                echo "['" . $login . "', " . $sumLog . "],";
                echo "['" . $site . "', " . $sumSite . "],";
                ?>
            ]);

            var options = {
                title: 'Брой поситители',
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <?php include 'database.php' ?>
    <?php
    $sql = "SELECT * FROM products";
    $result = $link->query($sql);
    ?>
    <div class="open" id="open" onclick="myFunction()">Вмъкване или редактиране на данни <i class="fa-solid fa-circle-arrow-down"></i></div>
    <div id="myDIV" style="display: none;">
        <div class="products" id="products">
            <div class="select">
                <label for="">Категория: </label>
                <input type="text" name="first" id="firstt" placeholder="Търси категория продукти">
                <button type="submit" id="btt"><i class="fa-solid fa-magnifying-glass"></i> Търси</button>
                <label for="">Име на продукт: </label>
                <input type="text" name="search_text" id="search_text" placeholder="Търси по име на продукт">
                <button><i class="fa-solid fa-magnifying-glass"></i> Търси</button>
                <form action="export.php" method="post">
                    <button class="exBtn" type="submit" name="export"><i class="fa-regular fa-file-excel"></i> Excel</button>
                </form>
            </div>
            <div class="mobile">Категория: Мобилни телефони</div>
        </div>
        <script>
            $(document).ready(function() {
                load_data();

                function load_data(query) {
                    $.ajax({
                        url: "fetch.php",
                        method: "post",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#result').html(data);
                        }
                    });
                }

                $('#search_text').keyup(function() {
                    var search = $(this).val();
                    if (search != '') {
                        load_data(search);
                    } else {
                        load_data();
                    }
                });
            });
        </script>
        <div class="row">
            <div id="result"></div>
            <form action="server.php" method="POST" id="edit_form">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="input-group">
                    <label for=""><i class="fa-solid fa-file-signature"></i> Име:</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Въведете име">
                </div>
                <div class="input-group">
                    <label for=""><i class="fa-solid fa-dollar-sign"></i> Цена:</label>
                    <input type="text" name="price" value="<?php echo $price; ?>" class="form-control" placeholder="Въведете цена">
                </div>
                <div class="input-group">
                    <label for=""><i class="fa-solid fa-list-ol"></i> Марка:</label>
                    <input type="text" name="brand" value="<?php echo $brand; ?>" class="form-control" placeholder="Въведете марка">
                </div>
                <div class="input-group">
                    <label for=""><i class="fa-brands fa-apple"></i> Операционна система:</label>
                    <input type="text" name="system" value="<?php echo $system; ?>" class="form-control" placeholder="Въведете опр. система">
                </div>
                <div class="input-group">
                    <label for=""><i class="fa-solid fa-image"></i> Снимка: посочете адрес: (image/име на файла)</label>
                    <input type="text" class="form-control" name="image" value="<?php echo $image; ?>" placeholder="Адрес на снимка">
                </div>
                <div class="input-group">
                    <label for=""><i class="fa-solid fa-arrow-down-1-9"></i> Ценови диапазон: (пример 1000-1500 лв.)</label>
                    <input type="text" name="number" value="<?php echo $number; ?>" class="form-control" placeholder="Въведете ценови диапазон">
                </div>
                <div class="input-group">
                    <?php if ($edit_state == true) : ?>
                        <button class="btn" type="submit" name="update" style="background: #556B2F;"><i class="fa-solid fa-arrows-spin"></i> Обнови</button>
                    <?php else : ?>
                        <button class="btn" type="submit" name="save"><i class="fa-solid fa-floppy-disk"></i> Запази</button>
                    <?php endif ?>
                </div>
            </form>
        </div>

    </div>
    </div>

    <script>
        function myFunction() {

            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function display() {
            var e = document.getElementById("products");
            var b = document.getElementById("category");
            if (e.style.display === "block") {
                e.style.display = "none";
                b.style.display = "block";
            }
        }
    </script>
    <?php
    $sql = "SELECT count(id) as id FROM questions";
    $result = mysqli_query($link, $sql);
    while ($row = $result->fetch_assoc()) {
        $sumq = $row['id'];
    ?>
        <div class="oopen" id="oopen" onclick="myFunctionn()">Преглеждане и отговаряне на въпроси <?php echo $sumq ?> <i class="fa-solid fa-circle-arrow-down"></i></div>
    <?php
    }
    ?>
    <div id="myyDIV" style="display: none;">
        <?php
        $sql = "SELECT * FROM questions";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $time = $row['time'];
                $timee = substr($time, 0, 5);
        ?>
                <div class="raw">
                    <div class="dot">
                        <i class="fa-solid fa-check fa-2x"></i>
                    </div>
                    <div class="box">
                        <div class="roow">
                            <div class="email">Имейл:
                                <?php echo $row['email']; ?>
                            </div>
                            <div class="date">Дата:
                                <?php echo $row['date'];
                                echo ' ' . $timee; ?>
                            </div>
                        </div>
                        <div class="queH">Въпрос:</div>
                        <div class="que">
                            <?php echo $row['question']; ?>
                        </div>
                        <div class="topic">Тематика:
                            <?php echo $row['topic']; ?>
                        </div>
                        <div class="queH">Отговор:</div>
                        <form class="none" action="insertA.php" method="POST">
                            <textarea name="quest" id="" cols="71" rows="10" placeholder="Напиши отговора на въпроса тук"></textarea>
                            <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                            <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="question" value="<?php echo $row['question']; ?>">
                            <div><button type="submit" name="submit">Изпрати</button></div>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <script>
        function myFunctionn() {

            var x = document.getElementById("myyDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        function myFunctionnn() {

            var x = document.getElementById("myyyDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <div class="ooopen" id="open" onclick="myFunctionnn()">Статистически данни <i class="fa-solid fa-circle-arrow-down"></i></div>
    <div id="myyyDIV" style="display: none;">
        <div class="pieChart">
            <div class="flexx">
                <span class="spa">Избери дата от:</span>
                <span class="spa" style="margin-left: 114px;">Избери дата до:</span>
            </div>
            <form class="form" action="#" method="post">
                <input type="date" name="date" class="d" style="margin-left: 28px;">
                <input type="date" style="margin-left: 6px;" name="datee" class="d">
                <button class="erso" type="submit" onclick="show()" name="submit">Покажи</button>
            </form>
            <div class="dataa">
                <div class="data">Избраните данни са от: </div>
                <div class="from">
                    <?php echo $date ?>
                </div>
                <div class="data"> <i class="fa-solid fa-arrows-left-right"></i> </div>
                <div class="from">
                    <?php echo $datee ?></i>
                </div>
            </div>
            <div class="flex" style="margin-bottom: 14px;">
                <div class="line">
                    <div class="coloоr">Брой поситители на сайта</div>
                    <div class="bax">
                        <div class="icon"><i class="fa-solid fa-people-group fa-5x"></i></div>
                        <div class="number">
                            <?php echo $sumSite ?>
                        </div>
                    </div>
                </div>
                <div class="line">
                    <div class="coloоr" style="background-image: linear-gradient(to right, #009551, #00a65a);">Брой поситители с регистрация</div>
                    <div class="bax" style="background-color: #00a65a;">
                        <div class="icon" style="background-color: #009551;"><i style="padding: 0px 16px 0px 8px;" class="fa-solid fa-arrow-right-to-bracket fa-5x"></i></div>
                        <div class="number">
                            <?php echo $sumLog ?>
                        </div>
                    </div>
                </div>
                <div class="line">
                    <div class="coloоr" style="background-image: linear-gradient(to right, #da8c10, #f39c12);">Брой регистрирани потребители</div>
                    <div class="bax" style="background-color: #f39c12;">
                        <div class="icon" style="background-color: #da8c10;"><i class="fa-solid fa-user-check fa-5x"></i></div>
                        <div class="number">
                            <?php echo $sumUsers ?>
                        </div>
                    </div>
                </div>
                <div class="line">
                    <div class="coloоr" style="background-image: linear-gradient(to right, #c64333, #dd4b39);">Брой регистрирани по пол</div>
                    <div class="bax" style="background-color: #dd4b39;">
                        <div class="icon" style="background-color: #c64333; width: 120px;">
                            <div style="font-size: 21px; font-weight: bold; margin-top: 12px; margin-left: 13px;">Мъже</div>
                            <div class="number" style="margin-top: -10px;"><?php echo $male ?></div>
                        </div>
                        <div class="number ">
                            <div style="font-size: 21px; margin-top: -1px; margin-left: 26px;">Жени</div>
                            <div style="margin-top: -9px; margin-left: 22px;"><?php echo $famale ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.tablee th').hover(function() {
                        var t = parseInt($(this).index()) + 1;
                        $('.tablee td:nth-child(' + t + ')').addClass('highlighted');
                    },
                    function() {
                        var t = parseInt($(this).index()) + 1;
                        $('.tablee td:nth-child(' + t + ')').removeClass('highlighted');
                    });
            });
        </script>
        <div class="flexx" id="flexx" style="margin-bottom: 20px">
            <div id="piechart" style="width: 400px; height: 160px;"></div>
            <div class="we">
                <div class="tabText"><i class="fa-solid fa-building"></i> Брой потребители по градове</div>
                <table class="tablee">
                    <tr>
                        <th>Град</th>
                        <th>Брой</th>
                    </tr>
                    <tr>
                        <td>Бургас</td>
                        <td><?php echo $burgas ?></td>
                    </tr>
                    <tr>
                        <td>Варна</td>
                        <td><?php echo $varna ?></td>
                    </tr>
                    <tr>
                        <td>Пловдив</td>
                        <td><?php echo $plovdiv ?></td>
                    </tr>
                    <tr>
                        <td>Русе</td>
                        <td><?php echo $ruse ?></td>
                    </tr>
                    <tr>
                        <td>София</td>
                        <td><?php echo $sofia ?></td>
                    </tr>
                    <tr>
                        <td>Стара Загора</td>
                        <td><?php echo $stara ?></td>
                    </tr>
                </table>
            </div>
            <script>
                $(document).ready(function() {
                    $('.tableee th').hover(function() {
                            var t = parseInt($(this).index()) + 1;
                            $('.tableee td:nth-child(' + t + ')').addClass('highlighted');
                        },
                        function() {
                            var t = parseInt($(this).index()) + 1;
                            $('.tableee td:nth-child(' + t + ')').removeClass('highlighted');
                        });
                });
            </script>
            <div class="we" style="margin-left: 13px;">
                <div class="tabText"><i class="fa-solid fa-box"></i> Брой продукти по категории</div>
                <table class="tableee">
                    <tr>
                        <th>Категория</th>
                        <th>Брой</th>
                    </tr>
                    <tr>
                        <td>Информатика</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Електроника</td>
                        <td><?php echo $productSum ?></td>
                    </tr>
                    <tr>
                        <td>Здраве и красота</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Строителство</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Битова техника</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Всички категории</td>
                        <td><?php echo $productSum ?></td>
                    </tr>
                </table>
            </div>
            <script>
                $(document).ready(function() {
                    $('.tableeeе th').hover(function() {
                            var t = parseInt($(this).index()) + 1;
                            $('.tableeeе td:nth-child(' + t + ')').addClass('highlighted');
                        },
                        function() {
                            var t = parseInt($(this).index()) + 1;
                            $('.tableeeе td:nth-child(' + t + ')').removeClass('highlighted');
                        });
                });
            </script>
            <div class="we" style="margin-left: 13px;">
                <div class="tabText"><i class="fa-solid fa-image-portrait"></i> Годишен диапазон на потребителите</div>
                <table class="tableeeе">
                    <tr>
                        <th>Годишен диапазон</th>
                        <th>Брой</th>
                    </tr>
                    <tr>
                        <td>до 18</td>
                        <td><?php echo $q ?></td>
                    </tr>
                    <tr>
                        <td>19-25</td>
                        <td><?php echo $w ?></td>
                    </tr>
                    <tr>
                        <td>26-35</td>
                        <td><?php echo $e ?></td>
                    </tr>
                    <tr>
                        <td>36-45</td>
                        <td><?php echo $r ?></td>
                    </tr>
                    <tr>
                        <td>46-55</td>
                        <td><?php echo $t ?></td>
                    </tr>
                    <tr>
                        <td>55+</td>
                        <td><?php echo $y ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
        function myFunctionnnnn() {

            var x = document.getElementById("myyyyDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <?php
    $sql = "SELECT * FROM admins";
    $result = mysqli_query($link, $sql);
    while ($row = $result->fetch_assoc()) {
        $adminID = $row["id"];
        $sql = "SELECT * FROM admins WHERE id='" . $adminID . "'";
        $result = mysqli_query($link, $sql);
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $_SESSION["name"] = $name;
    ?>
            <div class="oooopen" id="open" onclick="myFunctionnnnn()">Обновяване на администраторските данни <i class="fa-solid fa-circle-arrow-down"></i></div>
            <div id="myyyyDIV" style="display: none;">
                <div class="change">Смяната на паролата е задължителна !</div>
                <div class="flexo">
                    <form action="passUpdate.php" class="fform" method="post">
                        <img src="image/img_avatar2.png" class="adminImg" alt="">
                        <div>
                            <label for=""> Вашият имейл адрес:</label>
                        </div>
                        <div>
                            <input type="email" placeholder="Имейл" value="<?php echo $row["email"]; ?>">
                        </div>
                        <label for="">Сменете паролата си:</label>
                        <div>
                            <input type="password" id="third" placeholder="Парола" name="password">
                            <img onclick="HidePass()" class="hidef" src="image/hide.png" alt="" title="Покажи парола">
                        </div>
                        <label for="">Повторете паролата си:</label>
                        <div>
                            <input type="password" id="fourth" placeholder="Повторете парола" name="passwordR">
                            <img onclick="HidePasss()" class="hidef" src="image/hide.png" alt="" title="Покажи парола">
                        </div>
                        <button type="submit" name="submitt" id="sub"><i class="fa-solid fa-arrows-spin"></i> Обнови данните</button>
                    </form>
                    <img src="image/20945760.jpg" class="log" alt="">
                </div>
            </div>
    <?php
        }
    }
    ?>
    <script>
        function HidePass() {
            var x = document.getElementById("third");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        };

        function HidePasss() {
            var x = document.getElementById("fourth");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        };
    </script>

</body>

</html>