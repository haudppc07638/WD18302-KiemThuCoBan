<?php
$id = $_GET['id'];
$data = new category();
$row = $data->getByID($id);

if (isset($_POST['editcate'])) {
    $name = $_POST['cateName'];
    $edit = $data->update($name, $row['categoryID']);
    echo "<script>document.location='?act=list';</script>";
}
?>
<div class="container-fluid">
    <div class="card-header">
        <h2>Edit Category</h2>
    </div>
    <form method="post">
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" name="cateName"
                value="<?php echo $row['categoryName'] ?>">

        </div>
        <button name="editcate" class="btn btn-primary">Save</button>
    </form>
</div>