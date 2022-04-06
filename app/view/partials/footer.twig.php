<!-- Footer -->
<footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats.html">
                        <span>
                            <i class="nav-icon bi bi-laptop"></i>
                            <span class="nav-text">Estatistica</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <div class="nav-link">
                        <span class="theme-radial-gradient">
                            <i class="close bi bi-x"></i>
                            <img src="{{BASE}}assets/img/centerbutton.svg" class="nav-icon" alt="" />
                        </span>
                        <div class="nav-menu-popover justify-content-between">
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('pay.html');">
                                <i class="bi bi-credit-card size-32"></i><span>Pagamentos</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('sendmoney.html');">
                                <i class="bi bi-arrow-up-right-circle size-32"></i><span>Transferências</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('bills.html');">
                                <i class="bi bi-receipt size-32"></i><span>Contas</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('receivemoney.html');">
                                <i class="bi bi-arrow-down-left-circle size-32"></i><span>Receber</span>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rewards.html">
                        <span>
                            <i class="nav-icon bi bi-gift"></i>
                            <span class="nav-text">Pontos</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wallet.html">
                        <span>
                            <i class="nav-icon bi bi-wallet2"></i>
                            <span class="nav-text">Carteira</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->

    <!-- Required jquery and libraries -->
    <script src="{{BASE}}assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{BASE}}assets/js/popper.min.js"></script>
    <script src="{{BASE}}assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{BASE}}assets/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{BASE}}assets/js/main.js"></script>
    <script src="{{BASE}}assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{BASE}}assets/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="{{BASE}}assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="{{BASE}}assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="{{BASE}}assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="{{BASE}}assets/js/app.js"></script>

</body>

</html>