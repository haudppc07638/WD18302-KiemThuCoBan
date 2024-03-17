<?php
if (isset($_GET['userID'])) {
    $id = $_GET['userID'];
    $delete = new User();
    $delete->deleteUser($id);
    echo "<script>alert('Bạn muốn chắc chắn xoá?');</script>";
    echo "<script>document.location='?act=listUser';</script>";
}
?>