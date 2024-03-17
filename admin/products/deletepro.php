<?php 
    $id = $_GET['id'];
    $data = new Products();
    $dele = $data->delete($id);  
    echo "<script>document.location='index.php?act=listpro';</script>";
?>

