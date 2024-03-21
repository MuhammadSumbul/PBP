<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
            <img src="../assets/images/logo.svg" alt="logo" />
        </a>
    </div>
    <div class="mdc-drawer__content">
        <div class="user-info">
            <p class="name">Nama User</p>
            <p class="email">Status</p>
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="index.php">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                        Dashboard
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="stok_barang.php">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                        Stok Barang
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="barang_keluar.php">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                        Barang Keluar
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="barang_masuk.php">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                        Barang Masuk
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                        UI Features
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="ui-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="../../pages/ui-features/buttons.html">
                                    Buttons
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="../../pages/ui-features/typography.html">
                                    Typography
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

            </nav>
        </div>
        <div class="profile-actions">
            <a href="javascript:;">Settings</a>
            <span class="divider"></span>
            <a href="javascript:;">Logout</a>
        </div>
    </div>
</aside>