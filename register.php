<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register ke Perpustakaan digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])) {
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);

                                                $insert = mysqli_qeury($koneksi, "INSERT INTO user(nama,email,alamat,password,) VALUES('$nama','$email','$alamat','$username','$password')");
                                            }
                                        ?>
                                        <form method="post">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Nama lengkap</label>
                                                <input class="form-control py-4" type="text" required name="nama" placeholder="Masukkan nama lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text"  required name="email" placeholder="Masukkan email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">alamat</label>
                                                <textarea name="alamat" rows="5"  required class="form-control py-4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">username</label>
                                                <input class="form-control py-4" type="text"  required name="username" placeholder="Masukkan username" />
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword"  required name="password" type="password" placeholder="Masukkan password" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-danger" href="login.php">login</a>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                       <div class="small">
                                            &copy; 2025 My To-Do List
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
