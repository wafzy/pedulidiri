
    <div class="card-header">
     <a href="?url=profil" class="btn btn-primary btn-icon-split">
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
                    <form>
  <div class="form-group">
    <input type="text" class="form-control text-center" id="formGroupExampleInput" value="<?php echo $_SESSION['nama_lengkap']; ?>">
  </div>
  <div class="form-group">
    <input type="text" class="form-control text-center" id="formGroupExampleInput2" value="<?php echo $_SESSION['nik']; ?>"  disabled>
  </div>
</form>
                    <hr>
                    <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info " target="__blank" href="?=edit_profil">Simpan &nbsp <i class="fa fa-save"></i></button>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
              </div>