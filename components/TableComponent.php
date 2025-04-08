<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">ID Input</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Sales</th>
      <th scope="col">Product</th>
      <th scope="col">Nama Leads</th>
      <th scope="col">No WA</th>
      <th scope="col">Kota</th>
    </tr>
  </thead>
  <tbody>

    <?php
        $key = 1;
        foreach ($allLeads as $lead):
    ?>
    <tr>
      <th scope="row"><?php echo $key++ ?></th>
      <th><?php echo $lead['id_lead'] ?></th>
      <td><?php echo $lead['update_date'] ?></td>
      <td><?php echo $lead['sales'] ?></td>
      <td><?php echo $lead['product'] ?></td>
      <td><?php echo $lead['lead_name'] ?></td>
      <td><?php echo $lead['phone'] ?></td>
      <td><?php echo $lead['city'] ?></td>
    </tr>
    <?php endforeach; ?>

  </tbody>
</table>