<?php
include 'database.php';

if (isset($_POST['action'])) {
    $sql = "SELECT * FROM products WHERE brand !=''";

    if (isset($_POST['number'])) {
        $number = implode("','", $_POST['number']);
        $sql .= "AND number IN('" . $number . "')";
    }
    if (isset($_POST['brand'])) {
        $brand = implode("','", $_POST['brand']);
        $sql .= "AND brand IN('" . $brand . "')";
    }
    if (isset($_POST['system'])) {
        $system = implode("','", $_POST['system']);
        $sql .= "AND system IN('" . $system . "')";
    }


    $result = $link->query($sql);
    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= '<div class="col">
               <div class="card-deck">
                   <div class="card border-secondary">
                       <div class="div-img">
                           <img src="' . $row['image'] . '" alt="" class="">
                       </div>
                       <div class="card-img-overlay">
                           <div class="name">' . $row['name'] . '</div>
                       </div>
                       <div class="card-body">
                           <h4 class="card-title">Цена: ' . $row['price'] . '</h4>
                           <p>
                               Производител: <span>' . $row['brand'] . '</span><br>
                               Оценка: <span>' . $row['grade'] . ' <span class="fa fa-star checked"></span></span><br>
                               Опp. система: <span>' . $row['system'] . '</span>
                           </p>
                           <div class="com"><input type="checkbox" id="c"><label for="c">Сравнение</label></div>
                           <div class="er">Виж повече</div>
                       </div>
                   </div>
               </div>
           </div>';
        }
    } else {
        $output = '<h3> Не са открити продукти <h3>';
    }
    echo $output;
}
