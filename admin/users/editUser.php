<?php 
    $id = $_GET['id'];
    $data = new User();
    $row_up = $data->getByID($id); 

    if(isset($_POST['editUser'])) {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Fullname = $_POST['FullName'];
        $Email = $_POST['Email']; 
        $Permissions = $_POST['Permissions']; 
        $Address = $_POST['Address']; 
        $Phone = $_POST['Phone'];  
        $edit = $data->updateUser($Username, $Password, $Fullname, $Email, $Permissions, $Address, $Phone, $row_up['UserID']);
        echo "<script>document.location='?act=listUser';</script>";
    }
?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <br><br><br>
            <h3 class="card-title">Cập Nhật Thông Tin</h3>
            <form class="forms-sample" method="post">
                <div class="form-group">
                    <label for="name">Tên Tài Khoản</label>
                    <input type="text" class="form-control" placeholder="Name" name="Username" value="<?php echo $row_up['Username']?>">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" class="form-control" placeholder="Name" name="Password" value="<?php echo $row_up['Password']?>">
                </div>
                <div class="form-group">
                    <label for="note">FullName</label>
                    <input type="text" class="form-control" placeholder="Note" name="FullName" value="<?php echo $row_up['FullName']?>">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" placeholder="Name" name="Email" value="<?php echo $row_up['Email']?>">
                </div>
                <div class="form-group">
                    <label for="name">Permissions</label>
                    <input type="text" class="form-control" placeholder="Name" name="Permissions" value="<?php echo $row_up['Permissions']?>">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" class="form-control" placeholder="Name" name="Address" value="<?php echo $row_up['Address']?>">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" placeholder="Name" name="Phone" value="<?php echo $row_up['Phone']?>">
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="editUser">Submit</button>
            </form>
        </div>
    </div>
</div>

