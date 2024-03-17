<?php
include('../admin/includes/pdo.php');
include('../admin/users/user.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['username'];
    $fullName = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $user = new User();
    $user->addUser($userName, $fullName, $email, $phone, $address, $password, 'user');
    $errorMessages = array();

    if (isset($_POST['register'])) {
        if (empty($userName)) {
            $errorMessages[] = "Bạn chưa điền tên tài khoản";
        }
        if (empty($fullName)) {
            $errorMessages[] = "Bạn chưa điền đầy đủ họ tên";
        }
        if (empty($address)) {
            $errorMessages[] = "Bạn chưa điền địa chỉ";
        }
        if (empty($email)) {
            $errorMessages[] = "Bạn chưa điền email";
        }
        if (empty($phone) || !is_numeric($phone)) {
            $errorMessages[] = "Bạn chưa điền số điện thoại hoặc không phải số";
        }
        if (empty($password)) {
            $errorMessages[] = "Bạn chưa điền mật khẩu";
        }
        if (empty($confirm) || $password !== $confirm) {
            $errorMessages[] = "Nhập sai mật khẩu";
        }

        if (empty($errorMessages)) {
            echo '<script> alert("Tạo tài khoản thành công"); window.location.href = "login.php"; </script>';
            exit;
    }
}
}
?>

<!-- ... -->

<!doctype html>
<html lang="en">

<head>
    <title>Đăng Ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/form.php">

</head>

<!-- ... -->

<!-- ... -->

<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); height: 155vh!important;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Register account</h2>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Tên Tài Khoản *" name="username" />
                                        <?php
                                        if (!empty($errorMessages[0])) {
                                            echo '<p style="color:red">' . $errorMessages[0] . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!-- ... other form fields ... -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Tên đầy đủ *" name="fullname" />
                                        <?php
                                        if (!empty($errorMessages[1])) {
                                            echo '<p style="color:red">' . $errorMessages[1] . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!-- ... other form fields ... -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg " placeholder="Email *" name="email" />
                                        <?php
                                        if (!empty($errorMessages[2])) {
                                            echo '<p style="color:red">' . $errorMessages[2] . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!-- ... other form fields ... -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg " placeholder="Số điện thoại *" name="phone" />
                                        <?php
                                        if (!empty($errorMessages[3])) {
                                            echo '<p style="color:red">' . $errorMessages[3] . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!-- ... other form fields ... -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg " placeholder="Địa chỉ *" name="address" />
                                        <?php
                                        if (!empty($errorMessages[4])) {
                                            echo '<p style="color:red">' . $errorMessages[4] . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!-- ... other form fields ... -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg " placeholder="Mật khẩu *" name="password" />
                                        <?php
                                        if (!empty($errorMessages[5])) {
                                            echo '<p style="color:red">' . $errorMessages[5] . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <!-- ... other form fields ... -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg " placeholder="Nhập lại mật khẩu *" name="confirm" />
                                        <?php
                                        if (!empty($errorMessages[6])) {
                                            echo '<p style="color:red">' . $errorMessages[6] . '</p>';
                                        }
                                        ?>
                                    </div>
                                   
                                    <!-- ... other form fields ... -->
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="register">Đăng Ký</button>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản?
                                        <a href="login.php" class="fw-bold text-body"><u>Đăng Nhập</u></a> <br>                  
                                    </p>
                                    <!-- ... other form fields ... -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>