<style>
    #country-list {
        font-weight: bold;
        z-index: 10;
        float: left;
        list-style: none;
        padding: 0;
        width: 520px;
        position: absolute;
    }

    #country-list li {
        padding: 10px;
        background: white;
        border: #0475bb 1px solid;
        border-top: none;
    }

    #country-list li:hover {
        background: #58baff;
        cursor: pointer;
        color: white;
        font-weight: bold;
    }

    #country-list img {
        width: 38px;
        height: 47px;
        vertical-align: middle;
        margin-right: 10px;
        margin-left: 10px;
    }

    #country-list div {
        width: 520px;
        font-weight: bold;
        padding: 12px;
        background: white;
        border-left: #0475bb 1px solid;
        border-right: #0475bb 1px solid;
        font-size: 21px;
    }

    #country-list {
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    }

    #country-list span {
        font-weight: bold;
    }
</style>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST["keyword"])) {
    $query = "SELECT * FROM products WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name";
    $result = $db_handle->runQuery($query);
    if (!empty($result)) {
?>
        <ul id="country-list">
            <div>Продукти</div>
            <?php
            foreach ($result as $country) {
            ?>
                <a href="<?php echo $country["link"]; ?>">
                    <li><img src="<?php echo $country["image"]; ?>" alt=""><?php echo $country["name"]; ?><span> <?php echo $country["space"]; ?></span></li>
                </a>
            <?php } ?>
        </ul>
<?php }
} ?>