<script>
     $(document).ready(function() {
          $('.table th').hover(function() {
                    var t = parseInt($(this).index()) + 1;
                    $('.table td:nth-child(' + t + ')').addClass('highlighted');
               },
               function() {
                    var t = parseInt($(this).index()) + 1;
                    $('.table td:nth-child(' + t + ')').removeClass('highlighted');
               });
     });
</script>
<?php
include 'database.php';
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
     $order = 'asc';
} else {
     $order = 'desc';
}
$query = "SELECT * FROM products ORDER BY " . $_POST["column_name"] . " " . $_POST["order"] . "";
$result = mysqli_query($link, $query);
$output .= '  
 <table class="table table-bordered">  
      <tr> 
           <th><a class="column_sort" id="id" data-order="' . $order . '" href="#">Номер</a></th>  
           <th><a class="column_sort" id="name" data-order="' . $order . '" href="#">Име</a></th>  
           <th><a class="column_sort" id="price" data-order="' . $order . '" href="#">Цена</a></th>  
           <th><a class="column_sort" id="brand" data-order="' . $order . '" href="#">Марка</a></th>  
           <th><a class="column_sort" id="system" data-order="' . $order . '" href="#">ОП система</a></th>  
           <th><a class="column_sort" id="number" data-order="' . $order . '" href="#">Диапазон</a></th>
           <th>Редактирай или изтрий</th>
      </tr>  
 ';
while ($row = mysqli_fetch_array($result)) {
     $delete = 'server.php?del=' . $row['id'];
     $edit = 'dashboard.php?edit=' . $row['id'];
     $open = 'server.php?open=' . $row['id'];
     $output .= '  
      <tr>
        <td>' . $row["id"] . '</td>
        <td class="window"><a href="' . $open . '">' . $row["name"] . '</a></td>
        <td>' . 'от ' . $row['price'] . ',00лв.' . '</td>
        <td>' . $row["brand"] . '</td>
        <td>' . $row["system"] . '</td>
        <td>' . $row["number"] . '</td>
        <td style="text-align: center;">                  
                <a href="' . $edit . '" class="edit_btn" >Редактирай</a>
                <a href="' . $delete . '" class="del_btn">Изтрий</a>
        </td>
      </tr>  
      ';
}
$output .= '</table>';
echo $output;
