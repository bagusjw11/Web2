<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Form Belanja</title>
</head>

<body>
  <h1>Belanja Online</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <form method="POST" action="form_belanja.php">
              <div class="form-group row">
                <label for="nama_customer" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                  <input id="nama_customer" name="nama_customer" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-4">Produk</label>
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                    <label for="produk_0" class="custom-control-label">Kulkas</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                    <label for="produk_1" class="custom-control-label">TV</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                  <input id="jumlah" name="jumlah" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active"> Harga</a>
              <div class="list-group-item">
                TV:4.200.000
              </div>
              <div class="list-group-item">
                  Kulkas:3.100.000
                </h4>
               </div>
              <div class="list-group-item">
                  Mesin Cuci:3.800.000
                </div>

              <div class="list-group">
              </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat <span class="badge badge-light badge-pill"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Customer</th>
                <th scope="col">Pilih Produk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total Harga</th>
                </tr>
            </thead>
  <tbody>
  <?php
if (isset($_POST['submit'])){
                $nama_costumer = $_POST['nama_customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                if ($produk == 'tv'){
                    $harga = 4200000;
                }
                else if ($produk == 'kulkas'){
                    $harga = 3100000;
                }
                else if ($produk == 'mesincuci'){
                    $harga = 3800000;
                }
                else {
                    $harga = 0;
                }
                $total_harga = $harga * $jumlah 
                ?>
            <tr>
                <td><?= $nama_costumer ?></td>
                <td><?= $produk ?></td>
                <td><?= $jumlah ?></td>
                <td><?= $total_harga;?></td>
            </tr>
        <?php
            }
            ?>
</body>

</html>