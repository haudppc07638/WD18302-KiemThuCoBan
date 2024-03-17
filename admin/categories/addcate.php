<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
    <form method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 mt-3">
            <label for="cateName">Name</label> <br>
            <br>
            <br>
            <input type="text" class="form-control" id="cateName"  name="cateName" >
            <span id="cateNameError" class="error"></span>
        </div>
        <button name="addCate" class="btn btn-primary">Add</button>
        <br>

    </form>
</div>
<?php
if (isset($_POST['addCate'])) {
    $cateName = $_POST['cateName'];
    $errors = [];

    // Kiểm tra tên danh mục
    if (empty($cateName)) {
        $errors[] = "Điền Tên danh mục vào cho tao nhanh lên .";
    }

    if (empty($errors)) {
        $db = new category();
        $addPro = $db->add($cateName);

        if ($addPro) {
            echo "Danh mục đã được thêm thành công!";
        } else {
            echo "Danh mục đã tồn tại hoặc có lỗi khi thêm.";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}





?>