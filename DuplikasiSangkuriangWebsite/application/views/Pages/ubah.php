<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Portofolio
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_portofolio" value="<?= $portofolio['id_portofolio'] ?>">
                        <div class="form-group">
                            <label for="tahun">Year</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $portofolio['tahun']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="judul">Title</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $portofolio['judul']; ?>">
                            <small class="form-text text-danger"><?= form_error('judul') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client" value="<?= $portofolio['client']; ?>">
                            <small class="form-text text-danger"><?= form_error('client') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Value</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $portofolio['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="<?= $portofolio['type']; ?>">
                            <small class="form-text text-danger"><?= form_error('type') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 