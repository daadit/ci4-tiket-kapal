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
            <li class="mm-active">
                <a href="#">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                    Masters
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul class="mm-show">
                    <li>
                        <a href="<?= base_url('/admin/user'); ?>" class="mm-active">
                            <i class="metismenu-icon"></i>
                            User
                        </a>
                    </li>
                    <li>
                        <a href="elements-dropdowns.html">
                            <i class="metismenu-icon">
                            </i>Dropdowns
                        </a>
                    </li>
                    <li>
                        <a href="elements-icons.html">
                            <i class="metismenu-icon">
                            </i>Icons
                        </a>
                    </li>
                    <li>
                        <a href="elements-badges-labels.html">
                            <i class="metismenu-icon">
                            </i>Badges
                        </a>
                    </li>
                    <li>
                        <a href="elements-cards.html">
                            <i class="metismenu-icon">
                            </i>Cards
                        </a>
                    </li>
                    <li>
                        <a href="elements-list-group.html">
                            <i class="metismenu-icon">
                            </i>List Groups
                        </a>
                    </li>
                    <li>
                        <a href="elements-navigation.html">
                            <i class="metismenu-icon">
                            </i>Navigation Menus
                        </a>
                    </li>
                    <li>
                        <a href="elements-utilities.html">
                            <i class="metismenu-icon">
                            </i>Utilities
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
                        <a href="components-tabs.html">
                            <i class="metismenu-icon">
                            </i>Tabs
                        </a>
                    </li>
                    <li>
                        <a href="components-accordions.html">
                            <i class="metismenu-icon">
                            </i>Accordions
                        </a>
                    </li>
                    <li>
                        <a href="components-notifications.html">
                            <i class="metismenu-icon">
                            </i>Notifications
                        </a>
                    </li>
                    <li>
                        <a href="components-modals.html">
                            <i class="metismenu-icon">
                            </i>Modals
                        </a>
                    </li>
                    <li>
                        <a href="components-progress-bar.html">
                            <i class="metismenu-icon">
                            </i>Progress Bar
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips-popovers.html">
                            <i class="metismenu-icon">
                            </i>Tooltips &amp; Popovers
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="metismenu-icon">
                            </i>Carousel
                        </a>
                    </li>
                    <li>
                        <a href="components-calendar.html">
                            <i class="metismenu-icon">
                            </i>Calendar
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="metismenu-icon">
                            </i>Pagination
                        </a>
                    </li>
                    <li>
                        <a href="components-scrollable-elements.html">
                            <i class="metismenu-icon">
                            </i>Scrollable
                        </a>
                    </li>
                    <li>
                        <a href="components-maps.html">
                            <i class="metismenu-icon">
                            </i>Maps
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-car"></i>
                    Reports
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="components-tabs.html">
                            <i class="metismenu-icon">
                            </i>Tabs
                        </a>
                    </li>
                    <li>
                        <a href="components-accordions.html">
                            <i class="metismenu-icon">
                            </i>Accordions
                        </a>
                    </li>
                    <li>
                        <a href="components-notifications.html">
                            <i class="metismenu-icon">
                            </i>Notifications
                        </a>
                    </li>
                    <li>
                        <a href="components-modals.html">
                            <i class="metismenu-icon">
                            </i>Modals
                        </a>
                    </li>
                    <li>
                        <a href="components-progress-bar.html">
                            <i class="metismenu-icon">
                            </i>Progress Bar
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips-popovers.html">
                            <i class="metismenu-icon">
                            </i>Tooltips &amp; Popovers
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="metismenu-icon">
                            </i>Carousel
                        </a>
                    </li>
                    <li>
                        <a href="components-calendar.html">
                            <i class="metismenu-icon">
                            </i>Calendar
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="metismenu-icon">
                            </i>Pagination
                        </a>
                    </li>
                    <li>
                        <a href="components-scrollable-elements.html">
                            <i class="metismenu-icon">
                            </i>Scrollable
                        </a>
                    </li>
                    <li>
                        <a href="components-maps.html">
                            <i class="metismenu-icon">
                            </i>Maps
                        </a>
                    </li>
                </ul>
            </li>
            <li class="app-sidebar__heading">Settings</li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                    Landing Page
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="elements-buttons-standard.html">
                            <i class="metismenu-icon"></i>
                            Buttons
                        </a>
                    </li>
                    <li>
                        <a href="elements-dropdowns.html">
                            <i class="metismenu-icon">
                            </i>Dropdowns
                        </a>
                    </li>
                    <li>
                        <a href="elements-icons.html">
                            <i class="metismenu-icon">
                            </i>Icons
                        </a>
                    </li>
                    <li>
                        <a href="elements-badges-labels.html">
                            <i class="metismenu-icon">
                            </i>Badges
                        </a>
                    </li>
                    <li>
                        <a href="elements-cards.html">
                            <i class="metismenu-icon">
                            </i>Cards
                        </a>
                    </li>
                    <li>
                        <a href="elements-list-group.html">
                            <i class="metismenu-icon">
                            </i>List Groups
                        </a>
                    </li>
                    <li>
                        <a href="elements-navigation.html">
                            <i class="metismenu-icon">
                            </i>Navigation Menus
                        </a>
                    </li>
                    <li>
                        <a href="elements-utilities.html">
                            <i class="metismenu-icon">
                            </i>Utilities
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="dashboard-boxes.html">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Dashboard Boxes
                </a>
            </li>
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
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Analytics Dashboard
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <div class="card">  
            <div class="app-main__inner">
                <div class="box-body">
                    <a href="home.php?p=formtambahbarang" class="btn btn-primary btn-lg col-md-2">
                        <span class="pe-7s-plus" aria-hidden="true"></span> TAMBAH DATA
                    </a>
                    <br><br>
                    <div class="container">
                        <table id="databarang" name="databarang" class="table table-striped table-simple data">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Harga Barang</th>
                                <th>Stok Barang</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                
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