<?php

if ($_SESSION['username']!="") {


if (($_SESSION['username_m']=="")) {
   include 'dashboard.php';
}else if ($_SESSION['username_t']!="") {
    include 'dashboard_t.php';
}else if($_SESSION['username_s']!=""){
    include 'dashboard_s.php';
}

}else{
    echo "<script>window.location.href='login.php'; </script>";
}
?>