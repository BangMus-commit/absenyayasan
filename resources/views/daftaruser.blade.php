<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Table | WA Blast</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('template/templateAdmin') }}/assets/img/sa.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/templateAdmin') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('template/templateAdmin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Helpers -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/js/config.js"></script>

    <style>
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .action-buttons button {
            margin: 0 5px;
        }

        .status-active {
            color: green;
            font-weight: bold;
        }

        .status-inactive {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Table Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('template/templateAdmin') }}/assets/img/sa.png" alt="WA Blast"
                                        width="25">
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder"
                                    style="text-transform: capitalize">Data User</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-3">Daftar User</h4>

                        <!-- Table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. HP</th>
                                    <th>Wali kelas</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>johndoe@example.com</td>
                                    <td>0821-1234-5678</td>
                                    <td>7A</td>
                                    <td><span class="status-active">Aktif</span></td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>janesmith@example.com</td>
                                    <td>0821-8765-4321</td>
                                    <td>8J</td>
                                    <td><span class="status-inactive">Tidak Aktif</span></td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Robert Johnson</td>
                                    <td>robertjohnson@example.com</td>
                                    <td>0821-1357-2468</td>
                                    <td>9C</td>
                                    <td><span class="status-active">Aktif</span></td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Emily Davis</td>
                                    <td>emilydavis@example.com</td>
                                    <td>0821-3579-8642</td>
                                    <td>8I</td>
                                    <td><span class="status-inactive">Tidak Aktif</span></td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /Table -->
                    </div>
                </div>
                <!-- /Table Card -->
            </div>
        </div>
    </div>
    <!-- Core JS -->
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/vendor/js/menu.js"></script>
    <script src="{{ asset('template/templateAdmin') }}/assets/js/main.js"></script>
</body>

</html>
