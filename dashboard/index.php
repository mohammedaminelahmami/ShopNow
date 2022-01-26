

<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNow |
        <?php
        session_start();
        if (isset($_GET["dashboard"])) {
            echo $_GET["dashboard"];
        } elseif (isset($_GET["view"])) {
            echo $_GET["view"];
        } elseif (isset($_GET["add"])) {
            echo $_GET["add"];
        } elseif (isset($_GET["modify"])) {
            echo $_GET["modify"];
        } elseif (isset($_GET["delete"])) {
            echo $_GET["delete"];
        } else {
            echo "Dashboard";
        }
        ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/graphs.css">
    <link rel="stylesheet" href="styles/getall.css">
    <link rel="stylesheet" href="styles/style.css">

    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <link rel="shortcut icon" href="../login/images/logo.png">
</head>

<body>
    <aside>
        <div class="title-con">
            <h1 class="Dashboard">
                <?php

                if (isset($_GET["dashboard"])) {
                    echo $_GET["dashboard"];
                } elseif (isset($_GET["view"])) {
                    echo $_GET["view"];
                } elseif (isset($_GET["add"])) {
                    echo $_GET["add"];
                } elseif (isset($_GET["modify"])) {
                    echo $_GET["modify"];
                } elseif (isset($_GET["delete"])) {
                    echo $_GET["delete"];
                } else {
                    echo "Dashboard";
                }

                ?>
            </h1>

            <button class="hmb__menu" id="hmb__menu">
                <i class="fas fa-arrow-left" id="arrow" title="Hide and Show side bar"></i>
            </button>
        </div>

        <form action="" method="GET">
            <ul class="my__nav" id="my__nav">
                <label for="dashboard">
                    <li class="<?php echo !isset($_GET["view"]) && !isset($_GET["add"]) ? "on-page" : "" ?>" data-link="dashboard" onclick="selectLink(this)">
                        <img src="imgs/home.png" alt="dashboard home icon" class="icons">
                        <input type="submit" value="Dashboard" id="dashboard" name="dashboard" class="link">
                    </li>
                </label>
                <label for="view">
                    <li class="<?php echo isset($_GET["view"]) ? ' on-page' : '' ?>" data-link="view">
                        <img src="imgs/view.png" alt="view all products icon" class="icons">
                        <input type="submit" value="View Products" id="view" name="view" class="link">
                    </li>
                </label>
                <label for="add">
                    <li class="<?php echo isset($_GET["add"]) ? "on-page" : "" ?>" data-link="add">
                        <img src="imgs/add-product.png" alt="add product icon" class="icons">
                        <input type="submit" value="Add Products" id="add" name="add" class="link">
                    </li>
                </label>

            </ul>
        </form>
        <div class="end-container">
            <div id="logout-bt">
                <img src="imgs/logout.png" alt="logout icon" class="logout-icons">
                <a href="../login/index.php" class="logout-link">Logout</a>
            </div>
            <p class="copyright"> Copyright © 2022 ShopNow. All rights reserved. </p>
        </div>
    </aside>

    <main>
            <?php

            if (isset($_GET["dashboard"])) {
                include "charts.php";
            } elseif (isset($_GET["view"])) {
                include "getall.php";
            } elseif ( isset($_GET["add"])) {
                include "addproduct.php";
            } else {
                include "charts.php";
            }

            ?>
            
    </main>


    <script src="scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="scripts/graph.js"></script>
</body>
</html>