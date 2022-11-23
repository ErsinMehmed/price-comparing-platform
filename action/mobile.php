<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erso Shopping Мобилни Телефони</title>
    <link rel="shortcut icon" href="image/siteLogo.png">
    <script src="jq.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mobile.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/060ba0cff2.js" crossorigin="anonymous"></script>
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
                    <a href="index.php"><img src="image/siteLogo.png" alt="Erso Shopping" height="130px" width="150px"></a>
                </div>
                <div class="search__container">
                    <input class="search__input" type="text" placeholder="Какво търсите ?">
                </div>
                <a href="#">
                    <div class="searchImgCon" onclick="c()"><img class="searchImg" src="image/search.png" alt="" width="23px" height="23px"></div>
                </a>
                <div class="buttons">
                    <div class="container">
                        <a href="account.php" class="btnn effect04" data-sm-link-text="Влез"><span><?php echo $_SESSION["username"]; ?></span></a>
                    </div>
                </div>
                <div class="notify"><span id="notifyType" class=""></span></div>
                <script>
                    $("#plus").click(function() {
                        $(".notify").toggleClass("aactive");
                        $("#notifyType").toggleClass("success");

                        setTimeout(function() {
                            $(".notify").removeClass("aactive");
                            $("#notifyType").removeClass("success");
                        }, 3000);
                    });
                </script>
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
                <li><a href="index.php">Начало</a></li>
                <li><a href="markets.php">Магазини </a></li>
                <li>
                    <a href="category.php">Категории</a>
                </li>
                <li><a href="compare.php">Сравни продукти</a></li>
            </ul>
        </nav>
    </header>
    <?php
    include 'database.php';
    $sql = "SELECT count(*) FROM products ";
    $result = $link->query($sql) or die($link->error);
    ?>
    <div class="container-fluid">
        <div class="boox">
            <div class="box">
                <div class="cat"><span>&nbsp;Мобилни Телефони</span></div>

            </div>
            <div class="mobile"><img src="image/icons8-mobile-phone-96.png" alt=""></div>
        </div>
        <div class="roww">
            <div class="col-left">
                <h5>Филтри</h5>
                <div class="col-border">
                    <h6>Ценови диапазон</h6>
                    <ul class="list-group">
                        <?php
                        $sql = "SELECT DISTINCT number FROM products ";
                        $result = $link->query($sql) or die($link->error);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <li class="list-group-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="check" class="form-check-input product_check" value="<?= $row['number']; ?>" id="number"><?= $row['number']; ?>
                                    </label>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="form-check">
                        <div class="click" onclick="myFunction()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>Задайте друга стойност</div>
                        <div id="myDIV">
                            <div class="flex">
                                <input type="text" placeholder="мин">
                                <input type="text" placeholder="макс">
                                <button>Виж</button>
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
                    </script>
                </div>
                <div class="col-border">
                    <h6>Изберете марка</h6>
                    <ul class="list-group">
                        <?php
                        include 'database.php';
                        $sql = "SELECT DISTINCT brand FROM products ORDER BY brand";
                        $result = $link->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <li class="list-group-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="check" class="form-check-input product_check" value="<?= $row['brand']; ?>" id="brand"><?= $row['brand']; ?>
                                    </label>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-border">
                    <h6 class="text-info">Изберете операционна система</h6>
                    <ul class="list-group">
                        <?php
                        include 'database.php';
                        $sql = "SELECT DISTINCT system FROM products ORDER BY system";
                        $result = $link->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <li class="list-group-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="check" class="form-check-input product_check" value="<?= $row['system']; ?>" id="system"><?= $row['system']; ?>
                                    </label>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php $sql = "SELECT count(*) FROM products ";
            $result = $link->query($sql);
            ?>
            <div class="col-right">
                <div class="color">

                    <div class="di">Намерени: <?php while ($row = mysqli_fetch_array($result)) {
                                                    echo  $row['count(*)'];
                                                } ?> продукта</div>

                    <div class="textChange" id="textChange">Висчки продукти</div>
                    <div class="option"><select name="" id="">
                            <option value="">Подредба</option>
                            <option value="">По цена</option>
                            <option value="">По оценка</option>
                        </select></div>
                </div>

                <div class="text-center">
                    <img src="image/loader.gif" alt="" id="loader" style="display: none;">
                </div>
                <div class="row" id="result">
                    <?php
                    $id = 0;
                    $sql = "SELECT * FROM products";
                    $result = $link->query($sql);
                    while ($row = $result->fetch_assoc()) {

                    ?>
                        <div class="roww">
                            <div class="col">
                                <div class="card-deck">
                                    <div class="card border-secondary">
                                        <div class="div-img">
                                            <img src="<?= $row['image']; ?>" alt="" class="">
                                        </div>
                                        <div class="card-img-overlay">
                                            <div class="name"><?= $row['name']; ?></div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Цена: <?= 'от ' . $row['price'] . ',00лв.'; ?></h4>
                                            <p>
                                                Производител: <span><?= $row['brand']; ?></span><br>
                                                Оценка: <span><?= $row['grade']; ?> <span class="fa fa-star checked"></span></span><br>
                                                Опp. система: <span><?= $row['system']; ?></span>
                                            </p>
                                            <div class="com"><input type="checkbox" id="c"><label for="c">Сравнение</label></div>
                                            <div class="er"><a href="<?= $row['link']; ?>">Виж повече</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $(".product_check").click(function() {
                $("#loader").show();

                var action = 'data';
                var brand = get_filter_text('brand');
                var system = get_filter_text('system');
                var number = get_filter_text('number');

                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: {
                        action: action,
                        number: number,
                        brand: brand,
                        system: system
                    },
                    success: function(response) {
                        $("#result").html(response);
                        $("#loader").hide();
                    }
                });

            });

            function get_filter_text(text_id) {
                var filterData = [];
                $('#' + text_id + ':checked').each(function() {
                    filterData.push($(this).val());
                });
                return filterData;
            }

        });
    </script>
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