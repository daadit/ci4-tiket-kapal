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
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Masters
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
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
                            <a href="<?= base_url('/admin/kapal'); ?>">
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
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Transactions
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-show">
                        <li>
                            <a href="<?= base_url('/admin/pemesanan'); ?>" class="mm-active">
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
                        <i class="fa fa-file-invoice icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Pemesanan
                        <div class="page-title-subheading">This is a page for managing pemesanan data.
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
                    <a href="<?= base_url('/admin/pemesanan/tambah'); ?>" class="btn btn-outline-info btn-lg col-md-2 mb-2">
                        <span class="btn-icon-wrapper pr-2 opacity-7" aria-hidden="true">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Tambah
                    </a>
                    <br><br>
                    <div class="container">
                        <table id="datatable" name="datatable" class="table table-simple datatable">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Tanggal</th>
                                    <th>Penumpang</th>
                                    <th>Total Tiket</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($pemesanan as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $row['pemesananInvoice']; ?></td>
                                        <td> <?= $row['pemesananTanggal']; ?></td>
                                        <td> <?= $row['penumpangNama']; ?></td>
                                        <td> <?= $row['pemesananTotalTiket']; ?></td>
                                        <td> <?= $row['pemesananTotalHarga']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?= base_url() ?>/admin/pemesanan/update/<?= $row['pemesananInvoice'] ?>" class="btn-transition btn btn-outline-primary btn-update">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url() ?>/admin/pemesanan/invoice/<?= $row['pemesananInvoice'] ?>" target="__blank" class="btn-transition btn btn-outline-success btn-delete">
                                                <i class="fa fa-file"></i>
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