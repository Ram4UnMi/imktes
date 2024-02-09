<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form-Login_LaundryHub</title>
     <link rel="stylesheet" href="login.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
     <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



</head>


<body>
<form action="register1.php" method="POST" class="row g-4">
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
                                                  <h1 class="mb-5 text-center">Registrasi</h1>
                                             </div>

                                             <form action="" class="row g-4">
                                                  <div class="col-12">
                                                       <label for="">Usernmae <span class="text-danger">*</span></label>
                                                       <div class="input-group">
                                                            <div class="input-group-text">
                                                                 <i class="bi-person-fill fs-4"></i>
                                                            </div>
                                                            <input type="text" name="username" class="form-control input_User" id="validationTooltip01" placeholder="Username" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-12">
                                                       <label for="">Password <span class="text-danger">*</span></label>
                                                       <div class="input-group">
                                                            <div class="input-group-text">
                                                                 <i class="bi bi-lock-fill fs-4"></i>
                                                            </div>
                                                            <input type="password" name="password" class="form-control input_Pass" id="validationTooltip02" placeholder="Password" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-12">
                                                       <label for="">Konfirmasi Password <span class="text-danger">*</span></label>
                                                       <div class="input-group">
                                                            <div class="input-group-text">
                                                                 <i class="bi bi-lock-fill fs-4"></i>
                                                            </div>
                                                            <input type="password" class="form-control input_Pass" id="validationTooltip02" placeholder="Password" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                       <label class="float-start">
                                                            Sudah punya akun?
                                                            <a href="login.php" class="text-center text-primary">Login Sekarang</a>
                                                       </label>
                                                  </div>
                                                  <div class="col-12">

                                                       <button type="submit" class="btn btn-primary px-4 float-start mt-4" onclick="location.href='login.php'">Register As Admin</button>
                                                       <button type="submit" class="btn btn-primary px-4 float-end mt-4" onclick="location.href='login.php'">Register As Owner</button>
                                                  </div>
                                             </form>

                                        </div>
                                   </div>

                                   <div class="col-md-5 ps-0 d-none d-md-block">
                                        <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                             <img src="icon3.png" width=80% height=40%></img>
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






     <script type="text/javascript" src="../assets/js/popper.min.js"></script>
     <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

</form>

</body>

</html>