<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH BARANG
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/invent/simpan" method="POST">
                
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" class="form-control" name="qty" placeholder="Masukkan Quantity Barang" rows="4"></input>
                </div>

                <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="text" class="form-control" name="harga_satuan" placeholder="Masukkan Harga" rows="4"></input>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>