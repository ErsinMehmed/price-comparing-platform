<?php
include 'database.php';

$sql = "SELECT * FROM users WHERE name='ersin1'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row['status'];
        if ($status == 'yes') {
?>
            <div style="background-color: green;">онлайн</div>
        <?php
        } else { ?>
            <div style="background-color: red;">офлайн</div>
<?php
        }
    }
}
?>