<form action="controller/MainController.php" class="row align-items-end g-3 border rounded p-3" method="post">
  <div class="col-md-12 me-3">
    <a href="index.php?page=dashboard" class="btn btn-success">Kembali</a>
  </div>
  <div class="col-md-4">
    <label for="update_date" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="update_date" name="update-date" placeholder="Example input placeholder">
  </div>
  <div class="col-md-4">
    <label for="sales" class="form-label">Sales</label>
    <select class="form-select" id="sales" name="sales" aria-label="Default select example">
      <option selected>-- Pilih sales --</option>
      <?php foreach ($allSales as $sales): ?>
      <option value="<?php echo $sales['id'] ?>">
        <?php echo htmlspecialchars($sales['name']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-4">
    <label for="lead-name" class="form-label">Nama Lead</label>
    <input type="text" class="form-control" id="lead-name" name="lead-name" placeholder="Nama lead">
  </div>
  <div class="col-md-4">
    <label for="product" class="form-label">Produk</label>
    <select class="form-select" id="product" name="product" aria-label="Default select example">
      <option selected>-- Pilih produk --</option>
      <?php foreach ($allProduct as $product): ?>
      <option value="<?php echo $product['id'] ?>">
        <?php echo htmlspecialchars($product['name']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-4">
    <label for="phone" class="form-label">No. Whatsapp</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="Nomor whatsapp">
  </div>
  <div class="col-md-4">
    <label for="city" class="form-label">Asal Kota</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Asal kota">
  </div>
  <div class="col-md-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary me-3">Simpan</button>
    <button type="button" class="btn btn-outline-primary">Batal</button>
  </div>
</form>