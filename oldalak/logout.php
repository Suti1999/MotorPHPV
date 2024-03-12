<?php
unset($_SESSION['userid']);
session_id();
session_destroy();
header("Location: index.php");