<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ( validation_errors() ):?>  
            <div class="alert alert-primary" role="alert">
                <?php validation_errors(); ?>
            </div>
            <?php endif; ?>
            </div>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_barang" class="form-label">ID Barang</label>
                    <input type="text" class="form-control" name="id_barang" id="id_barang">
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga Barang</label>
                    <input type="text" class="form-control" name="harga" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input type="text" class="form-control" name="stok" id="stok">
                </div>
                <button name="tambah" type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
