<?php
session_start();
require_once './Class/Database.php';
$db = new Database("localhost", "root", "", "eladomotorok");

if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
} else if($_SESSION['login']) {
    $_currentUser = $db->getBejelentkezettFelhasznalo($_SESSION['userid']);
}

if (isset($_SESSION['frissitesUzenet'])) {
    echo "<script>alert('{$_SESSION['frissitesUzenet']}');</script>";
    unset($_SESSION['frissitesUzenet']); // 
}

require_once './reszek/head.php';
$menu = filter_input(INPUT_GET, "menu");
?>

<body>
    <?php
    require_once './reszek/menu.php';
    require_once './tartalom.php';
    require_once './reszek/footer.php';
    ?>
</body>
</html>
