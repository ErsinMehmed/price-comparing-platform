<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
  <?php
  include 'database.php';
  $output = '';
  if (isset($_POST["export"])) {
    $query = "SELECT * FROM products";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
      $output .= '
      <table class="table" bordered="1">  
        <tr>  
        <th>Номер</th>  
        <th>Име</th>  
        <th>Цена</th>  
        <th>Марка</th>
        <th>ОП система</th>
        <th>Диапазон</th>
        </tr>';
      while ($row = mysqli_fetch_array($result)) {
        $output .= '
      <tr>  
        <td>' . $row["id"] . '</td>  
        <td>' . $row["name"] . '</td>  
        <td>' . $row["price"] . '</td>  
        <td>' . $row["brand"] . '</td>  
        <td>' . $row["system"] . '</td>
        <td>' . $row["number"] . '</td>
      </tr>';
      }
      $output .= '</table>';
      header('Content-Type: application/xls');
      header('Content-Disposition: attachment; filename=products-data.xls');
      echo $output;
    }
  }
  ?>
</body>

</html>