<div class="container">
  <?php if ($this->session->flashdata('flash')):?>
    <div class="alert alert-succses alert-dismissible fade show" role="alert">
      <strong>Data barang </strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


  <?php endif;?>

  <div class="row-mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?> barang/tambah" class="btn btn-primary">Tambah Data Barang</a>
    </div>
  </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode barang</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($barang as $brg): ?>
      <td><?= $brg['id_barang']; ?></td>
      <td><?= $brg['nama_barang']; ?></td>
      <td><?= $brg['harga']; ?></td>
      <td><?= $brg['stok']; ?></td>
      <td><a href="<?= base_url(); ?> barang/hapus/ <?= $brg['id_barang'];?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</a></td>
    </tr>
    <?php endforeach ?>
    
    
  </tbody>
</table>