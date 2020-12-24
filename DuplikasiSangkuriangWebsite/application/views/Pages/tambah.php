<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Portofolio
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="tahun">Year</label>
                            <input type="text" class="form-control" id="tahun" name="tahun">
                            <small class="form-text text-danger"><?= form_error('tahun') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="judul">Title</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                            <small class="form-text text-danger"><?= form_error('judul') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client">
                            <small class="form-text text-danger"><?= form_error('client') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Value</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                            <small class="form-text text-danger"><?= form_error('type') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 