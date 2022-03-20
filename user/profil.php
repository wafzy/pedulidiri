
    <div class="card-header">
     <a href="index.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
         <i class="fas fa-arrow-left"></i>
        </span>
         <span class="text">Kembali</span>
    </a>
    </div><br>
<div class="row gutters-sm justify-content-center ">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                      <hr>
                    <img src="../img/usr.png" alt="Admin" class="rounded-circle" width="150">
                    <hr>
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['nama_lengkap']; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $_SESSION['nik']; ?></p>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary "  href="?url=edit_profil">Edit &nbsp <i class="fa fa-pen"></i></a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
              </div>