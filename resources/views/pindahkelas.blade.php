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
                                    style="text-transform: capitalize">Pindah Kelas</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-3">Daftar Siswa</h4>

                        <!-- Table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>NIS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Laki-laki</td>
                                    <td>1A</td>
                                    <td>12345</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-warning">Ubah Kelas</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>Perempuan</td>
                                    <td>1B</td>
                                    <td>12346</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-warning">Ubah Kelas</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Robert Johnson</td>
                                    <td>Laki-laki</td>
                                    <td>2A</td>
                                    <td>12347</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-warning">Ubah Kelas</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Emily Davis</td>
                                    <td>Perempuan</td>
                                    <td>2B</td>
                                    <td>12348</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-warning">Ubah Kelas</button>
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
