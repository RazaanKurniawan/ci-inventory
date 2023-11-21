<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Inventory</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA INVENTORY
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/invent/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">KODE BARANG</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">QTY</th>
                    <th scope="col">HARGA SATUAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                    $no = 1;
                    foreach($data_invent as $invent){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $invent->kode_barang ?></td>
                      <td><?php echo $invent->nama_barang ?></td>
                      <td><?php echo $invent->qty ?></td>
                      <td><?php echo $invent->harga_satuan ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>index.php/invent/edit/<?php echo $invent->id_barang ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="<?php echo base_url() ?>index.php/invent/hapus/<?php echo $invent->id_barang ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>