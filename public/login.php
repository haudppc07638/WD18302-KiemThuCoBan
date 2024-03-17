<?php
session_start();
ob_start();
include('../admin/includes/pdo.php');
include('../admin/users/user.php');

if (isset($_POST['login'])) {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();
    $userInfo = $user->checkUser($userName, $password);
    // $_SESSION['login'] = $userInfo;

    if (isset($userInfo)) {
        $userRole = $user->getRole();

        if ($userRole == 'admin') {
            setcookie("user_type", "admin", time() + 1800, "/");
            header("Location: /DuAn1-nhom10/admin/index.php");
            exit;
        }
        if ($userRole == 'user') {
            setcookie("user_type", "user", time() + 1800, "/");
            $_SESSION['login']['username'] = $userName;
            header("Location: ../index.php");
            exit;
        }
    }
    if (empty($userName)) {
        $errorUsername = "Vui lòng điền tên đăng nhập";
    }
    if (empty($password)) {
        $errorPassword = "Vui lòng điền mật khẩu";
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/form.php">

</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Login account</h2>
                                <form action="?act=login" method="post">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            placeholder="User Name *" name="username" />
                                    </div>
                                    <?php
                                    if (!empty($errorUsername)) {
                                        echo '<p style="color:red">' . $errorUsername . '</p>';
                                    }
                                    ?>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg " placeholder="Password *"
                                            name="password" />
                                    </div>
                                    <?php
                                    if (!empty($errorPassword)) {
                                        echo '<p style="color:red">' . $errorPassword . '</p>';
                                    }
                                    ?>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                            name="login">Đăng Nhập</button>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0">Bạn chưa có tài khoản?
                                        <a href="register.php" class="fw-bold text-body"><u>Đăng ký</u></a> <br>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>