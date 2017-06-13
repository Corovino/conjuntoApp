<?php include '../partials/head.php';

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:../dashboard/admin.php");
    }
} else {
    header("location:../auth/login.php");
}
?>
<?php 
 require_once '../partials/menu.php';
 require_once '../partials/aside.php';
 ?>
<!-- /.container -->
<?php include '../partials/footer.php';?>