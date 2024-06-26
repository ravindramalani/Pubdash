<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?php echo base_url('assets/img/kaiadmin/favicon.ico') ?>" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["<?php echo base_url('assets/css/fonts.min.css') ?>"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <script>
        function toggleDomainFields() {
            var domainSection = document.getElementById("domainSection");
            if (domainSection.style.display === "none" || domainSection.style.display === "") {
                domainSection.style.display = "block";
            } else {
                domainSection.style.display = "none";
            }
        }
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/kaiadmin.min.css') ?>" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css') ?>" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="<?php echo base_url('assets/img/kaiadmin/logo_light.svg') ?>" alt="navbar brand"
                            class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">

                            <div class="">
                                <ul class="nav-item">
                                    <li>
                                        <a href="<?php echo base_url('Pubroute_controller/admindashboard') ?>">
                                            <span class="sub-item">Dashboard </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('Pubroute_controller/pendingrequest'); ?>">
                                <i class="fas fa-layer-group"></i>
                                <p>Panding Requests</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Pubroute_controller/property'); ?>">
                                <i class="fas fa-layer-group"></i>
                                <p>Create Property</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Pubroute_controller/asigndomain'); ?>">
                                <i class="fas fa-layer-group"></i>
                                <p>Asign Domain</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Pubroute_controller/asigndomain'); ?>">
                                <i class="fas fa-layer-group"></i>
                                <p>Payments</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="<?php echo base_url('assets/img/kaiadmin/logo_light.svg') ?>" alt="navbar brand"
                                class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="<?php echo base_url('assets/img/profile.jpg') ?>" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Hizrian</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="<?php echo base_url('assets/img/profile.jpg') ?>"
                                                        alt="image profile" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>Hizrian</h4>
                                                    <p class="text-muted">hello@example.com</p>
                                                    <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container userpayment">
                <form action="/submit" method="post" class="userpaymentform">
                    <label for="publisherId">Publisher ID:</label>
                    <select id="publisherId" name="publisherId">
                        <option value="publisher1">Publisher 1</option>
                        <option value="publisher2">Publisher 2</option>
                        <option value="publisher3">Publisher 3</option>
                        <!-- Add more publishers as needed -->
                    </select><br><br>

                    <label for="year">Year:</label>
                    <input type="text" id="year" name="year"><br>

                    <label for="month">Month:</label>
                    <select id="month" name="month">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select><br><br>

                    <label for="domainDropdown" onclick="toggleDomainFields()" class="domainnames" style="cursor: pointer;">
                        Domain Names:<i class=" fas fa-solid fa-angle-down"></i>
                    </label>

                    <div id="domainSection" style="display: none;">
                        <div class="domainField">
                            <label for="assignedDomain" class="asigndomain">Assigned Domain:</label>
                            <input type="text" id="assignedDomain" name="assignedDomain">
                        </div>
                        <div class="domainField">
                            <label for="assigneDomain" class="asigndomain">Assigne Domain:</label>
                            <input type="text" id="assigneDomain" name="assigneDomain">
                        </div>
                        <div class="domainField">
                            <label for="assgnedDomain" class="asigndomain">Assgned Domain:</label>
                            <input type="text" id="assgnedDomain" name="assgnedDomain">
                        </div>
                        <!-- Add more domains as needed -->
                    </div><br>

                    <label for="invalidDeduction">Invalid Deduction:</label>
                    <input type="text" id="invalidDeduction" name="invalidDeduction"><br>

                    <label for="conversionRate">Conversion Rate:</label>
                    <input type="text" id="conversionRate" name="conversionRate"><br>

                    <input type="submit" value="Submit">
                </form>

            </div>

            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Help </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Licenses </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by
                        <a href="http://www.themekita.com">ThemeKita</a>
                    </div>
                    <div>
                        Distributed by
                        <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
                    </div>
                </div>
            </footer>
        </div>

        <!-- Custom template | don't include it in your project! -->

        <!-- End Custom template -->
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/core/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

    <!-- Chart JS -->
    <script src="<?php echo base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Chart Circle -->
    <script src="<?php echo base_url('assets/js/plugin/chart-circle/circles.min.js') ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url('assets/js/plugin/datatables/datatables.min.js') ?>"></script>

    <!-- Bootstrap Notify -->

    <!-- jQuery Vector Maps -->
    <script src="<?php echo base_url('assets/js/plugin/jsvectormap/jsvectormap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugin/jsvectormap/world.js') ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

    <!-- Kaiadmin JS -->
    <script src="<?php echo base_url('assets/js/kaiadmin.min.js') ?>"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('assets/js/setting-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>
</body>

</html>