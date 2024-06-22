<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
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

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/kaiadmin.min.css') ?>" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css') ?>" />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            overflow: auto;
        }

        .container {
            width: 100%;
            max-width: none !important;
            padding: 0px 0px !important;
            box-shadow: none !important;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 10px;
            border: 1px solid #ccc;
            width: 90%;
            margin: auto;
            border-radius: 10px;
        }

        .row+.row {
            border-top: none;
        }

        .row div {
            flex: 1;
            text-align: center;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            padding: 10px;
            width: 100%;
            border: 1px solid black;
            border-top: none;
            margin-top: -1px;
        }

        .dropdown-content div {
            flex: 1;
            text-align: center;
            padding: 5px;
        }

        .accordion-button::after {
            display: none;
        }

        .accordion-button {
            background-color: #dddddd !important;
            color: black !important;
        }

        .accordion-button.collapsed {
            background-color: white !important;
            color: black !important;
        }

        .accordion-collapse {
            width: 90% !important;
            margin: auto !important;
            border-radius: 0px 0px 5px 5px !important;
            border-top: 0 !important;
            box-shadow: -1px -2px 9px rgba(0, 0, 0, 0.2);
        }

        .accordion-header {
            width: 90%;
            margin: 0px auto;
            box-shadow: -1px -2px 9px rgba(0, 0, 0, 0.2);
            border-radius: 5px 5px 0px 0px;
        }

        .accordion-item {
            border: 0;
            margin-top: 10px;
        }

        .heading,
        .totalheading {
            font-weight: 900;
        }

        .totalheading h5,
        .totalheading p {
            margin: 0;
        }

        .heading h6 {
            padding-top: 8px;
        }

        .mainpaymentheading {
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin: 10PX auto;
            /* border: 1px solid black; */
            padding: 3px 25px;
            border-radius: 5px;
            background-color: #dddddd;
        }

        .mainpaymentheading p {
            /* font-size: 13px; */
            margin-bottom: 0 !important;
        }

        @media screen and (max-width:576px) {
            .heading h3 {
                font-size: 15px !important;
                padding-top: 8px;
            }
            .heading h6{
                font-size: 13px;
            }
            .mainpaymentheading p{
                font-size: 10px;
            }
        }
    </style>
    <script>
        function toggleDropdown() {
            var content = document.getElementById('dropdown-content');
            if (content.style.display === "flex") {
                content.style.display = "none";
            } else {
                content.style.display = "flex";
            }
        }
    </script>
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
                            <div>
                                <ul class="nav-item">
                                    <li>
                                        <a href="<?php echo base_url('pubroute_controller/userdashboard/') ?>">
                                            <i class="fas fa-tachometer-alt"></i>
                                            <span class="sub-item">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#base">
                                <i class="fas fa-globe"></i>
                                <p>Domains</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo base_url('pubroute_controller/domains/') ?>">
                                            <span class="sub-item">example.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="./panding_requests.html">
                                <i class="fas fa-file-alt"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('pubroute_controller/userpayments/') ?>">
                                <i class="fas fa-credit-card"></i>
                                <p>Payments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./panding_requests.html">
                                <i class="fas fa-file-invoice"></i>
                                <p>Generate Invoice</p>
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
                            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
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
                            <li class="nav-item topbar-icon hidden-caret">
                                <a class="nav-link bank-button"
                                    href="<?php echo base_url('pubroute_controller/bank') ?>" aria-expanded="false">
                                    <i class="fas fa-university"></i>
                                </a>
                            </li>
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
                                                    <p class="text-muted">ID = 1234567</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('pubroute_controller/profile/') ?>">View
                                                Profile</a>
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
            <div class="container">
                <div class="mainpaymentheading">
                    <p>MONTH & YEAR</p>
                    <p>INVOICE STATUS</p>
                    <p>NET EARNINGS</p>
                </div>
                <div class="accordion" id="accordionExample">
                    <!-- Accordion Item #1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="heading" style="justify-content: space-between; display: flex; flex: 1;">
                                    <h3>March 2024</h3>
                                    <h6>not revenue generated</h6>
                                    <h6>Earnings</h6>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="display: flex; justify-content: space-between; flex: 1;">
                                <p>Content of accordion item #1</p>
                                <p>1</p>
                            </div>
                            <div class="accordion-body" style="display: flex; justify-content: space-between; flex: 1;">
                                <p>Content of accordion item #1</p>
                                <p>Content of accordion item #1</p>
                            </div>
                            <div class="accordion-body" style="display: flex; justify-content: space-between; flex: 1;">
                                <p>Content of accordion item #1</p>
                                <p>Content of accordion item #1</p>
                            </div>
                            <div class="accordion-body" style="display: flex; justify-content: space-between; flex: 1;">
                                <p>Content of accordion item #1</p>
                                <p>Content of accordion item #1</p>
                            </div>
                            <hr>
                            <div class="heading">
                                <h3 style="font-weight: 900; padding: 0px 20px;">GROSS TOTAL</h3>
                                <div class="accordion-body"
                                    style="display: flex; justify-content: space-between; flex: 1;">
                                    <h5>total</h5>
                                    <p>400</p>
                                </div>
                                <div class="accordion-body"
                                    style="display: flex; justify-content: space-between; flex: 1;">
                                    <h5>Conversion Rate</h5>
                                    <p>1$ = 81</p>
                                </div>
                                <div class="accordion-body"
                                    style="display: flex; justify-content: space-between; flex: 1;">
                                    <h5>Invalid Deduction</h5>
                                    <p>15</p>
                                </div>
                            </div>
                            <hr>
                            <div class="totalheading">
                                <h3 style="font-weight: 900; padding: 0px 20px;">GRAND TOTAL</h3>
                                <div class="accordion-body"
                                    style="display: flex; justify-content: space-between; flex: 1;">
                                    <h5>Net Payment</h5>
                                    <p>300</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item #2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item #3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                our default variables. It's also worth noting that just about any HTML can go within
                                the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and dependencies -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            <!-- Custom template | don't include it in your project! -->

            <!-- End Custom template -->
        </div>
    </div>
</body>

</html>