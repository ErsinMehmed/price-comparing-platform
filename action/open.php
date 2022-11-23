<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/siteLogo.png">
    <title>Erso Shopping Информация за продукта</title>
    <script src="https://kit.fontawesome.com/d4b9f98a5c.js" crossorigin="anonymous"></script>
    <style>
        body {
            padding: 0;
            margin: 0;
            Font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .info {
            background-color: #3c97ff;
            text-align: center;
            padding: 14px 0px;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        .marr input {
            padding: 8px 20px 8px 14px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin: 3px 0px 8px 0px;
        }

        .marr .logo {
            height: 35px;
            width: 35px;
            background-color: #E5E4E2;
            border-radius: 5px 0px 0px 5px;
            z-index: 2;
            color: #333;
            margin: 2px -2px 8px 0px;
        }

        .marr i {
            margin: 10px 10px;
        }

        .marr .raaw {
            display: flex;
        }

        .marr {
            margin: 10px 20px 10px 21px;
            display: flex;
        }

        .marr label {
            margin-left: 6px;
        }

        .marr input:focus {
            border: 1px solid #ccc;
            outline: none;
        }

        .msg {
            width: 99.4%;
            padding: 14px 0px;
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            font-weight: bold;
            text-align: center;
        }

        .butg {
            background-color: #3c97ff;
            color: white;
            font-weight: bold;
            padding: 10px 18px;
            border: none;
            margin: -5px 0px 14px 287px;
            transition: all 0.6s;
        }

        .butg:hover {
            background-color: #2f75c5;
            cursor: pointer;
        }

        .rom {
            margin-right: 14px;
        }
    </style>
</head>

<body>
    <div class="info">
        Информация за продукта
    </div>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <?php
    include 'database.php';
    $id = $_SESSION["idd"];
    $adminName = $_SESSION["name"];
    $sql = "SELECT * FROM products WHERE id = '" . $id . "'";
    $result = mysqli_query($link, $sql);
    while ($row = $result->fetch_assoc()) {
        $time = $row['time'];
        $timee = substr($time, 0, 5);
        $tim = $row['timeu'];
        $timm = substr($tim, 0, 5);
    ?>
        <form action="upd.php" method="post">
            <div class="marr">
                <div class="rom">
                    <label for="">Добавил продукта:</label>
                    <div class="raaw" title="Кой администратор е добавил продукта">
                        <div class="logo"><i class="fa-solid fa-user"></i></div><input disabled="disabled" type="text" value="<?php echo $adminName; ?>">
                    </div>
                    <label for="">Добавен на:</label>
                    <div class="raaw" title="Кога е добавен продукта">
                        <div class="logo"><i class="fa-solid fa-clock"></i></div><input disabled="disabled" type="text" value="<?php echo $row['date'];
                                                                                                                                echo ' ' . $timee; ?>">
                    </div>
                    <label for="">Последно редактиран на:</label>
                    <div class="raaw" title="Кога последно са редактирани данните за продукта">
                        <div class="logo"><i class="fa-solid fa-clock-rotate-left"></i></div><input disabled="disabled" type="text" value="<?php echo $row['dateu'];
                                                                                                                                            echo ' ' . $timm; ?>">
                    </div>
                    <label for="">Име на продукта:</label>
                    <div class="raaw">
                        <div class="logo"><i class="fa-solid fa-file-signature"></i></div><input type="text" value="<?php echo $row['name']; ?>" disabled="disabled">
                    </div>
                </div>
                <div class="rom">
                    <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                    <label for="">Сериен номер:</label>
                    <div class="raaw" title="Серийния номер на продукта в системата">
                        <div class="logo"><i class="fa-solid fa-barcode"></i></div><input name="code" type="text" value="<?php echo $row['serial']; ?>" id="txtPassportNumberrr" disabled="disabled">
                    </div>
                    <label for="">Дизайн:</label>
                    <div class="raaw">
                        <div class="logo"><i class="fa-solid fa-mobile-screen-button"></i></div><input name="design" type="text" value="<?php echo $row['design']; ?>" id="txtPassportNumberrrr" disabled="disabled">
                    </div>
                    <label for="">Физическа памет:</label>
                    <div class="raaw">
                        <div class="logo"><i class="fa-solid fa-record-vinyl"></i></div><input type="text" name="space" value="<?php echo $row['space']; ?>" id="txtPassportNumberrrrr" disabled="disabled">
                    </div>
                    <label for="">RAM памет:</label>
                    <div class="raaw">
                        <div class="logo"><i class="fa-solid fa-memory"></i></div><input type="text" name="ram" value="<?php echo $row['ram']; ?>" id="txtPassportNumberrrrrr" disabled="disabled">
                    </div>
                </div>
            </div>
        <?php
    }
        ?>
        <input type="button" class="butg" value="Редактиране" onclick="EnableDisableTextBox(this)" />
        <input type="submit" style="margin-left: 8px;" class="butg" name="submit" value="Запази" />
        </form>
        <script>
            function EnableDisableTextBox(btnPassport) {
                var txtPassportNumber = document.getElementById("txtPassportNumberrr");
                if (btnPassport.value == "Редактиране") {
                    txtPassportNumber.removeAttribute("disabled");
                } else {
                    txtPassportNumber.setAttribute("disabled", "disabled");
                }
                var txtPassportNumber = document.getElementById("txtPassportNumberrrr");
                if (btnPassport.value == "Редактиране") {
                    txtPassportNumber.removeAttribute("disabled");
                } else {
                    txtPassportNumber.setAttribute("disabled", "disabled");
                }
                var txtPassportNumber = document.getElementById("txtPassportNumberrrrr");
                if (btnPassport.value == "Редактиране") {
                    txtPassportNumber.removeAttribute("disabled");
                } else {
                    txtPassportNumber.setAttribute("disabled", "disabled");
                }
                var txtPassportNumber = document.getElementById("txtPassportNumberrrrr");
                if (btnPassport.value == "Редактиране") {
                    txtPassportNumber.removeAttribute("disabled");
                } else {
                    txtPassportNumber.setAttribute("disabled", "disabled");
                }
                var txtPassportNumber = document.getElementById("txtPassportNumberrrrrr");
                if (btnPassport.value == "Редактиране") {
                    txtPassportNumber.removeAttribute("disabled");
                } else {
                    txtPassportNumber.setAttribute("disabled", "disabled");
                }
            }
        </script>


</body>

</html>