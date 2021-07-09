<!DOCTYPE html>
    <html>
    <head>
        <title>Site Name</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class="topbar transition">
            <div class="bars">
                <button type="button" class="btn transition" id="sidebar-toggle">
                    <i class="las la-bars"></i>
                </button>
            </div>
            <!-- Navbar -->
            <div class="menu">
                <ul>
                    <li>
                        <a href="notifications.html" class="transition">
                            <i class="las la-bell"></i>
                            <span class="badge badge-danger notif">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.html" class="transition">
                            <i class="las la-sliders-h"></i>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                HI, Admin
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                <a class="dropdown-item" href="change-password.html">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="signout.html">Sign Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar transition">
            <div class="logo">
                <a href="#">
                    <p style="font-size: 24px; font-weight: bold; margin-bottom: 0;">This is Logo</p>
                </a>
            </div>

            <!-- Sidebar Menu -->
            <div class="sidebar-items">
                <ul>
                    <p class="menu">Navigation</p>
                    <li>
                        <a href="dashboard.html" class="transition active">
                            <i class="las la-home"></i>
                            <span>Dashoard</span>
                        </a>
                    </li>
                    <li>
                        <a href="page-layout.html" class="transition">
                            <i class="lab la-chromecast"></i>
                            <span>Page Layout</span>
                        </a>
                    </li>
                    <p class="menu">UI Element</p>
                    <li>
                        <a href="basic.html" class="transition">
                            <i class="las la-box"></i>
                            <span>Basic</span>
                        </a>
                    </li>
                    <p class="menu">Forms & Table</p>
                    <li>
                        <a href="forms.html" class="transition">
                            <i class="las la-file-alt"></i>
                            <span>Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="bootstrap-table.html" class="transition">
                            <i class="las la-table"></i>
                            <span>Bootstrap table</span>
                        </a>
                    </li>
                    <p class="menu">Chart & Maps</p>
                    <li>
                        <a href="chart.html" class="transition">
                            <i class="las la-chart-line"></i>
                            <span>Chart</span>
                        </a>
                    </li>
                    <li>
                        <a href="maps.html" class="transition">
                            <i class="las la-map"></i>
                            <span>Maps</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar-overlay"></div>

        <!-- Content -->
        <div class="content transition">
            <div class="container-fluid dashboard">
                <h3>Dashboard</h3>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="las la-inbox bg-danger text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Revenue</p>
                                        <h5>$65</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="las la-clipboard-list bg-warning text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Orders</p>
                                        <h5>3000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="las la-chart-bar bg-success text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Sales</p>
                                        <h5>5500</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="las la-id-card bg-info text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Employes</p>
                                        <h5>256</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer transition">
            <p>&copy; 2021 All Right Reserved by <a href="AhliKode.com">AhliKode</a></p>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
    </html>