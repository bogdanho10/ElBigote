<?php
include 'core/dbConnection.php';
include 'include/header.php';

switch ($_GET['page']) {

    case "login":
        require "pages/login.php";
        break;

    case "login":
        require "pages/login.php";
        break;
    case "register":
        require "pages/register.php";
        break;
    case "register.inc":
        require "include/register.inc.php";
        break;

    default:
        require "pages/homePage.php";
        break;
}
?>



</body>

</html>