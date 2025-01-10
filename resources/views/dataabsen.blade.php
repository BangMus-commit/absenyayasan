<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Absensi | WA Blast</title>

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

        .status-sent {
            color: green;
            font-weight: bold;
        }

        .status-not-sent {
            color: red;
            font-weight: bold;
        }

        .class-column {
            font-weight: bold;
        }

        .accordion-item .accordion-button {
            font-weight: bold;
        }

        .accordion-body {
            padding: 10px;
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
                                    style="text-transform: capitalize">Data Absensi</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-3">Absensi Hari Ini</h4>

                        <!-- Accordion for classes -->
                        <div class="accordion" id="absensiAccordion">

                            <!-- Kelas 1A -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1A">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1A" aria-expanded="true" aria-controls="collapse1A">
                                        Kelas 1A
                                    </button>
                                </h2>
                                <div id="collapse1A" class="accordion-collapse collapse show"
                                    aria-labelledby="heading1A" data-bs-parent="#absensiAccordion">
                                    <div class="accordion-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Jam Absen</th>
                                                    <th>Tanggal</th>
                                                    <th>Status Notif WA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John Doe</td>
                                                    <td>08:00</td>
                                                    <td>09/01/2025</td>
                                                    <td><span class="status-sent">Terkirim</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jane Smith</td>
                                                    <td>08:15</td>
                                                    <td>09/01/2025</td>
                                                    <td><span class="status-not-sent">Belum Terkirim</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Kelas 1B -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1B">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1B" aria-expanded="false" aria-controls="collapse1B">
                                        Kelas 1B
                                    </button>
                                </h2>
                                <div id="collapse1B" class="accordion-collapse collapse"
                                    aria-labelledby="heading1B" data-bs-parent="#absensiAccordion">
                                    <div class="accordion-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Jam Absen</th>
                                                    <th>Tanggal</th>
                                                    <th>Status Notif WA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Robert Johnson</td>
                                                    <td>08:30</td>
                                                    <td>09/01/2025</td>
                                                    <td><span class="status-sent">Terkirim</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Emily Davis</td>
                                                    <td>08:45</td>
                                                    <td>09/01/2025</td>
                                                    <td><span class="status-not-sent">Belum Terkirim</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Classes... -->

                        </div>
                        <!-- /Accordion for classes -->
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
