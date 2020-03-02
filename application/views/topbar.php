        <!-- Navigation Bar-->
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name ml-1">
                                    <?php echo $_SESSION['full_name'] ?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span data-tag="akaun-saya"></span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span data-tag="tetapan"></span>
                                </a>
                
                                <div class="dropdown-divider"></div>
                
                                <!-- item-->
                                <a href="<?php echo BASE_URL ?>auth/logout" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span data-tag="logout"></span>
                                </a>
                
                            </div>
                        </li>
                
                    </ul>
                
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index" class="logo text-center">
                            <span class="logo-lg">
                                <span class="logo-lg-text-light"><span class="text-lowercase">e</span><span data-tag="pandangan"></span> <i class="dripicons-message"></i></span>
                            </span>
                            <span class="logo-sm">
                                <span class="logo-sm-text-light"><i class="dripicons-message"></i></span>
                            </span>
                        </a>
                    </div>
                
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->
            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <?php if($_SESSION['permission'] != 'user'): ?>
                            <li><a href="<?php echo BASE_URL ?>dashboard/admin"><i class="fe-home"></i>Dashboard</a></li>
                            <li class="has-submenu"><a href="#"><i class="fe-layers"></i>Senarai Borang</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo BASE_URL ?>borang/ptkl"><i class="fe-file-text"></i> Draf Perubahan 1 PBRKL 2020</a></li>
                                    <li><a href="<?php echo BASE_URL ?>borang/ptkl_2"><i class="fe-file-text"></i> Draf Perubahan 2 PBRKL 2020</a></li>
                                    <li><a href="<?php echo BASE_URL ?>borang/pskl"><i class="fe-file-text"></i> Draf PSKL 2040</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#"><i class="fe-calendar"></i>Jadual</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo BASE_URL ?>jadual/sesi"><i class="fe-clock"></i> Kalendar Sesi</a></li>
                                    <li><a href="<?php echo BASE_URL ?>jadual/senarai"><i class="fe-list"></i> Senarai Sesi</a></li>
                                    <li><a href="<?php echo BASE_URL ?>jadual/surat"><i class="fe-mail"></i> Surat Jemputan</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#"><i class="fe-users"></i>Pengguna</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo BASE_URL ?>pengguna"><i class="fe-file-text"></i> Senarai Pengguna</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#"><i class="fe-pie-chart"></i>Laporan</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo BASE_URL ?>laporan/download"><i class="fe-download-cloud"></i> Muat Turun</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#"><i class="fe-settings"></i>Log</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo BASE_URL ?>email"><i class="fe-mail"></i> E-mail</a></li>
                                    <li><a href="<?php echo BASE_URL ?>log/audit"><i class="fe-list"></i> Audit Trail</a></li>
                                    <li><a href="<?php echo BASE_URL ?>log/error"><i class="fe-alert-circle"></i> Error Log</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="#"><i class="fe-settings"></i>Tetapan</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo BASE_URL ?>tetapan/index/struktur"><i class="fe-life-buoy"></i> Struktur PSKL 2040</a></li>
                                    <li><a href="<?php echo BASE_URL ?>tetapan/index/topik"><i class="fe-box"></i> Topik PBRKL 2020</a></li>
                                    <li><a href="<?php echo BASE_URL ?>tetapan/index/zon"><i class="fe-map-pin"></i> Zon Strategik PBRKL 2020</a></li>
                                    <li><a href="<?php echo BASE_URL ?>tetapan/index/sektor"><i class="fe-layout"></i> Sektor PBRKL 2020</a></li>
                                    <li><a href="<?php echo BASE_URL ?>tetapan/index/lokasi"><i class="fe-map"></i> Lokasi Sesi Pendengaran</a></li>
                                    <li><a href="<?php echo BASE_URL ?>language"><i class="fe-flag"></i> Terjemahan Bahasa</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li><a href="<?php echo BASE_URL ?>dashboard"><i class="fe-home"></i>Dashboard</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo BASE_URL ?>auth/logout"><i class="fe-log-out"></i><span data-tag="logout"></span></a></li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->