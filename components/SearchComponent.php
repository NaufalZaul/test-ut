<form class="row align-items-end g-3 mb-5" method="get">
  <div class="col-md-12 me-3">
    <a href="index.php?page=tambah_lead" class="btn btn-success">Tambah Lead</a>
  </div>
  <div class="col-md-3">
    <label for="product" class="form-label">Produk</label>
    <select class="form-select" id="product" name="product" aria-label="Default select example">
      <option selected value="">-- Pilih produk --</option>
      <?php foreach ($allProduct as $product): ?>
      <option value="<?php echo $product['id'] ?>">
        <?php echo htmlspecialchars($product['name']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-3">
    <label for="update_date" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="update_date" name="update-date" placeholder="Example input placeholder">
  </div>
  <div class="col-md-3">
    <label for="sales" class="form-label">Sales</label>
    <select class="form-select" id="sales" name="sales" aria-label="Default select example">
      <option selected value="">-- Pilih sales --</option>
      <?php foreach ($allSales as $sales): ?>
      <option value="<?php echo $sales['id'] ?>">
        <?php echo htmlspecialchars($sales['name']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-3">
    <button type="submit" class="btn btn-primary me-3">Cari Lead</button>
  </div>
</form>