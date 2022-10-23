<template>
  <div id="karyawan">
  <div class="about">
    <div class="container">
      <div class="row mt-3">
        <div class="col-lg-6">
          <h3 class="text-info">Data Karyawan</h3>
        </div>
        <div class="col-lg-6">
          <button class="btn btn-info float-right ">
            <i class="fas fa-user"></i>Tambah Karyawan
          </button>
        </div>
      </div>
      <hr class="bg-info">
      <div class="alert alert-danger" >Gagal Input</div>
      <div class="alert alert-success" >Berhasil Input</div>

      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered table-striped">
            <thead>
              <tr class="text-centered bg-info text-light">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>1</td>
                <td>Test</td>
                <td>Yogyakarta</td>
                <td>123456</td>
                <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
                <td><a href="#" class="text-success"><i class="fas fa-trash"></i></a></td>
              </tr>
              <tr class="text-center">
                <td>1</td>
                <td>Test</td>
                <td>Yogyakarta</td>
                <td>123456</td>
                <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
                <td><a href="#" class="text-success"><i class="fas fa-trash"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Karyawan</h5>
          <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-4">
          <form action="#" method="post">
            
            <div class="form-group">
              <input type="text" name="name" class="form-control form-control-lg" placeholder="Nama">
            </div>
       
            <div class="form-group">
              <input type="text" name="alamat" class="form-control form-control-lg" placeholder="Alamat">
            </div>
   
            <div class="form-group">
              <input type="text" name="telp" class="form-control form-control-lg" placeholder="Telepon">
            </div>

            <div class="form-group">
              <button class="btn btn-info btn-block btn-lg">Tambah</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>



</div>
</template>







