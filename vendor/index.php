<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <link rel="shortcut icon" href="img/lok.png" type="image/x-icon">
    <title>Peduli Diri - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      
          <img src="img/login.png" width="200" height="60" alt="">
          <br><br>
                    </div>
                    <br>
                    <form class="user" method="post" action="login_proses.php">
                      <div class="form-group">
                        <input type="number" name="nik" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="NIK" required />
                      </div>
                      <div class="form-group">
                        <input type="text" name="nama_lengkap" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nama Lengkap" required />
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary btn-user btn-block"> Login </button>
                      <hr />
                      <a href="daftar.php" class="btn btn-google btn-user btn-block"></i> Pengguna Baru  <i class="fa fa-angle-right"></i> </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
