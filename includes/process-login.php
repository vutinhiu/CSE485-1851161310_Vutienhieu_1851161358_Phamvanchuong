<?php
$errors = array();
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
if ($email == 'admin@gmail.com' && $password == 'admin') {
                header("Location:admin/admin.php"); 
            } else {
                if (empty($errors)) {
                    require_once("includes/connect.php");
                    // B2: Khai bao truy van
                    $sql = "SELECT * FROM users WHERE email = '$email' AND status = 1";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        if (password_verify($password, $row['password'])) {
                            session_start();
                            $_SESSION['username'] = $email;
                            header("Location:index.php");
                            exit();
                        } else { ?><script>alert("Mật khẩu không chính xác.");</script><?php }
                    } else { ?><script>alert("Tài khoản không tồn tại hoặc chưa kích hoạt.");</script><?php }
                } else { ?><script>alert("Lỗi hệ thống.");</script>
    <?php
        }
            }
    ?>
