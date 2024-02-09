<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form-Login_LaundryHub</title>
     <link rel="stylesheet" type="text/css" href="login.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
     <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
     <div class="login-page bg-light">
          <div class="container">
               <h1 class="text-center mb-5">
                    Laundry<span class="hub">Hub</span>
               </h1>

               <!-- awal ROW satu -->
               <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                         <div class="bg-white shawod rounded">

                              <!-- awal ROW dua -->
                              <div class="row">
                                   <div class="col-md-7 pe-0">
                                        <div class="form-left h-100 py-5 px-5">

                                             <div class="col-12">
                                                  <h1 class="mb-5 text-center">Login</h1>
                                             </div>

                                             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-4">
                                                  <div class="col-12">
                                                       <label for="">Username <span class="text-danger">*</span></label>
                                                       <div class="input-group">
                                                            <div class="input-group-text">
                                                                 <i class="bi-person-fill fs-4"></i>
                                                            </div>
                                                            <input type="text" class="form-control input_User" name="username" id="validationTooltip01" placeholder="Username" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-12">
                                                       <label for="">Password <span class="text-danger">*</span></label>
                                                       <div class="input-group">
                                                            <div class="input-group-text">
                                                                 <i class="bi bi-lock-fill fs-4"></i>
                                                            </div>
                                                            <input type="password" class="form-control input_Pass" name="password" id="validationTooltip02" placeholder="Password" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                       <label class="float-start">
                                                            Belum punya akun?
                                                            <a href="register.php" class="text-center text-primary">Daftar</a>
                                                       </label>
                                                  </div>
                                                  <div class="col-sm-6">
                                                       <div class="from-check float-end">
                                                            <input type="checkbox" class="form-check-input" id="inlineformCheck">
                                                            <label for="inlineformCheck" class="form-check-label">Remember</label>
                                                       </div>
                                                  </div>

                                                  <div class="col-12">
                                                       <button type="submit" class="btn btn-primary px-4 float-start mt-2" name="admin_login">Login As Admin</button>
                                                       <button type="submit" class="btn btn-primary px-4 float-end mt-2" name="owner_login">Login As Owner</button>
                                                  </div>

                                             </form>

                                        </div>
                                   </div>

                                   <div class="col-md-5 ps-0 d-none d-md-block">
                                        <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                             <img src="icon3.png" width=80% height=60%></img>
                                             <br>
                                             <p class="fs-3">LaundryHub Membantu anda tetap bersih dan wangi setiap saat.<p>
                                        </div>

                                   </div>
                              </div>
                              <!-- akhir ROW dua -->
                         </div>
                    </div>
               </div>
               <!-- akhir ROW satu -->
          </div>
     </div>

     <?php
     $mysqli = mysqli_init();
     $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
     $mysqli->real_connect("aws.connect.psdb.cloud", "qha48odwqfwrnatdroy0", "pscale_pw_mlqv9TNQyIQK1IESIph9ISDPyr7WSPehz5pdEhy0uzC", "mahasiswa");

     if ($mysqli->connect_errno) {
         echo "Failed to connect to MySQL: " . $mysqli->connect_error;
     }

     if(isset($_POST['admin_login']) || isset($_POST['owner_login'])) {
         $username = $_POST['username'];
         $password = $_POST['password'];
         $loginType = isset($_POST['admin_login']) ? 'admin' : 'owner';
         $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$loginType'";
         $result = $mysqli->query($query);

         if($result->num_rows > 0) {
             if($loginType == 'admin') {
                 header("Location: ../admin/berandaA.php");
                 exit;
             } else {
                 header("Location: ../owner/berandaO.php");
                 exit;
             }
         } else {
             echo "<script>alert('Username atau password salah');</script>";
         }
     }

     $mysqli->close();
     ?>
</body>

</html>