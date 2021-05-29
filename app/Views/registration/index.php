<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Registration Form</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif ?>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
            <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
            <form action="/registration/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="alphabet" class="form-control" id="nama" name="nama" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="alphabet" class="form-control" id="tempat" name="tempat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input name="tanggal" id="datepicker" width="276" />
                        <script>
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4'
                            });
                        </script>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="L" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="P">
                            <label class="form-check-label" for="gridRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="alphabet" class="form-control" id="alamat" name="alamat" autofocus>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>