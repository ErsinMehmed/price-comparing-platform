<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/d4b9f98a5c.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
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

<body>
	<?php
	include 'database.php';
	$output = '';
	if (isset($_POST["query"])) {
		$search = mysqli_real_escape_string($link, $_POST["query"]);
		$query = " SELECT * FROM products WHERE name like '" . $search . "%'";
	} else {
		$query = "
	SELECT * FROM products";
	}
	$result = mysqli_query($link, $query);
	if ($result->num_rows > 0) {
		$output = '<div class="table-responsive" id="table-responsive">
					<table class="table" id="table">
						<tr>
						<th><a class="column_sort" id="id" data-order="desc" href="#">Номер</a></th>
							<th><a class="column_sort" id="name" data-order="desc" href="#">Име</a></th>
							<th><a class="column_sort" id="price" data-order="desc" href="#">Цена</a></th>
							<th><a class="column_sort" id="brand" data-order="desc" href="#">Марка</a></th>
							<th><a class="column_sort" id="system" data-order="desc" href="#">ОП система</a></th>
							<th><a class="column_sort" id="number" data-order="desc" href="#">Диапазон</a></th>
							<th>Редактирай или изтрий</th>
						</tr>';
		while ($row = $result->fetch_assoc()) {
			$delete = 'server.php?del=' . $row['id'];
			$edit = 'dashboard.php?edit=' . $row['id'];
			$open = 'server.php?open=' . $row['id'];
			$output .= '
			<tr>
				<td>' . $row["id"] . '</a></td>
				<td class="window"><a class="tag" name="click" href="' . $open . '">' . $row["name"] . '</a></td>
				<td>' . 'от ' . $row['price'] . ',00лв.' . '</td>
				<td>' . $row["brand"] . '</td>
				<td>' . $row["system"] . '</td>
				<td>' . $row["number"] . '</td>
				<td style="text-align: center;">                  
                        <a href="' . $edit . '" class="edit_btn product_edit">Редактирай</a>
						<a href="' . $delete . '" class="del_btn">Изтрий</a>
                     </td>
			</tr>
		';
		}
		echo $output;
	} else {
		echo '<table><tr><td style="text-align:center; font-weight: bold; font-size: 25px;">Не са намерени резултати !</td></tr></table>';
	}
	?>
	<script>
		$(document).ready(function() {
			$(document).on('click', '.column_sort', function() {
				var column_name = $(this).attr("id");
				var order = $(this).data("order");
				var arrow = '';
				if (order == 'desc') {
					arrow = '&nbsp;<span><i class="fa-solid fa-arrow-up-1-9"></i></span>';
				} else {
					arrow = '&nbsp;<span><i class="fa-solid fa-arrow-down-1-9"></i></span>';
				}
				$.ajax({
					url: "sort.php",
					method: "POST",
					data: {
						column_name: column_name,
						order: order
					},
					success: function(data) {
						$('#table-responsive').html(data);
						$('#' + column_name + '').append(arrow);
						alert(column_name);
					}
				})
			});
		});
	</script>
</body>

</html>