
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="../../index.php" style="color: whitesmoke;">ICONSMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">




                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../static/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"></h5>
                                    <span class="status"></span><span class="ml-2">Wallet:  &#8358;</span>
                                </div>
                                <a class="dropdown-item" href="../my_account.php"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="../settings.php"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="../logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link active" href="../iconsms/dashboard.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="../iconsms/data.php"><i class="fa fa-fw fa-rocket"></i>Buy Data</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="../iconsms/airtime.php"><i class="mdi mdi-phone-log"></i>Buy Airtime</a>
                                </li>


                                <li class="nav-item ">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-cart-plus icon-wrap"></i>Utilities Payment</a>
                                    <div id="submenu-4" class="collapse submenu">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../iconsms/utility.php"><i class="fa fa-light-bulb"></i>Electric Payment</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../iconsms/cable.php"><i class="mdi mdi-television"></i>Cable Subscription</a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>


                                <li class="nav-item ">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-4"><i class="fa fa-cart-plus icon-wrap"></i>Fund Wallet</a>
                                    <div id="submenu-5" class="collapse submenu">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../iconsms/fundAccount.php">Fund with payment gateway (ATM)</a>
                                            </li>
                                              <li class="nav-item">
                                                <a class="nav-link" href="../iconsms/autobank.php">Automated Bank Transfer (N50 charge)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../iconsms/coupon.php">Fund with coupon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../iconsms/airtime_cash.php">Fund with airtime transfer (Airime 2 cash)</a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>



                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="../TransferCreate/index.html"><i class="fas fa-paper-plane"></i> Transfer to other users </a>
                                </li> -->

                                 <li class="nav-item">
                                    <a class="nav-link" href="../my_account.php"><i class="fas fa-user"></i> Account</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="../settings.php"><i class="fas fa-cog"></i> Setting </a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="../logout.php"><i class="fas fa-arrow-left"></i> Logout </a>
                                </li>



                            </ul>
                    </div>
                </nav>
            </div>
        </div>