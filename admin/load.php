
 <?php

    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }

    switch ($page) {

        case "1":
            require("dashboard/view.php");
            break;
        case "2":
            require("barang/view.php");
            break;
        case "3":
            require("kategori/view.php");
            break;
    }
    ?>