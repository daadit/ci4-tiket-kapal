<?= $this->extend('admin/main'); ?>

<?= $this->section('menu'); ?>

<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading"></li>
            <li>
                <a href="<?= base_url('/admin'); ?>">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Dashboard
                </a>
            </li>
            <li class="app-sidebar__heading">Administrator</li>
            <?php if (session()->get('userRole') == 1 || session()->get('userRole') == 0) { ?>
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Masters
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-show">
                        <?php if (session()->get('userRole') == 0) { ?>
                            <li>
                                <a href="<?= base_url('/admin/user'); ?>">
                                    <i class="metismenu-icon"></i>
                                    User
                                </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="<?= base_url('/admin/penumpang'); ?>">
                                <i class="metismenu-icon">
                                </i>Penumpang
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/kategori'); ?>">
                                <i class="metismenu-icon">
                                </i>Kategori
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/rute'); ?>">
                                <i class="metismenu-icon">
                                </i>Rute
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/kapal'); ?>" class="mm-active">
                                <i class="metismenu-icon">
                                </i>Kapal
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/jadwal'); ?>">
                                <i class="metismenu-icon">
                                </i>Jadwal
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Transactions
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('/admin/pemesanan'); ?>">
                                <i class="metismenu-icon">
                                </i>Pemesanan Tiket
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <?php if (session()->get('userRole') == 2 || session()->get('userRole') == 0) { ?>
                <li>
                    <a href="<?= base_url('/admin/report') ?>">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Report
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-ship icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Kapal
                        <div class="page-title-subheading">This is a page for managing ship data.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-info fa-w-20"></i>
                            </span>
                            Info
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Tambah
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-info"> </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Edit
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-primary"> </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Hapus
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger"> </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Report
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-success"> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success icons-alert m-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php } else if (session()->getFlashdata('failed')) { ?>
                <div class="alert alert-danger icons-alert m-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo session()->getFlashdata('failed'); ?>
                </div>
            <?php } ?>
            <div class="app-main__inner">
                <div class="box-body">
                    <button data-toggle="modal" data-target="#addModal" class="btn btn-outline-info btn-lg col-md-2 mb-2">
                        <span class="btn-icon-wrapper pr-2 opacity-7" aria-hidden="true">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Tambah
                    </button>
                    <a href="<?= base_url('/admin/kapal/laporan'); ?>" target="__blank" class="btn btn-outline-success btn-lg col-md-2 mb-2">
                        <span class="btn-icon-wrapper pr-2 opacity-7" aria-hidden="true">
                            <i class="fa fa-print fa-w-20"></i>
                        </span>
                        Laporan
                    </a>
                    <br><br>
                    <div class="container">
                        <table id="datatable" name="datatable" class="table table-simple datatable">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Kapasitas</th>
                                    <th>Pemilik</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($kapal as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $row['kapalKode']; ?></td>
                                        <td> <?= $row['kapalNama']; ?></td>
                                        <td> <?= $row['kategoriNama']; ?></td>
                                        <td> <?= $row['kapalKapasitas']; ?></td>
                                        <td> <?= $row['kapalPemilik']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" data-toggle="modal" data-target="#editModal<?= $row['kapalId']; ?>" class="btn-transition btn btn-outline-primary btn-update">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn-transition btn btn-outline-danger btn-delete" data-toggle="modal" data-target="#deleteModal<?= $row['kapalId']; ?>">
                                                <i class="fa fa-ban"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>

<div id="addModal" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="">Form Tambah Kapal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kapal/save'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : ''; ?>" id="kode" name="kode" value="<?= old('kode'); ?>" required placeholder="Masukan kode">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kode'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Kapal</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>" required placeholder="Masukan nama">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" id="kategori" required class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($kategori as $row) : ?>
                                            <option value="<?= $row['kategoriId']; ?>"><?= $row['kategoriNama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kategori'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kapasitas</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('kapasitas')) ? 'is-invalid' : ''; ?>" id="kapasitas" name="kapasitas" value="<?= old('kapasitas'); ?>" required placeholder="Masukan kapasitas">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapasitas'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Pemilik</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('pemilik')) ? 'is-invalid' : ''; ?>" id="pemilik" name="pemilik" value="<?= old('pemilik'); ?>" required placeholder="Masukan pemilik">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pemilik'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Foto Kapal</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" value="<?= old('foto'); ?>" required placeholder="Masukan foto">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Pemilik</label>
                                    <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" rows="4" id="keterangan" name="keterangan" required placeholder="Masukan keterangan"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php foreach ($kapal as $row) : ?>
    <form action="<?= base_url('admin/kapal/edit'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal fade" id="editModal<?= $row['kapalId']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Form Edit Kapal</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="id" id="id" value="<?= $row['kapalId']; ?>">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode</label>
                                    <input type="text" readonly class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : ''; ?>" id="kode" name="kode" value="<?= $row['kapalKode']; ?>" required placeholder="Masukan kode">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kode'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Kapal</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $row['kapalNama']; ?>" required placeholder="Masukan nama">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" id="kategori" required class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($kategori as $rowsatu) : ?>
                                            <?php if ($row['kapalKategori'] == $rowsatu['kategoriId']) { ?>
                                                <option selected value="<?= $rowsatu['kategoriId']; ?>"><?= $rowsatu['kategoriNama']; ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $rowsatu['kategoriId']; ?>"><?= $rowsatu['kategoriNama']; ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kategori'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kapasitas</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('kapasitas')) ? 'is-invalid' : ''; ?>" id="kapasitas" name="kapasitas" value="<?= $row['kapalKapasitas']; ?>" required placeholder="Masukan kapasitas">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapasitas'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Pemilik</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('pemilik')) ? 'is-invalid' : ''; ?>" id="pemilik" name="pemilik" value="<?= $row['kapalPemilik']; ?>" required placeholder="Masukan pemilik">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pemilik'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Foto Kapal</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" value="<?= $row['kapalFoto']; ?>" required placeholder="Masukan foto">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Pemilik</label>
                                    <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" rows="4" id="keterangan" name="keterangan" required placeholder="Masukan keterangan"><?= $row['kapalKeterangan']; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mt-2 mb-2" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="<?= base_url('admin/kapal/delete'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal" tabindex="-1" id="deleteModal<?= $row['kapalId']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Hapus Kapal</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" required value="<?= $row['kapalId']; ?>" />
                        <h6>Yakin ingin menghapus data ini?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Yakin</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>

<?= $this->endSection(); ?>